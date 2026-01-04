@extends('layouts.app')

@section('title', 'Enterprise Solutions - PixaProof')

@section('content')
    {{-- Hero Section --}}
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
                Enterprise Solutions
            </p>
            <h1 class="mt-4 text-4xl font-bold text-white md:text-5xl lg:text-6xl">
                Photo Verification for <span class="text-brand-400">Enterprise</span>
            </h1>
            <p class="mx-auto mt-6 max-w-2xl text-lg text-gray-300 text-pretty md:text-xl">
                Integrate PixaProof's PIEA technology into your workflows. SDK integration, volume pricing, and compliance packages for organizations that can't afford fraud.
            </p>
            <div class="mt-10 flex flex-wrap justify-center gap-4">
                <x-button href="{{ route('contact') }}" size="lg">Talk to Sales</x-button>
                <x-button href="{{ route('developers') }}" variant="secondary" size="lg">View Developer Docs</x-button>
            </div>
        </div>
    </section>

    {{-- Trust Strip --}}
    <div class="border-y border-surface-700 bg-surface-900 px-4 py-6">
        <div class="mx-auto flex max-w-6xl flex-wrap items-center justify-center gap-8 text-sm text-gray-400">
            <span class="flex items-center gap-2">
                <x-heroicon-o-shield-check class="h-5 w-5 text-brand-500" />
                ISO 27001:2022
            </span>
            <span class="flex items-center gap-2">
                <x-heroicon-o-shield-check class="h-5 w-5 text-brand-500" />
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

    {{-- Why Enterprise Section --}}
    <x-section>
        <div class="text-center">
            <p class="text-sm font-medium uppercase tracking-wider text-brand-500">Why Enterprise</p>
            <h2 class="mt-2 text-3xl font-bold text-white md:text-4xl">Built for organizations that can't afford fraud</h2>
            <p class="mx-auto mt-4 max-w-2xl text-lg text-gray-300 text-pretty">
                PixaProof Enterprise provides the tools and support needed for large-scale photo verification.
            </p>
        </div>

        <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            {{-- SDK Integration --}}
            <div class="rounded-xl border border-surface-700 bg-surface-800 p-6">
                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-brand-500/10">
                    <x-heroicon-o-code-bracket class="h-6 w-6 text-brand-500" />
                </div>
                <h3 class="mt-4 text-lg font-semibold text-white">SDK Integration</h3>
                <p class="mt-2 text-sm text-gray-400">
                    Native SDKs for iOS and Android. Integrate PIEA technology directly into your mobile apps with minimal code changes.
                </p>
            </div>

            {{-- API Access --}}
            <div class="rounded-xl border border-surface-700 bg-surface-800 p-6">
                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-brand-500/10">
                    <x-heroicon-o-cpu-chip class="h-6 w-6 text-brand-500" />
                </div>
                <h3 class="mt-4 text-lg font-semibold text-white">Verification API</h3>
                <p class="mt-2 text-sm text-gray-400">
                    RESTful API for server-side verification. Integrate photo verification into your existing backend workflows.
                </p>
            </div>

            {{-- Volume Pricing --}}
            <div class="rounded-xl border border-surface-700 bg-surface-800 p-6">
                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-brand-500/10">
                    <x-heroicon-o-chart-bar class="h-6 w-6 text-brand-500" />
                </div>
                <h3 class="mt-4 text-lg font-semibold text-white">Volume Pricing</h3>
                <p class="mt-2 text-sm text-gray-400">
                    Custom pricing based on your verification volume. Significant discounts for high-volume organizations.
                </p>
            </div>

            {{-- Compliance --}}
            <div class="rounded-xl border border-surface-700 bg-surface-800 p-6">
                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-brand-500/10">
                    <x-heroicon-o-shield-check class="h-6 w-6 text-brand-500" />
                </div>
                <h3 class="mt-4 text-lg font-semibold text-white">Compliance Ready</h3>
                <p class="mt-2 text-sm text-gray-400">
                    ISO 27001 certified infrastructure. GDPR compliant processing. Ready for regulated industries.
                </p>
            </div>

            {{-- White Label --}}
            <div class="rounded-xl border border-surface-700 bg-surface-800 p-6">
                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-brand-500/10">
                    <x-heroicon-o-paint-brush class="h-6 w-6 text-brand-500" />
                </div>
                <h3 class="mt-4 text-lg font-semibold text-white">White-Label Options</h3>
                <p class="mt-2 text-sm text-gray-400">
                    Customize the SDK UI to match your brand. Your users see your branding, not ours.
                </p>
            </div>

            {{-- Dedicated Support --}}
            <div class="rounded-xl border border-surface-700 bg-surface-800 p-6">
                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-brand-500/10">
                    <x-heroicon-o-lifebuoy class="h-6 w-6 text-brand-500" />
                </div>
                <h3 class="mt-4 text-lg font-semibold text-white">Dedicated Support</h3>
                <p class="mt-2 text-sm text-gray-400">
                    Named account manager. Priority technical support. SLA guarantees with 99.9% uptime.
                </p>
            </div>
        </div>
    </x-section>

    {{-- Industry Solutions --}}
    <x-section bg="surface" pattern="hexagonal" pattern-opacity="0.03">
        <div class="text-center">
            <p class="text-sm font-medium uppercase tracking-wider text-brand-500">Industry Solutions</p>
            <h2 class="mt-2 text-3xl font-bold text-white md:text-4xl">Purpose-built for your industry</h2>
            <p class="mx-auto mt-4 max-w-2xl text-lg text-gray-300 text-pretty">
                PixaProof is trusted by organizations across regulated industries where photo authenticity is critical.
            </p>
        </div>

        <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            {{-- Banking --}}
            <a href="{{ route('solutions.banking') }}" class="group rounded-xl border border-surface-700 bg-surface-800 p-6 transition hover:border-brand-500/50 hover:bg-surface-700">
                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-blue-500/10">
                    <x-heroicon-o-building-library class="h-6 w-6 text-blue-500" />
                </div>
                <h3 class="mt-4 text-lg font-semibold text-white group-hover:text-brand-400 transition">Banking & Finance</h3>
                <p class="mt-2 text-sm text-gray-400">
                    KYC document verification, loan application photos, and remote onboarding protection.
                </p>
                <p class="mt-4 text-sm font-medium text-brand-500 group-hover:text-brand-400">
                    Learn more
                    <span class="transition-transform inline-block group-hover:translate-x-1">&rarr;</span>
                </p>
            </a>

            {{-- Insurance --}}
            <a href="{{ route('solutions.insurance') }}" class="group rounded-xl border border-surface-700 bg-surface-800 p-6 transition hover:border-brand-500/50 hover:bg-surface-700">
                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-emerald-500/10">
                    <x-heroicon-o-shield-check class="h-6 w-6 text-emerald-500" />
                </div>
                <h3 class="mt-4 text-lg font-semibold text-white group-hover:text-brand-400 transition">Insurance</h3>
                <p class="mt-2 text-sm text-gray-400">
                    Claims fraud prevention with tamper-proof damage photos and underwriting documentation.
                </p>
                <p class="mt-4 text-sm font-medium text-brand-500 group-hover:text-brand-400">
                    Learn more
                    <span class="transition-transform inline-block group-hover:translate-x-1">&rarr;</span>
                </p>
            </a>

            {{-- Government --}}
            <a href="{{ route('solutions.government') }}" class="group rounded-xl border border-surface-700 bg-surface-800 p-6 transition hover:border-brand-500/50 hover:bg-surface-700">
                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-purple-500/10">
                    <x-heroicon-o-building-office-2 class="h-6 w-6 text-purple-500" />
                </div>
                <h3 class="mt-4 text-lg font-semibold text-white group-hover:text-brand-400 transition">Government</h3>
                <p class="mt-2 text-sm text-gray-400">
                    Citizen verification, benefits administration, and secure document submission.
                </p>
                <p class="mt-4 text-sm font-medium text-brand-500 group-hover:text-brand-400">
                    Learn more
                    <span class="transition-transform inline-block group-hover:translate-x-1">&rarr;</span>
                </p>
            </a>

            {{-- E-commerce --}}
            <a href="{{ route('solutions.ecommerce') }}" class="group rounded-xl border border-surface-700 bg-surface-800 p-6 transition hover:border-brand-500/50 hover:bg-surface-700">
                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-rose-500/10">
                    <x-heroicon-o-shopping-bag class="h-6 w-6 text-rose-500" />
                </div>
                <h3 class="mt-4 text-lg font-semibold text-white group-hover:text-brand-400 transition">E-commerce</h3>
                <p class="mt-2 text-sm text-gray-400">
                    Product photo verification for marketplaces. Build buyer trust with verified seller photos.
                </p>
                <p class="mt-4 text-sm font-medium text-brand-500 group-hover:text-brand-400">
                    Learn more
                    <span class="transition-transform inline-block group-hover:translate-x-1">&rarr;</span>
                </p>
            </a>

            {{-- Healthcare --}}
            <a href="{{ route('solutions.healthcare') }}" class="group rounded-xl border border-surface-700 bg-surface-800 p-6 transition hover:border-brand-500/50 hover:bg-surface-700">
                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-red-500/10">
                    <x-heroicon-o-heart class="h-6 w-6 text-red-500" />
                </div>
                <h3 class="mt-4 text-lg font-semibold text-white group-hover:text-brand-400 transition">Healthcare</h3>
                <p class="mt-2 text-sm text-gray-400">
                    Patient identity verification for telemedicine and secure medical documentation.
                </p>
                <p class="mt-4 text-sm font-medium text-brand-500 group-hover:text-brand-400">
                    Learn more
                    <span class="transition-transform inline-block group-hover:translate-x-1">&rarr;</span>
                </p>
            </a>

            {{-- Developers --}}
            <a href="{{ route('developers') }}" class="group rounded-xl border border-surface-700 bg-surface-800 p-6 transition hover:border-brand-500/50 hover:bg-surface-700">
                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-cyan-500/10">
                    <x-heroicon-o-code-bracket class="h-6 w-6 text-cyan-500" />
                </div>
                <h3 class="mt-4 text-lg font-semibold text-white group-hover:text-brand-400 transition">Developers</h3>
                <p class="mt-2 text-sm text-gray-400">
                    SDK documentation, API reference, and integration guides for your development team.
                </p>
                <p class="mt-4 text-sm font-medium text-brand-500 group-hover:text-brand-400">
                    View docs
                    <span class="transition-transform inline-block group-hover:translate-x-1">&rarr;</span>
                </p>
            </a>
        </div>
    </x-section>

    {{-- Stats Section --}}
    <x-section>
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
            <div class="text-center">
                <p class="text-5xl font-bold text-white">500+</p>
                <p class="mt-2 text-gray-400">Enterprise Clients</p>
            </div>
            <div class="text-center">
                <p class="text-5xl font-bold text-white">14+</p>
                <p class="mt-2 text-gray-400">Years of Expertise</p>
            </div>
            <div class="text-center">
                <p class="text-5xl font-bold text-white">3</p>
                <p class="mt-2 text-gray-400">Granted Patents</p>
            </div>
            <div class="text-center">
                <p class="text-5xl font-bold text-white">99.9%</p>
                <p class="mt-2 text-gray-400">Verification Accuracy</p>
            </div>
        </div>
    </x-section>

    {{-- Integration Process --}}
    <x-section bg="surface">
        <div class="text-center">
            <p class="text-sm font-medium uppercase tracking-wider text-brand-500">Integration</p>
            <h2 class="mt-2 text-3xl font-bold text-white md:text-4xl">Go live in days, not months</h2>
            <p class="mx-auto mt-4 max-w-2xl text-lg text-gray-300 text-pretty">
                Our lightweight SDK and comprehensive documentation make integration straightforward.
            </p>
        </div>

        <div class="mt-12 grid gap-8 lg:grid-cols-4">
            <div class="relative">
                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-brand-500 text-xl font-bold text-white">
                    1
                </div>
                <h3 class="mt-4 text-lg font-semibold text-white">Discovery Call</h3>
                <p class="mt-2 text-sm text-gray-400">
                    We understand your use case and provide technical recommendations.
                </p>
            </div>

            <div class="relative">
                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-brand-500 text-xl font-bold text-white">
                    2
                </div>
                <h3 class="mt-4 text-lg font-semibold text-white">SDK Integration</h3>
                <p class="mt-2 text-sm text-gray-400">
                    Add our SDK to your mobile app. Most integrations take 2-4 hours.
                </p>
            </div>

            <div class="relative">
                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-brand-500 text-xl font-bold text-white">
                    3
                </div>
                <h3 class="mt-4 text-lg font-semibold text-white">Testing & QA</h3>
                <p class="mt-2 text-sm text-gray-400">
                    Test in sandbox environment. Our team provides hands-on support.
                </p>
            </div>

            <div class="relative">
                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-brand-500 text-xl font-bold text-white">
                    4
                </div>
                <h3 class="mt-4 text-lg font-semibold text-white">Go Live</h3>
                <p class="mt-2 text-sm text-gray-400">
                    Launch to production with ongoing monitoring and support.
                </p>
            </div>
        </div>
    </x-section>

    {{-- Community CTA --}}
    <x-section>
        <x-community-cta />
    </x-section>

    {{-- Final CTA --}}
    <x-section bg="brand" bg-image="/images/backgrounds/gradient-mesh.svg">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-white md:text-4xl">Ready to protect your organization?</h2>
            <p class="mx-auto mt-4 max-w-2xl text-lg text-brand-100 text-pretty">
                Talk to our sales team about how PixaProof Enterprise can help prevent photo fraud in your workflows.
            </p>
            <div class="mt-8 flex flex-wrap justify-center gap-4">
                <x-button href="{{ route('contact') }}" variant="white" size="lg">Contact Sales</x-button>
                <x-button href="{{ route('developers') }}" variant="ghost" size="lg" class="text-white hover:text-white/80">View Developer Docs</x-button>
            </div>
        </div>
    </x-section>
@endsection
