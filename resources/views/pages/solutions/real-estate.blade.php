@extends('layouts.app')

@section('title', 'Real Estate Solutions - PixaProof')
@section('description', 'Real estate compliance starts with injection attack prevention. Prevent forged ownership documents, fake property photos, and synthetic identity fraud in property transactions with capture-level security.')

@section('content')
    {{-- Hero Section --}}
    <section class="relative isolate overflow-hidden bg-white px-4 pt-32 pb-20 lg:pt-40 lg:pb-28">
        {{-- Background Pattern --}}
        <div class="absolute inset-0 -z-10">
            <div class="absolute inset-0 bg-gradient-to-br from-primary-50 via-white to-primary-50/30"></div>
            <div class="absolute inset-y-0 right-0 w-1/2 bg-gradient-to-l from-primary-100/50 to-transparent"></div>
        </div>

        <div class="relative z-10 max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded bg-primary-50 border border-primary-200 mb-6">
                <x-heroicon-s-home-modern class="w-4 h-4 text-primary-600" />
                <span class="text-sm font-medium text-primary-700 uppercase tracking-wider">Real Estate Solutions</span>
            </div>

            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-neutral-900 mb-6 leading-tight">
                Real Estate Compliance Starts with Injection Attack Prevention
            </h1>

            <p class="text-lg md:text-xl text-neutral-700 mb-8 max-w-3xl mx-auto">
                Prevent forged ownership documents, fake property photos, and synthetic identity fraud in property transactions with capture-level security.
            </p>

            {{-- Hero Stat --}}
            <div class="inline-flex items-center gap-3 px-6 py-3 rounded bg-white border border-neutral-200 shadow-sm">
                <span class="text-3xl font-bold text-primary-600">$56B</span>
                <span class="text-neutral-700 text-left text-sm">annual losses from<br>property fraud globally</span>
            </div>

            <div class="flex flex-col sm:flex-row gap-4 justify-center mt-10">
                <x-button href="/contact" size="lg">
                    Request Demo
                </x-button>
                <x-button href="#solution" variant="secondary" size="lg">
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
                Property transactions are under attack
            </h2>
            <p class="text-neutral-700 text-lg max-w-2xl mx-auto">
                Fraudsters exploit digital property platforms with sophisticated document forgery and image manipulation techniques.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-6 max-w-5xl mx-auto">
            {{-- Problem Card 1 --}}
            <div class="p-6 rounded border border-red-200 bg-red-50">
                <div class="flex items-start gap-4">
                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded bg-red-100 text-red-600">
                        <x-heroicon-s-document-text class="w-5 h-5" />
                    </div>
                    <div>
                        <h3 class="font-semibold text-neutral-900">Title Deed Fraud</h3>
                        <p class="mt-1 text-sm text-neutral-700">Fake ownership documents cost the industry $56 billion annually</p>
                        <p class="mt-2 text-xs font-medium text-red-700">Impact: Lost properties, legal disputes</p>
                    </div>
                </div>
            </div>

            {{-- Problem Card 2 --}}
            <div class="p-6 rounded border border-red-200 bg-red-50">
                <div class="flex items-start gap-4">
                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded bg-red-100 text-red-600">
                        <x-heroicon-s-photo class="w-5 h-5" />
                    </div>
                    <div>
                        <h3 class="font-semibold text-neutral-900">Property Photo Manipulation</h3>
                        <p class="mt-1 text-sm text-neutral-700">Photoshopped listings hide property defects and misrepresent value</p>
                        <p class="mt-2 text-xs font-medium text-red-700">Impact: Buyer disputes, lawsuit exposure</p>
                    </div>
                </div>
            </div>

            {{-- Problem Card 3 --}}
            <div class="p-6 rounded border border-red-200 bg-red-50">
                <div class="flex items-start gap-4">
                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded bg-red-100 text-red-600">
                        <x-heroicon-s-user-circle class="w-5 h-5" />
                    </div>
                    <div>
                        <h3 class="font-semibold text-neutral-900">Identity Fraud in Transactions</h3>
                        <p class="mt-1 text-sm text-neutral-700">Synthetic identities used to commit mortgage fraud</p>
                        <p class="mt-2 text-xs font-medium text-red-700">Impact: Regulatory penalties, loan losses</p>
                    </div>
                </div>
            </div>

            {{-- Problem Card 4 --}}
            <div class="p-6 rounded border border-red-200 bg-red-50">
                <div class="flex items-start gap-4">
                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded bg-red-100 text-red-600">
                        <x-heroicon-s-pencil-square class="w-5 h-5" />
                    </div>
                    <div>
                        <h3 class="font-semibold text-neutral-900">Document Forgery</h3>
                        <p class="mt-1 text-sm text-neutral-700">Forged signatures on transfer documents and contracts</p>
                        <p class="mt-2 text-xs font-medium text-red-700">Impact: Transaction reversals, legal liability</p>
                    </div>
                </div>
            </div>
        </div>
    </x-section>

    {{-- The Solution Section --}}
    <x-section id="solution" bg="primary">
        <div class="text-center mb-16">
            <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">The Solution</p>
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                Live capture enforcement for every property document
            </h2>
            <p class="text-neutral-700 text-lg max-w-2xl mx-auto">
                PixaProof ensures every property photo, document, and identity verification is captured live, blocking gallery uploads at the source.
            </p>
        </div>

        {{-- Transaction Flow --}}
        <div class="max-w-5xl mx-auto">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                    $steps = [
                        ['num' => '1', 'title' => 'Transaction Initiated', 'desc' => 'Property listing or sale process begins with PixaProof SDK integration'],
                        ['num' => '2', 'title' => 'Document Capture Required', 'desc' => 'Title deeds, ownership certificates, and ID documents requested'],
                        ['num' => '3', 'title' => 'Live Capture Enforced', 'desc' => 'Gallery blocked, documents must be photographed in real-time'],
                        ['num' => '4', 'title' => 'Property Photo Verification', 'desc' => 'All listing photos captured live with GPS and timestamp'],
                        ['num' => '5', 'title' => 'Identity Verification', 'desc' => 'Seller/buyer identity confirmed with liveness detection'],
                        ['num' => '6', 'title' => 'Transaction Secured', 'desc' => 'Complete audit trail with tamper-proof documentation'],
                    ];
                @endphp

                @foreach ($steps as $step)
                    <div class="relative p-6 rounded bg-white border border-neutral-200 hover:border-primary-300 hover:shadow-md transition-all">
                        <div class="flex items-center gap-4 mb-4">
                            <span class="flex items-center justify-center w-10 h-10 rounded bg-primary-600 text-white font-bold text-lg">
                                {{ $step['num'] }}
                            </span>
                            <h3 class="text-lg font-semibold text-neutral-900">{{ $step['title'] }}</h3>
                        </div>
                        <p class="text-neutral-700 text-sm">{{ $step['desc'] }}</p>
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
                Complete real estate verification suite
            </h2>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto">
            @php
                $capabilities = [
                    ['icon' => 'document-check', 'title' => 'Title Deed Verification', 'desc' => 'Live capture of ownership documents with authenticity verification and OCR extraction'],
                    ['icon' => 'camera', 'title' => 'Property Photo Capture', 'desc' => 'Enforced live photography with GPS coordinates and timestamp metadata'],
                    ['icon' => 'identification', 'title' => 'Identity Verification', 'desc' => 'Buyer and seller identity confirmation with liveness detection and document matching'],
                    ['icon' => 'pencil', 'title' => 'Signature Capture', 'desc' => 'Live signature verification for contracts and transfer documents'],
                    ['icon' => 'clipboard-document-list', 'title' => 'Transaction Audit Trail', 'desc' => 'Complete documentation chain with tamper-evident records'],
                    ['icon' => 'shield-check', 'title' => 'Document Authentication', 'desc' => '35+ tamper detection tests for all submitted documents'],
                ];
            @endphp

            @foreach ($capabilities as $cap)
                <div class="p-6 rounded border border-neutral-200 bg-white hover:border-primary-300 hover:shadow-md transition-all">
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded bg-primary-50 text-primary-600">
                        <x-dynamic-component :component="'heroicon-s-' . $cap['icon']" class="w-6 h-6" />
                    </div>
                    <h3 class="text-xl font-semibold text-neutral-900">{{ $cap['title'] }}</h3>
                    <p class="mt-2 text-neutral-700">{{ $cap['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </x-section>

    {{-- Regulatory Compliance Section --}}
    <x-section bg="neutral">
        <div class="text-center mb-16">
            <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">Compliance</p>
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                Built for real estate regulatory requirements
            </h2>
            <p class="text-neutral-700 text-lg max-w-2xl mx-auto">
                PixaProof helps you meet real estate compliance standards with comprehensive documentation and controls.
            </p>
        </div>

        <div class="max-w-4xl mx-auto overflow-hidden rounded border border-neutral-200 bg-white">
            <table class="w-full">
                <thead class="bg-neutral-50">
                    <tr>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-neutral-900">Framework</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-neutral-900">PixaProof Features</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-neutral-200">
                    @php
                        $compliance = [
                            ['RERA Compliance', 'Property documentation, seller verification, transaction transparency'],
                            ['AML/KYC', 'Identity verification, source of funds documentation, audit trails'],
                            ['Property Registration', 'Document authentication, chain of custody, timestamp verification'],
                            ['GDPR (EU)', 'EU data residency, right to erasure, data minimization'],
                            ['SOC 2 Type II', 'Security controls, availability, processing integrity'],
                            ['ISO 27001:2022', 'Information security management, continuous risk assessment'],
                        ];
                    @endphp
                    @foreach ($compliance as $row)
                        <tr class="hover:bg-neutral-50 transition-colors">
                            <td class="px-6 py-4 text-primary-600 font-medium">{{ $row[0] }}</td>
                            <td class="px-6 py-4 text-neutral-700">{{ $row[1] }}</td>
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
                    <h3 class="text-2xl font-bold text-neutral-900">Regional Property Developer</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="p-6 rounded bg-white border border-neutral-200 shadow-sm">
                            <div class="text-3xl font-bold text-primary-600 mb-1">78%</div>
                            <div class="text-sm text-neutral-700">Fraud reduction</div>
                            <div class="text-xs text-neutral-500 mt-1">Document forgery eliminated</div>
                        </div>
                        <div class="p-6 rounded bg-white border border-neutral-200 shadow-sm">
                            <div class="text-3xl font-bold text-primary-600 mb-1">$4.2M</div>
                            <div class="text-sm text-neutral-700">Annual savings</div>
                            <div class="text-xs text-neutral-500 mt-1">Fraud losses prevented</div>
                        </div>
                        <div class="p-6 rounded bg-white border border-neutral-200 shadow-sm">
                            <div class="text-3xl font-bold text-primary-600 mb-1">55%</div>
                            <div class="text-sm text-neutral-700">Faster closings</div>
                            <div class="text-xs text-neutral-500 mt-1">45 days → 20 days</div>
                        </div>
                        <div class="p-6 rounded bg-white border border-neutral-200 shadow-sm">
                            <div class="text-3xl font-bold text-primary-600 mb-1">92%</div>
                            <div class="text-sm text-neutral-700">Listing accuracy</div>
                            <div class="text-xs text-neutral-500 mt-1">Verified property photos</div>
                        </div>
                    </div>
                </div>

                {{-- Quote --}}
                <div class="p-8 rounded bg-primary-50 border border-primary-200">
                    <x-heroicon-s-chat-bubble-bottom-center-text class="w-10 h-10 text-primary-600 mb-6" />
                    <blockquote class="text-xl text-neutral-900 leading-relaxed mb-6">
                        "PixaProof transformed our property verification process. Every listing photo and document is now captured live, eliminating fraudulent submissions entirely."
                    </blockquote>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded bg-primary-100 flex items-center justify-center">
                            <x-heroicon-s-user class="w-6 h-6 text-primary-600" />
                        </div>
                        <div>
                            <div class="font-medium text-neutral-900">Head of Property Operations</div>
                            <div class="text-sm text-neutral-600">Regional Property Developer</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-section>

    {{-- Final CTA Section --}}
    <x-section bg="dark">
        <div class="text-center max-w-3xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Ready to secure your real estate transactions?
            </h2>
            <p class="text-xl text-neutral-300 mb-8">
                Join leading property developers and agencies protecting transactions with PixaProof.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <x-button href="/contact" size="lg">
                    Request Demo
                </x-button>
                <x-button href="/developers" variant="outline" size="lg" class="border-white text-white hover:bg-white/10">
                    View Developer Docs
                </x-button>
            </div>
        </div>
    </x-section>
@endsection
