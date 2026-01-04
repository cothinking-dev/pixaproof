@extends('layouts.app')

@section('title', 'How It Works - PixaProof')

@section('content')
    {{-- Hero Section --}}
    <section class="relative isolate overflow-hidden bg-surface-950 px-4 pt-24 pb-20">
        {{-- Background Image --}}
        <div class="absolute inset-0 size-full">
            <img
                src="/images/heroes/hero-how-it-works.webp"
                alt=""
                class="size-full object-cover object-center"
            />
            <div class="absolute inset-0 bg-gradient-to-r from-surface-950 via-surface-950/85 to-surface-950/70"></div>
        </div>

        <div class="relative z-10 mx-auto max-w-4xl text-center">
            <p class="text-sm font-medium uppercase tracking-wider text-brand-400">
                Submitter & Verifier Flow
            </p>
            <h1 class="mt-4 text-4xl font-bold text-white md:text-5xl lg:text-6xl">
                Two roles. One app. <span class="text-brand-400">Complete trust.</span>
            </h1>
            <p class="mx-auto mt-6 max-w-2xl text-lg text-gray-300 text-pretty md:text-xl">
                Capture verified photos or validate authenticity - all in the same app. Whether you're selling, claiming, or documenting, PixaProof ensures every photo tells the truth.
            </p>
            <div class="mt-10 flex flex-wrap justify-center gap-4">
                <x-app-store-badges />
            </div>
            <p class="mt-6 text-sm text-gray-500">
                Building for your organization?
                <a href="{{ route('enterprise') }}" class="text-brand-500 hover:text-brand-400 transition">Explore Enterprise Solutions</a>
            </p>
        </div>
    </section>

    {{-- Two Roles Section --}}
    <x-section pattern="hexagonal" pattern-opacity="0.03">
        <div class="grid gap-8 lg:grid-cols-2">
            {{-- Submitter Card --}}
            <div class="relative rounded-2xl border border-surface-700 bg-surface-800 overflow-hidden">
                <div class="h-1 bg-brand-500"></div>
                <div class="p-8">
                    <div class="flex items-center gap-4">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-500/10">
                            <x-heroicon-o-camera class="h-6 w-6 text-brand-500" />
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-white">Submitter</h2>
                            <p class="text-gray-400">Capture tamper-proof photos</p>
                        </div>
                    </div>

                    <p class="mt-6 text-gray-300">
                        Use PixaProof to take photos that can be verified later. Perfect for sellers, claimants, and anyone who needs proof their photos are authentic.
                    </p>

                    {{-- Steps --}}
                    <div class="mt-8 space-y-6">
                        <div class="flex gap-4">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-brand-500 text-sm font-bold text-white">
                                1
                            </div>
                            <div>
                                <h4 class="font-semibold text-white">Open camera</h4>
                                <p class="mt-1 text-sm text-gray-400">Launch PixaProof and point at your subject</p>
                            </div>
                        </div>
                        <div class="ml-5 h-6 w-px bg-brand-500/30"></div>
                        <div class="flex gap-4">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-brand-500 text-sm font-bold text-white">
                                2
                            </div>
                            <div>
                                <h4 class="font-semibold text-white">Capture securely</h4>
                                <p class="mt-1 text-sm text-gray-400">PIEA technology embeds invisible security signature</p>
                            </div>
                        </div>
                        <div class="ml-5 h-6 w-px bg-brand-500/30"></div>
                        <div class="flex gap-4">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-brand-500 text-sm font-bold text-white">
                                3
                            </div>
                            <div>
                                <h4 class="font-semibold text-white">Share anywhere</h4>
                                <p class="mt-1 text-sm text-gray-400">Send via email, AirDrop, messenger - or save for later</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Verifier Card --}}
            <div class="relative rounded-2xl border border-surface-700 bg-surface-800 overflow-hidden">
                <div class="h-1 bg-green-500"></div>
                <div class="p-8">
                    <div class="flex items-center gap-4">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-500/10">
                            <x-heroicon-o-shield-check class="h-6 w-6 text-green-500" />
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-white">Verifier</h2>
                            <p class="text-gray-400">Validate any PixaProof photo</p>
                        </div>
                    </div>

                    <p class="mt-6 text-gray-300">
                        Receive photos from anyone and instantly verify their authenticity. Know for certain if a photo was captured through PixaProof or tampered with.
                    </p>

                    {{-- Steps --}}
                    <div class="mt-8 space-y-6">
                        <div class="flex gap-4">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-green-500 text-sm font-bold text-white">
                                1
                            </div>
                            <div>
                                <h4 class="font-semibold text-white">Receive photo</h4>
                                <p class="mt-1 text-sm text-gray-400">Get photos via any medium - email, USB, AirDrop, anything</p>
                            </div>
                        </div>
                        <div class="ml-5 h-6 w-px bg-green-500/30"></div>
                        <div class="flex gap-4">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-green-500 text-sm font-bold text-white">
                                2
                            </div>
                            <div>
                                <h4 class="font-semibold text-white">Open in app</h4>
                                <p class="mt-1 text-sm text-gray-400">Load the photo into PixaProof</p>
                            </div>
                        </div>
                        <div class="ml-5 h-6 w-px bg-green-500/30"></div>
                        <div class="flex gap-4">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-green-500 text-sm font-bold text-white">
                                3
                            </div>
                            <div>
                                <h4 class="font-semibold text-white">Instant verdict</h4>
                                <p class="mt-1 text-sm text-gray-400">See if it's authentic, tampered, or unverified</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-section>

    {{-- Verification Results Section --}}
    <x-section bg="surface">
        <div class="text-center">
            <p class="text-sm font-medium uppercase tracking-wider text-brand-500">Verification Results</p>
            <h2 class="mt-2 text-3xl font-bold text-white md:text-4xl">Clear, Instant Answers</h2>
            <p class="mx-auto mt-4 max-w-2xl text-lg text-gray-300 text-pretty">
                Every verification gives you a definitive answer about photo authenticity.
            </p>
        </div>

        <div class="mt-12 grid gap-6 md:grid-cols-3">
            {{-- Authentic --}}
            <div class="rounded-xl border border-green-500/30 bg-green-500/10 p-6 text-center">
                <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-green-500/20">
                    <svg class="h-8 w-8 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="mt-4 text-xl font-semibold text-white">Authentic</h3>
                <p class="mt-2 text-sm text-gray-400">
                    Photo was captured through PixaProof and has not been modified since.
                </p>
            </div>

            {{-- Tampered --}}
            <div class="rounded-xl border border-red-500/30 bg-red-500/10 p-6 text-center">
                <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-red-500/20">
                    <svg class="h-8 w-8 text-red-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                    </svg>
                </div>
                <h3 class="mt-4 text-xl font-semibold text-white">Tampered</h3>
                <p class="mt-2 text-sm text-gray-400">
                    Photo shows signs of modification. The original capture was altered.
                </p>
            </div>

            {{-- Unverified --}}
            <div class="rounded-xl border border-gray-500/30 bg-gray-500/10 p-6 text-center">
                <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-gray-500/20">
                    <svg class="h-8 w-8 text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                    </svg>
                </div>
                <h3 class="mt-4 text-xl font-semibold text-white">Unverified</h3>
                <p class="mt-2 text-sm text-gray-400">
                    Photo was not captured through PixaProof. Authenticity cannot be confirmed.
                </p>
            </div>
        </div>
    </x-section>

    {{-- Use Cases Section --}}
    <x-section>
        <div class="text-center">
            <p class="text-sm font-medium uppercase tracking-wider text-brand-500">Use Cases</p>
            <h2 class="mt-2 text-3xl font-bold text-white md:text-4xl">Trusted proof for every situation</h2>
            <p class="mx-auto mt-4 max-w-2xl text-lg text-gray-300 text-pretty">
                From selling used items to documenting insurance claims, PixaProof provides verified proof.
            </p>
        </div>

        <div class="mt-12 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            {{-- Card 1 --}}
            <div class="group rounded-xl border border-surface-700 bg-surface-900 p-6 transition hover:border-brand-500/50 hover:bg-surface-800">
                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-brand-500/10">
                    <x-heroicon-o-shopping-bag class="h-6 w-6 text-brand-500" />
                </div>
                <h3 class="mt-4 text-lg font-semibold text-white">Second-hand Sales</h3>
                <p class="mt-2 text-sm text-gray-400">Prove your product photos are real and unedited. Build buyer confidence.</p>
            </div>

            {{-- Card 2 --}}
            <div class="group rounded-xl border border-surface-700 bg-surface-900 p-6 transition hover:border-brand-500/50 hover:bg-surface-800">
                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-brand-500/10">
                    <x-heroicon-o-shield-check class="h-6 w-6 text-brand-500" />
                </div>
                <h3 class="mt-4 text-lg font-semibold text-white">Insurance Claims</h3>
                <p class="mt-2 text-sm text-gray-400">Document damage with tamper-proof photos that insurers trust.</p>
            </div>

            {{-- Card 3 --}}
            <div class="group rounded-xl border border-surface-700 bg-surface-900 p-6 transition hover:border-brand-500/50 hover:bg-surface-800">
                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-brand-500/10">
                    <x-heroicon-o-scale class="h-6 w-6 text-brand-500" />
                </div>
                <h3 class="mt-4 text-lg font-semibold text-white">Legal Documentation</h3>
                <p class="mt-2 text-sm text-gray-400">Capture legally admissible evidence with complete chain of custody.</p>
            </div>

            {{-- Card 4 --}}
            <div class="group rounded-xl border border-surface-700 bg-surface-900 p-6 transition hover:border-brand-500/50 hover:bg-surface-800">
                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-brand-500/10">
                    <x-heroicon-o-home class="h-6 w-6 text-brand-500" />
                </div>
                <h3 class="mt-4 text-lg font-semibold text-white">Property Listings</h3>
                <p class="mt-2 text-sm text-gray-400">Verify that property photos are current and accurately represent conditions.</p>
            </div>

            {{-- Card 5 --}}
            <div class="group rounded-xl border border-surface-700 bg-surface-900 p-6 transition hover:border-brand-500/50 hover:bg-surface-800">
                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-brand-500/10">
                    <x-heroicon-o-newspaper class="h-6 w-6 text-brand-500" />
                </div>
                <h3 class="mt-4 text-lg font-semibold text-white">Citizen Journalism</h3>
                <p class="mt-2 text-sm text-gray-400">Prove your news photos are authentic and unmanipulated.</p>
            </div>

            {{-- Card 6 --}}
            <div class="group rounded-xl border border-surface-700 bg-surface-900 p-6 transition hover:border-brand-500/50 hover:bg-surface-800">
                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-brand-500/10">
                    <x-heroicon-o-folder class="h-6 w-6 text-brand-500" />
                </div>
                <h3 class="mt-4 text-lg font-semibold text-white">Personal Documentation</h3>
                <p class="mt-2 text-sm text-gray-400">Timestamped, verified photos for any personal record-keeping need.</p>
            </div>
        </div>
    </x-section>

    {{-- Security Pillars --}}
    <x-section bg="surface" pattern="circuit" pattern-opacity="0.03">
        <div class="text-center">
            <p class="text-sm font-medium uppercase tracking-wider text-brand-500">Security</p>
            <h2 class="mt-2 text-3xl font-bold text-white md:text-4xl">Security that starts at the shutter</h2>
            <p class="mx-auto mt-4 max-w-2xl text-lg text-gray-300 text-pretty">
                Our patented PIEA technology embeds protection the moment you capture.
            </p>
        </div>

        <div class="mt-12 grid gap-8 md:grid-cols-3">
            {{-- Capture --}}
            <div class="text-center">
                <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-2xl bg-brand-500/10 ring-1 ring-brand-500/30">
                    <x-heroicon-o-camera class="h-10 w-10 text-brand-500" />
                </div>
                <h3 class="mt-6 text-xl font-semibold text-white">Capture</h3>
                <p class="mt-2 text-gray-400">Cryptographic signature embedded invisibly at the moment of capture</p>
            </div>

            {{-- Transmit --}}
            <div class="text-center">
                <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-2xl bg-brand-500/10 ring-1 ring-brand-500/30">
                    <x-heroicon-o-cloud-arrow-up class="h-10 w-10 text-brand-500" />
                </div>
                <h3 class="mt-6 text-xl font-semibold text-white">Transmit</h3>
                <p class="mt-2 text-gray-400">End-to-end encryption ensures photos can't be intercepted or modified</p>
            </div>

            {{-- Verify --}}
            <div class="text-center">
                <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-2xl bg-brand-500/10 ring-1 ring-brand-500/30">
                    <x-heroicon-o-check-badge class="h-10 w-10 text-brand-500" />
                </div>
                <h3 class="mt-6 text-xl font-semibold text-white">Verify</h3>
                <p class="mt-2 text-gray-400">35+ tamper detection tests validate authenticity in under 500ms</p>
            </div>
        </div>

        {{-- Stats Row --}}
        <div class="mt-16 grid gap-8 sm:grid-cols-3">
            <div class="text-center">
                <p class="text-4xl font-bold text-white">99.9%</p>
                <p class="mt-2 text-sm text-gray-400">Verification Accuracy</p>
            </div>
            <div class="text-center">
                <p class="text-4xl font-bold text-white">&lt;500ms</p>
                <p class="mt-2 text-sm text-gray-400">Response Time</p>
            </div>
            <div class="text-center">
                <p class="text-4xl font-bold text-white">35+</p>
                <p class="mt-2 text-sm text-gray-400">Tamper Tests</p>
            </div>
        </div>
    </x-section>

    {{-- Final CTA --}}
    <x-section bg="brand" bg-image="/images/backgrounds/gradient-mesh.svg">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-white md:text-4xl">Ready to prove it's real?</h2>
            <p class="mx-auto mt-4 max-w-2xl text-lg text-brand-100 text-pretty">
                Download PixaProof and start capturing verified photos today.
            </p>
            <div class="mt-8 flex flex-wrap justify-center gap-4">
                <x-app-store-badges />
            </div>
            <p class="mt-6 text-sm text-brand-200">
                Free to capture. 3 free verifications every month.
            </p>
        </div>
    </x-section>
@endsection
