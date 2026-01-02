@extends('layouts.app')

@section('title', 'Government & Public Sector - PixaProof')
@section('description', 'Secure citizen verification at scale. Prevent duplicate registrations and fake citizen photos with verified document capture for national ID systems, immigration, and civil registration.')

@section('content')
    {{-- Hero Section --}}
    <section class="relative isolate overflow-hidden bg-surface-950 px-4 pt-32 pb-20 lg:pt-40 lg:pb-28">
        {{-- Background Image --}}
        <div class="absolute inset-0 size-full">
            <img
                src="/images/heroes/hero-government.webp"
                alt=""
                class="size-full object-cover object-center"
            />
            <div class="absolute inset-0 bg-gradient-to-r from-surface-950 via-surface-950/90 to-surface-950/70"></div>
        </div>

        <div class="relative z-10 max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-brand-500/10 border border-brand-500/20 mb-6">
                <x-heroicon-s-building-office-2 class="w-4 h-4 text-brand-400" />
                <span class="text-sm font-medium text-brand-400 uppercase tracking-wider">Government & Public Sector</span>
            </div>

            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                Secure citizen verification at scale
            </h1>

            <p class="text-lg md:text-xl text-gray-300 mb-10 max-w-3xl mx-auto">
                Prevent duplicate registrations and fake citizen photos with verified document capture for national ID systems, immigration, and civil registration.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <x-button href="/contact" size="lg">
                    Request Government Demo
                </x-button>
                <x-button href="#use-cases" variant="outline" size="lg">
                    View Use Cases
                </x-button>
            </div>
        </div>
    </section>

    {{-- The Challenge Section --}}
    <x-section bg="surface">
        <div class="text-center mb-16">
            <p class="text-brand-400 font-semibold uppercase tracking-wider text-sm mb-4">The Challenge</p>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Citizen photo fraud threatens database integrity
            </h2>
            <p class="text-surface-300 text-lg max-w-2xl mx-auto">
                Government systems handling citizen photos face sophisticated submission fraud that compromises national registries.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-6 max-w-4xl mx-auto">
            <x-card.problem
                title="Photo Reuse & Modification"
                description="Citizens submit old photos or digitally altered images that don't reflect current appearance"
                impact="Database integrity compromised"
                icon="photo"
            />
            <x-card.problem
                title="Duplicate Registrations"
                description="Multiple identities created using variations of the same documents"
                impact="Welfare fraud and identity theft"
                icon="users"
            />
            <x-card.problem
                title="Document Forgery"
                description="Fake or modified identity documents submitted for registration"
                impact="Undermines trust in national ID"
                icon="document-text"
            />
            <x-card.problem
                title="Foreign Document Fraud"
                description="Fraudulent travel documents at border control and immigration"
                impact="National security risks"
                icon="globe-alt"
            />
        </div>
    </x-section>

    {{-- The Solution Section --}}
    <x-section bg="default" bgImage="hexagon-pattern" bgOverlay="darker">
        <div class="text-center mb-16">
            <p class="text-brand-400 font-semibold uppercase tracking-wider text-sm mb-4">The Solution</p>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Authenticated capture for every citizen submission
            </h2>
            <p class="text-surface-300 text-lg max-w-2xl mx-auto">
                PixaProof ensures every citizen photo and document is captured live and verified authentic before entering government databases.
            </p>
        </div>

        {{-- Flow --}}
        <div class="max-w-4xl mx-auto">
            <div class="grid md:grid-cols-5 gap-4">
                @php
                    $steps = [
                        ['icon' => 'device-phone-mobile', 'title' => 'Citizen Access', 'desc' => 'Government portal or mobile app'],
                        ['icon' => 'camera', 'title' => 'Live Capture', 'desc' => 'SDK blocks gallery uploads'],
                        ['icon' => 'identification', 'title' => 'Document Verify', 'desc' => 'ID, passport authenticity check'],
                        ['icon' => 'user-circle', 'title' => 'Photo Verify', 'desc' => 'Fresh, live citizen photo'],
                        ['icon' => 'server-stack', 'title' => 'Database', 'desc' => 'Only verified records stored'],
                    ];
                @endphp

                @foreach ($steps as $index => $step)
                    <div class="relative text-center">
                        {{-- Arrow --}}
                        @if ($index < count($steps) - 1)
                            <div class="hidden md:block absolute top-8 -right-2 z-10">
                                <x-heroicon-s-arrow-right class="w-4 h-4 text-brand-400" />
                            </div>
                        @endif

                        <div class="p-6 rounded-2xl bg-surface-900/80 border border-surface-700 hover:border-brand-500/50 transition-colors">
                            <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-brand-500/10 flex items-center justify-center">
                                <x-dynamic-component :component="'heroicon-s-' . $step['icon']" class="w-8 h-8 text-brand-400" />
                            </div>
                            <h3 class="font-semibold text-white mb-2">{{ $step['title'] }}</h3>
                            <p class="text-sm text-surface-400">{{ $step['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </x-section>

    {{-- Use Cases Section --}}
    <x-section id="use-cases" bg="surface">
        <div class="text-center mb-16">
            <p class="text-brand-400 font-semibold uppercase tracking-wider text-sm mb-4">Use Cases</p>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Government applications
            </h2>
        </div>

        <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            @php
                $useCases = [
                    [
                        'icon' => 'identification',
                        'title' => 'National ID Registration',
                        'features' => [
                            'Live citizen photo capture',
                            'Document authenticity verification',
                            'Duplicate prevention',
                            'Audit trail for compliance'
                        ]
                    ],
                    [
                        'icon' => 'globe-alt',
                        'title' => 'Border Control & Immigration',
                        'features' => [
                            'Travel document capture',
                            'Visa and passport verification',
                            'Entry/exit photo matching',
                            'Real-time authenticity check'
                        ]
                    ],
                    [
                        'icon' => 'banknotes',
                        'title' => 'Benefits Distribution',
                        'features' => [
                            'Beneficiary identity verification',
                            'Fraud prevention in welfare programs',
                            'Program integrity assurance',
                            'Accountability and audit'
                        ]
                    ],
                    [
                        'icon' => 'document-text',
                        'title' => 'Civil Registration',
                        'features' => [
                            'Birth, marriage, death certificates',
                            'Document photo capture',
                            'Chain of custody for legal records',
                            'Long-term archive integrity'
                        ]
                    ],
                ];
            @endphp

            @foreach ($useCases as $useCase)
                <div class="p-8 rounded-2xl bg-surface-800 border border-surface-700 hover:border-brand-500/50 transition-colors">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 rounded-xl bg-brand-500/10 flex items-center justify-center">
                            <x-dynamic-component :component="'heroicon-s-' . $useCase['icon']" class="w-6 h-6 text-brand-400" />
                        </div>
                        <h3 class="text-xl font-semibold text-white">{{ $useCase['title'] }}</h3>
                    </div>
                    <ul class="space-y-3">
                        @foreach ($useCase['features'] as $feature)
                            <li class="flex items-center gap-3">
                                <x-heroicon-s-check-circle class="w-5 h-5 text-brand-400 flex-shrink-0" />
                                <span class="text-surface-300">{{ $feature }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </x-section>

    {{-- Compliance & Security Section --}}
    <x-section bg="default" bgImage="grid-tech" bgOverlay="dark">
        <div class="text-center mb-16">
            <p class="text-brand-400 font-semibold uppercase tracking-wider text-sm mb-4">Security</p>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Government-grade security & compliance
            </h2>
        </div>

        <div class="grid md:grid-cols-3 lg:grid-cols-5 gap-6 max-w-5xl mx-auto">
            @php
                $compliance = [
                    ['icon' => 'shield-check', 'title' => 'ISO 27001:2022', 'desc' => 'Information security management'],
                    ['icon' => 'clipboard-document-check', 'title' => 'Audit Trails', 'desc' => 'Complete accountability'],
                    ['icon' => 'map-pin', 'title' => 'Data Residency', 'desc' => 'Data stays in jurisdiction'],
                    ['icon' => 'lock-closed', 'title' => 'Privacy', 'desc' => 'GDPR & local privacy laws'],
                    ['icon' => 'server', 'title' => 'On-Premises', 'desc' => 'Air-gapped deployment'],
                ];
            @endphp

            @foreach ($compliance as $item)
                <div class="text-center p-6 rounded-2xl bg-surface-900/80 border border-surface-700">
                    <div class="w-12 h-12 mx-auto mb-4 rounded-full bg-brand-500/10 flex items-center justify-center">
                        <x-dynamic-component :component="'heroicon-s-' . $item['icon']" class="w-6 h-6 text-brand-400" />
                    </div>
                    <h3 class="font-semibold text-white mb-1">{{ $item['title'] }}</h3>
                    <p class="text-sm text-surface-400">{{ $item['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </x-section>

    {{-- Benefits Section --}}
    <x-section bg="surface">
        <div class="text-center mb-16">
            <p class="text-brand-400 font-semibold uppercase tracking-wider text-sm mb-4">Benefits</p>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Transform citizen services
            </h2>
        </div>

        <div class="max-w-4xl mx-auto">
            <div class="grid md:grid-cols-2 gap-6">
                @php
                    $benefits = [
                        ['icon' => 'shield-exclamation', 'text' => 'Prevents duplicate or fraudulent registrations'],
                        ['icon' => 'clock', 'text' => 'Ensures photos are current and authentic'],
                        ['icon' => 'star', 'text' => 'Enhances credibility of e-government services'],
                        ['icon' => 'finger-print', 'text' => 'Supports national digital identity trust frameworks'],
                        ['icon' => 'document-check', 'text' => 'Creates immutable audit trail for compliance'],
                        ['icon' => 'users', 'text' => 'Improves citizen experience with faster processing'],
                    ];
                @endphp

                @foreach ($benefits as $benefit)
                    <div class="flex items-center gap-4 p-4 rounded-xl bg-surface-800 border border-surface-700">
                        <div class="flex-shrink-0 w-10 h-10 rounded-lg bg-brand-500/10 flex items-center justify-center">
                            <x-dynamic-component :component="'heroicon-s-' . $benefit['icon']" class="w-5 h-5 text-brand-400" />
                        </div>
                        <p class="text-surface-300">{{ $benefit['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </x-section>

    {{-- Final CTA Section --}}
    <x-section bg="brand">
        <div class="text-center max-w-3xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Ready to secure citizen services?
            </h2>
            <p class="text-xl text-white/80 mb-8">
                Join government agencies worldwide protecting citizen identity with PixaProof.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <x-button href="/contact" variant="white" size="lg">
                    Request Government Demo
                </x-button>
                <x-button href="/developers" variant="outline-white" size="lg">
                    View Developer Docs
                </x-button>
            </div>
        </div>
    </x-section>
@endsection
