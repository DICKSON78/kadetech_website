document.documentElement.classList.add('js');

const header = document.querySelector('[data-header]');
const menuButton = document.querySelector('[data-menu-button]');
const mobileMenu = document.querySelector('[data-mobile-menu]');
const menuIcon = document.querySelector('[data-menu-icon]');
const closeIcon = document.querySelector('[data-close-icon]');
const pageContent = document.querySelector('[data-page-content]');
const pageLoader = document.querySelector('[data-page-loader]');
const reducedMotionQuery = window.matchMedia('(prefers-reduced-motion: reduce)');

let revealObserver;
let navigationController;
let navigationRequest = 0;

const prefersReducedMotion = () => reducedMotionQuery.matches;
const wait = (duration) => new Promise((resolve) => window.setTimeout(resolve, duration));

const setMenuState = (isOpen, returnFocus = false) => {
    if (!menuButton || !mobileMenu) {
        return;
    }

    mobileMenu.classList.toggle('hidden', !isOpen);
    menuIcon?.toggleAttribute('hidden', isOpen);
    closeIcon?.toggleAttribute('hidden', !isOpen);
    menuButton.setAttribute('aria-expanded', String(isOpen));
    menuButton.setAttribute('aria-label', isOpen ? 'Close navigation menu' : 'Open navigation menu');
    document.body.classList.toggle('overflow-hidden', isOpen);

    if (returnFocus) {
        menuButton.focus();
    }
};

const toggleMenu = () => {
    setMenuState(menuButton?.getAttribute('aria-expanded') !== 'true');
};

menuButton?.addEventListener('click', toggleMenu);
mobileMenu?.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', () => setMenuState(false));
});

document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape' && menuButton?.getAttribute('aria-expanded') === 'true') {
        setMenuState(false, true);
    }
});

const updateHeader = () => {
    header?.classList.toggle('header-scrolled', window.scrollY > 16);
};

updateHeader();
window.addEventListener('scroll', updateHeader, { passive: true });

const setNavigationBusy = (isBusy) => {
    pageContent?.setAttribute('aria-busy', String(isBusy));
    pageLoader?.classList.toggle('is-active', isBusy);
};

const normalizePath = (path) => {
    const normalizedPath = path.replace(/\/+$/, '');

    return normalizedPath || '/';
};

const isSameDocument = (url) => url.pathname === window.location.pathname && url.search === window.location.search;

const buildHistoryState = (scrollY) => {
    const currentState = window.history.state && typeof window.history.state === 'object' ? window.history.state : {};

    return {
        ...currentState,
        kadetechPage: { scrollY },
    };
};

const rememberCurrentScroll = () => {
    window.history.replaceState(buildHistoryState(window.scrollY), '', window.location.href);
};

const getSavedScroll = (state) => {
    const scrollY = state?.kadetechPage?.scrollY;

    return Number.isFinite(scrollY) ? scrollY : 0;
};

const updateActiveNavigation = () => {
    const currentPath = normalizePath(window.location.pathname);

    document.querySelectorAll('[data-page-link]').forEach((link) => {
        let linkPath;

        try {
            linkPath = normalizePath(new URL(link.href).pathname);
        } catch {
            linkPath = null;
        }

        const isActive = linkPath === currentPath;
        link.classList.toggle('is-active', isActive);

        if (isActive) {
            link.setAttribute('aria-current', 'page');
        } else {
            link.removeAttribute('aria-current');
        }
    });
};

const updateMetadata = (nextDocument) => {
    const nextTitle = nextDocument.querySelector('title')?.textContent?.trim();
    const nextDescription = nextDocument.querySelector('meta[name="description"]')?.getAttribute('content')?.trim();

    if (nextTitle) {
        document.title = nextTitle;
    }

    if (nextDescription) {
        document.querySelector('meta[name="description"]')?.setAttribute('content', nextDescription);
    }
};

const initializeRevealElements = () => {
    revealObserver?.disconnect();

    const revealElements = document.querySelectorAll('[data-reveal]');

    if (prefersReducedMotion()) {
        revealElements.forEach((element) => element.classList.add('is-visible'));
        return;
    }

    if (!('IntersectionObserver' in window)) {
        revealElements.forEach((element) => element.classList.add('is-visible'));
        return;
    }

    revealObserver = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) {
                    return;
                }

                const delay = entry.target.dataset.revealDelay ?? '0';
                entry.target.style.transitionDelay = `${delay}ms`;
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            });
        },
        { threshold: 0.12, rootMargin: '0px 0px -40px' },
    );

    revealElements.forEach((element) => revealObserver.observe(element));
};

