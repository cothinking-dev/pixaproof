@extends('layouts.app')

@section('title', 'Banking & Financial Services - PixaProof')
@section('description', 'Stop identity fraud before it enters your system. Prevent gallery injections, fake IDs, and synthetic images in digital account opening, loan applications, and KYC verification.')

@section('content')
    {{-- Hero Section --}}
    <section class="relative isolate overflow-hidden bg-white px-4 pt-32 pb-20 lg:pt-40 lg:pb-28">
        {{-- Background Image --}}
        <div class="absolute inset-0 size-full">
            <img
                src="/images/heroes/hero-banking.webp"
                alt=""
                class="size-full object-cover object-center"
            />
            <div class="absolute inset-0 bg-gradient-to-r from-primary-900/95 via-primary-800/90 to-primary-900/85"></div>
        </div>

        <div class="relative z-10 max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary-500/20 border border-primary-400/30 mb-6">
                <x-heroicon-s-building-library class="w-4 h-4 text-primary-300" />
                <span class="text-sm font-medium text-primary-200 uppercase tracking-wider">Banking & Financial Services</span>
            </div>

            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                Stop identity fraud before it enters your system
            </h1>

            <p class="text-lg md:text-xl text-neutral-100 mb-8 max-w-3xl mx-auto">
                Prevent gallery injections, fake IDs, and synthetic images in digital account opening, loan applications, and KYC verification with capture-level security.
            </p>

            {{-- Hero Stat --}}
            <div class="inline-flex items-center gap-3 px-6 py-3 rounded-xl bg-white/80 border border-neutral-200">
                <span class="text-3xl font-bold text-neutral-900">85%</span>
                <span class="text-neutral-600 text-left text-sm">reduction in identity fraud<br>for banks using PixaProof</span>
            </div>

            <div class="flex flex-col sm:flex-row gap-4 justify-center mt-10">
                <x-button href="/contact" size="lg" variant="white">
                    Request Demo
                </x-button>
                <x-button href="#solution" variant="outline-white" size="lg">
                    See How It Works
                </x-button>
            </div>
        </div>
    </section>

    {{-- The Challenge Section --}}
    <x-section>
        <div class="text-center mb-16">
            <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">The Challenge</p>
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                Your digital channels are under attack
            </h2>
            <p class="text-neutral-600 text-lg max-w-2xl mx-auto">
                Fraudsters exploit mobile banking apps and digital onboarding flows with sophisticated techniques.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-6 max-w-5xl mx-auto">
            <x-card.problem
                title="Gallery Injection Attacks"
                description="15-20% of account applications use pre-edited or stolen IDs"
                impact="Millions in fraud losses annually"
                icon="photo"
            />
            <x-card.problem
                title="Synthetic Identity Fraud"
                description="AI-generated selfies and fake documents bypass traditional checks"
                impact="Fastest-growing fraud type (up 200% YoY)"
                icon="cpu-chip"
            />
            <x-card.problem
                title="Compliance Failures"
                description="Regulators require proof of live identity verification"
                impact="Regulatory penalties and audit failures"
                icon="shield-exclamation"
            />
            <x-card.problem
                title="Manual Review Costs"
                description="48-72 hour account opening times slow customer acquisition"
                impact="High operational costs erode margins"
                icon="clock"
            />
        </div>
    </x-section>

    {{-- The Solution Section --}}
    <x-section id="solution" bg="surface">
        <div class="text-center mb-16">
            <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">The Solution</p>
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                Live capture enforcement for every KYC photo
            </h2>
            <p class="text-neutral-600 text-lg max-w-2xl mx-auto">
                PixaProof ensures every identity document and selfie is captured live, blocking gallery uploads at the source.
            </p>
        </div>

        {{-- KYC Flow --}}
        <div class="max-w-5xl mx-auto">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $steps = [
                        ['num' => '1', 'title' => 'Customer Downloads App', 'desc' => 'PixaProof SDK integrated seamlessly into your banking app'],
                        ['num' => '2', 'title' => 'Account Opening Initiated', 'desc' => 'App requests ID photo and selfie for verification'],
                        ['num' => '3', 'title' => 'Live Capture Enforced', 'desc' => 'Gallery blocked, document detection guides framing'],
                        ['num' => '4', 'title' => 'Liveness Verification', 'desc' => '3D face mapping with challenge-response validation'],
                        ['num' => '5', 'title' => 'Instant Verification', 'desc' => '35+ tamper tests completed in under 500ms'],
                        ['num' => '6', 'title' => 'Account Opens', 'desc' => 'Live capture confirmed, proceed with confidence'],
                    ];
                @endphp

                @foreach ($steps as $step)
                    <div class="relative p-6 rounded-2xl bg-white border border-neutral-200 hover:border-primary-300 hover:shadow-md transition-all">
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex items-center justify-center w-10 h-10 rounded-full bg-primary-500 text-neutral-900 font-bold text-lg">
                                {{ $step['num'] }}
                            </span>
                            <h3 class="text-lg font-semibold text-neutral-900">{{ $step['title'] }}</h3>
                        </div>
                        <p class="text-neutral-600 text-sm">{{ $step['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </x-section>

    {{-- Capabilities Section --}}
    <x-section>
        <div class="text-center mb-16">
            <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">Capabilities</p>
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                Complete identity verification suite
            </h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto">
            @php
                $capabilities = [
                    ['icon' => 'identification', 'title' => 'Document Capture', 'desc' => 'National IDs, passports, driver\'s licenses with front/back capture and OCR extraction'],
                    ['icon' => 'face-smile', 'title' => 'Selfie & Liveness', 'desc' => '3D face mapping, anti-spoofing detection, and face-to-document matching'],
                    ['icon' => 'home', 'title' => 'Proof of Address', 'desc' => 'Utility bills and bank statements with recency verification'],
                    ['icon' => 'pencil', 'title' => 'Signature Verification', 'desc' => 'Live signature capture with forgery detection algorithms'],
                    ['icon' => 'document-check', 'title' => 'Compliance Documentation', 'desc' => 'Complete audit trail with GDPR-compliant data handling'],
                    ['icon' => 'shield-check', 'title' => 'Fraud Prevention', 'desc' => '35+ tamper detection tests with real-time results'],
                ];
            @endphp

            @foreach ($capabilities as $cap)
                <x-card.feature
                    :icon="$cap['icon']"
                    :title="$cap['title']"
                    :description="$cap['desc']"
                />
            @endforeach
        </div>
    </x-section>

    {{-- Regulatory Compliance Section --}}
    <x-section bg="surface">
        <div class="text-center mb-16">
            <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">Compliance</p>
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                Built for regulatory requirements
            </h2>
            <p class="text-neutral-600 text-lg max-w-2xl mx-auto">
                PixaProof helps you meet global compliance standards with comprehensive documentation and controls.
            </p>
        </div>

        <div class="max-w-4xl mx-auto overflow-hidden rounded-2xl border border-neutral-200 bg-white">
            <table class="w-full">
                <thead class="bg-white/50">
                    <tr>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-neutral-900">Framework</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-neutral-900">PixaProof Features</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-neutral-200">
                    @php
                        $compliance = [
                            ['KYC/AML', 'Live verification, document authenticity, complete audit trail'],
                            ['GDPR (EU)', 'EU data residency, right to erasure, data minimization'],
                            ['PSD2', 'Strong customer authentication, secure communication channels'],
                            ['MAS Guidelines', 'Technology risk management, fraud prevention controls'],
                            ['SOC 2 Type II', 'Security controls, availability, processing integrity'],
                            ['ISO 27001:2022', 'Information security management, continuous risk assessment'],
                        ];
                    @endphp
                    @foreach ($compliance as $row)
                        <tr class="hover:bg-white transition-colors">
                            <td class="px-6 py-4 text-primary-600 font-medium">{{ $row[0] }}</td>
                            <td class="px-6 py-4 text-neutral-600">{{ $row[1] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-section>

    {{-- Customer Success Section --}}
    <x-section>
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-16">
                <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">Customer Success</p>
                <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                    Proven results in production
                </h2>
            </div>

            <div class="grid lg:grid-cols-2 gap-8 items-center">
                {{-- Stats --}}
                <div class="space-y-6">
                    <h3 class="text-2xl font-bold text-neutral-900">Southeast Asian Bank</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="p-6 rounded-xl bg-white border border-neutral-200 shadow-lg shadow-black/20">
                            <div class="text-3xl font-bold text-primary-600 mb-1">85%</div>
                            <div class="text-sm text-neutral-600">Fraud reduction</div>
                            <div class="text-xs text-neutral-500 mt-1">15% → 2.2% fraud rate</div>
                        </div>
                        <div class="p-6 rounded-xl bg-white border border-neutral-200 shadow-lg shadow-black/20">
                            <div class="text-3xl font-bold text-primary-600 mb-1">$2.4M</div>
                            <div class="text-sm text-neutral-600">Annual savings</div>
                            <div class="text-xs text-neutral-500 mt-1">Fraud losses prevented</div>
                        </div>
                        <div class="p-6 rounded-xl bg-white border border-neutral-200 shadow-lg shadow-black/20">
                            <div class="text-3xl font-bold text-primary-600 mb-1">65%</div>
                            <div class="text-sm text-neutral-600">Faster onboarding</div>
                            <div class="text-xs text-neutral-500 mt-1">48 hrs → 17 hrs</div>
                        </div>
                        <div class="p-6 rounded-xl bg-white border border-neutral-200 shadow-lg shadow-black/20">
                            <div class="text-3xl font-bold text-primary-600 mb-1">40%</div>
                            <div class="text-sm text-neutral-600">Cost reduction</div>
                            <div class="text-xs text-neutral-500 mt-1">Manual review savings</div>
                        </div>
                    </div>
                </div>

                {{-- Quote --}}
                <div class="p-8 rounded-2xl bg-white border border-neutral-200">
                    <x-heroicon-s-chat-bubble-bottom-center-text class="w-10 h-10 text-primary-600 mb-6" />
                    <blockquote class="text-xl text-neutral-900 leading-relaxed mb-6">
                        "PixaProof transformed our digital onboarding. Gallery uploads are completely blocked, so we know every ID was captured live."
                    </blockquote>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-surface-200 flex items-center justify-center">
                            <x-heroicon-s-user class="w-6 h-6 text-neutral-500" />
                        </div>
                        <div>
                            <div class="font-medium text-neutral-900">Head of Digital Banking</div>
                            <div class="text-sm text-neutral-500">Southeast Asian Bank</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-section>

    {{-- Final CTA Section --}}
    <x-section bg="brand">
        <div class="text-center max-w-3xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                Ready to secure your digital banking?
            </h2>
            <p class="text-xl text-neutral-900/80 mb-8">
                Join leading banks protecting millions of customers with PixaProof.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <x-button href="/contact" variant="white" size="lg">
                    Request Demo
                </x-button>
                <x-button href="/developers" variant="outline-white" size="lg">
                    View Developer Docs
                </x-button>
            </div>
        </div>
    </x-section>
@endsection
