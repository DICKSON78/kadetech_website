@extends('layouts.app')

@section('title', 'Projects | KADETECH')
@section('description', 'Selected KADETECH work: E-Kanisa church management, KADEPOS point of sale, KADEFinance microfinance management, and REMS real estate management.')

@section('content')
    <section class="relative overflow-hidden bg-navy-900 pb-20 pt-32 text-white sm:pb-24 sm:pt-36 lg:min-h-[760px] lg:pb-28 lg:pt-40">
        <div class="absolute inset-0 hero-grid opacity-60" aria-hidden="true"></div>
        <div class="absolute bottom-0 left-1/4 h-72 w-72 rounded-full bg-navy-700/50 blur-[100px]" aria-hidden="true"></div>

        <div class="container-shell relative grid gap-14 lg:grid-cols-[0.82fr_1.18fr] lg:items-center lg:gap-20">
            <div class="relative z-10 reveal is-visible">
                <h1 class="text-balance text-[2.8rem] font-semibold leading-[1.04] tracking-[-0.06em] sm:text-6xl lg:text-[4.6rem]">A project should move the work forward.</h1>
                <p class="mt-7 max-w-xl text-base leading-8 text-slate-300 sm:text-lg">The strongest projects do more than look good. They make a process clearer, a decision faster, or a space safer.</p>

                <div class="mt-9 flex flex-col gap-3 sm:flex-row">
                    <a href="{{ route('contact') }}" class="btn-primary">Start a project <i class="fa-solid fa-arrow-right h-4 w-4" aria-hidden="true"></i></a>
                    <a href="#projects" class="btn-light">See our work</a>
                </div>

                <div class="mt-12 grid max-w-lg grid-cols-3 gap-5 border-t border-white/10 pt-6">
                    <div><p class="text-2xl font-semibold text-gold-300">01</p><p class="mt-2 text-xs leading-5 text-slate-400">Shape the brief</p></div>
                    <div><p class="text-2xl font-semibold text-gold-300">02</p><p class="mt-2 text-xs leading-5 text-slate-400">Build the useful thing</p></div>
                    <div><p class="text-2xl font-semibold text-gold-300">03</p><p class="mt-2 text-xs leading-5 text-slate-400">Keep it moving</p></div>
                </div>
            </div>

            <div class="relative z-10 reveal reveal-right lg:pl-6" data-reveal data-reveal-delay="160">
                <div class="relative rounded-[2rem] border border-white/10 bg-navy-900/80 p-4 shadow-2xl shadow-black/25 backdrop-blur-sm sm:p-6">
                    <div class="flex items-center justify-between border-b border-white/10 pb-5">
                        <div class="flex items-center gap-3">
                            <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-gold-400 text-navy-950"><i class="fa-solid fa-layer-group" aria-hidden="true"></i></span>
                            <div><p class="text-sm font-semibold text-white">Project canvas</p><p class="mt-1 text-xs text-slate-400">A few pieces of the bigger picture</p></div>
                        </div>
                        <span class="rounded-full border border-white/10 px-3 py-1.5 text-[10px] font-semibold uppercase tracking-wider text-slate-400">In motion</span>
                    </div>

                    <div class="mt-5 grid grid-cols-2 gap-3">
                        <div class="relative col-span-2 h-44 overflow-hidden rounded-2xl sm:h-52">
                            <img src="{{ asset('images/kadetech-web-development.jpg') }}" alt="African technology professional working on a laptop" class="h-full w-full object-cover object-center" width="1600" height="1067" fetchpriority="high">
                            <div class="absolute inset-0 bg-gradient-to-t from-navy-950/90 via-navy-950/10 to-transparent"></div>
                            <div class="absolute bottom-4 left-4"><p class="text-[10px] font-semibold uppercase tracking-[0.2em] text-gold-300">Web experience</p><p class="mt-1 text-lg font-semibold text-white">Make the first impression count.</p></div>
                            <span class="absolute right-4 top-4 rounded-full bg-white/10 px-3 py-1.5 text-[10px] font-semibold uppercase tracking-wider text-white backdrop-blur-sm">01</span>
                        </div>
                        <div class="relative h-36 overflow-hidden rounded-2xl sm:h-44">
                            <img src="{{ asset('images/kadetech-ai-machine-learning.jpg') }}" alt="African scientist working with artificial intelligence and data" class="h-full w-full object-cover object-[center_30%]" width="1600" height="1067" loading="lazy" decoding="async">
                            <div class="absolute inset-0 bg-gradient-to-t from-navy-950/90 to-transparent"></div>
                            <span class="absolute bottom-3 left-3 text-[10px] font-semibold uppercase tracking-[0.18em] text-white">AI &amp; data</span>
                        </div>
                        <div class="relative h-36 overflow-hidden rounded-2xl sm:h-44">
                            <img src="{{ asset('images/kadetech-camera-security.jpg') }}" alt="African security professional using a camera system" class="h-full w-full object-cover object-center" width="1600" height="1067" loading="lazy" decoding="async">
                            <div class="absolute inset-0 bg-gradient-to-t from-navy-950/90 to-transparent"></div>
                            <span class="absolute bottom-3 left-3 text-[10px] font-semibold uppercase tracking-[0.18em] text-white">Security</span>
                        </div>
                    </div>

                    <div class="mt-5 flex flex-wrap items-center gap-2 border-t border-white/10 pt-5">
                        <span class="rounded-full bg-gold-400/10 px-3 py-1.5 text-[10px] font-semibold uppercase tracking-[0.16em] text-gold-300">Strategy</span>
                        <span class="rounded-full bg-white/5 px-3 py-1.5 text-[10px] font-semibold uppercase tracking-[0.16em] text-slate-400">Design</span>
                        <span class="rounded-full bg-white/5 px-3 py-1.5 text-[10px] font-semibold uppercase tracking-[0.16em] text-slate-400">Build</span>
                        <span class="rounded-full bg-white/5 px-3 py-1.5 text-[10px] font-semibold uppercase tracking-[0.16em] text-slate-400">Install</span>
                        <span class="ml-auto text-[10px] font-semibold uppercase tracking-[0.16em] text-slate-500">One connected team</span>
                    </div>
                </div>

                <div class="absolute -bottom-15 -left-4 hidden items-center gap-3 rounded-2xl border border-white/10 bg-white p-4 shadow-xl shadow-black/20 sm:flex lg:-left-10">
                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-navy-900 text-gold-300"><i class="fa-solid fa-arrow-trend-up h-5 w-5" aria-hidden="true"></i></div>
                    <div><p class="text-xs font-semibold text-navy-900">Make progress visible</p><p class="mt-0.5 text-[10px] text-slate-400">Every project has a next move</p></div>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" data-projects class="projects-section relative text-navy-900">
        <div class="absolute inset-0 overflow-hidden" aria-hidden="true">
            <div class="absolute inset-0 dot-grid opacity-60"></div>
        </div>

        <div class="container-shell relative pb-12 pt-20 text-center sm:pb-16 sm:pt-28">
            <div class="eyebrow justify-center before:hidden">What we have built</div>
            <h2 class="mt-4 text-3xl font-semibold leading-[1.12] tracking-[-0.04em] sm:text-4xl lg:text-5xl">
                Working systems,<br>
                <span class="text-gold-600">built to be used every day</span>
            </h2>
        </div>

        @php
            $projects = config('projects');
        @endphp

        @foreach ($projects as $index => $project)
            <div id="{{ $project['id'] }}" class="project-step scroll-mt-28" data-step="{{ $index + 1 }}" data-project-step>
                <div class="absolute inset-0 dot-grid opacity-40" aria-hidden="true"></div>
                <div class="project-step-line absolute inset-x-0 top-0 h-px" aria-hidden="true"></div>

                <div class="container-shell relative z-10 w-full py-28 sm:py-32">
                    <div class="grid grid-cols-1 items-center gap-10 lg:grid-cols-12 lg:gap-16">
                        <div class="lg:col-span-5">
                            <div class="flex items-center gap-4">
                                <span class="project-step-number" aria-hidden="true">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                <div>
                                    <span class="block font-mono text-xs uppercase tracking-[0.22em] text-navy-900 sm:text-sm">Project {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }} of {{ str_pad(count($projects), 2, '0', STR_PAD_LEFT) }}</span>
                                    <span class="project-badge mt-3">{!! $project['badge'] !!}</span>
                                </div>
                            </div>

                            <h3 class="mt-6 text-balance text-2xl font-semibold leading-tight tracking-[-0.03em] text-navy-900 sm:text-3xl md:text-4xl">{{ $project['title'] }}</h3>
                            <p class="mt-2 text-lg font-medium text-[var(--project-accent)] sm:text-xl md:text-2xl">{{ $project['name'] }}</p>
                            <p class="mt-1 text-sm font-medium uppercase tracking-[0.16em] text-slate-500">{!! $project['label'] !!}</p>
                            <p class="mt-5 text-base leading-8 text-slate-600 sm:text-lg sm:leading-9">{{ $project['description'] }}</p>

                            <div class="mt-8 flex flex-wrap items-center gap-3">
                                @if (filled($project['url']))
                                    <a href="{{ $project['url'] }}" target="_blank" rel="noopener noreferrer" class="btn-primary">
                                        Visit live site
                                        <i class="fa-solid fa-arrow-up-right-from-square h-4 w-4" aria-hidden="true"></i>
                                        <span class="sr-only">for {{ $project['name'] }} (opens in a new tab)</span>
                                    </a>
                                @endif
                                <a href="mailto:kadetech.online@gmail.com?subject={{ urlencode('Demo request: '.$project['name']) }}" class="{{ filled($project['url']) ? 'btn-secondary' : 'btn-primary' }}">
                                    Request a demo
                                    <i class="fa-solid fa-arrow-right h-4 w-4" aria-hidden="true"></i>
                                    <span class="sr-only">for {{ $project['name'] }}</span>
                                </a>
                            </div>
                        </div>

                        <div class="lg:col-span-7 lg:pl-8">
                            <div class="relative overflow-hidden rounded-[2.5rem] border border-navy-900/10 bg-white p-2 shadow-soft sm:p-3">
                                <div class="absolute inset-0 dot-grid opacity-30" aria-hidden="true"></div>

                                <div class="relative aspect-[16/10] overflow-hidden rounded-[2rem] sm:aspect-[16/9]">
                                    <img src="{{ asset($project['image']) }}" alt="{{ $project['imageAlt'] }}" class="h-full w-full object-cover object-center" loading="lazy" decoding="async">
                                    <div class="absolute inset-0 bg-gradient-to-t from-navy-950/90 via-navy-950/10 to-transparent"></div>
                                    <div class="absolute bottom-6 left-6 right-6 flex flex-wrap items-center justify-between gap-3">
                                        <span class="rounded-full bg-white/90 px-4 py-2 text-xs font-semibold uppercase tracking-[0.2em] text-navy-900 sm:text-sm">{{ $project['name'] }}</span>
                                        <span class="rounded-full bg-navy-950/70 px-4 py-2 text-xs font-semibold uppercase tracking-[0.2em] text-white backdrop-blur-sm sm:text-sm">{{ $index + 1 }} of {{ count($projects) }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </section>

    <section class="section-space bg-gold-50">
        <div class="container-shell text-center reveal" data-reveal>
            <div class="eyebrow justify-center before:hidden">Your project</div>
            <h2 class="section-title">Have a different project in mind?</h2>
            <p class="section-copy mx-auto">The systems above are starting points. We can shape a new one around your specific workflow, audience, and environment.</p>
            <a href="{{ route('contact') }}" class="btn-primary mt-8">Tell us what you need <i class="fa-solid fa-arrow-right h-4 w-4" aria-hidden="true"></i></a>
        </div>
    </section>
@endsection