const initializeAjaxForms = () => {
    document.querySelectorAll('form[data-ajax-form]').forEach((form) => {
        form.addEventListener('submit', handleAjaxFormSubmit);
    });
};

const scrollToPosition = (top) => {
    const previousScrollBehavior = document.documentElement.style.scrollBehavior;

    document.documentElement.style.scrollBehavior = 'auto';
    window.scrollTo(0, top);
    document.documentElement.style.scrollBehavior = previousScrollBehavior;
};

const scrollToElement = (element, smooth = false) => {
    if (!element) {
        return false;
    }

    if (smooth && !prefersReducedMotion()) {
        element.scrollIntoView({ behavior: 'smooth', block: 'start' });
        return true;
    }

    const headerOffset = (header?.offsetHeight ?? 0) + 16;
    scrollToPosition(element.getBoundingClientRect().top + window.scrollY - headerOffset);

    return true;
};

const scrollToHash = (hash, smooth = true) => {
    if (!hash) {
        return false;
    }

    let targetId;

    try {
        targetId = decodeURIComponent(hash.slice(1));
    } catch {
        return false;
    }

    return scrollToElement(document.getElementById(targetId), smooth);
};

const focusPageContent = () => {
    pageContent?.focus({ preventScroll: true });
};

const parsePageResponse = async (response) => {
    if (!response.ok) {
        throw new Error(`Page request failed with status ${response.status}.`);
    }

    const nextDocument = new DOMParser().parseFromString(await response.text(), 'text/html');
    const nextPageContent = nextDocument.querySelector('[data-page-content]');

    if (!nextPageContent) {
        throw new Error('Page response is missing the page content root.');
    }

    return { nextDocument, content: nextPageContent.innerHTML };
};

const requestPage = async (url, signal) => {
    const response = await fetch(url.href, {
        cache: 'no-store',
        credentials: 'same-origin',
        headers: {
            Accept: 'text/html',
            'X-Requested-With': 'XMLHttpRequest',
        },
        redirect: 'follow',
        signal,
    });

    return parsePageResponse(response);
};

const navigateTo = async (destination, { historyMode = 'push', state = null } = {}) => {
    if (!pageContent || typeof window.fetch !== 'function' || typeof DOMParser === 'undefined') {
        window.location.assign(destination.href);
        return;
    }

    const requestId = ++navigationRequest;
    navigationController?.abort();
    navigationController = new AbortController();
    setNavigationBusy(true);
    pageContent.classList.add('is-leaving');

    try {
        const [page] = await Promise.all([
            requestPage(destination, navigationController.signal),
            wait(prefersReducedMotion() ? 0 : 140),
        ]);

        if (requestId !== navigationRequest) {
            return;
        }

        if (historyMode === 'push') {
            rememberCurrentScroll();
            window.history.pushState(buildHistoryState(null), '', destination.href);
        }

        replacePageContent(page.nextDocument, page.content);
        pageContent.classList.remove('is-leaving');
        focusPageContent();

        const savedScroll = historyMode === 'popstate' ? getSavedScroll(state) : 0;

        if (!scrollToHash(destination.hash, historyMode !== 'popstate')) {
            scrollToPosition(savedScroll);
        }
    } catch (error) {
        if (error.name === 'AbortError') {
            return;
        }

        pageContent.classList.remove('is-leaving');
        window.location.assign(destination.href);
    } finally {
        if (requestId === navigationRequest) {
            setNavigationBusy(false);
            updateHeader();
        }
    }
};

const navigateWithinPage = (destination, pushState) => {
    rememberCurrentScroll();

    if (pushState) {
        window.history.pushState(buildHistoryState(null), '', destination.href);
    }

    setMenuState(false);
    updateActiveNavigation();
    focusPageContent();

    if (!scrollToHash(destination.hash)) {
        scrollToPosition(0);
    }
};

const isAjaxNavigationSupported = () => pageContent
    && typeof window.fetch === 'function'
    && typeof DOMParser !== 'undefined'
    && typeof window.history.pushState === 'function';

