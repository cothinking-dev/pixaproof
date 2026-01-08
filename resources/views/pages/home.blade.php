@extends('layouts.app')

@section('title', 'Enterprise Photo Verification - Stop Injection Attacks')
@section('description', 'Enterprise-grade photo verification for compliance-critical applications. Prevent injection attacks, enforce live capture, and create tamper-proof audit trails. Built by ASEAN eKYC experts.')

@section('content')
    {{-- Hero Section --}}
    <section class="relative isolate overflow-hidden bg-white px-4 pt-32 pb-20 lg:pt-40 lg:pb-28">
        {{-- Background Pattern --}}
        <div class="absolute inset-0 -z-10">
            <div class="absolute inset-0 bg-gradient-to-br from-primary-50 via-white to-white"></div>
            <div class="absolute inset-y-0 right-0 w-1/2 bg-gradient-to-l from-primary-100/40 to-transparent"></div>
            {{-- Subtle grid pattern --}}
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#0000000a_1px,transparent_1px),linear-gradient(to_bottom,#0000000a_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>
        </div>

        <div class="relative z-10 max-w-4xl mx-auto text-center">
            {{-- Trust indicator --}}
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded bg-primary-50 border border-primary-200 mb-8">
                <x-heroicon-s-shield-check class="w-4 h-4 text-primary-600" />
                <span class="text-sm font-medium text-primary-700">Built by the team behind EMAS eKYC</span>
            </div>

            {{-- Headline --}}
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-neutral-900 mb-6 leading-tight">
                Stop Injection Attacks Before They Enter Your System
            </h1>

            {{-- Subheadline --}}
            <p class="text-lg md:text-xl text-neutral-700 mb-10 max-w-3xl mx-auto">
                Enterprise-grade photo verification for compliance-critical applications. Built by the team behind EMAS eKYC, trusted across ASEAN's most regulated industries.
            </p>

            {{-- CTAs --}}
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
                <x-button href="/contact" size="lg">
                    Request Demo
                </x-button>
                <x-button href="#solutions" variant="secondary" size="lg">
                    View Solutions
                </x-button>
            </div>

            {{-- Trust Badges --}}
            <div class="flex flex-wrap items-center justify-center gap-x-8 gap-y-4 text-sm text-neutral-600">
                <div class="flex items-center gap-2">
                    <x-heroicon-s-shield-check class="w-5 h-5 text-primary-600" />
                    <span>ISO 27001</span>
                </div>
                <div class="flex items-center gap-2">
                    <x-heroicon-s-shield-check class="w-5 h-5 text-primary-600" />
                    <span>SOC 2 Type II</span>
                </div>
                <div class="flex items-center gap-2">
                    <x-heroicon-s-shield-check class="w-5 h-5 text-primary-600" />
                    <span>GDPR Compliant</span>
                </div>
            </div>
        </div>
    </section>

    {{-- Problem Section --}}
    <x-section bg="neutral">
        <div class="text-center mb-16">
            <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">The Problem</p>
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                Injection Attacks Are the Gateway to Fraud
            </h2>
            <p class="text-neutral-700 text-lg max-w-2xl mx-auto">
                Deepfakes, photoshopped documents, AI-generated images—all start with bypassing live capture. Your existing verification is failing at the first line of defense.
            </p>
        </div>

        {{-- Stat callout --}}
        <div class="flex justify-center mb-12">
            <div class="inline-flex items-center gap-4 px-8 py-4 rounded bg-white border border-neutral-200 shadow-sm">
                <span class="text-4xl font-bold text-primary-600">15-20%</span>
                <span class="text-neutral-700 text-left text-sm max-w-[180px]">of account applications use fraudulent or manipulated documents</span>
            </div>
        </div>

        {{-- Problem Cards --}}
        <div class="grid md:grid-cols-2 gap-6 max-w-5xl mx-auto">
            {{-- Gallery Injection --}}
            <div class="p-6 rounded border border-red-200 bg-red-50">
                <div class="flex items-start gap-4">
                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded bg-red-100 text-red-600">
                        <x-heroicon-s-photo class="w-5 h-5" />
                    </div>
                    <div>
                        <h3 class="font-semibold text-neutral-900">Gallery Injection</h3>
                        <p class="mt-1 text-sm text-neutral-700">Users upload pre-edited photos from their gallery, bypassing live capture requirements entirely</p>
                        <p class="mt-2 text-xs font-medium text-red-700">Exploits: Document submission, selfie verification</p>
                    </div>
                </div>
            </div>

            {{-- Virtual Camera Attacks --}}
            <div class="p-6 rounded border border-red-200 bg-red-50">
                <div class="flex items-start gap-4">
                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded bg-red-100 text-red-600">
                        <x-heroicon-s-video-camera class="w-5 h-5" />
                    </div>
                    <div>
                        <h3 class="font-semibold text-neutral-900">Virtual Camera Attacks</h3>
                        <p class="mt-1 text-sm text-neutral-700">Software intercepts the camera feed, injecting pre-recorded or synthetic video streams</p>
                        <p class="mt-2 text-xs font-medium text-red-700">Exploits: Liveness detection, video KYC</p>
                    </div>
                </div>
            </div>

            {{-- Deepfake Injection --}}
            <div class="p-6 rounded border border-red-200 bg-red-50">
                <div class="flex items-start gap-4">
                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded bg-red-100 text-red-600">
                        <x-heroicon-s-cpu-chip class="w-5 h-5" />
                    </div>
                    <div>
                        <h3 class="font-semibold text-neutral-900">Deepfake Injection</h3>
                        <p class="mt-1 text-sm text-neutral-700">AI-generated faces and documents that pass traditional verification checks</p>
                        <p class="mt-2 text-xs font-medium text-red-700">Exploits: Identity verification, biometric matching</p>
                    </div>
                </div>
            </div>

            {{-- Document Forgery --}}
            <div class="p-6 rounded border border-red-200 bg-red-50">
                <div class="flex items-start gap-4">
                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded bg-red-100 text-red-600">
                        <x-heroicon-s-document-text class="w-5 h-5" />
                    </div>
                    <div>
                        <h3 class="font-semibold text-neutral-900">Document Forgery</h3>
                        <p class="mt-1 text-sm text-neutral-700">Manipulated ID documents, bank statements, and official certificates</p>
                        <p class="mt-2 text-xs font-medium text-red-700">Exploits: KYC onboarding, credit applications</p>
                    </div>
                </div>
            </div>
        </div>
    </x-section>

    {{-- Solution Section --}}
    <x-section>
        <div class="text-center mb-16">
            <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">The Solution</p>
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                Live Capture Enforcement
            </h2>
            <p class="text-neutral-700 text-lg max-w-2xl mx-auto">
                PixaProof prevents injection attacks at the source—before fraudulent images ever reach your system. Every photo is verified at the moment of capture.
            </p>
        </div>

        {{-- Feature Cards --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl mx-auto">
            {{-- Injection Attack Prevention --}}
            <div class="p-6 rounded border border-neutral-200 bg-white hover:border-primary-300 hover:shadow-md transition-all">
                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded bg-primary-50 text-primary-600">
                    <x-heroicon-s-shield-exclamation class="w-6 h-6" />
                </div>
                <h3 class="text-lg font-semibold text-neutral-900">Injection Attack Prevention</h3>
                <p class="mt-2 text-neutral-700 text-sm">Block gallery uploads, virtual cameras, and synthetic media at the SDK level</p>
            </div>

            {{-- 35+ Tamper Detection Algorithms --}}
            <div class="p-6 rounded border border-neutral-200 bg-white hover:border-primary-300 hover:shadow-md transition-all">
                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded bg-primary-50 text-primary-600">
                    <x-heroicon-s-beaker class="w-6 h-6" />
                </div>
                <h3 class="text-lg font-semibold text-neutral-900">35+ Tamper Detection Algorithms</h3>
                <p class="mt-2 text-neutral-700 text-sm">PIEA technology analyzes pixel-level integrity, metadata consistency, and AI manipulation markers</p>
            </div>

            {{-- Cryptographic Audit Trail --}}
            <div class="p-6 rounded border border-neutral-200 bg-white hover:border-primary-300 hover:shadow-md transition-all">
                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded bg-primary-50 text-primary-600">
                    <x-heroicon-s-finger-print class="w-6 h-6" />
                </div>
                <h3 class="text-lg font-semibold text-neutral-900">Cryptographic Audit Trail</h3>
                <p class="mt-2 text-neutral-700 text-sm">Every capture includes tamper-evident signatures for regulatory compliance and dispute resolution</p>
            </div>

            {{-- Mobile-First Design --}}
            <div class="p-6 rounded border border-neutral-200 bg-white hover:border-primary-300 hover:shadow-md transition-all">
                <div class="mb-4 flex h-12 w-12 items-center justify-center rounded bg-primary-50 text-primary-600">
                    <x-heroicon-s-device-phone-mobile class="w-6 h-6" />
                </div>
                <h3 class="text-lg font-semibold text-neutral-900">Mobile-First Design</h3>
                <p class="mt-2 text-neutral-700 text-sm">Optimized for smartphone cameras where most customer interactions happen</p>
            </div>
        </div>
    </x-section>

    {{-- Industry Solutions Section --}}
    <x-section id="solutions" bg="primary">
        <div class="text-center mb-16">
            <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">Industry Solutions</p>
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                Compliance-Critical Applications Across Industries
            </h2>
            <p class="text-neutral-700 text-lg max-w-2xl mx-auto">
                PixaProof is deployed across ASEAN's most regulated industries, protecting organizations from injection-based fraud.
            </p>
        </div>

        {{-- Industry Cards Grid --}}
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto">
            {{-- Banking & Finance --}}
            <a href="{{ route('solutions.banking') }}" class="group p-6 rounded border border-neutral-200 bg-white hover:border-primary-300 hover:shadow-md transition-all">
                <div class="flex items-center gap-4 mb-4">
                    <div class="flex h-12 w-12 items-center justify-center rounded bg-primary-50 text-primary-600 group-hover:bg-primary-100 transition-colors">
                        <x-heroicon-s-building-library class="w-6 h-6" />
                    </div>
                    <h3 class="text-lg font-semibold text-neutral-900 group-hover:text-primary-600 transition-colors">Banking & Finance</h3>
                </div>
                <p class="text-neutral-700 text-sm mb-4">Prevent account takeover and loan fraud with verified document capture for KYC onboarding.</p>
                <span class="text-primary-600 text-sm font-medium inline-flex items-center gap-1 group-hover:gap-2 transition-all">
                    Learn more
                    <x-heroicon-s-arrow-right class="w-4 h-4" />
                </span>
            </a>

            {{-- Insurance --}}
            <a href="{{ route('solutions.insurance') }}" class="group p-6 rounded border border-neutral-200 bg-white hover:border-primary-300 hover:shadow-md transition-all">
                <div class="flex items-center gap-4 mb-4">
                    <div class="flex h-12 w-12 items-center justify-center rounded bg-primary-50 text-primary-600 group-hover:bg-primary-100 transition-colors">
                        <x-heroicon-s-shield-check class="w-6 h-6" />
                    </div>
                    <h3 class="text-lg font-semibold text-neutral-900 group-hover:text-primary-600 transition-colors">Insurance</h3>
                </div>
                <p class="text-neutral-700 text-sm mb-4">Eliminate staged claims and document manipulation with live capture enforcement.</p>
                <span class="text-primary-600 text-sm font-medium inline-flex items-center gap-1 group-hover:gap-2 transition-all">
                    Learn more
                    <x-heroicon-s-arrow-right class="w-4 h-4" />
                </span>
            </a>

            {{-- Government --}}
            <a href="{{ route('solutions.government') }}" class="group p-6 rounded border border-neutral-200 bg-white hover:border-primary-300 hover:shadow-md transition-all">
                <div class="flex items-center gap-4 mb-4">
                    <div class="flex h-12 w-12 items-center justify-center rounded bg-primary-50 text-primary-600 group-hover:bg-primary-100 transition-colors">
                        <x-heroicon-s-building-office-2 class="w-6 h-6" />
                    </div>
                    <h3 class="text-lg font-semibold text-neutral-900 group-hover:text-primary-600 transition-colors">Government</h3>
                </div>
                <p class="text-neutral-700 text-sm mb-4">Secure citizen services and benefits distribution with tamper-proof identity verification.</p>
                <span class="text-primary-600 text-sm font-medium inline-flex items-center gap-1 group-hover:gap-2 transition-all">
                    Learn more
                    <x-heroicon-s-arrow-right class="w-4 h-4" />
                </span>
            </a>

            {{-- Healthcare --}}
            <a href="{{ route('solutions.healthcare') }}" class="group p-6 rounded border border-neutral-200 bg-white hover:border-primary-300 hover:shadow-md transition-all">
                <div class="flex items-center gap-4 mb-4">
                    <div class="flex h-12 w-12 items-center justify-center rounded bg-primary-50 text-primary-600 group-hover:bg-primary-100 transition-colors">
                        <x-heroicon-s-heart class="w-6 h-6" />
                    </div>
                    <h3 class="text-lg font-semibold text-neutral-900 group-hover:text-primary-600 transition-colors">Healthcare</h3>
                </div>
                <p class="text-neutral-700 text-sm mb-4">Protect patient identity and medical documentation with HIPAA-compliant verification.</p>
                <span class="text-primary-600 text-sm font-medium inline-flex items-center gap-1 group-hover:gap-2 transition-all">
                    Learn more
                    <x-heroicon-s-arrow-right class="w-4 h-4" />
                </span>
            </a>

            {{-- E-commerce --}}
            <a href="{{ route('solutions.ecommerce') }}" class="group p-6 rounded border border-neutral-200 bg-white hover:border-primary-300 hover:shadow-md transition-all">
                <div class="flex items-center gap-4 mb-4">
                    <div class="flex h-12 w-12 items-center justify-center rounded bg-primary-50 text-primary-600 group-hover:bg-primary-100 transition-colors">
                        <x-heroicon-s-shopping-cart class="w-6 h-6" />
                    </div>
                    <h3 class="text-lg font-semibold text-neutral-900 group-hover:text-primary-600 transition-colors">E-commerce</h3>
                </div>
                <p class="text-neutral-700 text-sm mb-4">Reduce chargebacks and seller fraud with verified product and delivery photos.</p>
                <span class="text-primary-600 text-sm font-medium inline-flex items-center gap-1 group-hover:gap-2 transition-all">
                    Learn more
                    <x-heroicon-s-arrow-right class="w-4 h-4" />
                </span>
            </a>

            {{-- Real Estate --}}
            <a href="{{ route('solutions.real-estate') }}" class="group p-6 rounded border border-neutral-200 bg-white hover:border-primary-300 hover:shadow-md transition-all">
                <div class="flex items-center gap-4 mb-4">
                    <div class="flex h-12 w-12 items-center justify-center rounded bg-primary-50 text-primary-600 group-hover:bg-primary-100 transition-colors">
                        <x-heroicon-s-home-modern class="w-6 h-6" />
                    </div>
                    <h3 class="text-lg font-semibold text-neutral-900 group-hover:text-primary-600 transition-colors">Real Estate</h3>
                </div>
                <p class="text-neutral-700 text-sm mb-4">Prevent title fraud and property misrepresentation with verified documentation.</p>
                <span class="text-primary-600 text-sm font-medium inline-flex items-center gap-1 group-hover:gap-2 transition-all">
                    Learn more
                    <x-heroicon-s-arrow-right class="w-4 h-4" />
                </span>
            </a>
        </div>
    </x-section>

    {{-- Developer Section --}}
    <x-section>
        <div class="max-w-5xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                {{-- Content --}}
                <div>
                    <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">For Developers</p>
                    <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                        Built for Your Development Team
                    </h2>
                    <p class="text-neutral-700 text-lg mb-8">
                        Integrate PixaProof into your existing workflows with our comprehensive SDK suite. RESTful API, WebSDK for browser-based capture, and native mobile SDKs for iOS and Android.
                    </p>

                    {{-- SDK Options --}}
                    <div class="space-y-4 mb-8">
                        <div class="flex items-center gap-3">
                            <div class="flex h-8 w-8 items-center justify-center rounded bg-primary-50 text-primary-600">
                                <x-heroicon-s-code-bracket class="w-4 h-4" />
                            </div>
                            <span class="text-neutral-700 font-medium">RESTful API</span>
                            <span class="text-neutral-500 text-sm">— Server-side integration</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="flex h-8 w-8 items-center justify-center rounded bg-primary-50 text-primary-600">
                                <x-heroicon-s-globe-alt class="w-4 h-4" />
                            </div>
                            <span class="text-neutral-700 font-medium">JavaScript WebSDK</span>
                            <span class="text-neutral-500 text-sm">— Browser capture</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="flex h-8 w-8 items-center justify-center rounded bg-primary-50 text-primary-600">
                                <x-heroicon-s-device-phone-mobile class="w-4 h-4" />
                            </div>
                            <span class="text-neutral-700 font-medium">iOS & Android SDKs</span>
                            <span class="text-neutral-500 text-sm">— Native mobile apps</span>
                        </div>
                    </div>

                    {{-- CTAs --}}
                    <div class="flex flex-wrap gap-4">
                        <x-button href="{{ route('product') }}">
                            Learn More
                        </x-button>
                        <x-button href="/contact" variant="secondary">
                            Request API Access
                        </x-button>
                    </div>
                </div>

                {{-- Code Preview --}}
                <div class="hidden lg:block">
                    <div class="rounded border border-neutral-200 bg-neutral-900 p-6 font-mono text-sm overflow-hidden">
                        <div class="flex items-center gap-2 mb-4">
                            <div class="w-3 h-3 rounded-full bg-red-500"></div>
                            <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                            <div class="w-3 h-3 rounded-full bg-green-500"></div>
                            <span class="ml-2 text-neutral-500 text-xs">pixaproof-integration.js</span>
                        </div>
                        <pre class="text-neutral-300 leading-relaxed"><code><span class="text-primary-400">import</span> { PixaProof } <span class="text-primary-400">from</span> <span class="text-green-400">'@pixaproof/sdk'</span>;

<span class="text-primary-400">const</span> pixaproof = <span class="text-primary-400">new</span> <span class="text-yellow-400">PixaProof</span>({
  apiKey: process.env.<span class="text-accent-400">PIXAPROOF_KEY</span>,
  mode: <span class="text-green-400">'production'</span>
});

<span class="text-neutral-500">// Capture with injection prevention</span>
<span class="text-primary-400">const</span> result = <span class="text-primary-400">await</span> pixaproof.<span class="text-yellow-400">capture</span>({
  type: <span class="text-green-400">'document'</span>,
  enforeLiveCapture: <span class="text-accent-400">true</span>
});</code></pre>
                    </div>
                </div>
            </div>
        </div>
    </x-section>

    {{-- Client Logos Section --}}
    <x-section bg="neutral">
        <div class="text-center mb-12">
            <p class="text-neutral-600 text-sm font-medium uppercase tracking-wider">
                Trusted by leading enterprises across ASEAN
            </p>
        </div>

        {{-- Logo Grid (Placeholders) --}}
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8 max-w-5xl mx-auto items-center justify-items-center">
            @for ($i = 0; $i < 6; $i++)
                <div class="h-12 w-32 rounded bg-neutral-200 flex items-center justify-center">
                    <span class="text-neutral-400 text-xs font-medium">Client Logo</span>
                </div>
            @endfor
        </div>
    </x-section>

    {{-- Final CTA Section --}}
    <x-section bg="dark">
        <div class="text-center max-w-3xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Ready to Stop Injection Attacks?
            </h2>
            <p class="text-xl text-neutral-300 mb-8">
                Join leading enterprises across ASEAN who trust PixaProof to protect their compliance-critical applications.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <x-button href="/contact" size="lg">
                    Request Demo
                </x-button>
                <x-button href="{{ route('product') }}" variant="outline" size="lg" class="border-white text-white hover:bg-white/10">
                    View Technology
                </x-button>
            </div>
        </div>
    </x-section>
@endsection
