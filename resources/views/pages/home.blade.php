@extends('layouts.app')

@section('title', 'Prove Your Photos Are Real')

@section('content')
    {{-- Hero Section --}}
    <section class="relative isolate overflow-hidden bg-surface-950 px-4 pt-24">
        {{-- Background Image --}}
        <div class="absolute inset-0 size-full">
            <img
                src="/images/heroes/hero-home.webp"
                alt=""
                class="size-full object-cover object-center"
            />
            {{-- Gradient Overlay --}}
            <div class="absolute inset-0 bg-gradient-to-r from-surface-950 via-surface-950/95 to-surface-950/70"></div>
        </div>

        {{-- Content --}}
        <div class="relative z-10 mx-auto max-w-7xl py-16 md:py-24">
            <div class="grid items-center gap-12 lg:grid-cols-2">
                {{-- Left: Text Content --}}
                <div class="text-center lg:text-left">
                    {{-- Pre-headline --}}
                    <p class="text-sm font-medium uppercase tracking-wider text-brand-500">
                        Trusted by 500+ Enterprises
                    </p>

                    {{-- Headline --}}
                    <h1 class="mt-4 text-4xl font-bold text-white md:text-5xl lg:text-6xl">
                        Prove your photos are <x-rotating-text :words="['real', 'authentic', 'untampered']" class="text-brand-500" />
                    </h1>

                    {{-- Subheadline --}}
                    <p class="mt-6 text-lg text-gray-300 text-pretty md:text-xl">
                        Take photos that can't be faked. Verify photos that can't be forged.
                        The PixaProof app captures authenticity at the moment of the shot.
                    </p>

                    {{-- App Store Badges --}}
                    <div class="mt-8 flex flex-wrap justify-center gap-4 lg:justify-start">
                        <x-app-store-badges size="lg" />
                    </div>

                    {{-- Secondary CTA --}}
                    <div class="mt-6">
                        <a href="/enterprise" class="inline-flex items-center gap-2 text-sm font-medium text-brand-400 hover:text-brand-300 transition">
                            Enterprise Solutions
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>

                    {{-- Trust Badge Strip --}}
                    <div class="mt-10 flex flex-wrap items-center justify-center gap-x-6 gap-y-3 text-sm text-gray-400 lg:justify-start">
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
                            <span>End-to-End Encrypted</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="h-4 w-4 text-brand-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                            </svg>
                            <span>Free to Start</span>
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
        </div>
    </section>

    {{-- How It Works Section --}}
    <x-section id="how-it-works" bg="surface">
        <div class="text-center">
            <p class="text-sm font-medium uppercase tracking-wider text-brand-500">How It Works</p>
            <h2 class="mt-2 text-3xl font-bold text-white md:text-4xl">Two roles, one trusted photo</h2>
            <p class="mx-auto mt-4 max-w-2xl text-lg text-gray-300 text-pretty">
                Whether you're capturing photos or verifying them, PixaProof keeps everyone honest.
            </p>
        </div>

        {{-- Two Column Bento --}}
        <div class="mt-12 grid gap-8 md:grid-cols-2">
            {{-- Submitter Flow --}}
            <div class="rounded-2xl bg-surface-800 border border-surface-700 p-8">
                <div class="flex gap-6">
                    {{-- Phone Mockup --}}
                    <div class="hidden shrink-0 sm:block">
                        <x-graphics.phone-mockup variant="scanning" size="sm" />
                    </div>

                    <div class="flex-1">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-brand-500/10">
                                <svg class="h-5 w-5 text-brand-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-white">Submit Photos</h3>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-start gap-3">
                                <div class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-brand-500 text-xs font-bold text-surface-950">1</div>
                                <div>
                                    <p class="font-medium text-white">Open PixaProof camera</p>
                                    <p class="text-sm text-gray-400">Built-in camera captures security data</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-brand-500 text-xs font-bold text-surface-950">2</div>
                                <div>
                                    <p class="font-medium text-white">Take your photo</p>
                                    <p class="text-sm text-gray-400">PIEA™ signature embedded instantly</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-brand-500 text-xs font-bold text-surface-950">3</div>
                                <div>
                                    <p class="font-medium text-white">Share anywhere</p>
                                    <p class="text-sm text-gray-400">Send via any channel - verification travels with the photo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Verifier Flow --}}
            <div class="rounded-2xl bg-surface-800 border border-surface-700 p-8">
                <div class="flex gap-6">
                    {{-- Phone Mockup --}}
                    <div class="hidden shrink-0 sm:block">
                        <x-graphics.phone-mockup variant="success" size="sm" />
                    </div>

                    <div class="flex-1">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-green-500/10">
                                <svg class="h-5 w-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-white">Verify Photos</h3>
                        </div>

                        <div class="space-y-4">
                            <div class="flex items-start gap-3">
                                <div class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-green-500 text-xs font-bold text-surface-950">1</div>
                                <div>
                                    <p class="font-medium text-white">Receive any photo</p>
                                    <p class="text-sm text-gray-400">Email, messaging, or direct transfer</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-green-500 text-xs font-bold text-surface-950">2</div>
                                <div>
                                    <p class="font-medium text-white">Open in PixaProof</p>
                                    <p class="text-sm text-gray-400">App reads embedded signature</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-green-500 text-xs font-bold text-surface-950">3</div>
                                <div>
                                    <p class="font-medium text-white">See verification status</p>
                                    <p class="text-sm text-gray-400">Authentic, tampered, or unknown - instantly</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-section>

    {{-- Use Cases Section --}}
    <x-section bg-image="/images/backgrounds/dots-subtle.svg" bg-overlay="radial">
        <div class="text-center">
            <p class="text-sm font-medium uppercase tracking-wider text-brand-500">Use Cases</p>
            <h2 class="mt-2 text-3xl font-bold text-white md:text-4xl">Photos that prove themselves</h2>
            <p class="mx-auto mt-4 max-w-2xl text-lg text-gray-300 text-pretty">
                From selling secondhand items to documenting accidents, verified photos build trust.
            </p>
        </div>

        <x-vertical-tabs
            class="mt-12"
            :tabs="[
                [
                    'title' => 'Secondhand Sales',
                    'description' => 'Prove your product photos are real. Buyers trust verified listings more.',
                    'icon' => 'M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z',
                    'image' => '/images/use-cases/secondhand-sales.jpg',
                ],
                [
                    'title' => 'Insurance Claims',
                    'description' => 'Document damage with tamper-proof photos. Speed up your claims process.',
                    'icon' => 'M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z',
                    'image' => '/images/use-cases/insurance-claims.jpg',
                ],
                [
                    'title' => 'Legal Evidence',
                    'description' => 'Create admissible photo evidence with cryptographic proof of authenticity.',
                    'icon' => 'M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.416 48.416 0 0012 4.5c-2.291 0-4.545.16-6.75.47m13.5 0c1.01.143 2.01.317 3 .52m-3-.52l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.988 5.988 0 01-2.031.352 5.988 5.988 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L18.75 4.97zm-16.5.52c.99-.203 1.99-.377 3-.52m0 0l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.989 5.989 0 01-2.031.352 5.989 5.989 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L5.25 4.97z',
                    'image' => '/images/use-cases/legal-evidence.jpg',
                ],
                [
                    'title' => 'Real Estate',
                    'description' => 'Verify property conditions for rentals, inspections, and move-in/out documentation.',
                    'icon' => 'M8.25 21v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21m0 0h4.5V3.545M12.75 21h7.5V10.75M2.25 21h1.5m18 0h-18M2.25 9l4.5-1.636M18.75 3l-1.5.545m0 6.205l3 1m1.5.5l-1.5-.5M6.75 7.364V3h-3v18m3-13.636l10.5-3.819',
                    'image' => '/images/use-cases/real-estate.jpg',
                ],
                [
                    'title' => 'Journalism',
                    'description' => 'Prove your photos weren\'t AI-generated or manipulated. Maintain credibility.',
                    'icon' => 'M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z',
                    'image' => '/images/use-cases/journalism.jpg',
                ],
                [
                    'title' => 'Personal Records',
                    'description' => 'Keep verifiable records of belongings, conditions, or events for your own peace of mind.',
                    'icon' => 'M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z',
                    'image' => '/images/use-cases/personal-records.jpg',
                ],
            ]"
        />
    </x-section>

    {{-- Technology Section --}}
    <x-section bg="surface" pattern="circuit" pattern-opacity="0.03">
        <div class="text-center">
            <p class="text-sm font-medium uppercase tracking-wider text-brand-500">PIEA™ Technology</p>
            <h2 class="mt-2 text-3xl font-bold text-white md:text-4xl">Security at the speed of a shutter</h2>
            <p class="mx-auto mt-4 max-w-2xl text-lg text-gray-300 text-pretty">
                Our Photo Integrity Encoding Algorithm embeds cryptographic proof the instant you take a photo.
            </p>
        </div>

        <div class="mt-12 grid gap-8 md:grid-cols-3">
            <x-card.feature title="Capture-Level Security" description="Authenticity is embedded at the moment of capture. No chance for tampering.">
                <x-slot:icon>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                    </svg>
                </x-slot:icon>
            </x-card.feature>

            <x-card.feature title="Tamper Detection" description="35+ integrity checks detect any modification, from pixel edits to AI manipulation.">
                <x-slot:icon>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                    </svg>
                </x-slot:icon>
            </x-card.feature>

            <x-card.feature title="Instant Verification" description="Results in under 500ms. Works offline with sync when connected.">
                <x-slot:icon>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                    </svg>
                </x-slot:icon>
            </x-card.feature>
        </div>

        <div class="mt-8 text-center">
            <x-button href="/product" variant="secondary">
                Learn More About PIEA™
            </x-button>
        </div>
    </x-section>

    {{-- Pricing Section --}}
    <x-section id="pricing" bg-image="/images/backgrounds/gradient-mesh.svg" bg-overlay="darker">
        <div class="text-center">
            <p class="text-sm font-medium uppercase tracking-wider text-brand-500">Pricing</p>
            <h2 class="mt-2 text-3xl font-bold text-white md:text-4xl">Start free, scale as you grow</h2>
            <p class="mx-auto mt-4 max-w-2xl text-lg text-gray-300 text-pretty">
                Verify photos for free. Upgrade when you need more.
            </p>
        </div>

        <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-4">
            <x-pricing-card
                tier="Free"
                price="RM0"
                description="For trying out PixaProof"
                :features="[
                    '3 verifications per month',
                    'Capture unlimited photos',
                    'Basic verification',
                    'Share via any channel',
                ]"
                ctaText="Download Free"
            />

            <x-pricing-card
                tier="Standard"
                price="RM200"
                description="For regular users"
                :popular="true"
                :features="[
                    '25 verifications per month',
                    'Capture unlimited photos',
                    'Full verification suite',
                    'Verification history',
                    'Priority support',
                ]"
                ctaText="Get Started"
            />

            <x-pricing-card
                tier="Pro"
                price="RM600"
                description="For power users"
                :features="[
                    '100 verifications per month',
                    'Capture unlimited photos',
                    'Full verification suite',
                    'Verification history',
                    'API access',
                    'Priority support',
                ]"
                ctaText="Get Pro"
            />

            <x-pricing-card
                tier="Enterprise"
                :enterprise="true"
                description="For organizations"
                :features="[
                    'Unlimited verifications',
                    'SDK integration',
                    'Custom branding',
                    'SSO & team management',
                    'Dedicated support',
                    'SLA guarantee',
                ]"
            />
        </div>
    </x-section>

    {{-- Enterprise CTA Section --}}
    <x-section bg="surface">
        <div class="grid items-center gap-12 lg:grid-cols-2">
            <div>
                <p class="text-sm font-medium uppercase tracking-wider text-brand-500">Enterprise Solutions</p>
                <h2 class="mt-2 text-3xl font-bold text-white md:text-4xl">Building for your organization?</h2>
                <p class="mt-4 text-lg text-gray-300 text-pretty">
                    Integrate PixaProof directly into your apps with our SDK.
                    Custom workflows, white-label UI, and dedicated support.
                </p>

                <ul class="mt-6 space-y-3">
                    <li class="flex items-center gap-3 text-gray-300">
                        <svg class="h-5 w-5 text-brand-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        iOS, Android, React Native, Flutter SDKs
                    </li>
                    <li class="flex items-center gap-3 text-gray-300">
                        <svg class="h-5 w-5 text-brand-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        Banking, Insurance, Government, Healthcare solutions
                    </li>
                    <li class="flex items-center gap-3 text-gray-300">
                        <svg class="h-5 w-5 text-brand-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        ISO 27001, SOC 2 Type II, GDPR compliant
                    </li>
                </ul>

                <div class="mt-8 flex flex-wrap gap-4">
                    <x-button href="/enterprise">Explore Enterprise</x-button>
                    <x-button href="{{ route('contact') }}" variant="secondary">Contact Sales</x-button>
                </div>
            </div>

            <div class="hidden lg:block">
                <div class="rounded-2xl bg-surface-800 border border-surface-700 p-8">
                    <div class="grid grid-cols-2 gap-4">
                        <a href="{{ route('solutions.banking') }}" class="flex items-center gap-3 rounded-xl bg-surface-700/50 p-4 hover:bg-surface-700 transition">
                            <x-heroicon-o-building-library class="h-8 w-8 text-brand-500" />
                            <span class="font-medium text-white">Banking</span>
                        </a>
                        <a href="{{ route('solutions.insurance') }}" class="flex items-center gap-3 rounded-xl bg-surface-700/50 p-4 hover:bg-surface-700 transition">
                            <x-heroicon-o-shield-check class="h-8 w-8 text-brand-500" />
                            <span class="font-medium text-white">Insurance</span>
                        </a>
                        <a href="{{ route('solutions.government') }}" class="flex items-center gap-3 rounded-xl bg-surface-700/50 p-4 hover:bg-surface-700 transition">
                            <x-heroicon-o-building-office-2 class="h-8 w-8 text-brand-500" />
                            <span class="font-medium text-white">Government</span>
                        </a>
                        <a href="{{ route('solutions.healthcare') }}" class="flex items-center gap-3 rounded-xl bg-surface-700/50 p-4 hover:bg-surface-700 transition">
                            <x-heroicon-o-heart class="h-8 w-8 text-brand-500" />
                            <span class="font-medium text-white">Healthcare</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </x-section>

    {{-- Final CTA Section --}}
    <x-section bg="brand">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-white md:text-4xl">Ready to prove your photos are real?</h2>
            <p class="mx-auto mt-4 max-w-2xl text-lg text-brand-100 text-pretty">
                Download PixaProof free and start capturing verified photos today.
            </p>
            <div class="mt-8 flex flex-wrap justify-center gap-4">
                <x-app-store-badges size="lg" />
            </div>
        </div>
    </x-section>
@endsection