const handleLinkClick = (event) => {
    if (!isAjaxNavigationSupported()
        || event.defaultPrevented
        || event.button !== 0
        || event.metaKey
        || event.ctrlKey
        || event.shiftKey
        || event.altKey) {
        return;
    }

    const link = event.target.closest('a[href]');

    if (!link
        || link.hasAttribute('download')
        || link.hasAttribute('data-no-ajax')
        || (link.target && link.target !== '_self')) {
        return;
    }

    let destination;

    try {
        destination = new URL(link.href, window.location.href);
    } catch {
        return;
    }

    if (!['http:', 'https:'].includes(destination.protocol) || destination.origin !== window.location.origin) {
        return;
    }

    event.preventDefault();

    if (isSameDocument(destination)) {
        if (destination.href !== window.location.href || destination.hash) {
            navigateWithinPage(destination, destination.href !== window.location.href);
        } else {
            setMenuState(false);
            focusPageContent();
            scrollToPosition(0);
        }

        return;
    }

    void navigateTo(destination);
};

async function handleAjaxFormSubmit(event) {
    if (!isAjaxNavigationSupported()) {
        return;
    }

    event.preventDefault();

    const form = event.currentTarget;
    const submitButton = form.querySelector('button[type="submit"]');
    const requestId = ++navigationRequest;

    navigationController?.abort();
    navigationController = new AbortController();

    form.setAttribute('aria-busy', 'true');
    submitButton?.setAttribute('aria-disabled', 'true');

    if (submitButton) {
        submitButton.disabled = true;
    }

    setNavigationBusy(true);

    try {
        const response = await fetch(form.action, {
            body: new FormData(form),
            cache: 'no-store',
            credentials: 'same-origin',
            headers: {
                Accept: 'text/html',
                'X-CSRF-TOKEN': form.querySelector('input[name="_token"]')?.value ?? '',
                'X-Requested-With': 'XMLHttpRequest',
            },
            method: form.method || 'POST',
            redirect: 'follow',
            signal: navigationController.signal,
        });
        const page = await parsePageResponse(response);

        if (requestId !== navigationRequest) {
            return;
        }

        pageContent.classList.add('is-leaving');
        await wait(prefersReducedMotion() ? 0 : 140);

        if (requestId !== navigationRequest) {
            return;
        }

        const responseUrl = new URL(response.url, window.location.href);

        if (responseUrl.origin === window.location.origin) {
            window.history.replaceState(buildHistoryState(window.scrollY), '', responseUrl.href);
        }

        replacePageContent(page.nextDocument, page.content);
        pageContent.classList.remove('is-leaving');

        const result = document.querySelector('#contact-form [role="status"], #contact-form [role="alert"]');
        const fallback = result ?? document.getElementById('contact-form');

        if (result) {
            result.setAttribute('tabindex', '-1');
            result.focus({ preventScroll: true });
        } else {
            focusPageContent();
        }

        scrollToElement(fallback);
    } catch (error) {
        if (error.name !== 'AbortError') {
            form.removeAttribute('aria-busy');

            if (submitButton) {
                submitButton.disabled = false;
                submitButton.removeAttribute('aria-disabled');
            }

            HTMLFormElement.prototype.submit.call(form);
        }
    } finally {
        if (requestId === navigationRequest) {
            setNavigationBusy(false);
        }
    }
}

document.addEventListener('click', handleLinkClick);

window.addEventListener('popstate', (event) => {
    const destination = new URL(window.location.href);

    if (isSameDocument(destination)) {
        setMenuState(false);
        updateActiveNavigation();
        focusPageContent();

        if (!scrollToHash(destination.hash, false)) {
            scrollToPosition(getSavedScroll(event.state));
        }

        return;
    }

    void navigateTo(destination, { historyMode: 'popstate', state: event.state });
});

window.addEventListener('pageshow', (event) => {
    if (event.persisted) {
        updateHeader();
        updateActiveNavigation();
        initializeRevealElements();
        }
});

if ('scrollRestoration' in window.history) {
    window.history.scrollRestoration = 'manual';
}

if (!window.history.state?.kadetechPage) {
    window.history.replaceState(buildHistoryState(window.scrollY), '', window.location.href);
}

updateActiveNavigation();
initializeRevealElements();
initializeAjaxForms();
