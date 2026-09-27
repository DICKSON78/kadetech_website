@extends('layouts.app')

@section('title', 'Services | KADETECH')
@section('description', 'Explore KADETECH web development, AI and machine learning, and professional camera installation services in Dodoma, Tanzania.')

@section('content')
    <section class="relative overflow-hidden bg-navy-900 pb-20 pt-32 text-white sm:pb-24 sm:pt-36 lg:min-h-[760px] lg:pb-28 lg:pt-40">
        <div class="absolute inset-0 hero-grid opacity-60" aria-hidden="true"></div>
        <div class="absolute bottom-0 left-1/4 h-72 w-72 rounded-full bg-navy-700/50 blur-[100px]" aria-hidden="true"></div>

        <div class="container-shell relative grid gap-14 lg:grid-cols-[0.82fr_1.18fr] lg:items-center lg:gap-20">
            <div class="relative z-10 reveal is-visible">
                <h1 class="text-balance text-[2.8rem] font-semibold leading-[1.04] tracking-[-0.06em] sm:text-6xl lg:text-[4.6rem]">Build smarter. Work clearer. Stay covered.</h1>
                <p class="mt-7 max-w-xl text-base leading-8 text-slate-300 sm:text-lg">Three focused disciplines, shaped around one clear outcome. Start with one service or connect them into a complete digital and security partner.</p>

                <div class="mt-9 flex flex-col gap-3 sm:flex-row">
                    <a href="{{ route('contact') }}" class="btn-primary">Build your solution <i class="fa-solid fa-arrow-right h-4 w-4" aria-hidden="true"></i></a>
                    <a href="#service-details" class="btn-light">See the details</a>
                </div>

                <div class="mt-11 flex items-center gap-4 border-t border-white/10 pt-6">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-gold-400 text-navy-950"><i class="fa-solid fa-layer-group" aria-hidden="true"></i></span>
                    <div>
                        <p class="text-sm font-semibold text-white">One brief. Three disciplines.</p>
                        <p class="mt-1 text-xs leading-5 text-slate-400">No handoffs between strategy, build, and installation.</p>
                    </div>
                </div>
            </div>

            <div class="relative z-10 reveal reveal-right lg:pl-6" data-reveal data-reveal-delay="160">
                <div class="relative ml-auto max-w-xl rounded-[2rem] border border-white/10 bg-navy-950/80 p-4 shadow-2xl shadow-black/20 backdrop-blur-sm sm:p-6">
                    <div class="flex items-center justify-between border-b border-white/10 pb-5">
                        <div>
                            <p class="text-[10px] font-semibold uppercase tracking-[0.24em] text-gold-300">Service architecture</p>
                            <p class="mt-2 text-sm text-slate-300">A practical route from idea to impact.</p>
                        </div>
                        <span class="text-xs font-semibold tracking-[0.2em] text-slate-500">01 / 03</span>
                    </div>

                    <div class="relative mt-6 h-56 overflow-hidden rounded-[1.5rem] sm:h-64">
                        <img src="{{ asset('images/kadetech-web-development.jpg') }}" alt="African technology professional working on a laptop" class="h-full w-full object-cover object-center" width="1600" height="1067" fetchpriority="high">
                        <div class="absolute inset-0 bg-gradient-to-t from-navy-950/90 via-navy-950/20 to-transparent"></div>
                        <div class="absolute bottom-5 left-5 right-5 flex items-end justify-between gap-4">
                            <div>
                                <p class="text-[10px] font-semibold uppercase tracking-[0.2em] text-gold-300">The KADETECH lens</p>
                                <p class="mt-2 text-xl font-semibold text-white">Make the complex feel clear.</p>
                            </div>
                            <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl border border-white/20 bg-white/10 text-gold-300 backdrop-blur-sm"><i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i></span>
                        </div>
                    </div>

                    <div class="mt-5 divide-y divide-white/10" role="list">
                        <a href="#web-development" class="flex items-center gap-4 py-4" role="listitem">
                            <span class="w-7 text-xs font-semibold text-gold-300">01</span>
                            <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-white/[0.06] text-gold-300"><i class="fa-solid fa-laptop-code" aria-hidden="true"></i></span>
                            <span class="min-w-0 flex-1"><span class="block text-sm font-semibold text-white">Web development</span><span class="mt-1 block text-xs text-slate-400">Digital experiences that earn trust.</span></span>
                            <i class="fa-solid fa-arrow-right text-sm text-slate-500" aria-hidden="true"></i>
                        </a>
                        <a href="#ai-machine-learning" class="flex items-center gap-4 py-4" role="listitem">
                            <span class="w-7 text-xs font-semibold text-gold-300">02</span>
                            <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-white/[0.06] text-gold-300"><i class="fa-solid fa-brain" aria-hidden="true"></i></span>
                            <span class="min-w-0 flex-1"><span class="block text-sm font-semibold text-white">AI &amp; machine learning</span><span class="mt-1 block text-xs text-slate-400">Useful intelligence for real work.</span></span>
                            <i class="fa-solid fa-arrow-right text-sm text-slate-500" aria-hidden="true"></i>
                        </a>
                        <a href="#camera-installation" class="flex items-center gap-4 py-4" role="listitem">
                            <span class="w-7 text-xs font-semibold text-gold-300">03</span>
                            <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-white/[0.06] text-gold-300"><i class="fa-solid fa-video" aria-hidden="true"></i></span>
                            <span class="min-w-0 flex-1"><span class="block text-sm font-semibold text-white">Camera installation</span><span class="mt-1 block text-xs text-slate-400">Dependable visibility where it matters.</span></span>
                            <i class="fa-solid fa-arrow-right text-sm text-slate-500" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>

                <div class="absolute -bottom-8 -left-4 hidden items-center gap-3 rounded-2xl border border-white/10 bg-white p-4 shadow-xl shadow-black/20 sm:flex lg:-left-10">
                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-navy-900 text-gold-300"><i class="fa-solid fa-compass-drafting h-5 w-5" aria-hidden="true"></i></div>
                    <div><p class="text-xs font-semibold text-navy-900">Clarity before complexity</p><p class="mt-0.5 text-[10px] text-slate-400">The right mix, not more noise</p></div>
                </div>
            </div>
        </div>
    </section>

    <section id="service-details" class="section-space scroll-mt-24 border-y border-slate-200 bg-slate-50">
        <div class="container-shell">
            <div class="grid gap-8 lg:grid-cols-[0.8fr_1.2fr] lg:items-end">
                <div class="reveal" data-reveal>
                    <div class="eyebrow">Services in detail</div>
                    <h2 class="section-title">The right solution for the challenge.</h2>
                </div>
                <p class="section-copy reveal lg:ml-auto lg:max-w-xl" data-reveal data-reveal-delay="100">Clear scope, thoughtful execution, and practical support—from the first conversation through final delivery.</p>
            </div>

            <div class="mt-14 grid gap-6 lg:grid-cols-3">
                <article id="web-development" class="service-card reveal" scroll-mt-28" data-reveal>
                    <div class="service-icon"><i class="fa-solid fa-laptop-code h-7 w-7" aria-hidden="true"></i></div>
                    <p class="mt-7 text-[10px] font-semibold uppercase tracking-[0.22em] text-gold-600">01 · Web Development</p>
                    <h3 class="mt-3 text-2xl font-semibold tracking-[-0.035em] text-navy-900">Websites made to perform.</h3>
                    <p class="mt-4 text-sm leading-7 text-slate-500">Professional, mobile-ready websites designed to establish trust, communicate clearly, and support business growth.</p>
                    <ul class="mt-6 space-y-3 text-sm text-slate-600" role="list">
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-xs text-gold-500" aria-hidden="true"></i>Business and portfolio websites</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-xs text-gold-500" aria-hidden="true"></i>Online stores and web platforms</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-xs text-gold-500" aria-hidden="true"></i>Maintenance and technical support</li>
                    </ul>
                    <div class="mt-8 flex flex-wrap items-center gap-5">
                        <a href="mailto:kadetech.online@gmail.com?subject=Website%20development%20project" class="inline-flex items-center gap-2 text-sm font-semibold text-navy-900">Discuss your website <i class="fa-solid fa-arrow-right h-4 w-4" aria-hidden="true"></i></a>
                        <a href="{{ route('projects') }}#e-kanisa" class="text-xs font-semibold text-gold-600">E-Kanisa</a>
                    </div>
                </article>

                <article id="ai-machine-learning" class="service-card reveal" scroll-mt-28" data-reveal data-reveal-delay="100">
                    <div class="service-icon"><i class="fa-solid fa-brain h-7 w-7" aria-hidden="true"></i></div>
                    <p class="mt-7 text-[10px] font-semibold uppercase tracking-[0.22em] text-gold-600">02 · AI &amp; Machine Learning</p>
                    <h3 class="mt-3 text-2xl font-semibold tracking-[-0.035em] text-navy-900">Intelligence built for your business.</h3>
                    <p class="mt-4 text-sm leading-7 text-slate-500">Move repetitive manual work to smarter decisions with AI tools designed around your data, team, and real-world goals.</p>
                    <ul class="mt-6 space-y-3 text-sm text-slate-600" role="list">
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-xs text-gold-500" aria-hidden="true"></i>Intelligent business assistants</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-xs text-gold-500" aria-hidden="true"></i>Data analysis and prediction</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-xs text-gold-500" aria-hidden="true"></i>Workflow and process automation</li>
                    </ul>
                    <div class="mt-8 flex flex-wrap items-center gap-5">
                        <a href="mailto:kadetech.online@gmail.com?subject=AI%20solution%20inquiry" class="inline-flex items-center gap-2 text-sm font-semibold text-navy-900">Explore an AI solution <i class="fa-solid fa-arrow-right h-4 w-4" aria-hidden="true"></i></a>
                        <a href="{{ route('projects') }}#kadepos" class="text-xs font-semibold text-gold-600">KADEPOS</a>
                    </div>
                </article>

                <article id="camera-installation" class="service-card reveal" scroll-mt-28" data-reveal data-reveal-delay="200">
                    <div class="service-icon"><i class="fa-solid fa-video h-7 w-7" aria-hidden="true"></i></div>
                    <p class="mt-7 text-[10px] font-semibold uppercase tracking-[0.22em] text-gold-600">03 · Camera Installation</p>
                    <h3 class="mt-3 text-2xl font-semibold tracking-[-0.035em] text-navy-900">Security you can count on.</h3>
                    <p class="mt-4 text-sm leading-7 text-slate-500">Professional camera and surveillance installations that provide dependable visibility at home, work, or commercial premises.</p>
                    <ul class="mt-6 space-y-3 text-sm text-slate-600" role="list">
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-xs text-gold-500" aria-hidden="true"></i>Interior and outdoor camera systems</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-xs text-gold-500" aria-hidden="true"></i>Recording and remote monitoring</li>
                        <li class="flex items-center gap-3"><i class="fa-solid fa-check text-xs text-gold-500" aria-hidden="true"></i>Installation and system support</li>
                    </ul>
                    <div class="mt-8 flex flex-wrap items-center gap-5">
                        <a href="mailto:kadetech.online@gmail.com?subject=Camera%20installation%20inquiry" class="inline-flex items-center gap-2 text-sm font-semibold text-navy-900">Plan your installation <i class="fa-solid fa-arrow-right h-4 w-4" aria-hidden="true"></i></a>
                        <a href="{{ route('projects') }}#rems" class="text-xs font-semibold text-gold-600">REMS</a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="section-space bg-gold-50">
        <div class="container-shell text-center reveal" data-reveal>
            <div class="eyebrow justify-center before:hidden">Not sure where to start?</div>
            <h2 class="section-title">Tell us the outcome you need.</h2>
            <p class="section-copy mx-auto">We will help identify the most practical combination of design, technology, and installation.</p>
            <a href="{{ route('contact') }}" class="btn-primary mt-8">Talk to KADETECH <i class="fa-solid fa-arrow-right h-4 w-4" aria-hidden="true"></i></a>
        </div>
    </section>
@endsection
