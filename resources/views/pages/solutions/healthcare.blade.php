@extends('layouts.app')

@section('title', 'Healthcare & Telemedicine - PixaProof')
@section('description', 'HIPAA-compliant patient verification. Secure patient identity in remote consultations with verified photo capture for telemedicine, clinical trials, and medical records.')

@section('content')
    {{-- Hero Section --}}
    <section class="relative isolate overflow-hidden bg-white px-4 pt-32 pb-20 lg:pt-40 lg:pb-28">
        {{-- Background Image --}}
        <div class="absolute inset-0 size-full">
            <img
                src="/images/heroes/hero-healthcare.webp"
                alt=""
                class="size-full object-cover object-center"
            />
            <div class="absolute inset-0 bg-gradient-to-r from-primary-900/95 via-primary-800/90 to-primary-900/85"></div>
        </div>

        <div class="relative z-10 max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary-500/20 border border-primary-400/30 mb-6">
                <x-heroicon-s-heart class="w-4 h-4 text-primary-300" />
                <span class="text-sm font-medium text-primary-200 uppercase tracking-wider">Healthcare & Telemedicine</span>
            </div>

            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                HIPAA-compliant patient verification
            </h1>

            <p class="text-lg md:text-xl text-neutral-100 mb-10 max-w-3xl mx-auto">
                Secure patient identity in remote consultations with verified photo capture for telemedicine, clinical trials, and medical records.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <x-button href="/contact" size="lg" variant="white">
                    Request Healthcare Demo
                </x-button>
                <x-button href="#use-cases" variant="outline-white" size="lg">
                    View Use Cases
                </x-button>
            </div>
        </div>
    </section>

    {{-- The Challenge Section --}}
    <x-section bg="surface">
        <div class="text-center mb-16">
            <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">The Challenge</p>
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                Healthcare faces unique identity challenges
            </h2>
            <p class="text-neutral-600 text-lg max-w-2xl mx-auto">
                Remote care and digital health create new verification requirements that traditional methods can't address.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto">
            <x-card.problem
                title="Remote Identity Verification"
                description="Verifying patient identity in telemedicine consultations without in-person checks"
                impact="Fraud and misidentification risks"
                icon="video-camera"
            />
            <x-card.problem
                title="Medical Image Authenticity"
                description="Ensuring diagnostic photos and condition images are authentic"
                impact="Treatment decisions at risk"
                icon="photo"
            />
            <x-card.problem
                title="Clinical Trial Integrity"
                description="Maintaining data integrity for participant documentation"
                impact="Regulatory submission failures"
                icon="clipboard-document-list"
            />
            <x-card.problem
                title="HIPAA Compliance"
                description="Handling patient photos while meeting strict privacy requirements"
                impact="Regulatory penalties"
                icon="shield-exclamation"
            />
            <x-card.problem
                title="Medical Records Fraud"
                description="Preventing falsified documentation in patient records"
                impact="Patient safety concerns"
                icon="document-text"
            />
            <x-card.problem
                title="Audit Requirements"
                description="Providing complete documentation trails for compliance"
                impact="Audit failures"
                icon="magnifying-glass"
            />
        </div>
    </x-section>

    {{-- The Solution Section --}}
    <x-section bg="default" bgImage="hexagon-pattern" bgOverlay="darker">
        <div class="text-center mb-16">
            <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">The Solution</p>
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                Verified patient photos for compliant healthcare
            </h2>
            <p class="text-neutral-600 text-lg max-w-2xl mx-auto">
                PixaProof ensures every patient photo is captured live and handled with HIPAA-compliant security.
            </p>
        </div>

        {{-- Flow --}}
        <div class="max-w-4xl mx-auto">
            <div class="grid md:grid-cols-5 gap-6">
                @php
                    $steps = [
                        ['icon' => 'user-plus', 'title' => 'Register', 'desc' => 'Patient joins telemedicine'],
                        ['icon' => 'identification', 'title' => 'Verify ID', 'desc' => 'Live ID and selfie'],
                        ['icon' => 'camera', 'title' => 'Document', 'desc' => 'Condition photos'],
                        ['icon' => 'shield-check', 'title' => 'Comply', 'desc' => 'HIPAA handling'],
                        ['icon' => 'heart', 'title' => 'Care', 'desc' => 'Confident delivery'],
                    ];
                @endphp

                @foreach ($steps as $index => $step)
                    <div class="text-center">
                        <div class="relative">
                            <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-primary-500 flex items-center justify-center">
                                <x-dynamic-component :component="'heroicon-s-' . $step['icon']" class="w-8 h-8 text-neutral-900" />
                            </div>
                            @if ($index < count($steps) - 1)
                                <div class="hidden md:block absolute top-8 left-[60%] w-full h-px bg-gradient-to-r from-primary-500/50 to-transparent"></div>
                            @endif
                        </div>
                        <h3 class="font-semibold text-neutral-900 mb-1">{{ $step['title'] }}</h3>
                        <p class="text-sm text-neutral-500">{{ $step['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </x-section>

    {{-- Use Cases Section --}}
    <x-section id="use-cases" bg="surface">
        <div class="text-center mb-16">
            <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">Use Cases</p>
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                Healthcare applications
            </h2>
        </div>

        <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            @php
                $useCases = [
                    [
                        'icon' => 'video-camera',
                        'title' => 'Telemedicine Verification',
                        'features' => [
                            'Remote patient identity confirmation',
                            'Live selfie for each session',
                            'ID document verification',
                            'Session-specific authentication'
                        ]
                    ],
                    [
                        'icon' => 'beaker',
                        'title' => 'Clinical Trial Documentation',
                        'features' => [
                            'Participant photo capture',
                            'Condition documentation',
                            'Treatment progress tracking',
                            'Data integrity for FDA submission'
                        ]
                    ],
                    [
                        'icon' => 'folder-open',
                        'title' => 'Medical Records Management',
                        'features' => [
                            'Document authenticity in EMR systems',
                            'Medical image verification',
                            'Prescription documentation',
                            'Long-term record integrity'
                        ]
                    ],
                    [
                        'icon' => 'wrench-screwdriver',
                        'title' => 'Medical Device Documentation',
                        'features' => [
                            'Equipment condition photos',
                            'Serial number capture',
                            'Maintenance records',
                            'Compliance documentation'
                        ]
                    ],
                ];
            @endphp

            @foreach ($useCases as $useCase)
                <div class="p-8 rounded-2xl bg-white border border-neutral-200 hover:border-primary-500/50 transition-colors">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 rounded-xl bg-primary-500/10 flex items-center justify-center">
                            <x-dynamic-component :component="'heroicon-s-' . $useCase['icon']" class="w-6 h-6 text-primary-600" />
                        </div>
                        <h3 class="text-xl font-semibold text-neutral-900">{{ $useCase['title'] }}</h3>
                    </div>
                    <ul class="space-y-3">
                        @foreach ($useCase['features'] as $feature)
                            <li class="flex items-center gap-3">
                                <x-heroicon-s-check-circle class="w-5 h-5 text-primary-600 flex-shrink-0" />
                                <span class="text-neutral-600">{{ $feature }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </x-section>

    {{-- Compliance Section --}}
    <x-section bg="default" bgImage="grid-tech" bgOverlay="dark">
        <div class="text-center mb-16">
            <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">Compliance</p>
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                Built for healthcare regulations
            </h2>
            <p class="text-neutral-600 text-lg max-w-2xl mx-auto">
                PixaProof meets the strict requirements of healthcare privacy and data integrity frameworks.
            </p>
        </div>

        <div class="max-w-4xl mx-auto overflow-hidden rounded-2xl border border-neutral-200">
            <table class="w-full">
                <thead class="bg-white">
                    <tr>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-neutral-900">Framework</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-neutral-900">PixaProof Features</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-neutral-200 bg-neutral-50/50">
                    @php
                        $compliance = [
                            ['HIPAA', 'PHI protection, access controls, complete audit trails'],
                            ['GDPR', 'EU patient data residency, consent management, right to erasure'],
                            ['FDA (Clinical Trials)', 'Data integrity, 21 CFR Part 11 alignment, electronic signatures'],
                            ['SOC 2 Type II', 'Security controls, availability, processing integrity'],
                        ];
                    @endphp
                    @foreach ($compliance as $row)
                        <tr class="hover:bg-white/50 transition-colors">
                            <td class="px-6 py-4 text-primary-600 font-medium whitespace-nowrap">{{ $row[0] }}</td>
                            <td class="px-6 py-4 text-neutral-600">{{ $row[1] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-section>

    {{-- Benefits Section --}}
    <x-section bg="surface">
        <div class="text-center mb-16">
            <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">Benefits</p>
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                Healthcare-grade photo verification
            </h2>
        </div>

        <div class="max-w-4xl mx-auto">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $benefits = [
                        ['icon' => 'shield-check', 'title' => 'HIPAA-Compliant', 'desc' => 'PHI handling that meets strict privacy requirements'],
                        ['icon' => 'clipboard-document-check', 'title' => 'Medical-Grade Audits', 'desc' => 'Complete documentation trails for compliance'],
                        ['icon' => 'no-symbol', 'title' => 'Injection Prevention', 'desc' => 'Block gallery uploads for patient photos'],
                        ['icon' => 'puzzle-piece', 'title' => 'EMR Integration', 'desc' => 'Connects with major electronic medical records'],
                        ['icon' => 'academic-cap', 'title' => 'Research Validity', 'desc' => 'Data integrity for clinical trials'],
                        ['icon' => 'document-check', 'title' => 'Regulatory Ready', 'desc' => 'Complete compliance documentation'],
                    ];
                @endphp

                @foreach ($benefits as $benefit)
                    <div class="p-6 rounded-2xl bg-white border border-neutral-200 text-center">
                        <div class="w-12 h-12 mx-auto mb-4 rounded-full bg-primary-500/10 flex items-center justify-center">
                            <x-dynamic-component :component="'heroicon-s-' . $benefit['icon']" class="w-6 h-6 text-primary-600" />
                        </div>
                        <h3 class="font-semibold text-neutral-900 mb-2">{{ $benefit['title'] }}</h3>
                        <p class="text-sm text-neutral-500">{{ $benefit['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </x-section>

    {{-- Final CTA Section --}}
    <x-section bg="brand">
        <div class="text-center max-w-3xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                Ready for HIPAA-compliant verification?
            </h2>
            <p class="text-xl text-neutral-900/80 mb-8">
                Join healthcare organizations protecting patient identity with PixaProof.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <x-button href="/contact" variant="white" size="lg">
                    Request Healthcare Demo
                </x-button>
                <x-button href="/developers" variant="outline-white" size="lg">
                    View Developer Docs
                </x-button>
            </div>
        </div>
    </x-section>
@endsection
