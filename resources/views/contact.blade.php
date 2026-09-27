@extends('layouts.app')

@section('title', 'Contact Us | KADETECH')
@section('description', 'Contact KADETECH in Dodoma, Tanzania for website development, AI solutions, and professional camera installation projects.')

@section('content')
    <section class="relative overflow-hidden bg-navy-900 pb-20 pt-32 text-white sm:pb-24 sm:pt-36 lg:min-h-[760px] lg:pb-28 lg:pt-40">
        <div class="absolute inset-0 hero-grid opacity-60" aria-hidden="true"></div>
        <div class="absolute bottom-0 left-1/4 h-72 w-72 rounded-full bg-navy-700/50 blur-[100px]" aria-hidden="true"></div>

        <div class="container-shell relative grid gap-14 lg:grid-cols-[0.82fr_1.18fr] lg:items-center lg:gap-20">
            <div class="relative z-10 reveal is-visible">
                <h1 class="text-balance text-[2.8rem] font-semibold leading-[1.04] tracking-[-0.06em] sm:text-6xl lg:text-[4.6rem]">A clear next step starts here.</h1>
                <p class="mt-7 max-w-xl text-base leading-8 text-slate-300 sm:text-lg">Bring us the rough idea, the complicated problem, or the result you need. We will help you find the most useful way forward.</p>

                <div class="mt-9 flex flex-col gap-3 sm:flex-row">
                    <a href="#contact-form" class="btn-primary">Tell us what you need <i class="fa-solid fa-arrow-right h-4 w-4" aria-hidden="true"></i></a>
                    <a href="tel:+255750731387" class="btn-light"><i class="fa-solid fa-phone h-4 w-4" aria-hidden="true"></i>Call KADETECH</a>
                </div>

                <div class="mt-11 flex items-center gap-4 border-t border-white/10 pt-6">
                    <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl bg-gold-400 text-navy-950"><i class="fa-solid fa-location-dot" aria-hidden="true"></i></span>
                    <div><p class="text-sm font-semibold text-white">Dodoma, Tanzania</p><p class="mt-1 text-xs leading-5 text-slate-400">Sharif PBZ House · Floor 3 · Nyerere Square</p></div>
                </div>
            </div>

            <div class="relative z-10 reveal reveal-right lg:pl-6" data-reveal data-reveal-delay="160">
                <div class="relative rounded-[2rem] border border-white/10 bg-navy-900/80 p-4 text-white shadow-2xl shadow-black/20 backdrop-blur-sm sm:p-6">
                    <div class="flex items-center justify-between border-b border-white/10 pb-5">
                        <div class="flex items-center gap-3">
                            <span class="flex h-11 w-11 items-center justify-center rounded-2xl bg-gold-400 text-navy-950"><i class="fa-solid fa-paper-plane" aria-hidden="true"></i></span>
                            <div><p class="text-sm font-semibold text-white">KADETECH contact desk</p><p class="mt-1 text-xs text-slate-400">A direct line to the right next step</p></div>
                        </div>
                        <span class="flex items-center gap-2 text-[10px] font-semibold uppercase tracking-[0.18em] text-gold-300"><span class="h-1.5 w-1.5 rounded-full bg-gold-300"></span>Open</span>
                    </div>

                    <div class="relative mt-6 h-64 overflow-hidden rounded-[1.5rem] border border-white/10 bg-navy-950 hero-grid sm:h-72">
                        <div class="absolute inset-0 bg-[radial-gradient(circle_at_50%_45%,rgba(223,189,107,0.18),transparent_34%)]"></div>
                        <div class="absolute left-1/2 top-1/2 flex h-28 w-28 -translate-x-1/2 -translate-y-1/2 items-center justify-center rounded-full border border-gold-300/30 bg-gold-400/10 text-5xl text-gold-300 shadow-[0_0_0_16px_rgba(223,189,107,0.04)]"><i class="fa-solid fa-location-dot" aria-hidden="true"></i></div>
                        <div class="absolute bottom-5 left-5 right-5 flex items-end justify-between gap-4">
                            <div><p class="text-[10px] font-semibold uppercase tracking-[0.2em] text-gold-300">Find us</p><p class="mt-2 text-lg font-semibold text-white">Nyerere Square, Dodoma</p></div>
                            <a href="https://www.google.com/maps/search/?api=1&query=Sharif%20PBZ%20House%2C%20Nyerere%20Square%2C%20Dodoma%2C%20Tanzania" target="_blank" rel="noreferrer" class="flex h-10 w-10 items-center justify-center rounded-xl border border-white/15 bg-white/10 text-gold-300 transition hover:bg-gold-400 hover:text-navy-950" aria-label="Open KADETECH location in Google Maps"><i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i></a>
                        </div>
                    </div>

                    <div class="mt-5 grid gap-3 sm:grid-cols-2">
                        <a href="mailto:kadetech.online@gmail.com" class="flex items-center gap-3 rounded-2xl border border-white/10 bg-white/[0.04] p-4">
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-gold-400/10 text-gold-300"><i class="fa-solid fa-envelope" aria-hidden="true"></i></span>
                            <span class="min-w-0"><span class="block text-[10px] font-semibold uppercase tracking-[0.18em] text-slate-500">Email</span><span class="mt-1 block truncate text-xs font-medium text-white">kadetech.online@gmail.com</span></span>
                        </a>
                        <a href="tel:+255750731387" class="flex items-center gap-3 rounded-2xl border border-white/10 bg-white/[0.04] p-4">
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-gold-400/10 text-gold-300"><i class="fa-solid fa-phone" aria-hidden="true"></i></span>
                            <span class="min-w-0"><span class="block text-[10px] font-semibold uppercase tracking-[0.18em] text-slate-500">Call</span><span class="mt-1 block text-xs font-medium text-white">+255 750 731 387</span></span>
                        </a>
                    </div>
                </div>

                <div class="absolute -bottom-15 -left-4 hidden items-center gap-3 rounded-2xl border border-white/10 bg-white p-4 shadow-xl shadow-black/20 sm:flex lg:-left-10">
                    <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-navy-900 text-gold-300"><i class="fa-solid fa-circle-check h-5 w-5" aria-hidden="true"></i></div>
                    <div><p class="text-xs font-semibold text-navy-900">A useful first conversation</p><p class="mt-0.5 text-[10px] text-slate-400">No pressure, just a clear next step</p></div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact-form" class="section-space scroll-mt-24 border-y border-gold-200/60 bg-gold-50">
        <div class="container-shell">
            <div class="grid gap-6 lg:grid-cols-[1.05fr_0.95fr]">
                <div class="rounded-[2rem] border border-slate-200 bg-white p-6 shadow-soft sm:p-8 lg:p-10 reveal" data-reveal>
                    <div class="eyebrow">Send a message</div>
                    <h2 class="mt-5 text-3xl font-semibold leading-[1.15] tracking-[-0.04em] text-navy-900 sm:text-4xl">Tell us what you need.</h2>
                    <p class="mt-4 max-w-xl text-sm leading-7 text-slate-500">Share a few details and KADETECH will help turn your goal into a practical next step.</p>

                    @if(session('contact_success'))
                        <div role="status" class="mt-7 flex items-start gap-3 rounded-2xl border border-emerald-200 bg-emerald-50 p-4 text-sm leading-6 text-emerald-800">
                            <i class="fa-solid fa-circle-check mt-0.5 shrink-0" aria-hidden="true"></i>
                            <span>{{ session('contact_success') }}</span>
                        </div>
                    @endif

                    @if($errors->any())
                        <div role="alert" class="mt-7 rounded-2xl border border-red-200 bg-red-50 p-4 text-sm leading-6 text-red-800">
                            <p class="font-semibold">Please check the highlighted fields.</p>
                            @if($errors->has('mail'))
                                <p class="mt-1">{{ $errors->first('mail') }}</p>
                            @endif
                        </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST" data-ajax-form class="mt-8 space-y-5">
                        @csrf
                        <div class="hidden" aria-hidden="true">
                            <label for="website">Website</label>
                            <input id="website" name="website" type="text" tabindex="-1" autocomplete="off">
                        </div>

                        <div class="grid gap-5 sm:grid-cols-2">
                            <div>
                                <label for="name" class="form-label">Full name <span class="text-gold-600">*</span></label>
                                <input id="name" name="name" type="text" value="{{ old('name') }}" required autocomplete="name" class="form-input" placeholder="Your name">
                                @error('name')
                                    <p class="form-error">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="email" class="form-label">Email address <span class="text-gold-600">*</span></label>
                                <input id="email" name="email" type="email" value="{{ old('email') }}" required autocomplete="email" class="form-input" placeholder="you@example.com">
                                @error('email')
                                    <p class="form-error">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="phone" class="form-label">Phone number <span class="text-xs font-normal text-slate-400">(optional)</span></label>
                                <input id="phone" name="phone" type="tel" value="{{ old('phone') }}" autocomplete="tel" class="form-input" placeholder="+255">
                                @error('phone')
                                    <p class="form-error">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="service" class="form-label">What can we help with? <span class="text-gold-600">*</span></label>
                                <select id="service" name="service" required class="form-input">
                                    <option value="">Choose a service</option>
                                    <option value="web" @selected(old('service') === 'web')>Website or platform</option>
                                    <option value="ai" @selected(old('service') === 'ai')>AI or automation</option>
                                    <option value="camera" @selected(old('service') === 'camera')>Camera or security</option>
                                    <option value="mixed" @selected(old('service') === 'mixed')>Combined solution</option>
                                    <option value="other" @selected(old('service') === 'other')>Something else</option>
                                </select>
                                @error('service')
                                    <p class="form-error">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="message" class="form-label">Project details <span class="text-gold-600">*</span></label>
                            <textarea id="message" name="message" rows="6" required class="form-input resize-y" placeholder="Tell us about the challenge, your goal, or the result you need.">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="form-error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                            <button type="submit" class="btn-primary">Send enquiry <i class="fa-solid fa-paper-plane h-4 w-4" aria-hidden="true"></i></button>
                            <p class="text-xs leading-5 text-slate-400">We reply as soon as we can.</p>
                        </div>
                    </form>
                </div>

                <div class="reveal reveal-right" data-reveal data-reveal-delay="120">
                    <div class="relative min-h-[430px] overflow-hidden rounded-[2rem] border border-slate-200 bg-slate-100 shadow-soft sm:min-h-[500px]">
                        <iframe title="KADETECH location at Sharif PBZ House, Nyerere Square, Dodoma" src="https://www.google.com/maps?q=Sharif%20PBZ%20House%2C%20Nyerere%20Square%2C%20Dodoma%2C%20Tanzania&output=embed" class="absolute inset-0 h-full w-full border-0" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
                        <div class="pointer-events-none absolute inset-x-4 bottom-4 rounded-2xl border border-white/70 bg-white/95 p-4 shadow-xl backdrop-blur-sm sm:inset-x-5 sm:bottom-5">
                            <p class="text-[10px] font-semibold uppercase tracking-[0.2em] text-gold-600">Visit KADETECH</p>
                            <address class="mt-2 text-sm font-medium not-italic leading-6 text-navy-900">Sharif PBZ House, Floor 3<br>Nyerere Square, Dodoma</address>
                        </div>
                    </div>
                    <div class="mt-4 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                        <p class="text-sm leading-6 text-slate-500">Find us in the heart of Dodoma.</p>
                        <a href="https://www.google.com/maps/search/?api=1&query=Sharif%20PBZ%20House%2C%20Floor%203%2C%20Nyerere%20Square%2C%20Dodoma%2C%20Tanzania" target="_blank" rel="noreferrer" class="inline-flex items-center gap-2 text-sm font-semibold text-navy-900">Open in Google Maps <i class="fa-solid fa-arrow-up-right-from-square h-4 w-4" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact-details" class="section-space bg-white">
        <div class="container-shell">
            <div class="mx-auto max-w-2xl text-center reveal" data-reveal>
                <div class="eyebrow justify-center before:hidden">Start with your need</div>
                <h2 class="section-title">What would you like to improve?</h2>
                <p class="section-copy mx-auto">Choose the area closest to your goal. You can also contact us directly and describe the challenge in your own words.</p>
            </div>

            <div class="mt-14 grid gap-6 md:grid-cols-3">
                <a href="{{ route('services') }}#web-development" class="service-card reveal" data-reveal>
                    <div class="service-icon"><i class="fa-solid fa-laptop-code h-7 w-7" aria-hidden="true"></i></div>
                    <h3 class="mt-7 text-xl font-semibold text-navy-900">Website or platform</h3>
                    <p class="mt-3 text-sm leading-7 text-slate-500">A new website, online platform, redesign, or ongoing technical support.</p>
                    <span class="mt-7 inline-flex items-center gap-2 text-sm font-semibold text-navy-900">Explore web services <i class="fa-solid fa-arrow-right h-4 w-4" aria-hidden="true"></i></span>
                </a>

                <a href="{{ route('services') }}#ai-machine-learning" class="service-card reveal" data-reveal data-reveal-delay="100">
                    <div class="service-icon"><i class="fa-solid fa-brain h-7 w-7" aria-hidden="true"></i></div>
                    <h3 class="mt-7 text-xl font-semibold text-navy-900">AI or automation</h3>
                    <p class="mt-3 text-sm leading-7 text-slate-500">A practical assistant, data workflow, prediction tool, or automated process.</p>
                    <span class="mt-7 inline-flex items-center gap-2 text-sm font-semibold text-navy-900">Explore AI services <i class="fa-solid fa-arrow-right h-4 w-4" aria-hidden="true"></i></span>
                </a>

                <a href="{{ route('services') }}#camera-installation" class="service-card reveal" data-reveal data-reveal-delay="200">
                    <div class="service-icon"><i class="fa-solid fa-video h-7 w-7" aria-hidden="true"></i></div>
                    <h3 class="mt-7 text-xl font-semibold text-navy-900">Camera or security</h3>
                    <p class="mt-3 text-sm leading-7 text-slate-500">A camera system for better visibility, recording, monitoring, or security coverage.</p>
                    <span class="mt-7 inline-flex items-center gap-2 text-sm font-semibold text-navy-900">Explore camera services <i class="fa-solid fa-arrow-right h-4 w-4" aria-hidden="true"></i></span>
                </a>
            </div>
        </div>
    </section>
@endsection
