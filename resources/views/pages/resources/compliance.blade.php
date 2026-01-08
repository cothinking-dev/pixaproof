@extends('layouts.app')

@section('title', 'Compliance Guide - PixaProof')
@section('description', 'How PixaProof helps you meet regulatory mandates for identity verification. Learn about KYC/AML, GDPR, HIPAA, and industry-specific compliance requirements.')

@section('content')
    {{-- Hero Section --}}
    <section class="relative overflow-hidden bg-gradient-to-b from-primary-50 to-white px-4 pt-24 pb-20 lg:pt-32 lg:pb-28">
        {{-- Background Pattern --}}
        <div class="absolute inset-0 opacity-[0.03]">
            <svg class="h-full w-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <defs>
                    <pattern id="compliance-grid" width="10" height="10" patternUnits="userSpaceOnUse">
                        <path d="M 10 0 L 0 0 0 10" fill="none" stroke="currentColor" stroke-width="0.5" class="text-neutral-900"/>
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#compliance-grid)"/>
            </svg>
        </div>

        <div class="relative z-10 mx-auto max-w-4xl">
            {{-- Breadcrumb --}}
            <x-breadcrumb :items="[
                ['label' => 'Resources'],
                ['label' => 'Compliance Guide'],
            ]" class="mb-8 justify-center" />

            <div class="text-center">
                <div class="inline-flex items-center gap-2 rounded-full border border-primary-200 bg-white px-4 py-2 shadow-sm mb-6">
                    <x-heroicon-s-shield-check class="h-4 w-4 text-primary-600" />
                    <span class="text-sm font-medium text-primary-700 uppercase tracking-wider">Compliance Guide</span>
                </div>

                <h1 class="text-4xl font-bold text-neutral-900 md:text-5xl lg:text-6xl leading-tight">
                    Compliance Requirements for Identity Verification
                </h1>

                <p class="mx-auto mt-6 max-w-3xl text-lg text-neutral-600 md:text-xl">
                    How PixaProof helps you meet regulatory mandates for live photo verification across banking, insurance, healthcare, and government sectors.
                </p>

                <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
                    <x-button href="{{ route('contact') }}" size="lg">
                        Request Demo
                    </x-button>
                    <x-button href="#frameworks" variant="outline" size="lg" :icon="false">
                        View Frameworks
                    </x-button>
                </div>
            </div>
        </div>
    </section>

    {{-- Why Regulators Require Live Verification --}}
    <x-section>
        <div class="mx-auto max-w-4xl">
            <div class="text-center mb-12">
                <p class="text-sm font-semibold uppercase tracking-wider text-primary-600 mb-3">The Regulatory Landscape</p>
                <h2 class="text-3xl font-bold text-neutral-900 md:text-4xl">
                    Why Regulators Require Live Verification
                </h2>
                <p class="mt-4 text-lg text-neutral-600 max-w-2xl mx-auto">
                    Financial regulators worldwide have recognized that traditional document verification is insufficient in the age of AI-generated content and sophisticated fraud.
                </p>
            </div>

            <div class="grid gap-6 md:grid-cols-3">
                {{-- Card 1 --}}
                <div class="rounded-xl border border-neutral-200 bg-white p-6 shadow-sm">
                    <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-red-50">
                        <x-heroicon-o-exclamation-triangle class="h-6 w-6 text-red-600" />
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-neutral-900">Rising Fraud Sophistication</h3>
                    <p class="mt-2 text-sm text-neutral-600">
                        AI-generated documents and deepfakes have made traditional verification methods unreliable. Regulators now require proof that images were captured live.
                    </p>
                </div>

                {{-- Card 2 --}}
                <div class="rounded-xl border border-neutral-200 bg-white p-6 shadow-sm">
                    <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-amber-50">
                        <x-heroicon-o-document-magnifying-glass class="h-6 w-6 text-amber-600" />
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-neutral-900">Audit Trail Requirements</h3>
                    <p class="mt-2 text-sm text-neutral-600">
                        Regulatory frameworks increasingly demand cryptographic proof of authenticity and complete chain-of-custody documentation for identity verification.
                    </p>
                </div>

                {{-- Card 3 --}}
                <div class="rounded-xl border border-neutral-200 bg-white p-6 shadow-sm">
                    <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-green-50">
                        <x-heroicon-o-scale class="h-6 w-6 text-green-600" />
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-neutral-900">Enforcement Trends</h3>
                    <p class="mt-2 text-sm text-neutral-600">
                        Regulators are increasingly imposing significant penalties for inadequate identity verification. Proactive compliance has become a business imperative.
                    </p>
                </div>
            </div>
        </div>
    </x-section>

    {{-- Regulatory Frameworks Section --}}
    <x-section id="frameworks" bg="neutral">
        <div class="mx-auto max-w-6xl">
            <div class="text-center mb-12">
                <p class="text-sm font-semibold uppercase tracking-wider text-primary-600 mb-3">Regulatory Frameworks</p>
                <h2 class="text-3xl font-bold text-neutral-900 md:text-4xl">
                    Industry-Specific Compliance Requirements
                </h2>
                <p class="mt-4 text-lg text-neutral-600 max-w-2xl mx-auto">
                    PixaProof helps organizations meet compliance requirements across multiple regulatory frameworks and jurisdictions.
                </p>
            </div>

            {{-- Banking & Financial Services --}}
            <div class="mb-12">
                <div class="flex items-center gap-3 mb-6">
                    <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-blue-100">
                        <x-heroicon-o-building-library class="h-5 w-5 text-blue-600" />
                    </div>
                    <h3 class="text-xl font-semibold text-neutral-900">Banking & Financial Services</h3>
                </div>

                <div class="overflow-hidden rounded-xl border border-neutral-200 bg-white">
                    <table class="w-full">
                        <thead>
                            <tr class="border-b border-neutral-200 bg-neutral-50">
                                <th class="px-6 py-4 text-left text-sm font-semibold text-neutral-900">Framework</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-neutral-900">Jurisdiction</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-neutral-900">How PixaProof Helps</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-neutral-200">
                            <tr class="hover:bg-neutral-50 transition-colors">
                                <td class="px-6 py-4 font-medium text-primary-700">KYC/AML (FATF)</td>
                                <td class="px-6 py-4 text-neutral-600">Global</td>
                                <td class="px-6 py-4 text-neutral-600">Live capture verification, tamper detection, complete audit trail</td>
                            </tr>
                            <tr class="bg-neutral-50 hover:bg-neutral-100 transition-colors">
                                <td class="px-6 py-4 font-medium text-primary-700">MAS Technology Risk Guidelines</td>
                                <td class="px-6 py-4 text-neutral-600">Singapore</td>
                                <td class="px-6 py-4 text-neutral-600">Strong customer authentication, fraud prevention controls</td>
                            </tr>
                            <tr class="hover:bg-neutral-50 transition-colors">
                                <td class="px-6 py-4 font-medium text-primary-700">BNM e-KYC Guidelines</td>
                                <td class="px-6 py-4 text-neutral-600">Malaysia</td>
                                <td class="px-6 py-4 text-neutral-600">Liveness detection, document authenticity verification</td>
                            </tr>
                            <tr class="bg-neutral-50 hover:bg-neutral-100 transition-colors">
                                <td class="px-6 py-4 font-medium text-primary-700">OJK Regulations</td>
                                <td class="px-6 py-4 text-neutral-600">Indonesia</td>
                                <td class="px-6 py-4 text-neutral-600">Remote onboarding verification, capture-level security</td>
                            </tr>
                            <tr class="hover:bg-neutral-50 transition-colors">
                                <td class="px-6 py-4 font-medium text-primary-700">BSP Circular</td>
                                <td class="px-6 py-4 text-neutral-600">Philippines</td>
                                <td class="px-6 py-4 text-neutral-600">Digital onboarding compliance, identity verification</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- Insurance --}}
            <div class="mb-12">
                <div class="flex items-center gap-3 mb-6">
                    <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-emerald-100">
                        <x-heroicon-o-shield-check class="h-5 w-5 text-emerald-600" />
                    </div>
                    <h3 class="text-xl font-semibold text-neutral-900">Insurance</h3>
                </div>

                <div class="overflow-hidden rounded-xl border border-neutral-200 bg-white">
                    <table class="w-full">
                        <thead>
                            <tr class="border-b border-neutral-200 bg-neutral-50">
                                <th class="px-6 py-4 text-left text-sm font-semibold text-neutral-900">Requirement</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-neutral-900">Context</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-neutral-900">How PixaProof Helps</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-neutral-200">
                            <tr class="hover:bg-neutral-50 transition-colors">
                                <td class="px-6 py-4 font-medium text-primary-700">State Fraud Investigation</td>
                                <td class="px-6 py-4 text-neutral-600">Claims Documentation</td>
                                <td class="px-6 py-4 text-neutral-600">Tamper-proof claim photos with cryptographic proof of authenticity</td>
                            </tr>
                            <tr class="bg-neutral-50 hover:bg-neutral-100 transition-colors">
                                <td class="px-6 py-4 font-medium text-primary-700">NAIC Model Laws</td>
                                <td class="px-6 py-4 text-neutral-600">USA</td>
                                <td class="px-6 py-4 text-neutral-600">Documentation standards, fraud prevention controls</td>
                            </tr>
                            <tr class="hover:bg-neutral-50 transition-colors">
                                <td class="px-6 py-4 font-medium text-primary-700">Underwriting Standards</td>
                                <td class="px-6 py-4 text-neutral-600">Industry-wide</td>
                                <td class="px-6 py-4 text-neutral-600">Verified property and vehicle condition photos</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- Healthcare --}}
            <div class="mb-12">
                <div class="flex items-center gap-3 mb-6">
                    <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-red-100">
                        <x-heroicon-o-heart class="h-5 w-5 text-red-600" />
                    </div>
                    <h3 class="text-xl font-semibold text-neutral-900">Healthcare</h3>
                </div>

                <div class="overflow-hidden rounded-xl border border-neutral-200 bg-white">
                    <table class="w-full">
                        <thead>
                            <tr class="border-b border-neutral-200 bg-neutral-50">
                                <th class="px-6 py-4 text-left text-sm font-semibold text-neutral-900">Framework</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-neutral-900">Jurisdiction</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-neutral-900">How PixaProof Helps</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-neutral-200">
                            <tr class="hover:bg-neutral-50 transition-colors">
                                <td class="px-6 py-4 font-medium text-primary-700">HIPAA Identity Requirements</td>
                                <td class="px-6 py-4 text-neutral-600">USA</td>
                                <td class="px-6 py-4 text-neutral-600">Patient identity verification, telehealth authentication</td>
                            </tr>
                            <tr class="bg-neutral-50 hover:bg-neutral-100 transition-colors">
                                <td class="px-6 py-4 font-medium text-primary-700">Telemedicine Regulations</td>
                                <td class="px-6 py-4 text-neutral-600">Various</td>
                                <td class="px-6 py-4 text-neutral-600">Remote patient ID verification with liveness detection</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- General/Data Protection --}}
            <div>
                <div class="flex items-center gap-3 mb-6">
                    <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-purple-100">
                        <x-heroicon-o-globe-alt class="h-5 w-5 text-purple-600" />
                    </div>
                    <h3 class="text-xl font-semibold text-neutral-900">Data Protection & Security Standards</h3>
                </div>

                <div class="overflow-hidden rounded-xl border border-neutral-200 bg-white">
                    <table class="w-full">
                        <thead>
                            <tr class="border-b border-neutral-200 bg-neutral-50">
                                <th class="px-6 py-4 text-left text-sm font-semibold text-neutral-900">Standard</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-neutral-900">Scope</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-neutral-900">How PixaProof Helps</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-neutral-200">
                            <tr class="hover:bg-neutral-50 transition-colors">
                                <td class="px-6 py-4 font-medium text-primary-700">GDPR</td>
                                <td class="px-6 py-4 text-neutral-600">European Union</td>
                                <td class="px-6 py-4 text-neutral-600">Data minimization, right to erasure, EU data residency options</td>
                            </tr>
                            <tr class="bg-neutral-50 hover:bg-neutral-100 transition-colors">
                                <td class="px-6 py-4 font-medium text-primary-700">SOC 2 Type II</td>
                                <td class="px-6 py-4 text-neutral-600">Enterprise Security</td>
                                <td class="px-6 py-4 text-neutral-600">Security controls, availability, processing integrity</td>
                            </tr>
                            <tr class="hover:bg-neutral-50 transition-colors">
                                <td class="px-6 py-4 font-medium text-primary-700">ISO 27001:2022</td>
                                <td class="px-6 py-4 text-neutral-600">Information Security</td>
                                <td class="px-6 py-4 text-neutral-600">Information security management, continuous risk assessment</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </x-section>

    {{-- PixaProof Compliance Features --}}
    <x-section>
        <div class="mx-auto max-w-5xl">
            <div class="text-center mb-12">
                <p class="text-sm font-semibold uppercase tracking-wider text-primary-600 mb-3">Compliance Features</p>
                <h2 class="text-3xl font-bold text-neutral-900 md:text-4xl">
                    Built for Regulatory Compliance
                </h2>
                <p class="mt-4 text-lg text-neutral-600 max-w-2xl mx-auto">
                    PixaProof provides the technical capabilities that compliance teams need to meet regulatory requirements.
                </p>
            </div>

            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                {{-- Audit Trail --}}
                <div class="rounded-xl border border-neutral-200 bg-white p-6 shadow-sm hover:shadow-md hover:border-primary-300 transition-all">
                    <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-primary-50">
                        <x-heroicon-o-document-text class="h-6 w-6 text-primary-600" />
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-neutral-900">Complete Audit Trail</h3>
                    <p class="mt-2 text-sm text-neutral-600">
                        Cryptographic proof of every verification. Immutable records for regulatory audits and legal proceedings.
                    </p>
                </div>

                {{-- Data Residency --}}
                <div class="rounded-xl border border-neutral-200 bg-white p-6 shadow-sm hover:shadow-md hover:border-primary-300 transition-all">
                    <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-primary-50">
                        <x-heroicon-o-server-stack class="h-6 w-6 text-primary-600" />
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-neutral-900">Data Residency Options</h3>
                    <p class="mt-2 text-sm text-neutral-600">
                        Choose where your data is processed and stored. ASEAN, EU, and US data center options available.
                    </p>
                </div>

                {{-- Right to Erasure --}}
                <div class="rounded-xl border border-neutral-200 bg-white p-6 shadow-sm hover:shadow-md hover:border-primary-300 transition-all">
                    <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-primary-50">
                        <x-heroicon-o-trash class="h-6 w-6 text-primary-600" />
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-neutral-900">Right to Erasure</h3>
                    <p class="mt-2 text-sm text-neutral-600">
                        GDPR-compliant data deletion workflows. Automated and manual erasure options with verification.
                    </p>
                </div>

                {{-- Data Retention --}}
                <div class="rounded-xl border border-neutral-200 bg-white p-6 shadow-sm hover:shadow-md hover:border-primary-300 transition-all">
                    <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-primary-50">
                        <x-heroicon-o-clock class="h-6 w-6 text-primary-600" />
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-neutral-900">Configurable Retention</h3>
                    <p class="mt-2 text-sm text-neutral-600">
                        Set data retention policies to match your regulatory requirements. Automatic expiration and archival.
                    </p>
                </div>

                {{-- Encryption --}}
                <div class="rounded-xl border border-neutral-200 bg-white p-6 shadow-sm hover:shadow-md hover:border-primary-300 transition-all">
                    <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-primary-50">
                        <x-heroicon-o-lock-closed class="h-6 w-6 text-primary-600" />
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-neutral-900">End-to-End Encryption</h3>
                    <p class="mt-2 text-sm text-neutral-600">
                        AES-256 encryption at rest and TLS 1.3 in transit. Your data is protected throughout its lifecycle.
                    </p>
                </div>

                {{-- Access Controls --}}
                <div class="rounded-xl border border-neutral-200 bg-white p-6 shadow-sm hover:shadow-md hover:border-primary-300 transition-all">
                    <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-primary-50">
                        <x-heroicon-o-user-group class="h-6 w-6 text-primary-600" />
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-neutral-900">Role-Based Access</h3>
                    <p class="mt-2 text-sm text-neutral-600">
                        Granular access controls with audit logging. SSO integration and principle of least privilege.
                    </p>
                </div>
            </div>
        </div>
    </x-section>

    {{-- Certifications Section --}}
    <x-section bg="primary">
        <div class="mx-auto max-w-4xl">
            <div class="text-center mb-12">
                <p class="text-sm font-semibold uppercase tracking-wider text-primary-700 mb-3">Our Certifications</p>
                <h2 class="text-3xl font-bold text-neutral-900 md:text-4xl">
                    Security You Can Trust
                </h2>
                <p class="mt-4 text-lg text-neutral-700 max-w-2xl mx-auto">
                    PixaProof maintains industry-leading security certifications to ensure your compliance requirements are met.
                </p>
            </div>

            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
                {{-- ISO 27001 --}}
                <div class="flex flex-col items-center rounded-xl border border-primary-200 bg-white p-6 text-center shadow-sm">
                    <div class="flex h-16 w-16 items-center justify-center rounded-full bg-green-100">
                        <x-heroicon-s-shield-check class="h-8 w-8 text-green-600" />
                    </div>
                    <h3 class="mt-4 font-semibold text-neutral-900">ISO 27001:2022</h3>
                    <p class="mt-1 text-xs text-green-600 font-medium">Certified</p>
                </div>

                {{-- ISO 27002 --}}
                <div class="flex flex-col items-center rounded-xl border border-primary-200 bg-white p-6 text-center shadow-sm">
                    <div class="flex h-16 w-16 items-center justify-center rounded-full bg-green-100">
                        <x-heroicon-s-shield-check class="h-8 w-8 text-green-600" />
                    </div>
                    <h3 class="mt-4 font-semibold text-neutral-900">ISO 27002:2022</h3>
                    <p class="mt-1 text-xs text-green-600 font-medium">Certified</p>
                </div>

                {{-- SOC 2 --}}
                <div class="flex flex-col items-center rounded-xl border border-primary-200 bg-white p-6 text-center shadow-sm">
                    <div class="flex h-16 w-16 items-center justify-center rounded-full bg-amber-100">
                        <x-heroicon-s-clock class="h-8 w-8 text-amber-600" />
                    </div>
                    <h3 class="mt-4 font-semibold text-neutral-900">SOC 2 Type II</h3>
                    <p class="mt-1 text-xs text-amber-600 font-medium">In Progress</p>
                </div>

                {{-- GDPR --}}
                <div class="flex flex-col items-center rounded-xl border border-primary-200 bg-white p-6 text-center shadow-sm">
                    <div class="flex h-16 w-16 items-center justify-center rounded-full bg-green-100">
                        <x-heroicon-s-globe-alt class="h-8 w-8 text-green-600" />
                    </div>
                    <h3 class="mt-4 font-semibold text-neutral-900">GDPR</h3>
                    <p class="mt-1 text-xs text-green-600 font-medium">Compliant</p>
                </div>
            </div>

            <p class="mt-8 text-center text-sm text-neutral-600">
                Contact us for detailed compliance documentation and audit reports.
            </p>
        </div>
    </x-section>

    {{-- Final CTA Section --}}
    <x-section bg="dark">
        <div class="mx-auto max-w-3xl text-center">
            <h2 class="text-3xl font-bold text-white md:text-4xl">
                Ensure Compliance with PixaProof
            </h2>
            <p class="mx-auto mt-4 max-w-2xl text-lg text-neutral-300">
                Talk to our compliance team about how PixaProof can help you meet regulatory requirements for identity verification.
            </p>
            <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
                <x-button href="{{ route('contact') }}" size="lg">
                    Request Demo
                </x-button>
                <x-button href="{{ route('product') }}" variant="ghost" size="lg" class="text-white hover:text-white/80" :icon="false">
                    Learn About Technology
                </x-button>
            </div>
        </div>
    </x-section>
@endsection
