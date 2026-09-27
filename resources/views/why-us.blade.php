@extends('layouts.app')

@section('title', 'Why Us | KADETECH')
@section('description', 'Learn why KADETECH combines thoughtful design, practical technology, and hands-on installation experience in one focused team.')

@section('content')
    <section class="relative overflow-hidden bg-navy-900 pb-20 pt-32 text-white sm:pb-24 sm:pt-36 lg:min-h-[760px] lg:pb-28 lg:pt-40">
        <div class="absolute inset-0 hero-grid opacity-60" aria-hidden="true"></div>

        <div class="container-shell relative grid gap-14 lg:grid-cols-[0.82fr_1.18fr] lg:items-center lg:gap-20">
            <div class="relative z-10 reveal is-visible">
                <h1 class="text-balance text-[2.8rem] font-semibold leading-[1.04] tracking-[-0.06em] sm:text-6xl lg:text-[4.6rem]">Good technology starts with a better question.</h1>
                <p class="mt-7 max-w-xl text-base leading-8 text-slate-300 sm:text-lg">We look past the brief to understand the people, pressure, and opportunity behind it. That is how practical ideas become lasting solutions.</p>

                <div class="mt-9 flex flex-col gap-3 sm:flex-row">
                    <a href="{{ route('contact') }}" class="btn-primary">Meet your partner <i class="fa-solid fa-arrow-right h-4 w-4" aria-hidden="true"></i></a>
                    <a href="#difference" class="btn-light">See the difference</a>
                </div>

                <div class="mt-11 grid grid-cols-3 gap-4 border-t border-white/10 pt-6">
                    <div><p class="text-xs font-semibold uppercase tracking-[0.18em] text-gold-300">01 · Think</p><p class="mt-2 text-sm font-semibold text-white">Ask better questions.</p></div>
                    <div><p class="text-xs font-semibold uppercase tracking-[0.18em] text-gold-300">02 · Build</p><p class="mt-2 text-sm font-semibold text-white">Make it useful.</p></div>
                    <div><p class="text-xs font-semibold uppercase tracking-[0.18em] text-gold-300">03 · Support</p><p class="mt-2 text-sm font-semibold text-white">Stay accountable.</p></div>
                </div>
            </div>

            <div class="relative z-10 reveal reveal-right lg:pl-6" data-reveal data-reveal-delay="160">
                <div class="relative ml-auto max-w-xl">
                    <div class="absolute -left-5 -top-5 h-24 w-24 rounded-full border border-gold-400/60 lg:-left-8 lg:-top-8" aria-hidden="true"></div>
                    <div class="relative overflow-hidden rounded-[2rem] border-[10px] border-white bg-navy-900 shadow-2xl shadow-black/20 sm:rounded-[2.5rem]">
                        <img src="{{ asset('images/kadetech-african-team.jpg') }}" alt="KADETECH team members collaborating around a table" class="h-[470px] w-full object-cover object-[center_35%] sm:h-[590px]" width="1600" height="1067" fetchpriority="high">
                        <div class="absolute inset-0 bg-gradient-to-t from-navy-950/85 via-navy-950/10 to-transparent"></div>
                        <div class="absolute bottom-7 left-7 right-7 flex items-end justify-between gap-4 sm:bottom-9 sm:left-9 sm:right-9">
                            <div>
                                <p class="text-[10px] font-semibold uppercase tracking-[0.22em] text-gold-300">The human layer</p>
                                <p class="mt-2 text-xl font-semibold text-white">Technology is only as strong as the thinking behind it.</p>
                            </div>
                            <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full border border-white/20 bg-white/10 text-gold-300 backdrop-blur-sm"><i class="fa-solid fa-heart text-xl" aria-hidden="true"></i></span>
                        </div>
                    </div>
                    <div class="absolute -bottom-8 -left-4 hidden items-center gap-3 rounded-2xl border border-white/10 bg-white p-4 shadow-xl shadow-black/20 sm:flex lg:-left-10">
                        <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-navy-900 text-gold-300"><i class="fa-solid fa-fingerprint" aria-hidden="true"></i></span>
                        <div><p class="text-xs font-semibold text-navy-900">One team, end to end</p><p class="mt-0.5 text-[10px] text-slate-400">Different disciplines. Shared standard.</p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="difference" class="relative overflow-hidden bg-navy-900 py-20 text-white sm:py-24 lg:py-28">
        <div class="absolute inset-0 hero-grid opacity-60" aria-hidden="true"></div>

        <div class="container-shell relative">
            <div class="grid gap-10 lg:grid-cols-[0.75fr_1.25fr] lg:items-end">
                <div class="reveal reveal-left" data-reveal>
                    <div class="eyebrow text-gold-300 before:bg-gold-300">What we bring</div>
                    <h2 class="text-balance mt-5 text-3xl font-semibold leading-[1.15] tracking-[-0.04em] sm:text-4xl lg:text-5xl">Clear thinking, practical delivery, lasting support.</h2>
                </div>
                <p class="section-copy reveal text-slate-300 lg:ml-auto lg:max-w-xl" data-reveal data-reveal-delay="100">The best result comes from understanding the whole problem—not only the first request.</p>
            </div>

            <div class="mt-14 grid gap-5 md:grid-cols-3">
                <article class="rounded-[2rem] border border-white/10 bg-white/[0.04] p-7 reveal" data-reveal>
                    <span class="flex h-14 w-14 items-center justify-center rounded-2xl bg-gold-400/10 text-xl text-gold-300"><i class="fa-solid fa-lightbulb" aria-hidden="true"></i></span>
                    <h3 class="mt-6 text-lg font-semibold">Think beyond the request</h3>
                    <p class="mt-3 text-sm leading-7 text-slate-400">We look for the real problem behind the brief and recommend what will create lasting value.</p>
                </article>
                <article class="rounded-[2rem] border border-white/10 bg-white/[0.04] p-7 reveal" data-reveal data-reveal-delay="100">
                    <span class="flex h-14 w-14 items-center justify-center rounded-2xl bg-gold-400/10 text-xl text-gold-300"><i class="fa-solid fa-layer-group" aria-hidden="true"></i></span>
                    <h3 class="mt-6 text-lg font-semibold">Build for clarity and quality</h3>
                    <p class="mt-3 text-sm leading-7 text-slate-400">Clean design, reliable technology, and careful implementation from the first draft to final launch.</p>
                </article>
                <article class="rounded-[2rem] border border-white/10 bg-white/[0.04] p-7 reveal" data-reveal data-reveal-delay="200">
                    <span class="flex h-14 w-14 items-center justify-center rounded-2xl bg-gold-400/10 text-xl text-gold-300"><i class="fa-solid fa-headset" aria-hidden="true"></i></span>
                    <h3 class="mt-6 text-lg font-semibold">Stay accountable after delivery</h3>
                    <p class="mt-3 text-sm leading-7 text-slate-400">A finished project is only the beginning. We remain available for updates, improvements, and support.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="section-space bg-navy-50">
        <div class="container-shell">
            <div class="grid gap-10 lg:grid-cols-[0.75fr_1.25fr] lg:gap-20">
                <div class="reveal reveal-left" data-reveal>
                    <div class="eyebrow">The KADETECH difference</div>
                    <h2 class="section-title">Professional work. Practical solutions.</h2>
                    <p class="section-copy">We keep the process straightforward and focus on results you can use, maintain, and grow.</p>
                </div>

                <div class="grid gap-4 sm:grid-cols-2">
                    <article class="feature-card reveal" data-reveal>
                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-gold-100 text-gold-600"><i class="fa-solid fa-comment-dots h-5 w-5" aria-hidden="true"></i></div>
                        <h3 class="mt-5 text-base font-semibold text-navy-900">Clear communication</h3>
                        <p class="mt-2.5 text-sm leading-6 text-slate-500">You always know what is happening and why.</p>
                    </article>
                    <article class="feature-card reveal" data-reveal data-reveal-delay="80">
                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-gold-100 text-gold-600"><i class="fa-solid fa-star h-5 w-5" aria-hidden="true"></i></div>
                        <h3 class="mt-5 text-base font-semibold text-navy-900">Quality first</h3>
                        <p class="mt-2.5 text-sm leading-6 text-slate-500">Every detail is considered before delivery.</p>
                    </article>
                    <article class="feature-card reveal" data-reveal data-reveal-delay="160">
                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-gold-100 text-gold-600"><i class="fa-solid fa-clock-rotate-left h-5 w-5" aria-hidden="true"></i></div>
                        <h3 class="mt-5 text-base font-semibold text-navy-900">Built for the long term</h3>
                        <p class="mt-2.5 text-sm leading-6 text-slate-500">Solutions made to adapt as your needs grow.</p>
                    </article>
                    <article class="feature-card reveal" data-reveal data-reveal-delay="240">
                        <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-gold-100 text-gold-600"><i class="fa-solid fa-shield-halved h-5 w-5" aria-hidden="true"></i></div>
                        <h3 class="mt-5 text-base font-semibold text-navy-900">Responsible by design</h3>
                        <p class="mt-2.5 text-sm leading-6 text-slate-500">Security and privacy are built into our approach.</p>
                    </article>
                </div>
            </div>

            <div class="mt-14 flex flex-col items-start justify-between gap-6 rounded-[2rem] border border-gold-200 bg-white p-7 shadow-soft sm:flex-row sm:items-center sm:p-9 reveal" data-reveal>
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.2em] text-gold-600">Ready to work together?</p>
                    <h2 class="mt-3 text-2xl font-semibold tracking-[-0.035em] text-navy-900">Let’s find the right solution for your goal.</h2>
                </div>
                <a href="{{ route('contact') }}" class="btn-primary shrink-0">Start a conversation <i class="fa-solid fa-arrow-right h-4 w-4" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>
@endsection
