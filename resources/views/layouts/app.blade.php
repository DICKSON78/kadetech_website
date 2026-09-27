<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description', 'KADETECH provides business websites, AI and machine learning solutions, and professional camera installations in Dodoma, Tanzania.')">
    <meta name="theme-color" content="#06162d">
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="32x32">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    <title>@yield('title', 'KADETECH | Digital, AI & Camera Solutions')</title>
    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('head')
</head>
<body class="overflow-x-hidden">
    <a href="#main-content" class="skip-link">Skip to main content</a>
    <div data-page-loader class="page-loader" aria-hidden="true"></div>

    <header data-header class="fixed inset-x-0 top-0 z-50 overflow-hidden border-b border-white/10 bg-navy-950/95 text-white shadow-xl shadow-navy-950/10 backdrop-blur-xl transition duration-300">
        <div class="absolute inset-0 dot-grid opacity-25" aria-hidden="true"></div>

        <div class="relative">
            <div class="hidden border-b border-white/10 lg:block">
                <div class="container-shell flex h-9 items-center justify-end text-[11px] font-medium tracking-[0.02em] text-slate-400">
                    <div class="flex items-center gap-5">
                        <span class="flex items-center gap-2"><i class="fa-solid fa-location-dot text-[9px] text-gold-300" aria-hidden="true"></i>Dodoma, Tanzania</span>
                        <a href="mailto:kadetech.online@gmail.com" class="flex items-center gap-2 text-slate-300"><i class="fa-solid fa-envelope text-[9px] text-gold-300" aria-hidden="true"></i>kadetech.online@gmail.com</a>
                        <span class="hidden items-center gap-2 xl:inline-flex"><i class="fa-solid fa-circle-check text-[9px] text-emerald-400" aria-hidden="true"></i>Available for select projects</span>
                        <a href="tel:+255750731387" class="flex items-center gap-2 text-slate-200"><i class="fa-solid fa-phone text-[9px] text-gold-300" aria-hidden="true"></i>+255 750 731 387</a>
                    </div>
                </div>
            </div>

            <div class="container-shell">
                <div class="flex min-h-[84px] items-center gap-5">
                    <a href="{{ route('home') }}" class="flex shrink-0 items-center gap-3" aria-label="KADETECH home">
                        <span class="relative flex h-12 w-12 items-center justify-center rounded-2xl border border-gold-300/50 bg-navy-900 shadow-lg shadow-black/20">
                            <svg viewBox="0 0 40 40" class="h-9 w-9" fill="none" aria-hidden="true">
                                <path d="M10 8v24" stroke="#DFBD6B" stroke-width="3" stroke-linecap="round"/>
                                <path d="M29 8 12 20l18 12M22 20h10" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="absolute -right-1 -top-1 h-2 w-2 rounded-full bg-gold-300"></span>
                        </span>
                        <span>
                            <span class="block text-base font-bold leading-none tracking-[0.14em] text-white">KADETECH</span>
                            <span class="mt-1 block text-[8px] font-medium uppercase tracking-[0.25em] text-slate-400">Digital <span class="text-gold-300">/</span> Security</span>
                        </span>
                    </a>

                    <span class="hidden h-9 w-px bg-white/10 lg:block" aria-hidden="true"></span>

                    <nav class="hidden min-w-0 flex-1 items-stretch justify-center gap-1 lg:flex" aria-label="Primary navigation">
                        <a href="{{ route('home') }}" data-page-link class="masthead-nav-link {{ request()->routeIs('home') ? 'is-active' : '' }}" @if(request()->routeIs('home')) aria-current="page" @endif>
                            <span class="hidden text-[9px] font-semibold tracking-[0.18em] text-slate-500 xl:inline">01</span>
                            <i class="fa-solid fa-house text-sm" aria-hidden="true"></i>
                            <span>Home</span>
                        </a>
                        <a href="{{ route('services') }}" data-page-link class="masthead-nav-link {{ request()->routeIs('services') ? 'is-active' : '' }}" @if(request()->routeIs('services')) aria-current="page" @endif>
                            <span class="hidden text-[9px] font-semibold tracking-[0.18em] text-slate-500 xl:inline">02</span>
                            <i class="fa-solid fa-layer-group text-sm" aria-hidden="true"></i>
                            <span>Services</span>
                        </a>
                        <a href="{{ route('why-us') }}" data-page-link class="masthead-nav-link {{ request()->routeIs('why-us') ? 'is-active' : '' }}" @if(request()->routeIs('why-us')) aria-current="page" @endif>
                            <span class="hidden text-[9px] font-semibold tracking-[0.18em] text-slate-500 xl:inline">03</span>
                            <i class="fa-solid fa-compass-drafting text-sm" aria-hidden="true"></i>
                            <span>Why Us</span>
                        </a>
                        <a href="{{ route('projects') }}" data-page-link class="masthead-nav-link {{ request()->routeIs('projects') ? 'is-active' : '' }}" @if(request()->routeIs('projects')) aria-current="page" @endif>
                            <span class="hidden text-[9px] font-semibold tracking-[0.18em] text-slate-500 xl:inline">04</span>
                            <i class="fa-solid fa-diagram-project text-sm" aria-hidden="true"></i>
                            <span>Projects</span>
                        </a>
                        <a href="{{ route('contact') }}" data-page-link class="masthead-nav-link {{ request()->routeIs('contact') ? 'is-active' : '' }}" @if(request()->routeIs('contact')) aria-current="page" @endif>
                            <span class="hidden text-[9px] font-semibold tracking-[0.18em] text-slate-500 xl:inline">05</span>
                            <i class="fa-solid fa-envelope text-sm" aria-hidden="true"></i>
                            <span>Contact</span>
                        </a>
                    </nav>

                    <div class="ml-auto hidden items-center gap-3 lg:flex">
                        <a href="tel:+255750731387" class="flex h-11 w-11 items-center justify-center rounded-2xl border border-white/10 bg-white/5 text-gold-300 transition duration-300 hover:border-gold-300/50 hover:bg-white/10" aria-label="Call KADETECH">
                            <i class="fa-solid fa-phone text-sm" aria-hidden="true"></i>
                        </a>
                        <a href="{{ route('contact') }}" class="group inline-flex min-h-11 items-center gap-3 rounded-[1.25rem] border border-gold-300/50 bg-gold-400 px-5 py-3 text-sm font-semibold text-navy-950 transition duration-300 hover:-translate-y-0.5 hover:border-gold-300 hover:bg-gold-300">
                            <span>Start a project</span>
                            <i class="fa-solid fa-arrow-right text-xs transition-transform duration-300 group-hover:translate-x-1" aria-hidden="true"></i>
                        </a>
                    </div>

                    <button type="button" data-menu-button class="ml-auto flex h-11 w-11 items-center justify-center rounded-2xl border border-white/15 bg-white/5 text-white transition hover:border-gold-300/50 hover:bg-white/10 lg:hidden" aria-controls="mobile-menu" aria-expanded="false" aria-label="Open navigation menu">
                        <i data-menu-icon class="fa-solid fa-bars h-5 w-5" aria-hidden="true"></i>
                        <i data-close-icon class="fa-solid fa-xmark h-5 w-5" hidden aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </div>

        <div id="mobile-menu" data-mobile-menu class="relative hidden border-t border-white/10 bg-navy-900 lg:hidden">
            <nav class="container-shell py-5" aria-label="Mobile navigation">
                <div class="flex items-center justify-between">
                    <p class="text-[10px] font-semibold uppercase tracking-[0.22em] text-gold-300">Navigate KADETECH</p>
                    <span class="text-[10px] font-medium uppercase tracking-[0.18em] text-slate-500">Dodoma / TZ</span>
                </div>

                <div class="mt-4 grid gap-2">
                    <a href="{{ route('home') }}" data-page-link class="masthead-mobile-link {{ request()->routeIs('home') ? 'is-active' : '' }}" @if(request()->routeIs('home')) aria-current="page" @endif>
                        <span class="w-6 text-[10px] font-semibold tracking-[0.18em] text-gold-300">01</span>
                        <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-white/5 text-gold-300"><i class="fa-solid fa-house text-sm" aria-hidden="true"></i></span>
                        <span class="flex-1">Home</span>
                        <i class="fa-solid fa-arrow-right text-xs text-slate-500" aria-hidden="true"></i>
                    </a>
                    <a href="{{ route('services') }}" data-page-link class="masthead-mobile-link {{ request()->routeIs('services') ? 'is-active' : '' }}" @if(request()->routeIs('services')) aria-current="page" @endif>
                        <span class="w-6 text-[10px] font-semibold tracking-[0.18em] text-gold-300">02</span>
                        <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-white/5 text-gold-300"><i class="fa-solid fa-layer-group text-sm" aria-hidden="true"></i></span>
                        <span class="flex-1">Services</span>
                        <i class="fa-solid fa-arrow-right text-xs text-slate-500" aria-hidden="true"></i>
                    </a>
                    <a href="{{ route('why-us') }}" data-page-link class="masthead-mobile-link {{ request()->routeIs('why-us') ? 'is-active' : '' }}" @if(request()->routeIs('why-us')) aria-current="page" @endif>
                        <span class="w-6 text-[10px] font-semibold tracking-[0.18em] text-gold-300">03</span>
                        <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-white/5 text-gold-300"><i class="fa-solid fa-compass-drafting text-sm" aria-hidden="true"></i></span>
                        <span class="flex-1">Why Us</span>
                        <i class="fa-solid fa-arrow-right text-xs text-slate-500" aria-hidden="true"></i>
                    </a>
                    <a href="{{ route('projects') }}" data-page-link class="masthead-mobile-link {{ request()->routeIs('projects') ? 'is-active' : '' }}" @if(request()->routeIs('projects')) aria-current="page" @endif>
                        <span class="w-6 text-[10px] font-semibold tracking-[0.18em] text-gold-300">04</span>
                        <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-white/5 text-gold-300"><i class="fa-solid fa-diagram-project text-sm" aria-hidden="true"></i></span>
                        <span class="flex-1">Projects</span>
                        <i class="fa-solid fa-arrow-right text-xs text-slate-500" aria-hidden="true"></i>
                    </a>
                    <a href="{{ route('contact') }}" data-page-link class="masthead-mobile-link {{ request()->routeIs('contact') ? 'is-active' : '' }}" @if(request()->routeIs('contact')) aria-current="page" @endif>
                        <span class="w-6 text-[10px] font-semibold tracking-[0.18em] text-gold-300">05</span>
                        <span class="flex h-9 w-9 items-center justify-center rounded-xl bg-white/5 text-gold-300"><i class="fa-solid fa-envelope text-sm" aria-hidden="true"></i></span>
                        <span class="flex-1">Contact</span>
                        <i class="fa-solid fa-arrow-right text-xs text-slate-500" aria-hidden="true"></i>
                    </a>
                </div>

                <div class="mt-4 grid gap-2 border-t border-white/10 pt-4 sm:grid-cols-2">
                    <a href="mailto:kadetech.online@gmail.com" class="flex items-center gap-3 text-xs text-slate-300"><i class="fa-solid fa-envelope text-gold-300" aria-hidden="true"></i>kadetech.online@gmail.com</a>
                    <a href="tel:+255750731387" class="flex items-center gap-3 text-xs text-slate-300"><i class="fa-solid fa-phone text-gold-300" aria-hidden="true"></i>+255 750 731 387</a>
                </div>
            </nav>
        </div>
    </header>

    <main id="main-content" data-page-content tabindex="-1" class="outline-none">
        @yield('content')
    </main>

    <footer class="border-t border-navy-700 bg-navy-800 text-white">
        <div class="container-shell py-14 sm:py-16">
            <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-[1.4fr_0.7fr_0.8fr_1.1fr] lg:gap-12">
                <div>
                    <a href="{{ route('home') }}" class="inline-flex items-center gap-3" aria-label="KADETECH home">
                        <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-navy-950 shadow-lg shadow-navy-950/20">
                            <svg viewBox="0 0 40 40" class="h-8 w-8" fill="none" aria-hidden="true">
                                <path d="M10 8v24" stroke="#DFBD6B" stroke-width="3" stroke-linecap="round"/>
                                <path d="M29 8 12 20l18 12M22 20h10" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                        <span>
                            <span class="block text-base font-bold tracking-[0.14em] text-white">KADETECH</span>
                            <span class="mt-1 block text-[8px] font-medium uppercase tracking-[0.22em] text-slate-400">Digital &amp; Security</span>
                        </span>
                    </a>
                    <p class="mt-5 max-w-sm text-sm leading-7 text-slate-300">Practical websites, intelligent business systems, and dependable camera installations delivered by one focused team.</p>
                </div>

                <nav aria-label="Footer navigation">
                    <h2 class="text-xs font-semibold uppercase tracking-[0.2em] text-gold-300">Explore</h2>
                    <ul class="mt-5 space-y-3 text-sm text-slate-300" role="list">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><a href="{{ route('why-us') }}">Why KADETECH</a></li>
                        <li><a href="{{ route('projects') }}">Projects</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </nav>

                <div>
                    <h2 class="text-xs font-semibold uppercase tracking-[0.2em] text-gold-300">Services</h2>
                    <ul class="mt-5 space-y-3 text-sm text-slate-300" role="list">
                        <li><a href="{{ route('services') }}#web-development">Web development</a></li>
                        <li><a href="{{ route('services') }}#ai-machine-learning">AI &amp; machine learning</a></li>
                        <li><a href="{{ route('services') }}#camera-installation">Camera installation</a></li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-xs font-semibold uppercase tracking-[0.2em] text-gold-300">Contact</h2>
                    <ul class="mt-5 space-y-4 text-sm text-slate-300" role="list">
                        <li>
                            <a href="mailto:kadetech.online@gmail.com" class="flex items-start gap-3">
                                <i class="fa-solid fa-envelope mt-1 text-gold-300" aria-hidden="true"></i>
                                <span>kadetech.online@gmail.com</span>
                            </a>
                        </li>
                        <li>
                            <a href="tel:+255750731387" class="flex items-start gap-3">
                                <i class="fa-solid fa-phone mt-1 text-gold-300" aria-hidden="true"></i>
                                <span>+255 750 731 387</span>
                            </a>
                        </li>
                        <li>
                            <a href="tel:+255623173537" class="flex items-start gap-3">
                                <i class="fa-solid fa-phone mt-1 text-gold-300" aria-hidden="true"></i>
                                <span>+255 623 173 537</span>
                            </a>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-location-dot mt-1 text-gold-300" aria-hidden="true"></i>
                            <address class="not-italic leading-6">Sharif PBZ House, Floor 3<br>Nyerere Square, Dodoma</address>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-12 flex flex-col gap-4 border-t border-white/10 pt-6 text-xs text-slate-400 sm:flex-row sm:items-center sm:justify-between">
                <p>© {{ date('Y') }} KADETECH. All rights reserved.</p>
                <div class="flex flex-wrap items-center gap-5">
                    <span class="inline-flex items-center gap-2"><i class="fa-solid fa-location-dot text-gold-300" aria-hidden="true"></i>Dodoma, Tanzania</span>
                    <a href="{{ route('home') }}" class="inline-flex items-center gap-2">Back to top <i class="fa-solid fa-arrow-up text-xs" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
