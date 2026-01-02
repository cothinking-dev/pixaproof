@extends('layouts.app')

@section('title', 'Secure Photo Capture & Verification')

@section('content')
    {{-- Hero Section --}}
    <x-section bg="gradient" bg-image="/images/backgrounds/hero-abstract.svg" bg-overlay="dark" class="pt-24">
        <div class="grid items-center gap-12 lg:grid-cols-2">
            {{-- Left: Text Content --}}
            <div class="text-center lg:text-left">
                {{-- Pre-headline --}}
                <p class="text-sm font-medium uppercase tracking-wider text-brand-500">
                    Secured, Reliable Live Photo Capture
                </p>

                {{-- Headline with rotating text --}}
                <h1 class="mt-4 text-4xl font-bold text-white md:text-5xl lg:text-6xl">
                    Security starts at
                    <span
                        x-data="{
                            words: ['identity verification', 'insurance claims', 'document capture', 'product listings', 'citizen registration', 'medical records'],
                            currentIndex: 0,
                            isAnimating: false,
                            init() {
                                setInterval(() => this.cycleWord(), 3000)
                            },
                            async cycleWord() {
                                if (this.isAnimating || !window.Motion) return;
                                this.isAnimating = true;

                                const el = this.$refs.word;
                                const nextIndex = (this.currentIndex + 1) % this.words.length;

                                await window.Motion.textSwap(el, {
                                    onMidpoint: () => {
                                        this.currentIndex = nextIndex;
                                    }
                                });

                                this.isAnimating = false;
                            }
                        }"
                        class="block text-brand-500 lg:inline"
                    >
                        <span x-ref="word" x-text="words[currentIndex]"></span>
                    </span>
                    <span class="block text-gray-400 lg:inline">in the age of deepfakes</span>
                </h1>

                {{-- Subheadline --}}
                <p class="mt-6 text-lg text-gray-300 md:text-xl">
                    PixaProof prevents photo fraud before it happens - blocking gallery injections,
                    detecting AI manipulation, and ensuring every image is captured live through your app.
                </p>

                {{-- CTAs --}}
                <div class="mt-10 flex flex-wrap justify-center gap-4 lg:justify-start">
                    <x-button href="{{ route('contact') }}" size="lg">Request Demo</x-button>
                    <x-button href="#how-it-works" variant="secondary" size="lg">View Documentation</x-button>
                </div>

                {{-- Trust Badge Strip --}}
                <div class="mt-12 flex flex-wrap items-center justify-center gap-x-6 gap-y-3 text-sm text-gray-400 lg:justify-start">
                    <div class="flex items-center gap-2">
                        <svg class="h-4 w-4 text-brand-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                        </svg>
                        <span>ISO 27001</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="h-4 w-4 text-brand-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                        </svg>
                        <span>ISO 27002</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="h-4 w-4 text-brand-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                        </svg>
                        <span>GDPR</span>
                    </div>
                </div>
            </div>

            {{-- Right: Hero Visual --}}
            <div class="relative hidden lg:block">
                <x-graphics.hero-comparison />
            </div>
        </div>

        {{-- Mobile: Hero Visual below text --}}
        <div class="mt-16 lg:hidden">
            <x-graphics.hero-comparison />
        </div>
    </x-section>

    {{-- Problem Statement Section --}}
    <x-section bg="surface">
        <div class="mx-auto max-w-4xl text-center">
            <h2 class="text-3xl font-bold text-white md:text-4xl">
                Gallery injections are the silent fraud epidemic.
                <span class="text-brand-500">We stop them at the source.</span>
            </h2>

            <div class="mt-8 space-y-6 text-left text-lg text-gray-300">
                <p>
                    Every day, millions of photos are submitted through digital channels - for identity verification,
                    insurance claims, loan applications, and more. But how do you know those images are real?
                </p>
                <p>
                    Traditional verification systems only analyze photos <em>after</em> they've been submitted.
                    By then, it's too late. Fraudsters bypass your controls by uploading pre-edited photos,
                    AI-generated images, or stolen documents from their gallery instead of capturing them live.
                </p>
                <p class="font-semibold text-white">
                    The critical gap: You're not verifying whether the photo was captured securely in the first place.
                </p>
            </div>
        </div>
    </x-section>

    {{-- Attack Vectors Section --}}
    <x-section bg-image="/images/backgrounds/circuit-dark.svg" bg-overlay="darker">
        <div class="text-center">
            <p class="text-sm font-medium uppercase tracking-wider text-brand-500">The Threat Landscape</p>
            <h2 class="mt-2 text-3xl font-bold text-white md:text-4xl">
                Your verification system is only as secure as your capture process
            </h2>
        </div>

        <div class="mt-12 grid gap-4 md:grid-cols-2 lg:grid-cols-3">
            <x-card.problem title="Gallery Injection Attacks" description="Users upload pre-edited photos instead of capturing live, bypassing your verification entirely.">
                <x-slot:icon>
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                    </svg>
                </x-slot:icon>
            </x-card.problem>

            <x-card.problem title="AI-Generated Images" description="Deepfake selfies and synthetic documents pass visual inspection and fool basic verification.">
                <x-slot:icon>
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z" />
                    </svg>
                </x-slot:icon>
            </x-card.problem>

            <x-card.problem title="External File Injection" description="Manipulated images injected through API endpoints or file upload vulnerabilities.">
                <x-slot:icon>
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                    </svg>
                </x-slot:icon>
            </x-card.problem>

            <x-card.problem title="Re-Upload Fraud" description="Previously verified photos reused fraudulently across multiple applications.">
                <x-slot:icon>
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 00-3.7-3.7 48.678 48.678 0 00-7.324 0 4.006 4.006 0 00-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3l-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 003.7 3.7 48.656 48.656 0 007.324 0 4.006 4.006 0 003.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3l-3 3" />
                    </svg>
                </x-slot:icon>
            </x-card.problem>

            <x-card.problem title="Metadata Spoofing" description="EXIF data easily manipulated to fake timestamps, locations, and device information.">
                <x-slot:icon>
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 00-1.883 2.542l.857 6a2.25 2.25 0 002.227 1.932H19.05a2.25 2.25 0 002.227-1.932l.857-6a2.25 2.25 0 00-1.883-2.542m-16.5 0V6A2.25 2.25 0 016 3.75h3.879a1.5 1.5 0 011.06.44l2.122 2.12a1.5 1.5 0 001.06.44H18A2.25 2.25 0 0120.25 9v.776" />
                    </svg>
                </x-slot:icon>
            </x-card.problem>

            <x-card.problem title="Pixel-Level Tampering" description="Subtle alterations at the pixel level pass visual inspection but alter critical information.">
                <x-slot:icon>
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                    </svg>
                </x-slot:icon>
            </x-card.problem>
        </div>

        {{-- Stats --}}
        <div class="mt-12 grid gap-8 md:grid-cols-2">
            <x-card.stat value="$16.6B" label="Fraud losses in 2024" description="Up from $12.5B in 2023" variant="highlight" />
            <x-card.stat value="244%" label="Increase in digital forgeries" description="Year-over-year growth in 2024" variant="highlight" />
        </div>
    </x-section>

    {{-- Solution Overview Section --}}
    <x-section bg="surface" pattern="circuit" pattern-opacity="0.03">
        <div class="text-center">
            <p class="text-sm font-medium uppercase tracking-wider text-brand-500">Our Approach</p>
            <h2 class="mt-2 text-3xl font-bold text-white md:text-4xl">Security that begins at the shutter</h2>
            <p class="mx-auto mt-4 max-w-2xl text-lg text-gray-300">
                While others analyze photos after submission, PixaProof protects authenticity from the moment
                of capture through secure transmission to verification.
            </p>
        </div>

        {{-- Visual Flow Diagram --}}
        <div class="mt-16">
            <x-graphics.solution-flow />
        </div>

        {{-- Feature Cards --}}
        <div class="mt-16 grid gap-8 md:grid-cols-3">
            <x-card.feature title="Secure Capture" description="SDK enforces live photo capture only. Gallery uploads and screen recordings are blocked at the source.">
                <x-slot:icon>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                    </svg>
                </x-slot:icon>
            </x-card.feature>

            <x-card.feature title="Reliable Transmission" description="End-to-end encryption with PIEA™ cryptographic signature embedded at capture time.">
                <x-slot:icon>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
                    </svg>
                </x-slot:icon>
            </x-card.feature>

            <x-card.feature title="Instant Verification" description="Real-time cloud authenticity check with 35+ tamper detection tests in under 500ms.">
                <x-slot:icon>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                    </svg>
                </x-slot:icon>
            </x-card.feature>
        </div>
    </x-section>

    {{-- How It Works Section --}}
    <x-section id="how-it-works" bg-image="/images/backgrounds/dots-subtle.svg" bg-overlay="radial">
        <div class="text-center">
            <p class="text-sm font-medium uppercase tracking-wider text-brand-500">Integration</p>
            <h2 class="mt-2 text-3xl font-bold text-white md:text-4xl">Three steps from capture to confidence</h2>
            <p class="mx-auto mt-4 max-w-2xl text-lg text-gray-300">
                Get up and running in hours, not weeks. Our SDK handles the complexity so you can focus on your core product.
            </p>
        </div>

        {{-- Visual How It Works --}}
        <div class="mt-12">
            <x-graphics.how-it-works-visual />
        </div>
    </x-section>

    {{-- Benefits Section --}}
    <x-section bg="surface">
        <div class="grid items-center gap-12 lg:grid-cols-2">
            {{-- Left: Content --}}
            <div>
                <p class="text-sm font-medium uppercase tracking-wider text-brand-500">Why PixaProof</p>
                <h2 class="mt-2 text-3xl font-bold text-white md:text-4xl">Prevention, not just detection</h2>
                <p class="mt-4 text-lg text-gray-300">
                    Traditional verification catches fraud after the fact. PixaProof stops it before it starts.
                </p>

                <div class="mt-8 space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-red-500/10">
                            <svg class="h-6 w-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-white">Gallery Injection Prevention</h3>
                            <p class="mt-1 text-gray-400">100% prevention of pre-staged photo fraud. Gallery uploads are blocked at the SDK level.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-brand-500/10">
                            <svg class="h-6 w-6 text-brand-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5V6.75a4.5 4.5 0 119 0v3.75M3.75 21.75h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H3.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-white">Complete Chain of Custody</h3>
                            <p class="mt-1 text-gray-400">Forensic-grade evidence trail. Every photo is cryptographically signed and timestamped.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-purple-500/10">
                            <svg class="h-6 w-6 text-purple-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-white">AI Manipulation Detection</h3>
                            <p class="mt-1 text-gray-400">Stay ahead of deepfakes with continuously updated detection models.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-green-500/10">
                            <svg class="h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-white">Enterprise Compliance Ready</h3>
                            <p class="mt-1 text-gray-400">ISO 27001, ISO 27002, SOC 2 Type II, and GDPR compliant.</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right: Visual comparison with phone mockups --}}
            <div class="hidden lg:block">
                <x-graphics.prevention-visual />
            </div>
        </div>

        {{-- Mobile: Full width visual below content --}}
        <div class="mt-12 lg:hidden">
            <x-graphics.prevention-visual />
        </div>
    </x-section>

    {{-- Industry Solutions Section --}}
    <x-section bg-image="/images/backgrounds/dots-subtle.svg" bg-overlay="dark">
        <div class="text-center">
            <p class="text-sm font-medium uppercase tracking-wider text-brand-500">Industries</p>
            <h2 class="mt-2 text-3xl font-bold text-white md:text-4xl">Trusted across regulated industries</h2>
            <p class="mx-auto mt-4 max-w-2xl text-lg text-gray-300">
                From financial services to healthcare, organizations rely on PixaProof to secure their verification workflows.
            </p>
        </div>

        <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            <x-graphics.industry-card
                industry="banking"
                title="Banking & Financial Services"
                description="Live ID and selfie capture for KYC/AML compliance. Prevent identity fraud at account opening."
            >
                <x-slot:icon>
                    <svg class="h-10 w-10 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                    </svg>
                </x-slot:icon>
            </x-graphics.industry-card>

            <x-graphics.industry-card
                industry="insurance"
                title="Insurance"
                description="Authenticated damage documentation for claims. Eliminate staged accident photos and inflated claims."
            >
                <x-slot:icon>
                    <svg class="h-10 w-10 text-blue-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                    </svg>
                </x-slot:icon>
            </x-graphics.industry-card>

            <x-graphics.industry-card
                industry="government"
                title="Government & Public Sector"
                description="Verified document capture for citizen services. Secure identity verification for public programs."
            >
                <x-slot:icon>
                    <svg class="h-10 w-10 text-violet-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
                    </svg>
                </x-slot:icon>
            </x-graphics.industry-card>

            <x-graphics.industry-card
                industry="ecommerce"
                title="E-commerce & Marketplaces"
                description="Live product photo verification. Build buyer trust with authenticated seller listings."
            >
                <x-slot:icon>
                    <svg class="h-10 w-10 text-orange-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>
                </x-slot:icon>
            </x-graphics.industry-card>

            <x-graphics.industry-card
                industry="healthcare"
                title="Healthcare & Telemedicine"
                description="HIPAA-compliant patient verification. Secure medical documentation and telehealth identity."
            >
                <x-slot:icon>
                    <svg class="h-10 w-10 text-rose-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                    </svg>
                </x-slot:icon>
            </x-graphics.industry-card>
        </div>
    </x-section>

    {{-- By the Numbers Section --}}
    <x-section bg="surface">
        <div class="text-center">
            <p class="text-sm font-medium uppercase tracking-wider text-brand-500">Track Record</p>
            <h2 class="mt-2 text-3xl font-bold text-white md:text-4xl">Proven at scale</h2>
            <p class="mx-auto mt-4 max-w-2xl text-lg text-gray-300">
                Backed by years of research and deployed across Southeast Asia's largest enterprises.
            </p>
        </div>

        {{-- Enhanced Stats Display --}}
        <div class="mt-12">
            <x-graphics.stats-showcase />
        </div>
    </x-section>

    {{-- Final CTA Section --}}
    <x-section bg="brand" bg-image="/images/backgrounds/gradient-mesh.svg">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-white md:text-4xl">Stop fraud before it starts</h2>
            <p class="mx-auto mt-4 max-w-2xl text-lg text-brand-100">
                Join leading organizations that trust PixaProof to secure their photo verification workflows.
            </p>
            <div class="mt-8 flex flex-wrap justify-center gap-4">
                <x-button href="{{ route('contact') }}" variant="white" size="lg">Request Demo</x-button>
                <x-button href="#" variant="ghost" size="lg" class="text-white hover:text-white/80">View Pricing</x-button>
            </div>
        </div>
    </x-section>
@endsection
