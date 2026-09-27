@extends('layouts.app')

@section('title', 'Home | KADETECH')
@section('description', 'KADETECH provides business websites, AI and machine learning solutions, and professional camera installations in Dodoma, Tanzania.')

@section('content')
        <section id="home" class="relative overflow-hidden bg-navy-900 pb-20 pt-32 text-white sm:pb-24 sm:pt-36 lg:min-h-[760px] lg:pb-28 lg:pt-48">
            <div class="absolute inset-0 hero-grid opacity-60" aria-hidden="true"></div>
            <div class="absolute bottom-0 left-1/4 h-72 w-72 rounded-full bg-navy-700/50 blur-[100px]" aria-hidden="true"></div>
    
            <div class="container-shell relative grid gap-14 lg:grid-cols-[0.82fr_1.18fr] lg:items-center lg:gap-20">
                <div class="relative z-10 reveal is-visible">
                    <h1 class="text-balance text-[2.8rem] font-semibold leading-[1.04] tracking-[-0.06em] sm:text-6xl lg:text-[4.6rem]">
                        Digital power.<br>
                        <span class="text-gold-300">Intelligent</span> security.
                    </h1>
                    <p class="mt-7 max-w-xl text-base leading-8 text-slate-300 sm:text-lg">
                        We build standout websites, practical AI solutions, and dependable camera systems that help modern businesses move with confidence.
                    </p>

                    <div class="mt-9 flex flex-col gap-3 sm:flex-row">
                        <a href="mailto:kadetech.online@gmail.com?subject=KADETECH%20project%20enquiry" class="btn-primary">
                            Start your project
                            <i class="fa-solid fa-arrow-right h-4 w-4" aria-hidden="true"></i>
                        </a>
                        <a href="{{ route('services') }}" class="btn-light">Explore our services</a>
                    </div>

                    <div class="mt-11 grid max-w-xl grid-cols-3 gap-4 border-t border-white/10 pt-7">
                        <div>
                            <p class="flex items-center gap-2 text-sm font-semibold text-white"><i class="fa-solid fa-globe text-gold-300" aria-hidden="true"></i>Web</p>
                            <p class="mt-1 text-xs leading-5 text-slate-400">Modern digital experiences</p>
                        </div>
                        <div class="border-l border-white/10 pl-4">
                            <p class="flex items-center gap-2 text-sm font-semibold text-white"><i class="fa-solid fa-brain text-gold-300" aria-hidden="true"></i>AI</p>
                            <p class="mt-1 text-xs leading-5 text-slate-400">Smarter business systems</p>
                        </div>
                        <div class="border-l border-white/10 pl-4">
                            <p class="flex items-center gap-2 text-sm font-semibold text-white"><i class="fa-solid fa-shield-halved text-gold-300" aria-hidden="true"></i>Security</p>
                            <p class="mt-1 text-xs leading-5 text-slate-400">Clearer, safer spaces</p>
                        </div>
                    </div>
                </div>

                <div class="relative z-10 reveal reveal-right lg:pl-6" data-reveal data-reveal-delay="160">
                    <div class="relative ml-auto max-w-xl overflow-hidden rounded-[2.25rem] border border-white/10 bg-navy-950 p-4 shadow-2xl shadow-navy-950/25 sm:p-6">

                        <div class="relative flex items-center justify-between gap-4 border-b border-white/10 pb-5">
                            <div class="flex min-w-0 items-center gap-3">
                                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-gold-400/10 text-gold-300">
                                    <i class="fa-solid fa-code h-5 w-5" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <p class="text-[10px] font-semibold uppercase tracking-[0.24em] text-gold-300">KADETECH</p>
                                    <p class="mt-1 text-sm font-medium text-white">Solutions in focus</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative mx-auto my-7 flex h-60 w-60 max-w-full items-center justify-center sm:h-72 sm:w-72">
                            <div class="absolute inset-3 rounded-full border border-dashed border-white/15 orbit"></div>
                            <div class="absolute inset-10 rounded-full border border-dashed border-gold-300/30 orbit-reverse"></div>
                            <div class="absolute left-0 top-1/2 h-3 w-3 rounded-full border-2 border-navy-950 bg-gold-300 shadow-[0_0_0_5px_rgba(223,189,107,0.12)]"></div>
                            <div class="absolute bottom-3 right-14 h-2.5 w-2.5 rounded-full border-2 border-navy-950 bg-white"></div>
                            <div class="relative h-28 w-28 overflow-hidden rounded-[2rem] border border-gold-300/30 bg-navy-800 shadow-2xl shadow-black/30 sm:h-36 sm:w-36" role="img" aria-label="African technology professional working on a laptop">
                                <img src="{{ asset('images/kadetech-african-tech.jpg') }}" alt="" class="h-full w-full object-cover object-center" width="1600" height="1067" fetchpriority="high">
                                <div class="absolute inset-0 bg-gradient-to-t from-navy-950/45 via-transparent to-white/5"></div>
                                <span class="absolute bottom-5 left-1/2 h-1 w-10 -translate-x-1/2 rounded-full bg-gold-400"></span>
                            </div>
                        </div>

                        <div class="relative mb-6 grid gap-3 sm:grid-cols-3">
                            <div class="rounded-2xl border border-white/10 bg-white/[0.04] p-4">
                                <span class="text-[10px] font-semibold uppercase tracking-[0.18em] text-gold-300">Web</span>
                                <p class="mt-2 text-sm font-medium text-white">Built to perform</p>
                            </div>
                            <div class="rounded-2xl border border-white/10 bg-white/[0.04] p-4">
                                <span class="text-[10px] font-semibold uppercase tracking-[0.18em] text-gold-300">AI</span>
                                <p class="mt-2 text-sm font-medium text-white">Trained for impact</p>
                            </div>
                            <div class="rounded-2xl border border-white/10 bg-white/[0.04] p-4">
                                <span class="text-[10px] font-semibold uppercase tracking-[0.18em] text-gold-300">Vision</span>
                                <p class="mt-2 text-sm font-medium text-white">Always in view</p>
                            </div>
                        </div>
                    </div>

                    <div class="absolute -top-7 -right-4 mt-20 hidden items-center gap-3 rounded-2xl border border-white/10 bg-white px-4 py-3 shadow-xl shadow-black/20 sm:flex lg:-right-10">
                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-navy-900 text-gold-300">
                            <i class="fa-solid fa-diagram-project h-5 w-5" aria-hidden="true"></i>
                        </div>
                        <div>
                            <p class="text-xs font-semibold text-navy-900">Projects done</p>
                            <p class="mt-0.5 text-[10px] text-slate-400">Systems built for daily use</p>
                        </div>
                    </div>

                    <div class="absolute -bottom-8 -left-4 hidden items-center gap-3 rounded-2xl border border-white/10 bg-white p-4 shadow-xl shadow-black/20 sm:flex lg:-left-10">
                        <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-navy-900 text-gold-300">
                            <i class="fa-solid fa-circle-check h-5 w-5" aria-hidden="true"></i>
                        </div>
                        <div>
                            <p class="text-xs font-semibold text-navy-900">One trusted partner</p>
                            <p class="mt-0.5 text-[10px] text-slate-400">From idea to installation</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="services" class="section-space border-y border-slate-200 bg-slate-50">
            <div class="container-shell">
                <div class="grid gap-10 lg:grid-cols-[0.8fr_1.2fr] lg:items-end lg:gap-20">
                    <div class="reveal" data-reveal>
                        <div class="eyebrow">What we bring</div>
                        <h2 class="section-title">Clear thinking, practical delivery, lasting support.</h2>
                    </div>
                    <div class="reveal lg:ml-auto lg:max-w-xl" data-reveal data-reveal-delay="100">
                        <p class="section-copy mt-0">The right solution starts with understanding the real challenge. We bring the right mix of design, technology, and installation expertise to make it useful.</p>
                        <div class="mt-8 grid gap-5 border-t border-slate-200 pt-6 sm:grid-cols-3">
                            <div>
                                <p class="text-[10px] font-semibold uppercase tracking-[0.2em] text-gold-600">01 · Think</p>
                                <p class="mt-2 text-sm font-semibold text-navy-900">Find the real need</p>
                            </div>
                            <div>
                                <p class="text-[10px] font-semibold uppercase tracking-[0.2em] text-gold-600">02 · Build</p>
                                <p class="mt-2 text-sm font-semibold text-navy-900">Make it work well</p>
                            </div>
                            <div>
                                <p class="text-[10px] font-semibold uppercase tracking-[0.2em] text-gold-600">03 · Support</p>
                                <p class="mt-2 text-sm font-semibold text-navy-900">Stay in your corner</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-14 grid gap-5 lg:grid-cols-3 lg:gap-6">

                    <article id="web-development" class="service-card reveal flex h-full flex-col" data-reveal>
                        <div class="relative -mx-7 -mt-7 overflow-hidden sm:-mx-8 sm:-mt-8">
                            <img src="{{ asset('images/kadetech-web-development.jpg') }}" alt="African technology professional working on a laptop" class="h-56 w-full object-cover object-center transition duration-500 sm:h-64" loading="lazy" decoding="async">
                            <div class="absolute inset-0 bg-gradient-to-t from-navy-950/90 via-navy-950/25 to-transparent"></div>
                            <span class="absolute left-5 top-5 flex h-11 w-11 items-center justify-center rounded-2xl border border-white/20 bg-navy-950/60 text-gold-300 backdrop-blur-sm">
                                <i class="fa-solid fa-laptop-code text-lg" aria-hidden="true"></i>
                            </span>
                            <span class="absolute bottom-3 right-5 font-mono text-5xl font-bold leading-none text-white/25" aria-hidden="true">01</span>
                        </div>

                        <span class="mt-7 inline-flex w-fit items-center rounded-full bg-gold-100 px-3 py-1 text-[10px] font-semibold uppercase tracking-[0.2em] text-gold-600">Web development</span>
                        <h3 class="mt-4 text-2xl font-semibold leading-snug tracking-[-0.035em] text-navy-900">Websites made to perform.</h3>
                        <p class="mt-3 text-sm leading-7 text-slate-500">Professional, mobile-ready websites designed to establish trust, communicate clearly, and turn visitors into customers.</p>

                        <ul class="mt-auto space-y-3 border-t border-slate-200 pt-6 text-sm leading-6 text-slate-600" role="list">
                            <li class="flex items-start gap-3"><i class="fa-solid fa-circle-check mt-1 text-[11px] text-gold-500" aria-hidden="true"></i><span>Business &amp; portfolio websites</span></li>
                            <li class="flex items-start gap-3"><i class="fa-solid fa-circle-check mt-1 text-[11px] text-gold-500" aria-hidden="true"></i><span>Online stores &amp; web platforms</span></li>
                            <li class="flex items-start gap-3"><i class="fa-solid fa-circle-check mt-1 text-[11px] text-gold-500" aria-hidden="true"></i><span>Maintenance &amp; technical support</span></li>
                        </ul>
                    </article>

                    <article id="ai-machine-learning" class="service-card reveal flex h-full flex-col" data-reveal data-reveal-delay="100">
                        <div class="relative -mx-7 -mt-7 overflow-hidden sm:-mx-8 sm:-mt-8">
                            <img src="{{ asset('images/kadetech-ai-machine-learning.jpg') }}" alt="African scientist working with artificial intelligence and data" class="h-56 w-full object-cover object-[center_30%] transition duration-500 sm:h-64" loading="lazy" decoding="async">
                            <div class="absolute inset-0 bg-gradient-to-t from-navy-950/90 via-navy-950/25 to-transparent"></div>
                            <span class="absolute left-5 top-5 flex h-11 w-11 items-center justify-center rounded-2xl border border-white/20 bg-navy-950/60 text-gold-300 backdrop-blur-sm">
                                <i class="fa-solid fa-brain text-lg" aria-hidden="true"></i>
                            </span>
                            <span class="absolute bottom-3 right-5 font-mono text-5xl font-bold leading-none text-white/25" aria-hidden="true">02</span>
                        </div>

                        <span class="mt-7 inline-flex w-fit items-center rounded-full bg-gold-100 px-3 py-1 text-[10px] font-semibold uppercase tracking-[0.2em] text-gold-600">AI &amp; machine learning</span>
                        <h3 class="mt-4 text-2xl font-semibold leading-snug tracking-[-0.035em] text-navy-900">Intelligence built for your business.</h3>
                        <p class="mt-3 text-sm leading-7 text-slate-500">Move from repetitive manual work to smarter decisions with AI tools designed around your data, team, and real-world goals.</p>

                        <ul class="mt-auto space-y-3 border-t border-slate-200 pt-6 text-sm leading-6 text-slate-600" role="list">
                            <li class="flex items-start gap-3"><i class="fa-solid fa-circle-check mt-1 text-[11px] text-gold-500" aria-hidden="true"></i><span>Intelligent business assistants</span></li>
                            <li class="flex items-start gap-3"><i class="fa-solid fa-circle-check mt-1 text-[11px] text-gold-500" aria-hidden="true"></i><span>Data analysis &amp; prediction</span></li>
                            <li class="flex items-start gap-3"><i class="fa-solid fa-circle-check mt-1 text-[11px] text-gold-500" aria-hidden="true"></i><span>Workflow &amp; process automation</span></li>
                        </ul>
                    </article>

                    <article id="camera-installation" class="service-card reveal flex h-full flex-col" data-reveal data-reveal-delay="200">
                        <div class="relative -mx-7 -mt-7 overflow-hidden sm:-mx-8 sm:-mt-8">
                            <img src="{{ asset('images/kadetech-camera-security.jpg') }}" alt="African security professional using a camera system" class="h-56 w-full object-cover object-center transition duration-500 sm:h-64" loading="lazy" decoding="async">
                            <div class="absolute inset-0 bg-gradient-to-t from-navy-950/90 via-navy-950/25 to-transparent"></div>
                            <span class="absolute left-5 top-5 flex h-11 w-11 items-center justify-center rounded-2xl border border-white/20 bg-navy-950/60 text-gold-300 backdrop-blur-sm">
                                <i class="fa-solid fa-video text-lg" aria-hidden="true"></i>
                            </span>
                            <span class="absolute bottom-3 right-5 font-mono text-5xl font-bold leading-none text-white/25" aria-hidden="true">03</span>
                        </div>

                        <span class="mt-7 inline-flex w-fit items-center rounded-full bg-gold-100 px-3 py-1 text-[10px] font-semibold uppercase tracking-[0.2em] text-gold-600">Camera installation</span>
                        <h3 class="mt-4 text-2xl font-semibold leading-snug tracking-[-0.035em] text-navy-900">Security you can count on.</h3>
                        <p class="mt-3 text-sm leading-7 text-slate-500">Professional camera and surveillance installations that give you dependable visibility at home, work, or commercial premises.</p>

                        <ul class="mt-auto space-y-3 border-t border-slate-200 pt-6 text-sm leading-6 text-slate-600" role="list">
                            <li class="flex items-start gap-3"><i class="fa-solid fa-circle-check mt-1 text-[11px] text-gold-500" aria-hidden="true"></i><span>Interior &amp; outdoor camera systems</span></li>
                            <li class="flex items-start gap-3"><i class="fa-solid fa-circle-check mt-1 text-[11px] text-gold-500" aria-hidden="true"></i><span>Recording &amp; remote monitoring</span></li>
                            <li class="flex items-start gap-3"><i class="fa-solid fa-circle-check mt-1 text-[11px] text-gold-500" aria-hidden="true"></i><span>Installation &amp; system support</span></li>
                        </ul>
                    </article>

                </div>
            </div>
        </section>

        <section id="about" class="relative overflow-hidden bg-navy-900 text-white">
            <div class="absolute inset-0 hero-grid opacity-60" aria-hidden="true"></div>

            <div class="container-shell section-space relative grid gap-16 lg:grid-cols-[0.95fr_1.05fr] lg:items-center lg:gap-24">
                <div class="reveal reveal-left" data-reveal>
                    <div class="eyebrow text-gold-300 before:bg-gold-300">Why KADETECH</div>
                    <h2 class="text-balance mt-5 text-3xl font-semibold leading-[1.15] tracking-[-0.04em] sm:text-4xl lg:text-5xl">One partner from first screen to final installation.</h2>
                    <p class="mt-6 max-w-xl text-sm leading-8 text-slate-300 sm:text-base">
                        We combine creative thinking, technical depth, and hands-on installation experience. That means fewer handoffs, clearer communication, and solutions designed to work together.
                    </p>

                    <a href="{{ route('contact') }}" class="btn-light mt-9">
                        Work with KADETECH
                        <i class="fa-solid fa-arrow-right h-4 w-4" aria-hidden="true"></i>
                    </a>
                </div>

                <div class="relative reveal reveal-right" data-reveal data-reveal-delay="140">
                    <div class="rounded-[2rem] border border-white/10 bg-white/[0.04] p-5 backdrop-blur-sm sm:p-7">
                        <div class="flex items-center justify-between border-b border-white/10 pb-5">
                            <p class="text-xs font-semibold uppercase tracking-[0.2em] text-gold-300">What we bring</p>
                            <img src="{{ asset('images/kade-logo-mark-light.png') }}" alt="" width="36" height="36" class="h-9 w-9">
                        </div>

                        <div class="mt-3 divide-y divide-white/10" role="list">
                            <div class="flex gap-4 py-5" role="listitem">
                                <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-gold-400/10 text-gold-300"><i class="fa-solid fa-lightbulb" aria-hidden="true"></i></span>
                                <div>
                                    <h3 class="text-sm font-semibold text-white">Think beyond the request</h3>
                                    <p class="mt-1.5 text-xs leading-6 text-slate-400">We look for the real problem behind the brief and recommend what will create lasting value.</p>
                                </div>
                            </div>
                            <div class="flex gap-4 py-5" role="listitem">
                                <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-gold-400/10 text-gold-300"><i class="fa-solid fa-layer-group" aria-hidden="true"></i></span>
                                <div>
                                    <h3 class="text-sm font-semibold text-white">Build for clarity and quality</h3>
                                    <p class="mt-1.5 text-xs leading-6 text-slate-400">Clean design, reliable technology, and careful implementation from the first draft to final launch.</p>
                                </div>
                            </div>
                            <div class="flex gap-4 py-5" role="listitem">
                                <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-gold-400/10 text-gold-300"><i class="fa-solid fa-handshake-angle" aria-hidden="true"></i></span>
                                <div>
                                    <h3 class="text-sm font-semibold text-white">Stay accountable after delivery</h3>
                                    <p class="mt-1.5 text-xs leading-6 text-slate-400">A finished project is only the beginning. We remain available for updates, improvements, and support.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="process" class="section-space border-y border-gold-200/60 bg-gold-50">
            <div class="container-shell">
                <div class="mx-auto max-w-2xl text-center reveal" data-reveal>
                    <div class="eyebrow justify-center before:hidden">How we work</div>
                    <h2 class="section-title">A clear path from idea to impact.</h2>
                    <p class="section-copy mx-auto">No unnecessary complexity. Just a focused process built around your needs.</p>
                </div>

                <div class="relative mt-16 grid gap-5 md:grid-cols-2 lg:grid-cols-4">
                    <div class="absolute left-[12.5%] right-[12.5%] top-8 hidden h-px bg-gradient-to-r from-transparent via-gold-300 to-transparent lg:block" aria-hidden="true"></div>

                    <div class="relative rounded-3xl border border-gold-200/70 bg-white p-6 reveal" data-reveal>
                        <span class="relative z-10 flex h-16 w-16 items-center justify-center rounded-2xl bg-navy-900 text-xl text-gold-300 shadow-lg shadow-navy-900/15"><i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i></span>
                        <h3 class="mt-6 text-lg font-semibold text-navy-900">Discover</h3>
                        <p class="mt-3 text-sm leading-7 text-slate-500">We learn about your business, challenge, audience, and what success should look like.</p>
                    </div>
                    <div class="relative rounded-3xl border border-gold-200/70 bg-white p-6 reveal" data-reveal data-reveal-delay="80">
                        <span class="relative z-10 flex h-16 w-16 items-center justify-center rounded-2xl bg-navy-900 text-xl text-gold-300 shadow-lg shadow-navy-900/15"><i class="fa-solid fa-list-check" aria-hidden="true"></i></span>
                        <h3 class="mt-6 text-lg font-semibold text-navy-900">Plan</h3>
                        <p class="mt-3 text-sm leading-7 text-slate-500">We define the right approach, features, timeline, and practical next steps—before the build begins.</p>
                    </div>
                    <div class="relative rounded-3xl border border-gold-200/70 bg-white p-6 reveal" data-reveal data-reveal-delay="160">
                        <span class="relative z-10 flex h-16 w-16 items-center justify-center rounded-2xl bg-navy-900 text-xl text-gold-300 shadow-lg shadow-navy-900/15"><i class="fa-solid fa-screwdriver-wrench" aria-hidden="true"></i></span>
                        <h3 class="mt-6 text-lg font-semibold text-navy-900">Build</h3>
                        <p class="mt-3 text-sm leading-7 text-slate-500">We design, develop, configure, and test every detail with close communication throughout.</p>
                    </div>
                    <div class="relative rounded-3xl border border-gold-200/70 bg-white p-6 reveal" data-reveal data-reveal-delay="240">
                        <span class="relative z-10 flex h-16 w-16 items-center justify-center rounded-2xl bg-navy-900 text-xl text-gold-300 shadow-lg shadow-navy-900/15"><i class="fa-solid fa-headset" aria-hidden="true"></i></span>
                        <h3 class="mt-6 text-lg font-semibold text-navy-900">Support</h3>
                        <p class="mt-3 text-sm leading-7 text-slate-500">We help you launch confidently, then stay ready for updates, improvements, and new needs.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="why-us" class="section-space bg-navy-50">
            <div class="container-shell">
                <div class="grid gap-10 lg:grid-cols-[0.75fr_1.25fr] lg:gap-20">
                    <div class="reveal reveal-left" data-reveal>
                        <div class="eyebrow">The KADETECH difference</div>
                        <h2 class="section-title">Professional work. Practical solutions.</h2>
                        <p class="section-copy">We keep the process straightforward and focus on results you can use, maintain, and grow.</p>
                    </div>

                    <div class="grid gap-4 sm:grid-cols-2">
                        <article class="feature-card reveal" data-reveal>
                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-gold-100 text-gold-600">
                                <i class="fa-solid fa-comment-dots h-5 w-5" aria-hidden="true"></i>
                            </div>
                            <h3 class="mt-5 text-base font-semibold text-navy-900">Clear communication</h3>
                            <p class="mt-2.5 text-sm leading-6 text-slate-500">You always know what is happening and why.</p>
                        </article>
                        <article class="feature-card reveal" data-reveal data-reveal-delay="80">
                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-gold-100 text-gold-600">
                                <i class="fa-solid fa-star h-5 w-5" aria-hidden="true"></i>
                            </div>
                            <h3 class="mt-5 text-base font-semibold text-navy-900">Quality first</h3>
                            <p class="mt-2.5 text-sm leading-6 text-slate-500">Every detail is considered before delivery.</p>
                        </article>
                        <article class="feature-card reveal" data-reveal data-reveal-delay="160">
                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-gold-100 text-gold-600">
                                <i class="fa-solid fa-clock-rotate-left h-5 w-5" aria-hidden="true"></i>
                            </div>
                            <h3 class="mt-5 text-base font-semibold text-navy-900">Built for the long term</h3>
                            <p class="mt-2.5 text-sm leading-6 text-slate-500">Solutions made to adapt as your needs grow.</p>
                        </article>
                        <article class="feature-card reveal" data-reveal data-reveal-delay="240">
                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-gold-100 text-gold-600">
                                <i class="fa-solid fa-shield-halved h-5 w-5" aria-hidden="true"></i>
                            </div>
                            <h3 class="mt-5 text-base font-semibold text-navy-900">Responsible by design</h3>
                            <p class="mt-2.5 text-sm leading-6 text-slate-500">Security and privacy are built into our approach.</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="relative overflow-hidden bg-navy-950 text-white">
            <div class="absolute inset-0 dot-grid opacity-30" aria-hidden="true"></div>

            <div class="container-shell section-space relative grid gap-14 lg:grid-cols-[1fr_0.9fr] lg:items-center lg:gap-24">
                <div class="reveal reveal-left" data-reveal>
                    <div class="eyebrow text-gold-300 before:bg-gold-300">Let’s build something great</div>
                    <h2 class="text-balance mt-6 text-4xl font-semibold leading-[1.12] tracking-[-0.045em] sm:text-5xl lg:text-6xl">Your next idea deserves the right technology.</h2>
                    <p class="mt-6 max-w-xl text-sm leading-8 text-slate-300 sm:text-base">Tell us what you want to build, improve, secure, or automate. We will help you find the most practical way forward.</p>
                    <a href="mailto:kadetech.online@gmail.com?subject=Let’s%20build%20with%20KADETECH" class="btn-primary mt-9">
                        Email KADETECH
                        <i class="fa-solid fa-arrow-right h-4 w-4" aria-hidden="true"></i>
                    </a>
                </div>

                <div class="space-y-3 reveal reveal-right" data-reveal data-reveal-delay="120">
                    <a href="mailto:kadetech.online@gmail.com" class="contact-link">
                        <span class="flex items-center gap-4">
                            <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-gold-400/10 text-gold-300">
                                <i class="fa-solid fa-envelope h-5 w-5" aria-hidden="true"></i>
                            </span>
                            <span>
                                <span class="block text-[10px] font-semibold uppercase tracking-[0.2em] text-slate-500">Email us</span>
                                <span class="mt-1 block text-sm font-medium text-white">kadetech.online@gmail.com</span>
                            </span>
                        </span>
                        <i class="fa-solid fa-arrow-right h-4 w-4 text-slate-500" aria-hidden="true"></i>
                    </a>

                    <a href="tel:+255750731387" class="contact-link">
                        <span class="flex items-center gap-4">
                            <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-gold-400/10 text-gold-300">
                                <i class="fa-solid fa-phone h-5 w-5" aria-hidden="true"></i>
                            </span>
                            <span>
                                <span class="block text-[10px] font-semibold uppercase tracking-[0.2em] text-slate-500">Call us</span>
                                <span class="mt-1 block text-sm font-medium text-white">+255 750 731 387</span>
                            </span>
                        </span>
                        <i class="fa-solid fa-arrow-right h-4 w-4 text-slate-500" aria-hidden="true"></i>
                    </a>

                    <a href="tel:+255623173537" class="contact-link">
                        <span class="flex items-center gap-4">
                            <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-gold-400/10 text-gold-300">
                                <i class="fa-solid fa-phone h-5 w-5" aria-hidden="true"></i>
                            </span>
                            <span>
                                <span class="block text-[10px] font-semibold uppercase tracking-[0.2em] text-slate-500">Call us</span>
                                <span class="mt-1 block text-sm font-medium text-white">+255 623 173 537</span>
                            </span>
                        </span>
                        <i class="fa-solid fa-arrow-right h-4 w-4 text-slate-500" aria-hidden="true"></i>
                    </a>

                    <div class="contact-link">
                        <span class="flex items-center gap-4">
                            <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-gold-400/10 text-gold-300">
                                <i class="fa-solid fa-location-dot h-5 w-5" aria-hidden="true"></i>
                            </span>
                            <span>
                                <span class="block text-[10px] font-semibold uppercase tracking-[0.2em] text-slate-500">Visit us</span>
                                <address class="mt-1 text-sm font-medium not-italic leading-6 text-white">Sharif PBZ House, Floor 3, Nyerere Square, Dodoma</address>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </section>
@endsection
