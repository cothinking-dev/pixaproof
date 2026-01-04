@extends('layouts.app')

@section('title', 'About - PixaProof')

@section('content')
    {{-- Section 1: Hero --}}
    <section class="relative isolate overflow-hidden bg-surface-950 px-4 pt-24 pb-20">
        {{-- Background Image --}}
        <div class="absolute inset-0 size-full">
            <img
                src="/images/heroes/hero-enterprise.webp"
                alt=""
                class="size-full object-cover object-center"
            />
            <div class="absolute inset-0 bg-gradient-to-r from-surface-950 via-surface-950/85 to-surface-950/70"></div>
        </div>

        <div class="relative z-10 mx-auto max-w-4xl text-center">
            <p class="text-sm font-medium uppercase tracking-wider text-brand-400">
                About PixaProof
            </p>
            <h1 class="mt-4 text-4xl font-bold text-white md:text-5xl lg:text-6xl">
                Security That Begins at the <span class="text-brand-400">Shutter</span>
            </h1>
            <p class="mx-auto mt-6 max-w-2xl text-lg text-gray-300 text-pretty md:text-xl">
                PixaProof addresses a critical gap in identity verification: ensuring image authenticity at the point of capture, not after submission.
            </p>
            <div class="mt-10 flex flex-col sm:flex-row flex-wrap justify-center gap-4">
                <x-app-store-badges size="lg" />
                <x-button href="{{ route('enterprise') }}" variant="secondary" size="lg">Enterprise Solutions</x-button>
            </div>
        </div>
    </section>

    {{-- Section 2: Mission & Value Proposition --}}
    <x-section pattern="hexagonal" pattern-opacity="0.03">
        <div class="grid items-center gap-12 lg:grid-cols-2">
            <div>
                <p class="text-sm font-medium uppercase tracking-wider text-brand-500">Our Mission</p>
                <h2 class="mt-2 text-3xl font-bold text-white md:text-4xl">
                    Ensuring Image Authenticity From the Moment of Capture
                </h2>
                <p class="mt-4 text-lg text-gray-300 text-pretty">
                    Traditional photo verification happens after images are uploaded, leaving a critical gap for manipulation and fraud. PixaProof takes a different approach.
                </p>
                <p class="mt-4 text-lg text-gray-300 text-pretty">
                    <span class="font-semibold text-white">While others analyze photos after they're uploaded, PixaProof embeds authenticity at the shutter click.</span>
                </p>

                <div class="mt-8 space-y-4">
                    <div class="flex items-start gap-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-brand-500/10 text-brand-500">
                            <x-heroicon-o-camera class="h-5 w-5" />
                        </div>
                        <div>
                            <h4 class="font-semibold text-white">Capture-Level Protection</h4>
                            <p class="text-sm text-gray-400">Security embedded at the moment of capture, not after the fact</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-brand-500/10 text-brand-500">
                            <x-heroicon-o-link class="h-5 w-5" />
                        </div>
                        <div>
                            <h4 class="font-semibold text-white">Complete Chain of Custody</h4>
                            <p class="text-sm text-gray-400">End-to-end verification from shutter to final verification</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-brand-500/10 text-brand-500">
                            <x-heroicon-o-cpu-chip class="h-5 w-5" />
                        </div>
                        <div>
                            <h4 class="font-semibold text-white">AI Deepfake Detection</h4>
                            <p class="text-sm text-gray-400">Advanced synthetic media identification and fraud prevention</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Visual --}}
            <div class="flex justify-center">
                <div class="relative w-full max-w-md">
                    <div class="rounded-2xl border border-surface-700 bg-surface-800 p-8 shadow-lg shadow-black/20">
                        <div class="flex flex-col items-center gap-4">
                            {{-- Capture --}}
                            <div class="flex w-full items-center justify-between rounded-lg bg-surface-900 p-4">
                                <span class="font-medium text-white">Photo Capture</span>
                                <span class="rounded-full bg-brand-500/10 px-2 py-1 text-xs font-medium text-brand-500">PIEA Signed</span>
                            </div>
                            {{-- Arrow --}}
                            <svg class="h-6 w-6 text-brand-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3" />
                            </svg>
                            {{-- Signature --}}
                            <div class="flex w-full items-center justify-between rounded-lg bg-surface-900 p-4">
                                <span class="font-medium text-white">Cryptographic Signature</span>
                                <x-heroicon-o-key class="h-5 w-5 text-green-500" />
                            </div>
                            {{-- Arrow --}}
                            <svg class="h-6 w-6 text-brand-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3" />
                            </svg>
                            {{-- Verified --}}
                            <div class="flex w-full items-center justify-between rounded-lg bg-green-500/10 p-4">
                                <span class="font-medium text-white">Verified Authentic</span>
                                <x-heroicon-o-check-circle class="h-5 w-5 text-green-500" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-section>

    {{-- Section 3: Company Heritage (MyNasional eKYC) --}}
    <x-section bg="surface">
        <div class="text-center">
            <p class="text-sm font-medium uppercase tracking-wider text-brand-500">Backed by Proven Expertise</p>
            <h2 class="mt-2 text-3xl font-bold text-white md:text-4xl">A Product of MyNasional eKYC Sdn. Bhd.</h2>
            <p class="mx-auto mt-4 max-w-2xl text-lg text-gray-300 text-pretty">
                PixaProof is built on over a decade of experience in identity verification and fraud prevention across Southeast Asia's most demanding industries.
            </p>
        </div>

        <div class="mt-12 grid gap-8 md:grid-cols-2 lg:grid-cols-4">
            <div class="text-center">
                <p class="text-5xl font-bold text-white">14+</p>
                <p class="mt-2 text-gray-400">Years of Expertise</p>
            </div>
            <div class="text-center">
                <p class="text-5xl font-bold text-white">500+</p>
                <p class="mt-2 text-gray-400">Enterprise Clients</p>
            </div>
            <div class="text-center">
                <p class="text-5xl font-bold text-white">10+</p>
                <p class="mt-2 text-gray-400">ASEAN Countries</p>
            </div>
            <div class="text-center">
                <p class="text-5xl font-bold text-white">3</p>
                <p class="mt-2 text-gray-400">Granted Patents</p>
            </div>
        </div>
    </x-section>

    {{-- Section 4: Product Portfolio (Dual Model) --}}
    <x-section pattern="circuit" pattern-opacity="0.03">
        <div class="text-center">
            <p class="text-sm font-medium uppercase tracking-wider text-brand-500">Product Model</p>
            <h2 class="mt-2 text-3xl font-bold text-white md:text-4xl">Two Ways to Protect Your Photos</h2>
            <p class="mx-auto mt-4 max-w-2xl text-lg text-gray-300 text-pretty">
                Whether you're an individual or an organization, PixaProof has the right solution for your photo verification needs.
            </p>
        </div>

        <div class="mt-12 grid gap-8 lg:grid-cols-2">
            {{-- Community Edition --}}
            <div class="rounded-xl border border-surface-700 bg-surface-800 p-8">
                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-brand-500/10">
                    <x-heroicon-o-device-phone-mobile class="h-6 w-6 text-brand-500" />
                </div>
                <h3 class="mt-4 text-xl font-semibold text-white">Community Edition</h3>
                <p class="mt-1 text-sm text-brand-400">For Individuals & Small Teams</p>
                <p class="mt-4 text-gray-300">
                    Download the PixaProof app from App Store or Google Play. Capture verified photos and validate authenticity - no integration required.
                </p>
                <ul class="mt-6 space-y-3">
                    <li class="flex items-center gap-3 text-gray-300">
                        <x-heroicon-o-check class="h-5 w-5 text-green-500" />
                        Free tier available
                    </li>
                    <li class="flex items-center gap-3 text-gray-300">
                        <x-heroicon-o-check class="h-5 w-5 text-green-500" />
                        Personal use cases
                    </li>
                    <li class="flex items-center gap-3 text-gray-300">
                        <x-heroicon-o-check class="h-5 w-5 text-green-500" />
                        Instant verification
                    </li>
                </ul>
                <div class="mt-8">
                    <x-app-store-badges />
                </div>
            </div>

            {{-- Enterprise Solutions --}}
            <div class="rounded-xl border border-brand-500/50 bg-surface-800 p-8">
                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-brand-500/10">
                    <x-heroicon-o-building-office class="h-6 w-6 text-brand-500" />
                </div>
                <h3 class="mt-4 text-xl font-semibold text-white">Enterprise Solutions</h3>
                <p class="mt-1 text-sm text-brand-400">For Organizations</p>
                <p class="mt-4 text-gray-300">
                    Integrate PixaProof SDK directly into your applications. Custom workflows, white-label options, and compliance packages.
                </p>
                <ul class="mt-6 space-y-3">
                    <li class="flex items-center gap-3 text-gray-300">
                        <x-heroicon-o-check class="h-5 w-5 text-green-500" />
                        SDK Integration
                    </li>
                    <li class="flex items-center gap-3 text-gray-300">
                        <x-heroicon-o-check class="h-5 w-5 text-green-500" />
                        Volume Pricing
                    </li>
                    <li class="flex items-center gap-3 text-gray-300">
                        <x-heroicon-o-check class="h-5 w-5 text-green-500" />
                        Dedicated Support
                    </li>
                </ul>
                <div class="mt-8">
                    <x-button href="{{ route('contact') }}">Contact Sales</x-button>
                </div>
            </div>
        </div>
    </x-section>

    {{-- Section 5: Brand Pillars --}}
    <x-section bg="surface">
        <div class="text-center">
            <p class="text-sm font-medium uppercase tracking-wider text-brand-500">Our Values</p>
            <h2 class="mt-2 text-3xl font-bold text-white md:text-4xl">What We Stand For</h2>
        </div>

        <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            {{-- Security First --}}
            <div class="rounded-xl border border-surface-700 bg-surface-800 p-6">
                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-brand-500/10">
                    <x-heroicon-o-shield-check class="h-6 w-6 text-brand-500" />
                </div>
                <h3 class="mt-4 text-lg font-semibold text-white">Security First</h3>
                <p class="mt-2 text-sm text-gray-400">
                    Protection embedded at the moment of capture, not after the fact.
                </p>
            </div>

            {{-- Compliance Ready --}}
            <div class="rounded-xl border border-surface-700 bg-surface-800 p-6">
                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-brand-500/10">
                    <x-heroicon-o-document-check class="h-6 w-6 text-brand-500" />
                </div>
                <h3 class="mt-4 text-lg font-semibold text-white">Compliance Ready</h3>
                <p class="mt-2 text-sm text-gray-400">
                    Built for regulated industries. ISO 27001, GDPR, and industry-specific frameworks.
                </p>
            </div>

            {{-- Developer Friendly --}}
            <div class="rounded-xl border border-surface-700 bg-surface-800 p-6">
                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-brand-500/10">
                    <x-heroicon-o-code-bracket class="h-6 w-6 text-brand-500" />
                </div>
                <h3 class="mt-4 text-lg font-semibold text-white">Developer Friendly</h3>
                <p class="mt-2 text-sm text-gray-400">
                    Simple SDK integration. Most implementations take 2-4 hours.
                </p>
            </div>

            {{-- Proven Heritage --}}
            <div class="rounded-xl border border-surface-700 bg-surface-800 p-6">
                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-brand-500/10">
                    <x-heroicon-o-building-library class="h-6 w-6 text-brand-500" />
                </div>
                <h3 class="mt-4 text-lg font-semibold text-white">Proven Heritage</h3>
                <p class="mt-2 text-sm text-gray-400">
                    14+ years of identity verification expertise. 3 granted patents.
                </p>
            </div>
        </div>
    </x-section>

    {{-- Section 6: Certifications Strip --}}
    <div class="border-y border-surface-700 bg-surface-900 px-4 py-8">
        <div class="mx-auto max-w-6xl">
            <p class="mb-6 text-center text-sm font-medium uppercase tracking-wider text-brand-500">
                Certifications & Compliance
            </p>
            <div class="flex flex-wrap items-center justify-center gap-8 text-sm text-gray-400">
                <span class="flex items-center gap-2">
                    <x-heroicon-o-shield-check class="h-5 w-5 text-green-500" />
                    ISO 27001:2022
                </span>
                <span class="flex items-center gap-2">
                    <x-heroicon-o-shield-check class="h-5 w-5 text-green-500" />
                    ISO 27002:2022
                </span>
                <span class="flex items-center gap-2">
                    <x-heroicon-o-clock class="h-5 w-5 text-brand-500" />
                    SOC 2 Type II (In Progress)
                </span>
                <span class="flex items-center gap-2">
                    <x-heroicon-o-globe-alt class="h-5 w-5 text-brand-500" />
                    GDPR Compliant
                </span>
            </div>
        </div>
    </div>

    {{-- Section 7: Dual CTA --}}
    <x-section bg="brand" bg-image="/images/backgrounds/gradient-mesh.svg">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-white md:text-4xl">Ready to Prove Your Photos Are Real?</h2>
            <p class="mx-auto mt-4 max-w-2xl text-lg text-brand-100 text-pretty">
                Download the app to get started, or contact our sales team for enterprise integration.
            </p>
            <div class="mt-8 flex flex-col sm:flex-row justify-center items-center gap-6">
                <x-app-store-badges size="lg" />
                <x-button href="{{ route('contact') }}" variant="white" size="lg">Contact Sales</x-button>
            </div>
        </div>
    </x-section>
@endsection
