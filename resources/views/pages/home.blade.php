@extends('layouts.app')

@section('title', 'Verify Every Image. Eliminate Fraud.')
@section('description', 'PixaProof AI-powered verification detects image tampering in seconds—protecting your business from fraudulent claims, fake documents, and compliance failures.')

@section('content')
    {{-- Section 1: Hero --}}
    <section class="relative isolate overflow-hidden px-4 pt-32 pb-20 lg:pt-40 lg:pb-28">
        {{-- Background: Dark blue gradient --}}
        <div class="absolute inset-0 -z-10">
            <div class="absolute inset-0 bg-gradient-to-br from-neutral-900 via-primary-900 to-neutral-800"></div>
            {{-- Subtle grid pattern --}}
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff08_1px,transparent_1px),linear-gradient(to_bottom,#ffffff08_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>
        </div>

        <div class="relative z-10 max-w-4xl mx-auto text-center">
            {{-- Innov8tif co-branding --}}
            <div class="flex items-center justify-center gap-3 mb-8">
                <img src="{{ asset('images/innov8tif-logo-white.png') }}" alt="Innov8tif" class="h-8">
                <span class="text-neutral-400 text-sm">presents</span>
            </div>

            {{-- PixaProof wordmark --}}
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-white tracking-tight mb-4">
                PIXAPROOF
            </h1>

            {{-- Tagline --}}
            <p class="text-2xl md:text-3xl font-medium text-primary-300 mb-6">
                Verify Every Image. Eliminate Fraud.
            </p>

            {{-- Subheadline --}}
            <p class="text-lg md:text-xl text-neutral-300 mb-10 max-w-3xl mx-auto leading-relaxed">
                Document fraud costs enterprises millions annually. Manipulated photos slip through manual reviews. PixaProof's AI-powered verification detects tampering in seconds—protecting your business from fraudulent claims, fake documents, and compliance failures.
            </p>

            {{-- CTAs --}}
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <x-button href="{{ route('contact') }}" size="lg">
                    Request Demo
                </x-button>
                <x-button href="#how-it-works" variant="outline" size="lg" class="border-white text-white hover:bg-white/10">
                    Learn How It Works
                    <x-heroicon-o-arrow-down class="w-4 h-4 ml-2" />
                </x-button>
            </div>
        </div>
    </section>

    {{-- Section 2: Problem Statement --}}
    <section id="challenge" class="py-20 lg:py-28 bg-neutral-50">
        <div class="max-w-6xl mx-auto px-4">
            {{-- Part A: The Verification Gap --}}
            <div class="mb-16">
                <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">The Challenge</p>
                <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                    The Verification Gap in User-Submitted Documentation
                </h2>
                <p class="text-neutral-700 text-lg max-w-4xl mb-8 leading-relaxed">
                    Financial institutions, insurers, and enterprises increasingly depend on user-submitted photographic evidence for claims processing, loan underwriting, and compliance documentation. This reliance introduces significant operational risk:
                </p>

                <div class="grid md:grid-cols-2 gap-4 max-w-4xl">
                    <div class="flex items-start gap-3 p-4 bg-white rounded border border-neutral-200">
                        <x-heroicon-o-exclamation-triangle class="w-5 h-5 text-amber-500 mt-0.5 shrink-0" />
                        <span class="text-neutral-700">Image metadata can be altered or removed prior to submission</span>
                    </div>
                    <div class="flex items-start gap-3 p-4 bg-white rounded border border-neutral-200">
                        <x-heroicon-o-exclamation-triangle class="w-5 h-5 text-amber-500 mt-0.5 shrink-0" />
                        <span class="text-neutral-700">Generative AI enables creation of synthetic documents at scale</span>
                    </div>
                    <div class="flex items-start gap-3 p-4 bg-white rounded border border-neutral-200">
                        <x-heroicon-o-exclamation-triangle class="w-5 h-5 text-amber-500 mt-0.5 shrink-0" />
                        <span class="text-neutral-700">Geolocation and timestamp data are trivially spoofed</span>
                    </div>
                    <div class="flex items-start gap-3 p-4 bg-white rounded border border-neutral-200">
                        <x-heroicon-o-exclamation-triangle class="w-5 h-5 text-amber-500 mt-0.5 shrink-0" />
                        <span class="text-neutral-700">No chain of custody exists from capture to submission</span>
                    </div>
                </div>
            </div>

            {{-- Part B: The Cost of Compensating Controls --}}
            <div class="border-t border-neutral-200 pt-16">
                <h3 class="text-2xl md:text-3xl font-bold text-neutral-900 mb-6">
                    The Cost of Compensating Controls
                </h3>
                <p class="text-neutral-700 text-lg max-w-4xl mb-8 leading-relaxed">
                    Organizations unable to authenticate submitted imagery resort to resource-intensive verification protocols:
                </p>

                <div class="grid md:grid-cols-2 gap-4 max-w-4xl mb-8">
                    <div class="flex items-start gap-3 p-4 bg-white rounded border border-neutral-200">
                        <x-heroicon-o-currency-dollar class="w-5 h-5 text-red-500 mt-0.5 shrink-0" />
                        <span class="text-neutral-700">Physical site inspections by internal staff or contracted assessors</span>
                    </div>
                    <div class="flex items-start gap-3 p-4 bg-white rounded border border-neutral-200">
                        <x-heroicon-o-clock class="w-5 h-5 text-red-500 mt-0.5 shrink-0" />
                        <span class="text-neutral-700">Extended processing timelines measured in days, not hours</span>
                    </div>
                    <div class="flex items-start gap-3 p-4 bg-white rounded border border-neutral-200">
                        <x-heroicon-o-document-duplicate class="w-5 h-5 text-red-500 mt-0.5 shrink-0" />
                        <span class="text-neutral-700">Redundant documentation requirements that delay legitimate claims</span>
                    </div>
                    <div class="flex items-start gap-3 p-4 bg-white rounded border border-neutral-200">
                        <x-heroicon-o-arrow-path class="w-5 h-5 text-red-500 mt-0.5 shrink-0" />
                        <span class="text-neutral-700">Third-party verification services that themselves rely on photographic evidence</span>
                    </div>
                </div>

                <div class="max-w-4xl p-6 bg-primary-50 border border-primary-200 rounded">
                    <p class="text-neutral-800 leading-relaxed">
                        These compensating controls increase cost-per-transaction while failing to address the root vulnerability: <strong>the absence of image authenticity verification at the point of capture.</strong>
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Section 3: Solution Introduction --}}
    <section id="solution" class="py-20 lg:py-28">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-16">
                <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">The Solution</p>
                <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                    End-to-End Image Authenticity Verification
                </h2>
                <p class="text-neutral-700 text-lg max-w-3xl mx-auto">
                    PixaProof provides enterprise-grade verification at the point of capture—establishing chain of custody from the moment an image is taken through final submission.
                </p>
            </div>

            {{-- 5 Verification Checks --}}
            <div class="grid sm:grid-cols-2 lg:grid-cols-5 gap-6">
                {{-- Capture Integrity --}}
                <div class="text-center p-6 bg-neutral-50 rounded border border-neutral-200">
                    <div class="w-12 h-12 mx-auto mb-4 rounded bg-primary-100 flex items-center justify-center">
                        <x-heroicon-o-camera class="w-6 h-6 text-primary-600" />
                    </div>
                    <h3 class="font-semibold text-neutral-900 mb-2">Capture Integrity</h3>
                    <p class="text-sm text-neutral-600">Verify images originate from device camera, not uploads or screenshots</p>
                </div>

                {{-- Time & Location --}}
                <div class="text-center p-6 bg-neutral-50 rounded border border-neutral-200">
                    <div class="w-12 h-12 mx-auto mb-4 rounded bg-primary-100 flex items-center justify-center">
                        <x-heroicon-o-map-pin class="w-6 h-6 text-primary-600" />
                    </div>
                    <h3 class="font-semibold text-neutral-900 mb-2">Time & Location</h3>
                    <p class="text-sm text-neutral-600">Cryptographically bind timestamp and GPS coordinates at capture</p>
                </div>

                {{-- Image Analysis --}}
                <div class="text-center p-6 bg-neutral-50 rounded border border-neutral-200">
                    <div class="w-12 h-12 mx-auto mb-4 rounded bg-primary-100 flex items-center justify-center">
                        <x-heroicon-o-magnifying-glass class="w-6 h-6 text-primary-600" />
                    </div>
                    <h3 class="font-semibold text-neutral-900 mb-2">Image Analysis</h3>
                    <p class="text-sm text-neutral-600">Detect pixel-level manipulation, splicing, and AI-generated content</p>
                </div>

                {{-- Text Detection --}}
                <div class="text-center p-6 bg-neutral-50 rounded border border-neutral-200">
                    <div class="w-12 h-12 mx-auto mb-4 rounded bg-primary-100 flex items-center justify-center">
                        <x-heroicon-o-document-text class="w-6 h-6 text-primary-600" />
                    </div>
                    <h3 class="font-semibold text-neutral-900 mb-2">Text Detection</h3>
                    <p class="text-sm text-neutral-600">Extract and validate text from documents with OCR verification</p>
                </div>

                {{-- Tamper Evidence --}}
                <div class="text-center p-6 bg-neutral-50 rounded border border-neutral-200">
                    <div class="w-12 h-12 mx-auto mb-4 rounded bg-primary-100 flex items-center justify-center">
                        <x-heroicon-o-shield-check class="w-6 h-6 text-primary-600" />
                    </div>
                    <h3 class="font-semibold text-neutral-900 mb-2">Tamper Evidence</h3>
                    <p class="text-sm text-neutral-600">Comprehensive audit trail for compliance and dispute resolution</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Section 4: How It Works --}}
    <section id="how-it-works" class="py-20 lg:py-28 bg-primary-50">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-16">
                <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">How It Works</p>
                <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                    Verification in Three Steps
                </h2>
            </div>

            {{-- Desktop: Horizontal stepped process --}}
            <div class="hidden md:block">
                <div class="relative">
                    {{-- Connecting line --}}
                    <div class="absolute top-20 left-[16.67%] right-[16.67%] h-0.5 bg-primary-200"></div>

                    <div class="grid grid-cols-3 gap-8">
                        {{-- Step 1: Capture --}}
                        <div class="text-center">
                            <div class="relative z-10 w-40 h-40 mx-auto mb-6 rounded-full bg-white border-4 border-primary-500 flex items-center justify-center shadow-lg">
                                <x-heroicon-o-device-phone-mobile class="w-16 h-16 text-primary-600" />
                            </div>
                            <div class="bg-white rounded border border-neutral-200 p-6">
                                <span class="inline-block px-3 py-1 bg-primary-100 text-primary-700 text-xs font-semibold rounded-full mb-3">Step 1</span>
                                <h3 class="text-xl font-semibold text-neutral-900 mb-3">Capture</h3>
                                <p class="text-neutral-700 text-sm leading-relaxed">
                                    User captures photo through PixaProof-enabled application. Device metadata, GPS coordinates, and timestamp cryptographically sealed at point of capture.
                                </p>
                            </div>
                        </div>

                        {{-- Step 2: Analyze --}}
                        <div class="text-center">
                            <div class="relative z-10 w-40 h-40 mx-auto mb-6 rounded-full bg-white border-4 border-primary-500 flex items-center justify-center shadow-lg">
                                <x-heroicon-o-cpu-chip class="w-16 h-16 text-primary-600" />
                            </div>
                            <div class="bg-white rounded border border-neutral-200 p-6">
                                <span class="inline-block px-3 py-1 bg-primary-100 text-primary-700 text-xs font-semibold rounded-full mb-3">Step 2</span>
                                <h3 class="text-xl font-semibold text-neutral-900 mb-3">Analyze</h3>
                                <p class="text-neutral-700 text-sm leading-relaxed">
                                    PixaProof's verification engine performs 35+ authentication checks—detecting manipulation, validating metadata integrity, and flagging anomalies in real-time.
                                </p>
                            </div>
                        </div>

                        {{-- Step 3: Deliver --}}
                        <div class="text-center">
                            <div class="relative z-10 w-40 h-40 mx-auto mb-6 rounded-full bg-white border-4 border-primary-500 flex items-center justify-center shadow-lg">
                                <x-heroicon-o-clipboard-document-check class="w-16 h-16 text-primary-600" />
                            </div>
                            <div class="bg-white rounded border border-neutral-200 p-6">
                                <span class="inline-block px-3 py-1 bg-primary-100 text-primary-700 text-xs font-semibold rounded-full mb-3">Step 3</span>
                                <h3 class="text-xl font-semibold text-neutral-900 mb-3">Deliver</h3>
                                <p class="text-neutral-700 text-sm leading-relaxed">
                                    Verification results returned via API with comprehensive audit trail. Authenticated images proceed; flagged submissions routed for review.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Mobile: Vertical timeline --}}
            <div class="md:hidden space-y-8">
                {{-- Step 1 --}}
                <div class="flex gap-4">
                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 rounded-full bg-white border-4 border-primary-500 flex items-center justify-center shadow">
                            <x-heroicon-o-device-phone-mobile class="w-8 h-8 text-primary-600" />
                        </div>
                        <div class="w-0.5 h-full bg-primary-200 mt-4"></div>
                    </div>
                    <div class="flex-1 pb-4">
                        <span class="inline-block px-3 py-1 bg-primary-100 text-primary-700 text-xs font-semibold rounded-full mb-2">Step 1</span>
                        <h3 class="text-lg font-semibold text-neutral-900 mb-2">Capture</h3>
                        <p class="text-sm text-neutral-700 leading-relaxed">User captures photo through PixaProof-enabled application. Device metadata, GPS coordinates, and timestamp cryptographically sealed at point of capture.</p>
                    </div>
                </div>

                {{-- Step 2 --}}
                <div class="flex gap-4">
                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 rounded-full bg-white border-4 border-primary-500 flex items-center justify-center shadow">
                            <x-heroicon-o-cpu-chip class="w-8 h-8 text-primary-600" />
                        </div>
                        <div class="w-0.5 h-full bg-primary-200 mt-4"></div>
                    </div>
                    <div class="flex-1 pb-4">
                        <span class="inline-block px-3 py-1 bg-primary-100 text-primary-700 text-xs font-semibold rounded-full mb-2">Step 2</span>
                        <h3 class="text-lg font-semibold text-neutral-900 mb-2">Analyze</h3>
                        <p class="text-sm text-neutral-700 leading-relaxed">PixaProof's verification engine performs 35+ authentication checks—detecting manipulation, validating metadata integrity, and flagging anomalies in real-time.</p>
                    </div>
                </div>

                {{-- Step 3 --}}
                <div class="flex gap-4">
                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 rounded-full bg-white border-4 border-primary-500 flex items-center justify-center shadow">
                            <x-heroicon-o-clipboard-document-check class="w-8 h-8 text-primary-600" />
                        </div>
                    </div>
                    <div class="flex-1">
                        <span class="inline-block px-3 py-1 bg-primary-100 text-primary-700 text-xs font-semibold rounded-full mb-2">Step 3</span>
                        <h3 class="text-lg font-semibold text-neutral-900 mb-2">Deliver</h3>
                        <p class="text-sm text-neutral-700 leading-relaxed">Verification results returned via API with comprehensive audit trail. Authenticated images proceed; flagged submissions routed for review.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section 5: Use Cases (Tabbed) --}}
    <section id="solutions" class="py-20 lg:py-28">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12">
                <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">Applications</p>
                <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                    Industry Solutions
                </h2>
            </div>

            {{-- Tabbed Interface --}}
            <div x-data="{ activeTab: 'loan-draw' }">
                {{-- Tab Navigation - Desktop --}}
                <div class="hidden md:flex border-b border-neutral-200 mb-8">
                    <button
                        @click="activeTab = 'loan-draw'"
                        :class="activeTab === 'loan-draw' ? 'border-primary-500 text-primary-600' : 'border-transparent text-neutral-500 hover:text-neutral-700 hover:border-neutral-300'"
                        class="px-6 py-4 text-sm font-semibold border-b-2 transition-colors"
                    >
                        Loan Draw Inspections
                    </button>
                    <button
                        @click="activeTab = 'insurance'"
                        :class="activeTab === 'insurance' ? 'border-primary-500 text-primary-600' : 'border-transparent text-neutral-500 hover:text-neutral-700 hover:border-neutral-300'"
                        class="px-6 py-4 text-sm font-semibold border-b-2 transition-colors"
                    >
                        Insurance Claims
                    </button>
                    <button
                        @click="activeTab = 'kyc'"
                        :class="activeTab === 'kyc' ? 'border-primary-500 text-primary-600' : 'border-transparent text-neutral-500 hover:text-neutral-700 hover:border-neutral-300'"
                        class="px-6 py-4 text-sm font-semibold border-b-2 transition-colors"
                    >
                        KYC Onboarding
                    </button>
                    <button
                        @click="activeTab = 'asset'"
                        :class="activeTab === 'asset' ? 'border-primary-500 text-primary-600' : 'border-transparent text-neutral-500 hover:text-neutral-700 hover:border-neutral-300'"
                        class="px-6 py-4 text-sm font-semibold border-b-2 transition-colors"
                    >
                        Asset Verification
                    </button>
                </div>

                {{-- Mobile: Accordion --}}
                <div class="md:hidden space-y-4">
                    {{-- Loan Draw Inspections --}}
                    <div class="border border-neutral-200 rounded overflow-hidden">
                        <button
                            @click="activeTab = activeTab === 'loan-draw' ? '' : 'loan-draw'"
                            class="w-full px-4 py-3 text-left font-semibold text-neutral-900 bg-neutral-50 flex justify-between items-center"
                        >
                            Loan Draw Inspections
                            <x-heroicon-o-chevron-down class="w-5 h-5 transition-transform" x-bind:class="activeTab === 'loan-draw' ? 'rotate-180' : ''" />
                        </button>
                        <div x-show="activeTab === 'loan-draw'" x-collapse class="p-4 bg-white">
                            <h3 class="text-lg font-semibold text-neutral-900 mb-3">Construction Verification Without Site Visits</h3>
                            <p class="text-neutral-700 mb-4">Lenders require photographic evidence of construction progress before releasing draw funds. Traditional verification requires physical inspections or reliance on unverified contractor submissions.</p>
                            <p class="font-medium text-neutral-900 mb-2">PixaProof enables:</p>
                            <ul class="space-y-2 text-neutral-700">
                                <li class="flex items-start gap-2"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Verified progress photos with authenticated timestamps and GPS</li>
                                <li class="flex items-start gap-2"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Confirmation images captured on-site, not uploaded from gallery</li>
                                <li class="flex items-start gap-2"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Detection of recycled or manipulated construction photos</li>
                                <li class="flex items-start gap-2"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Auditable documentation for loan file compliance</li>
                            </ul>
                        </div>
                    </div>

                    {{-- Insurance Claims --}}
                    <div class="border border-neutral-200 rounded overflow-hidden">
                        <button
                            @click="activeTab = activeTab === 'insurance' ? '' : 'insurance'"
                            class="w-full px-4 py-3 text-left font-semibold text-neutral-900 bg-neutral-50 flex justify-between items-center"
                        >
                            Insurance Claims
                            <x-heroicon-o-chevron-down class="w-5 h-5 transition-transform" x-bind:class="activeTab === 'insurance' ? 'rotate-180' : ''" />
                        </button>
                        <div x-show="activeTab === 'insurance'" x-collapse class="p-4 bg-white">
                            <h3 class="text-lg font-semibold text-neutral-900 mb-3">Accelerate Legitimate Claims. Flag Suspicious Submissions.</h3>
                            <p class="text-neutral-700 mb-4">Claims adjusters process hundreds of photos daily—vehicle damage, property loss, medical documentation. Manual review cannot reliably detect sophisticated manipulation.</p>
                            <p class="font-medium text-neutral-900 mb-2">PixaProof enables:</p>
                            <ul class="space-y-2 text-neutral-700">
                                <li class="flex items-start gap-2"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Instant verification of claim photo authenticity</li>
                                <li class="flex items-start gap-2"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Detection of AI-generated or altered damage documentation</li>
                                <li class="flex items-start gap-2"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Geolocation confirmation matching reported incident location</li>
                                <li class="flex items-start gap-2"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Reduced SIU referral backlog through automated flagging</li>
                            </ul>
                        </div>
                    </div>

                    {{-- KYC Onboarding --}}
                    <div class="border border-neutral-200 rounded overflow-hidden">
                        <button
                            @click="activeTab = activeTab === 'kyc' ? '' : 'kyc'"
                            class="w-full px-4 py-3 text-left font-semibold text-neutral-900 bg-neutral-50 flex justify-between items-center"
                        >
                            KYC Onboarding
                            <x-heroicon-o-chevron-down class="w-5 h-5 transition-transform" x-bind:class="activeTab === 'kyc' ? 'rotate-180' : ''" />
                        </button>
                        <div x-show="activeTab === 'kyc'" x-collapse class="p-4 bg-white">
                            <h3 class="text-lg font-semibold text-neutral-900 mb-3">Document Authentication at Point of Capture</h3>
                            <p class="text-neutral-700 mb-4">Identity verification requires authentic documentation. Fraudulent identity documents—manipulated, synthetic, or recycled—expose institutions to regulatory and financial risk.</p>
                            <p class="font-medium text-neutral-900 mb-2">PixaProof enables:</p>
                            <ul class="space-y-2 text-neutral-700">
                                <li class="flex items-start gap-2"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Verification that ID photos captured live, not uploaded</li>
                                <li class="flex items-start gap-2"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Detection of document tampering or digital manipulation</li>
                                <li class="flex items-start gap-2"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Text extraction and validation via integrated OCR</li>
                                <li class="flex items-start gap-2"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Compliance-ready audit trails for regulatory review</li>
                            </ul>
                        </div>
                    </div>

                    {{-- Asset Verification --}}
                    <div class="border border-neutral-200 rounded overflow-hidden">
                        <button
                            @click="activeTab = activeTab === 'asset' ? '' : 'asset'"
                            class="w-full px-4 py-3 text-left font-semibold text-neutral-900 bg-neutral-50 flex justify-between items-center"
                        >
                            Asset Verification
                            <x-heroicon-o-chevron-down class="w-5 h-5 transition-transform" x-bind:class="activeTab === 'asset' ? 'rotate-180' : ''" />
                        </button>
                        <div x-show="activeTab === 'asset'" x-collapse class="p-4 bg-white">
                            <h3 class="text-lg font-semibold text-neutral-900 mb-3">Authenticated Evidence for Collateral and Inventory</h3>
                            <p class="text-neutral-700 mb-4">Asset-based lending and inventory financing require verified photographic documentation. Unverified submissions create exposure to collateral fraud.</p>
                            <p class="font-medium text-neutral-900 mb-2">PixaProof enables:</p>
                            <ul class="space-y-2 text-neutral-700">
                                <li class="flex items-start gap-2"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Timestamped, geolocated asset photography</li>
                                <li class="flex items-start gap-2"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Confirmation of unique capture vs. duplicated imagery</li>
                                <li class="flex items-start gap-2"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Detection of photo manipulation or staging</li>
                                <li class="flex items-start gap-2"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Chain of custody documentation for audit requirements</li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Tab Content - Desktop --}}
                <div class="hidden md:block bg-neutral-50 rounded border border-neutral-200 p-8">
                    {{-- Loan Draw Inspections --}}
                    <div x-show="activeTab === 'loan-draw'" x-transition>
                        <h3 class="text-2xl font-semibold text-neutral-900 mb-4">Construction Verification Without Site Visits</h3>
                        <p class="text-neutral-700 mb-6 max-w-3xl">Lenders require photographic evidence of construction progress before releasing draw funds. Traditional verification requires physical inspections or reliance on unverified contractor submissions.</p>
                        <p class="font-medium text-neutral-900 mb-3">PixaProof enables:</p>
                        <ul class="space-y-3 text-neutral-700 max-w-2xl">
                            <li class="flex items-start gap-3"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Verified progress photos with authenticated timestamps and GPS</li>
                            <li class="flex items-start gap-3"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Confirmation images captured on-site, not uploaded from gallery</li>
                            <li class="flex items-start gap-3"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Detection of recycled or manipulated construction photos</li>
                            <li class="flex items-start gap-3"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Auditable documentation for loan file compliance</li>
                        </ul>
                    </div>

                    {{-- Insurance Claims --}}
                    <div x-show="activeTab === 'insurance'" x-transition>
                        <h3 class="text-2xl font-semibold text-neutral-900 mb-4">Accelerate Legitimate Claims. Flag Suspicious Submissions.</h3>
                        <p class="text-neutral-700 mb-6 max-w-3xl">Claims adjusters process hundreds of photos daily—vehicle damage, property loss, medical documentation. Manual review cannot reliably detect sophisticated manipulation.</p>
                        <p class="font-medium text-neutral-900 mb-3">PixaProof enables:</p>
                        <ul class="space-y-3 text-neutral-700 max-w-2xl">
                            <li class="flex items-start gap-3"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Instant verification of claim photo authenticity</li>
                            <li class="flex items-start gap-3"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Detection of AI-generated or altered damage documentation</li>
                            <li class="flex items-start gap-3"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Geolocation confirmation matching reported incident location</li>
                            <li class="flex items-start gap-3"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Reduced SIU referral backlog through automated flagging</li>
                        </ul>
                    </div>

                    {{-- KYC Onboarding --}}
                    <div x-show="activeTab === 'kyc'" x-transition>
                        <h3 class="text-2xl font-semibold text-neutral-900 mb-4">Document Authentication at Point of Capture</h3>
                        <p class="text-neutral-700 mb-6 max-w-3xl">Identity verification requires authentic documentation. Fraudulent identity documents—manipulated, synthetic, or recycled—expose institutions to regulatory and financial risk.</p>
                        <p class="font-medium text-neutral-900 mb-3">PixaProof enables:</p>
                        <ul class="space-y-3 text-neutral-700 max-w-2xl">
                            <li class="flex items-start gap-3"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Verification that ID photos captured live, not uploaded</li>
                            <li class="flex items-start gap-3"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Detection of document tampering or digital manipulation</li>
                            <li class="flex items-start gap-3"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Text extraction and validation via integrated OCR</li>
                            <li class="flex items-start gap-3"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Compliance-ready audit trails for regulatory review</li>
                        </ul>
                    </div>

                    {{-- Asset Verification --}}
                    <div x-show="activeTab === 'asset'" x-transition>
                        <h3 class="text-2xl font-semibold text-neutral-900 mb-4">Authenticated Evidence for Collateral and Inventory</h3>
                        <p class="text-neutral-700 mb-6 max-w-3xl">Asset-based lending and inventory financing require verified photographic documentation. Unverified submissions create exposure to collateral fraud.</p>
                        <p class="font-medium text-neutral-900 mb-3">PixaProof enables:</p>
                        <ul class="space-y-3 text-neutral-700 max-w-2xl">
                            <li class="flex items-start gap-3"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Timestamped, geolocated asset photography</li>
                            <li class="flex items-start gap-3"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Confirmation of unique capture vs. duplicated imagery</li>
                            <li class="flex items-start gap-3"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Detection of photo manipulation or staging</li>
                            <li class="flex items-start gap-3"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Chain of custody documentation for audit requirements</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section 6: Technology Highlights (Bento Grid) --}}
    <section id="technology" class="py-20 lg:py-28 bg-neutral-50">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12">
                <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">Technology</p>
                <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                    Built for Enterprise Security and Scale
                </h2>
            </div>

            {{-- Bento Grid --}}
            <div class="grid md:grid-cols-3 gap-6">
                {{-- Large card: 35+ Verification Checks --}}
                <div class="md:col-span-2 md:row-span-2 p-8 bg-white rounded border border-neutral-200">
                    <div class="w-14 h-14 mb-6 rounded bg-primary-100 flex items-center justify-center">
                        <x-heroicon-o-check-badge class="w-8 h-8 text-primary-600" />
                    </div>
                    <h3 class="text-2xl font-bold text-neutral-900 mb-4">35+ Verification Checks</h3>
                    <p class="text-neutral-700 leading-relaxed">
                        Comprehensive analysis including EXIF validation, pixel-level tampering detection, AI-generated content identification, metadata consistency, and cryptographic integrity verification.
                    </p>
                </div>

                {{-- Medium card: Real-Time Processing --}}
                <div class="p-6 bg-white rounded border border-neutral-200">
                    <div class="w-12 h-12 mb-4 rounded bg-primary-100 flex items-center justify-center">
                        <x-heroicon-o-bolt class="w-6 h-6 text-primary-600" />
                    </div>
                    <h3 class="text-lg font-semibold text-neutral-900 mb-2">Real-Time Processing</h3>
                    <p class="text-sm text-neutral-600">Verification results returned in seconds via REST API. No batch delays. No manual queues.</p>
                </div>

                {{-- Medium card: SDK Integration --}}
                <div class="p-6 bg-white rounded border border-neutral-200">
                    <div class="w-12 h-12 mb-4 rounded bg-primary-100 flex items-center justify-center">
                        <x-heroicon-o-code-bracket class="w-6 h-6 text-primary-600" />
                    </div>
                    <h3 class="text-lg font-semibold text-neutral-900 mb-2">SDK Integration</h3>
                    <p class="text-sm text-neutral-600">Native SDKs for iOS and Android. Embed capture and verification directly into existing mobile applications.</p>
                </div>

                {{-- Small card: On-Premise Deployment --}}
                <div class="p-6 bg-white rounded border border-neutral-200">
                    <div class="w-10 h-10 mb-3 rounded bg-primary-100 flex items-center justify-center">
                        <x-heroicon-o-server class="w-5 h-5 text-primary-600" />
                    </div>
                    <h3 class="text-base font-semibold text-neutral-900 mb-1">On-Premise Deployment</h3>
                    <p class="text-sm text-neutral-600">Available for organizations requiring data residency and air-gapped infrastructure.</p>
                </div>

                {{-- Small card: API-First Architecture --}}
                <div class="p-6 bg-white rounded border border-neutral-200">
                    <div class="w-10 h-10 mb-3 rounded bg-primary-100 flex items-center justify-center">
                        <x-heroicon-o-command-line class="w-5 h-5 text-primary-600" />
                    </div>
                    <h3 class="text-base font-semibold text-neutral-900 mb-1">API-First Architecture</h3>
                    <p class="text-sm text-neutral-600">RESTful APIs with comprehensive documentation. Integrate with existing workflows and systems.</p>
                </div>

                {{-- Small card: Compliance Ready --}}
                <div class="p-6 bg-white rounded border border-neutral-200">
                    <div class="w-10 h-10 mb-3 rounded bg-primary-100 flex items-center justify-center">
                        <x-heroicon-o-document-check class="w-5 h-5 text-primary-600" />
                    </div>
                    <h3 class="text-base font-semibold text-neutral-900 mb-1">Compliance Ready</h3>
                    <p class="text-sm text-neutral-600">Audit trails and verification records designed for regulatory review and dispute resolution.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Section 7: Credibility (Innov8tif) --}}
    <section id="about" class="py-20 lg:py-28 bg-neutral-900">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12">
                <p class="text-primary-400 font-semibold uppercase tracking-wider text-sm mb-4">Backed by Proven Expertise</p>
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                    A Product of Innov8tif
                </h2>
                <p class="text-neutral-300 text-lg max-w-3xl mx-auto">
                    PixaProof is developed by MyNasional eKYC (formerly Innov8tif Solutions), Southeast Asia's largest identity assurance provider. Established in 2011 and now part of NexG Bhd., a Bursa Malaysia public-listed company.
                </p>
            </div>

            {{-- Stats Row --}}
            <div class="grid sm:grid-cols-3 gap-8 mb-12">
                <div class="text-center">
                    <div class="text-4xl font-bold text-white mb-2">Since 2011</div>
                    <div class="text-sm uppercase tracking-wider text-primary-400 mb-2">Established</div>
                    <p class="text-neutral-400 text-sm">Pioneer in digital identity verification</p>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-white mb-2">10M+</div>
                    <div class="text-sm uppercase tracking-wider text-primary-400 mb-2">ID Verifications</div>
                    <p class="text-neutral-400 text-sm">Processed through enterprise deployments</p>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-white mb-2">10 ASEAN</div>
                    <div class="text-sm uppercase tracking-wider text-primary-400 mb-2">Countries Served</div>
                    <p class="text-neutral-400 text-sm">Customers and partners across Southeast Asia</p>
                </div>
            </div>

            {{-- Certifications Row --}}
            <div class="grid sm:grid-cols-3 gap-6 mb-12">
                <div class="text-center p-6 bg-neutral-800 rounded">
                    <div class="w-12 h-12 mx-auto mb-4 rounded bg-primary-900/50 flex items-center justify-center">
                        <x-heroicon-o-shield-check class="w-6 h-6 text-primary-400" />
                    </div>
                    <h3 class="font-semibold text-white mb-1">ISO 30107-3</h3>
                    <p class="text-sm text-neutral-400">iBeta Level 1 & 2 Liveness Compliance</p>
                </div>
                <div class="text-center p-6 bg-neutral-800 rounded">
                    <div class="w-12 h-12 mx-auto mb-4 rounded bg-primary-900/50 flex items-center justify-center">
                        <x-heroicon-o-light-bulb class="w-6 h-6 text-primary-400" />
                    </div>
                    <h3 class="font-semibold text-white mb-1">4 Patents</h3>
                    <p class="text-sm text-neutral-400">Including US patent for hologram detection</p>
                </div>
                <div class="text-center p-6 bg-neutral-800 rounded">
                    <div class="w-12 h-12 mx-auto mb-4 rounded bg-primary-900/50 flex items-center justify-center">
                        <x-heroicon-o-building-office class="w-6 h-6 text-primary-400" />
                    </div>
                    <h3 class="font-semibold text-white mb-1">Bursa Listed</h3>
                    <p class="text-sm text-neutral-400">Part of NexG Bhd. public-listed group</p>
                </div>
            </div>

            {{-- Innov8tif Logo and Link --}}
            <div class="text-center">
                <a href="https://innov8tif.com" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-primary-400 hover:text-primary-300 transition-colors">
                    Learn more about Innov8tif
                    <x-heroicon-o-arrow-right class="w-4 h-4" />
                </a>
            </div>
        </div>
    </section>

    {{-- Section 8: FAQ --}}
    <section id="faq" class="py-20 lg:py-28">
        <div class="max-w-3xl mx-auto px-4">
            <div class="text-center mb-12">
                <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">FAQ</p>
                <h2 class="text-3xl md:text-4xl font-bold text-neutral-900">
                    Frequently Asked Questions
                </h2>
            </div>

            {{-- Accordion --}}
            <div x-data="{ openFaq: null }" class="space-y-4">
                {{-- FAQ 1 --}}
                <div class="border border-neutral-200 rounded overflow-hidden">
                    <button
                        @click="openFaq = openFaq === 1 ? null : 1"
                        class="w-full px-6 py-4 text-left font-semibold text-neutral-900 bg-white hover:bg-neutral-50 flex justify-between items-center transition-colors"
                    >
                        How does PixaProof integrate with existing systems?
                        <x-heroicon-o-chevron-down class="w-5 h-5 text-neutral-500 transition-transform" x-bind:class="openFaq === 1 ? 'rotate-180' : ''" />
                    </button>
                    <div x-show="openFaq === 1" x-collapse class="px-6 py-4 bg-neutral-50 border-t border-neutral-200">
                        <p class="text-neutral-700 leading-relaxed">
                            PixaProof provides REST APIs and native SDKs for iOS and Android. Integration involves embedding the SDK in your mobile application and connecting verification results to your backend via API. Technical documentation and implementation support included.
                        </p>
                    </div>
                </div>

                {{-- FAQ 2 --}}
                <div class="border border-neutral-200 rounded overflow-hidden">
                    <button
                        @click="openFaq = openFaq === 2 ? null : 2"
                        class="w-full px-6 py-4 text-left font-semibold text-neutral-900 bg-white hover:bg-neutral-50 flex justify-between items-center transition-colors"
                    >
                        What deployment options are available?
                        <x-heroicon-o-chevron-down class="w-5 h-5 text-neutral-500 transition-transform" x-bind:class="openFaq === 2 ? 'rotate-180' : ''" />
                    </button>
                    <div x-show="openFaq === 2" x-collapse class="px-6 py-4 bg-neutral-50 border-t border-neutral-200">
                        <p class="text-neutral-700 leading-relaxed">
                            Cloud-hosted (SaaS), private cloud, and on-premise deployments. On-premise options support data residency requirements and air-gapped infrastructure.
                        </p>
                    </div>
                </div>

                {{-- FAQ 3 --}}
                <div class="border border-neutral-200 rounded overflow-hidden">
                    <button
                        @click="openFaq = openFaq === 3 ? null : 3"
                        class="w-full px-6 py-4 text-left font-semibold text-neutral-900 bg-white hover:bg-neutral-50 flex justify-between items-center transition-colors"
                    >
                        What happens when manipulation is detected?
                        <x-heroicon-o-chevron-down class="w-5 h-5 text-neutral-500 transition-transform" x-bind:class="openFaq === 3 ? 'rotate-180' : ''" />
                    </button>
                    <div x-show="openFaq === 3" x-collapse class="px-6 py-4 bg-neutral-50 border-t border-neutral-200">
                        <p class="text-neutral-700 leading-relaxed">
                            API response includes detailed flags indicating specific anomalies. Organizations configure thresholds and routing rules for flagged submissions.
                        </p>
                    </div>
                </div>

                {{-- FAQ 4 --}}
                <div class="border border-neutral-200 rounded overflow-hidden">
                    <button
                        @click="openFaq = openFaq === 4 ? null : 4"
                        class="w-full px-6 py-4 text-left font-semibold text-neutral-900 bg-white hover:bg-neutral-50 flex justify-between items-center transition-colors"
                    >
                        How is data handled and protected?
                        <x-heroicon-o-chevron-down class="w-5 h-5 text-neutral-500 transition-transform" x-bind:class="openFaq === 4 ? 'rotate-180' : ''" />
                    </button>
                    <div x-show="openFaq === 4" x-collapse class="px-6 py-4 bg-neutral-50 border-t border-neutral-200">
                        <p class="text-neutral-700 leading-relaxed">
                            PixaProof is operated by Innov8tif Solutions Pte. Ltd. (Singapore) and supports international data protection standards. Verification metadata retention configurable per organizational policy. Full audit trails maintained for compliance and dispute resolution.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section 9: Final CTA --}}
    <section class="py-20 lg:py-28 bg-neutral-900">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Ready to Eliminate Image Fraud?
            </h2>
            <p class="text-xl text-neutral-300 mb-8">
                See how PixaProof verifies authenticity at the point of capture. Request a demo with our solutions team.
            </p>

            <x-button href="{{ route('contact') }}" size="lg">
                Request Demo
            </x-button>

            <p class="mt-8 text-neutral-400">
                Or contact us at <a href="mailto:sales@innov8tif.com" class="text-primary-400 hover:text-primary-300 transition-colors">sales@innov8tif.com</a>
            </p>
        </div>
    </section>
@endsection
