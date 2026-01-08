@extends('layouts.app')

@section('title', 'About - Built by ASEAN eKYC Experts')
@section('description', 'PixaProof is a product of MyNasional eKYC Sdn. Bhd., with 14+ years of identity verification expertise across Southeast Asia\'s most regulated industries.')

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
                <x-heroicon-s-building-office-2 class="w-4 h-4 text-primary-600" />
                <span class="text-sm font-medium text-primary-700">MyNasional eKYC Sdn. Bhd.</span>
            </div>

            {{-- Headline --}}
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-neutral-900 mb-6 leading-tight">
                Built by ASEAN eKYC Experts
            </h1>

            {{-- Subheadline --}}
            <p class="text-lg md:text-xl text-neutral-700 mb-10 max-w-3xl mx-auto">
                PixaProof is a product of MyNasional eKYC Sdn. Bhd., with 14+ years of identity verification expertise across Southeast Asia's most regulated industries.
            </p>

            {{-- CTAs --}}
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <x-button href="/contact" size="lg">
                    Request Demo
                </x-button>
                <x-button href="#solutions" variant="secondary" size="lg">
                    View Solutions
                </x-button>
            </div>
        </div>
    </section>

    {{-- Our Story Section --}}
    <x-section bg="neutral">
        <div class="grid items-center gap-12 lg:grid-cols-2">
            <div>
                <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">Our Story</p>
                <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                    Why We Built PixaProof
                </h2>
                <p class="text-neutral-700 text-lg mb-6">
                    After building EMAS eKYC—the identity verification platform trusted by banks, insurers, and government agencies across ASEAN—we discovered a critical vulnerability that no one was addressing.
                </p>
                <p class="text-neutral-700 text-lg mb-6">
                    <span class="font-semibold text-neutral-900">The gap:</span> Even the most sophisticated identity verification systems were being bypassed through injection attacks. Fraudsters weren't beating our algorithms—they were bypassing the camera entirely.
                </p>
                <p class="text-neutral-700 text-lg">
                    PixaProof closes that gap. We verify photo authenticity at the moment of capture—before manipulated images ever reach your verification systems.
                </p>
            </div>

            {{-- Visual: Attack Vector Diagram --}}
            <div class="flex justify-center">
                <div class="w-full max-w-md">
                    <div class="rounded border border-neutral-200 bg-white p-8">
                        <p class="text-sm font-medium text-neutral-500 uppercase tracking-wider mb-6 text-center">The Injection Attack Problem</p>
                        <div class="flex flex-col items-center gap-4">
                            {{-- Attack attempts --}}
                            <div class="flex w-full items-center justify-between rounded bg-red-50 border border-red-200 p-4">
                                <span class="font-medium text-neutral-900">Gallery Injection</span>
                                <span class="rounded bg-red-100 px-2 py-1 text-xs font-medium text-red-700">Bypasses Camera</span>
                            </div>
                            <div class="flex w-full items-center justify-between rounded bg-red-50 border border-red-200 p-4">
                                <span class="font-medium text-neutral-900">Virtual Cameras</span>
                                <span class="rounded bg-red-100 px-2 py-1 text-xs font-medium text-red-700">Injects Video</span>
                            </div>
                            <div class="flex w-full items-center justify-between rounded bg-red-50 border border-red-200 p-4">
                                <span class="font-medium text-neutral-900">Deepfake Synthesis</span>
                                <span class="rounded bg-red-100 px-2 py-1 text-xs font-medium text-red-700">AI Generated</span>
                            </div>
                            {{-- Arrow --}}
                            <svg class="h-6 w-6 text-primary-600" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3" />
                            </svg>
                            {{-- PixaProof solution --}}
                            <div class="flex w-full items-center justify-between rounded bg-primary-50 border border-primary-200 p-4">
                                <span class="font-medium text-neutral-900">PixaProof SDK</span>
                                <span class="rounded bg-primary-100 px-2 py-1 text-xs font-medium text-primary-700">Blocks All</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-section>

    {{-- ASEAN Expertise Section --}}
    <x-section>
        <div class="text-center mb-16">
            <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">ASEAN Expertise</p>
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                Trusted Across Southeast Asia's Most Regulated Industries
            </h2>
            <p class="text-neutral-700 text-lg max-w-2xl mx-auto">
                Our team has spent over a decade building identity verification solutions that meet the stringent requirements of ASEAN's regulatory landscape.
            </p>
        </div>

        {{-- Stats Grid --}}
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 max-w-5xl mx-auto mb-16">
            <div class="text-center p-6 rounded border border-neutral-200 bg-white">
                <p class="text-5xl font-bold text-primary-600">14+</p>
                <p class="mt-2 text-neutral-700 font-medium">Years of Expertise</p>
                <p class="mt-1 text-sm text-neutral-500">Identity verification specialists</p>
            </div>
            <div class="text-center p-6 rounded border border-neutral-200 bg-white">
                <p class="text-5xl font-bold text-primary-600">500+</p>
                <p class="mt-2 text-neutral-700 font-medium">Enterprise Clients</p>
                <p class="mt-1 text-sm text-neutral-500">Banks, insurers, government</p>
            </div>
            <div class="text-center p-6 rounded border border-neutral-200 bg-white">
                <p class="text-5xl font-bold text-primary-600">10+</p>
                <p class="mt-2 text-neutral-700 font-medium">ASEAN Countries</p>
                <p class="mt-1 text-sm text-neutral-500">Regional regulatory expertise</p>
            </div>
            <div class="text-center p-6 rounded border border-neutral-200 bg-white">
                <p class="text-5xl font-bold text-primary-600">3</p>
                <p class="mt-2 text-neutral-700 font-medium">Granted Patents</p>
                <p class="mt-1 text-sm text-neutral-500">Photo authentication technology</p>
            </div>
        </div>

        {{-- Regulatory Experience --}}
        <div class="max-w-4xl mx-auto">
            <div class="rounded border border-primary-200 bg-primary-50 p-8">
                <h3 class="text-lg font-semibold text-neutral-900 mb-4 text-center">Deep Regulatory Experience</h3>
                <div class="grid md:grid-cols-3 gap-6 text-center">
                    <div>
                        <x-heroicon-s-building-library class="w-8 h-8 text-primary-600 mx-auto mb-2" />
                        <p class="font-medium text-neutral-900">Bank Negara Malaysia</p>
                        <p class="text-sm text-neutral-600">eKYC Guidelines</p>
                    </div>
                    <div>
                        <x-heroicon-s-shield-check class="w-8 h-8 text-primary-600 mx-auto mb-2" />
                        <p class="font-medium text-neutral-900">MAS Singapore</p>
                        <p class="text-sm text-neutral-600">Digital ID Frameworks</p>
                    </div>
                    <div>
                        <x-heroicon-s-document-check class="w-8 h-8 text-primary-600 mx-auto mb-2" />
                        <p class="font-medium text-neutral-900">OJK Indonesia</p>
                        <p class="text-sm text-neutral-600">Digital Banking Rules</p>
                    </div>
                </div>
            </div>
        </div>
    </x-section>

    {{-- Our Approach Section --}}
    <x-section id="solutions" bg="primary">
        <div class="text-center mb-16">
            <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">Our Approach</p>
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                Enterprise-Grade Photo Verification
            </h2>
            <p class="text-neutral-700 text-lg max-w-2xl mx-auto">
                We designed PixaProof from the ground up for compliance-critical applications, with security, developer experience, and regulatory requirements as core principles.
            </p>
        </div>

        {{-- Approach Cards --}}
        <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            {{-- Enterprise-Grade Security --}}
            <div class="rounded border border-neutral-200 bg-white p-8">
                <div class="flex h-12 w-12 items-center justify-center rounded bg-primary-50 text-primary-600 mb-6">
                    <x-heroicon-s-shield-check class="w-6 h-6" />
                </div>
                <h3 class="text-xl font-semibold text-neutral-900 mb-4">Enterprise-Grade Security</h3>
                <ul class="space-y-3 text-neutral-700">
                    <li class="flex items-start gap-2">
                        <x-heroicon-s-check class="w-5 h-5 text-primary-600 shrink-0 mt-0.5" />
                        <span>SDK-level injection prevention</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <x-heroicon-s-check class="w-5 h-5 text-primary-600 shrink-0 mt-0.5" />
                        <span>Cryptographic tamper-evidence</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <x-heroicon-s-check class="w-5 h-5 text-primary-600 shrink-0 mt-0.5" />
                        <span>35+ detection algorithms (PIEA)</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <x-heroicon-s-check class="w-5 h-5 text-primary-600 shrink-0 mt-0.5" />
                        <span>Complete audit trail</span>
                    </li>
                </ul>
            </div>

            {{-- Developer-Friendly --}}
            <div class="rounded border border-neutral-200 bg-white p-8">
                <div class="flex h-12 w-12 items-center justify-center rounded bg-primary-50 text-primary-600 mb-6">
                    <x-heroicon-s-code-bracket class="w-6 h-6" />
                </div>
                <h3 class="text-xl font-semibold text-neutral-900 mb-4">Developer-Friendly Integration</h3>
                <ul class="space-y-3 text-neutral-700">
                    <li class="flex items-start gap-2">
                        <x-heroicon-s-check class="w-5 h-5 text-primary-600 shrink-0 mt-0.5" />
                        <span>RESTful API architecture</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <x-heroicon-s-check class="w-5 h-5 text-primary-600 shrink-0 mt-0.5" />
                        <span>Native iOS & Android SDKs</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <x-heroicon-s-check class="w-5 h-5 text-primary-600 shrink-0 mt-0.5" />
                        <span>JavaScript WebSDK</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <x-heroicon-s-check class="w-5 h-5 text-primary-600 shrink-0 mt-0.5" />
                        <span>2-4 hour implementation</span>
                    </li>
                </ul>
            </div>

            {{-- Compliance-Ready --}}
            <div class="rounded border border-neutral-200 bg-white p-8">
                <div class="flex h-12 w-12 items-center justify-center rounded bg-primary-50 text-primary-600 mb-6">
                    <x-heroicon-s-document-check class="w-6 h-6" />
                </div>
                <h3 class="text-xl font-semibold text-neutral-900 mb-4">Compliance-Ready</h3>
                <ul class="space-y-3 text-neutral-700">
                    <li class="flex items-start gap-2">
                        <x-heroicon-s-check class="w-5 h-5 text-primary-600 shrink-0 mt-0.5" />
                        <span>Built for regulated industries</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <x-heroicon-s-check class="w-5 h-5 text-primary-600 shrink-0 mt-0.5" />
                        <span>Evidence-ready audit logs</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <x-heroicon-s-check class="w-5 h-5 text-primary-600 shrink-0 mt-0.5" />
                        <span>Regional data sovereignty</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <x-heroicon-s-check class="w-5 h-5 text-primary-600 shrink-0 mt-0.5" />
                        <span>Industry-specific packages</span>
                    </li>
                </ul>
            </div>
        </div>
    </x-section>

    {{-- Certifications Section --}}
    <x-section>
        <div class="text-center mb-12">
            <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">Certifications & Compliance</p>
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                Enterprise Security Standards
            </h2>
            <p class="text-neutral-700 text-lg max-w-2xl mx-auto">
                PixaProof meets the security and compliance requirements of the world's most demanding enterprises.
            </p>
        </div>

        {{-- Certification Cards --}}
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 max-w-5xl mx-auto">
            {{-- ISO 27001 --}}
            <div class="rounded border border-neutral-200 bg-white p-6 text-center">
                <div class="flex h-14 w-14 items-center justify-center rounded bg-green-50 text-green-600 mx-auto mb-4">
                    <x-heroicon-s-shield-check class="w-7 h-7" />
                </div>
                <h3 class="font-semibold text-neutral-900">ISO 27001:2022</h3>
                <p class="mt-2 text-sm text-neutral-600">Information Security Management</p>
                <span class="inline-block mt-3 px-3 py-1 rounded bg-green-50 text-green-700 text-xs font-medium">Certified</span>
            </div>

            {{-- ISO 27002 --}}
            <div class="rounded border border-neutral-200 bg-white p-6 text-center">
                <div class="flex h-14 w-14 items-center justify-center rounded bg-green-50 text-green-600 mx-auto mb-4">
                    <x-heroicon-s-shield-check class="w-7 h-7" />
                </div>
                <h3 class="font-semibold text-neutral-900">ISO 27002:2022</h3>
                <p class="mt-2 text-sm text-neutral-600">Security Controls Framework</p>
                <span class="inline-block mt-3 px-3 py-1 rounded bg-green-50 text-green-700 text-xs font-medium">Certified</span>
            </div>

            {{-- SOC 2 Type II --}}
            <div class="rounded border border-neutral-200 bg-white p-6 text-center">
                <div class="flex h-14 w-14 items-center justify-center rounded bg-primary-50 text-primary-600 mx-auto mb-4">
                    <x-heroicon-s-clock class="w-7 h-7" />
                </div>
                <h3 class="font-semibold text-neutral-900">SOC 2 Type II</h3>
                <p class="mt-2 text-sm text-neutral-600">Trust Services Criteria</p>
                <span class="inline-block mt-3 px-3 py-1 rounded bg-primary-50 text-primary-700 text-xs font-medium">In Progress</span>
            </div>

            {{-- GDPR --}}
            <div class="rounded border border-neutral-200 bg-white p-6 text-center">
                <div class="flex h-14 w-14 items-center justify-center rounded bg-green-50 text-green-600 mx-auto mb-4">
                    <x-heroicon-s-globe-alt class="w-7 h-7" />
                </div>
                <h3 class="font-semibold text-neutral-900">GDPR Compliant</h3>
                <p class="mt-2 text-sm text-neutral-600">Data Protection Standards</p>
                <span class="inline-block mt-3 px-3 py-1 rounded bg-green-50 text-green-700 text-xs font-medium">Compliant</span>
            </div>
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
                <x-button href="/contact" variant="outline" size="lg" class="border-white text-white hover:bg-white/10">
                    Contact Sales
                </x-button>
            </div>
        </div>
    </x-section>
@endsection
