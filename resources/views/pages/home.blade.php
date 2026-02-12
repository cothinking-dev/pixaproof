@extends('layouts.app')

@section('title', 'Verify Every Image. Eliminate Fraud.')
@section('description', 'PixaProof AI-powered verification detects image tampering in seconds—protecting your business from fraudulent claims, fake documents, and compliance failures.')

@section('content')
    {{-- Section 1: Hero --}}
    <section class="relative isolate overflow-hidden px-4 pt-32 pb-20 lg:pt-40 lg:pb-28">
        {{-- Background: Bright gradient --}}
        <div class="absolute inset-0 -z-10">
            <div class="absolute inset-0 bg-gradient-to-br from-primary-50 via-white to-primary-50/50"></div>
            {{-- Subtle grid pattern --}}
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#0ea5e910_1px,transparent_1px),linear-gradient(to_bottom,#0ea5e910_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                {{-- Left: Copy --}}
                <div>
                    {{-- Eyebrow badge --}}
                    <x-badge variant="enterprise" class="mb-6 border-primary-500/40 text-primary-600 bg-primary-500/10">
                        Now Available — Built on 10M+ ID Verifications
                    </x-badge>

                    {{-- Headline with rotating industry keyword --}}
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-neutral-900 tracking-tight mb-6">
                        Stop Fraudulent Images in
                        <x-rotating-text :words="['Banking', 'Insurance', 'KYC', 'Claims']" class="text-primary-600" />
                    </h1>

                    {{-- Subheadline --}}
                    <p class="text-lg text-neutral-600 mb-10 max-w-xl leading-relaxed">
                        Every manipulated photo that slips through costs your organization time, money, and trust. PixaProof verifies image authenticity at the point of capture — so only real, untampered evidence enters your workflow.
                    </p>

                    {{-- Dual CTA --}}
                    <div class="flex flex-col sm:flex-row gap-4">
                        <x-button href="{{ route('contact') }}" size="lg">
                            Book a Demo
                        </x-button>
                        <x-button href="#how-it-works" variant="outline" size="lg" class="border-neutral-300 text-neutral-700 hover:bg-neutral-100">
                            See How It Works
                            <x-heroicon-o-arrow-down class="w-4 h-4 ml-1" />
                        </x-button>
                    </div>
                </div>

                {{-- Right: Visual --}}
                <div class="hidden lg:block">
                    <x-graphics.hero-comparison />
                </div>
            </div>
        </div>
    </section>

    {{-- Section 2: Trust Strip --}}
    <section class="bg-neutral-100 border-y border-neutral-200 py-5"
        x-data="{ visible: false }" x-intersect.once="visible = true">
        <div class="max-w-7xl mx-auto px-4 transition-all duration-700 ease-out" :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-4'">
            <div class="flex items-center justify-between gap-8 overflow-x-auto py-1 text-sm text-neutral-600">
                <div class="flex items-center gap-2 whitespace-nowrap">
                    <x-heroicon-o-shield-check class="w-5 h-5 text-primary-600 shrink-0" />
                    <span>ISO 30107-3 Compliant</span>
                </div>
                <div class="flex items-center gap-2 whitespace-nowrap">
                    <x-heroicon-o-light-bulb class="w-5 h-5 text-primary-600 shrink-0" />
                    <span>3 Patents Granted</span>
                </div>
                <div class="flex items-center gap-2 whitespace-nowrap">
                    <x-heroicon-o-building-office class="w-5 h-5 text-primary-600 shrink-0" />
                    <span>Bursa Malaysia Listed</span>
                </div>
                <div class="flex items-center gap-2 whitespace-nowrap">
                    <x-heroicon-o-clock class="w-5 h-5 text-primary-600 shrink-0" />
                    <span>Since 2011</span>
                </div>
                <div class="flex items-center gap-2 whitespace-nowrap">
                    <x-heroicon-o-finger-print class="w-5 h-5 text-primary-600 shrink-0" />
                    <span>10M+ Verifications</span>
                </div>
                <div class="flex items-center gap-2 whitespace-nowrap">
                    <x-heroicon-o-globe-asia-australia class="w-5 h-5 text-primary-600 shrink-0" />
                    <span>10 ASEAN Countries</span>
                </div>
            </div>
        </div>
    </section>

    {{-- Section 3: Problem Statement --}}
    <section id="challenge" class="py-20 lg:py-28 bg-white"
        x-data="{ visible: false }" x-intersect.once="visible = true">
        <div class="max-w-7xl mx-auto px-4 transition-all duration-700 ease-out" :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'">
            <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">The Problem</p>
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-12">
                Every Manipulated Photo That Slips Through Has a Price
            </h2>

            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16">
                {{-- Left: Cost callouts --}}
                <div class="space-y-6">
                    <div class="p-6 rounded-lg border border-red-200 bg-red-50">
                        <div class="text-3xl font-bold text-red-600 mb-1">$308,000</div>
                        <p class="text-neutral-700">Average cost of a single construction loan draw fraud incident involving manipulated progress photos</p>
                    </div>
                    <div class="p-6 rounded-lg border border-amber-200 bg-amber-50">
                        <div class="text-3xl font-bold text-amber-600 mb-1">40%</div>
                        <p class="text-neutral-700">Of insurance claims now involve digitally submitted photos — with no way to confirm they were taken at the scene</p>
                    </div>
                    <div class="p-6 rounded-lg border border-neutral-200 bg-neutral-50">
                        <div class="text-3xl font-bold text-neutral-800 mb-1">3–5 days</div>
                        <p class="text-neutral-700">Typical delay for manual photo verification through site visits, third-party checks, and back-and-forth requests</p>
                    </div>
                </div>

                {{-- Right: Fraud methods --}}
                <div>
                    <h3 class="text-xl font-semibold text-neutral-900 mb-6">How fraud gets through today</h3>
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <x-heroicon-o-exclamation-triangle class="w-5 h-5 text-red-500 mt-0.5 shrink-0" />
                            <div>
                                <p class="font-medium text-neutral-900">Gallery uploads instead of live photos</p>
                                <p class="text-sm text-neutral-600 mt-1">Users upload pre-edited images from their camera roll — apps can't tell the difference</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <x-heroicon-o-exclamation-triangle class="w-5 h-5 text-red-500 mt-0.5 shrink-0" />
                            <div>
                                <p class="font-medium text-neutral-900">AI-generated documents and deepfakes</p>
                                <p class="text-sm text-neutral-600 mt-1">Synthetic IDs, fake damage photos, and AI-altered evidence are now trivial to produce</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <x-heroicon-o-exclamation-triangle class="w-5 h-5 text-red-500 mt-0.5 shrink-0" />
                            <div>
                                <p class="font-medium text-neutral-900">Spoofed location and timestamp data</p>
                                <p class="text-sm text-neutral-600 mt-1">GPS and date metadata can be changed with free tools before submission</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <x-heroicon-o-exclamation-triangle class="w-5 h-5 text-red-500 mt-0.5 shrink-0" />
                            <div>
                                <p class="font-medium text-neutral-900">Recycled photos across multiple claims</p>
                                <p class="text-sm text-neutral-600 mt-1">The same photo submitted to different insurers or lenders with no detection mechanism</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Insight callout --}}
            <div class="mt-12 p-6 bg-primary-50 border border-primary-200 rounded-lg">
                <p class="text-neutral-800 leading-relaxed">
                    <strong>The root cause:</strong> Traditional workflows verify documents <em>after</em> submission. By then, the damage is done. The only reliable defence is verifying image authenticity at the moment of capture.
                </p>
            </div>
        </div>
    </section>

    {{-- Section 4: Before/After Comparison --}}
    <section class="py-20 lg:py-28 bg-neutral-50 border-y border-neutral-200"
        x-data="{ visible: false }" x-intersect.once="visible = true">
        <div class="max-w-6xl mx-auto px-4 transition-all duration-700 ease-out" :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'">
            <div class="text-center mb-16">
                <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">The Difference</p>
                <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                    One Layer of Protection Changes Everything
                </h2>
                <p class="text-neutral-600 text-lg max-w-2xl mx-auto">
                    See what happens when you secure the capture point — the one moment traditional systems cannot verify.
                </p>
            </div>

            <x-graphics.prevention-visual />
        </div>
    </section>

    {{-- Section 5: Five Layers of Protection --}}
    <section id="solution" class="py-20 lg:py-28 bg-white"
        x-data="{ visible: false }" x-intersect.once="visible = true">
        <div class="max-w-7xl mx-auto px-4 transition-all duration-700 ease-out" :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'">
            <div class="text-center mb-16">
                <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">The Solution</p>
                <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                    Five Layers of Protection in Every Image
                </h2>
                <p class="text-neutral-700 text-lg max-w-3xl mx-auto">
                    PixaProof doesn't just detect fraud after the fact — it prevents it at the source, then verifies every image through five independent checks.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                {{-- 1. Capture Integrity --}}
                <div class="p-6 bg-white rounded-lg border border-neutral-200">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-lg bg-primary-100 flex items-center justify-center shrink-0">
                            <x-heroicon-o-camera class="w-5 h-5 text-primary-600" />
                        </div>
                        <h3 class="font-semibold text-neutral-900">Capture Integrity</h3>
                    </div>
                    <p class="text-neutral-600">Confirms the photo was taken live with the device camera — gallery uploads, screenshots, and file injections are blocked before they reach your system.</p>
                </div>

                {{-- 2. Time & Location --}}
                <div class="p-6 bg-white rounded-lg border border-neutral-200">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-lg bg-primary-100 flex items-center justify-center shrink-0">
                            <x-heroicon-o-map-pin class="w-5 h-5 text-primary-600" />
                        </div>
                        <h3 class="font-semibold text-neutral-900">Time & Location</h3>
                    </div>
                    <p class="text-neutral-600">Locks in exactly when and where the photo was taken, with cryptographic proof that can't be spoofed or retroactively altered.</p>
                </div>

                {{-- 3. AI Detection --}}
                <div class="p-6 bg-white rounded-lg border border-neutral-200">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-lg bg-primary-100 flex items-center justify-center shrink-0">
                            <x-heroicon-o-magnifying-glass class="w-5 h-5 text-primary-600" />
                        </div>
                        <h3 class="font-semibold text-neutral-900">AI Detection</h3>
                    </div>
                    <p class="text-neutral-600">Identifies AI-generated content including deepfakes, synthetic documents, and pixel-level manipulation that manual review would miss.</p>
                </div>

                {{-- 4. Document Reading --}}
                <div class="p-6 bg-white rounded-lg border border-neutral-200">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-lg bg-primary-100 flex items-center justify-center shrink-0">
                            <x-heroicon-o-document-text class="w-5 h-5 text-primary-600" />
                        </div>
                        <h3 class="font-semibold text-neutral-900">Document Reading</h3>
                    </div>
                    <p class="text-neutral-600">Extracts and validates text from photographed documents — cross-referencing content with expected formats and flagging inconsistencies.</p>
                </div>

                {{-- 5. Audit Trail --}}
                <div class="p-6 bg-white rounded-lg border border-neutral-200">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-lg bg-primary-100 flex items-center justify-center shrink-0">
                            <x-heroicon-o-shield-check class="w-5 h-5 text-primary-600" />
                        </div>
                        <h3 class="font-semibold text-neutral-900">Audit Trail</h3>
                    </div>
                    <p class="text-neutral-600">Unbreakable chain of evidence from capture to review — every verification result timestamped, signed, and ready for compliance or dispute resolution.</p>
                </div>

                {{-- Summary card --}}
                <div class="p-6 bg-primary-600 rounded-lg text-white">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-lg bg-white/20 flex items-center justify-center shrink-0">
                            <x-heroicon-o-bolt class="w-5 h-5 text-white" />
                        </div>
                        <h3 class="font-semibold">All in Under 500ms</h3>
                    </div>
                    <p class="text-primary-100">Every image runs through all five checks automatically — results returned via API before your user finishes the next step.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Section 6: How It Works --}}
    <section id="how-it-works" class="py-20 lg:py-28 bg-primary-50/50 border-t border-primary-100"
        x-data="{ visible: false }" x-intersect.once="visible = true">
        <div class="max-w-5xl mx-auto px-4 transition-all duration-700 ease-out" :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'">
            <div class="text-center mb-16">
                <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">How It Works</p>
                <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                    Three Steps to Verified Evidence
                </h2>
                <p class="text-neutral-600 text-lg max-w-2xl mx-auto">
                    From the moment of capture to your API response — PixaProof secures, transmits, and verifies every image automatically.
                </p>
            </div>

            <x-graphics.solution-flow />
        </div>
    </section>

    {{-- Section 7: Industry Solutions (Tabbed) --}}
    <section id="solutions" class="py-20 lg:py-28 bg-neutral-50"
        x-data="{ visible: false }" x-intersect.once="visible = true">
        <div class="max-w-7xl mx-auto px-4 transition-all duration-700 ease-out" :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'">
            <div class="text-center mb-12">
                <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">Applications</p>
                <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                    Built for the Industries That Need It Most
                </h2>
            </div>

            {{-- Tabbed Interface --}}
            <div x-data="{ activeTab: 'loan-draw' }">
                {{-- Tab Navigation - Desktop with industry badges --}}
                <div class="hidden md:flex gap-3 mb-8">
                    <button
                        @click="activeTab = 'loan-draw'"
                        :class="activeTab === 'loan-draw' ? 'border-primary-500 bg-primary-50 text-primary-700' : 'border-neutral-200 bg-white text-neutral-600 hover:border-neutral-300 hover:bg-neutral-50'"
                        class="flex items-center gap-2 px-5 py-3 text-sm font-semibold border rounded-lg transition-colors"
                    >
                        <x-heroicon-o-building-library class="w-4 h-4" />
                        Loan Draw Inspections
                    </button>
                    <button
                        @click="activeTab = 'insurance'"
                        :class="activeTab === 'insurance' ? 'border-primary-500 bg-primary-50 text-primary-700' : 'border-neutral-200 bg-white text-neutral-600 hover:border-neutral-300 hover:bg-neutral-50'"
                        class="flex items-center gap-2 px-5 py-3 text-sm font-semibold border rounded-lg transition-colors"
                    >
                        <x-heroicon-o-shield-exclamation class="w-4 h-4" />
                        Insurance Claims
                    </button>
                    <button
                        @click="activeTab = 'kyc'"
                        :class="activeTab === 'kyc' ? 'border-primary-500 bg-primary-50 text-primary-700' : 'border-neutral-200 bg-white text-neutral-600 hover:border-neutral-300 hover:bg-neutral-50'"
                        class="flex items-center gap-2 px-5 py-3 text-sm font-semibold border rounded-lg transition-colors"
                    >
                        <x-heroicon-o-identification class="w-4 h-4" />
                        KYC Onboarding
                    </button>
                    <button
                        @click="activeTab = 'asset'"
                        :class="activeTab === 'asset' ? 'border-primary-500 bg-primary-50 text-primary-700' : 'border-neutral-200 bg-white text-neutral-600 hover:border-neutral-300 hover:bg-neutral-50'"
                        class="flex items-center gap-2 px-5 py-3 text-sm font-semibold border rounded-lg transition-colors"
                    >
                        <x-heroicon-o-cube class="w-4 h-4" />
                        Asset Verification
                    </button>
                </div>

                {{-- Mobile: Accordion --}}
                <div class="md:hidden space-y-3">
                    <button @click="activeTab = activeTab === 'loan-draw' ? '' : 'loan-draw'"
                        :class="activeTab === 'loan-draw' ? 'border-primary-500 bg-primary-50' : 'border-neutral-200'"
                        class="w-full px-4 py-3 text-left font-semibold text-neutral-900 flex items-center justify-between border rounded-lg transition-colors">
                        <span class="flex items-center gap-2"><x-heroicon-o-building-library class="w-4 h-4 text-primary-600" /> Loan Draw Inspections</span>
                        <x-heroicon-o-chevron-down class="w-5 h-5 transition-transform" x-bind:class="activeTab === 'loan-draw' ? 'rotate-180' : ''" />
                    </button>
                    <div x-show="activeTab === 'loan-draw'" x-collapse class="px-4 pb-4">
                        <div class="text-2xl font-bold text-primary-600 mb-2">Reduce inspection costs by up to 60%</div>
                        <p class="text-neutral-700 mb-4">Replace physical site visits with verified progress photos. Confirm images were captured on-site with authenticated GPS and timestamps — not uploaded from a gallery.</p>
                        <ul class="space-y-2 text-neutral-700">
                            <li class="flex items-start gap-2"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Verified progress photos with authenticated timestamps and GPS</li>
                            <li class="flex items-start gap-2"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Live capture enforced — gallery uploads blocked</li>
                            <li class="flex items-start gap-2"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Detection of recycled or manipulated construction photos</li>
                            <li class="flex items-start gap-2"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Auditable documentation for loan file compliance</li>
                        </ul>
                    </div>

                    <button @click="activeTab = activeTab === 'insurance' ? '' : 'insurance'"
                        :class="activeTab === 'insurance' ? 'border-primary-500 bg-primary-50' : 'border-neutral-200'"
                        class="w-full px-4 py-3 text-left font-semibold text-neutral-900 flex items-center justify-between border rounded-lg transition-colors">
                        <span class="flex items-center gap-2"><x-heroicon-o-shield-exclamation class="w-4 h-4 text-primary-600" /> Insurance Claims</span>
                        <x-heroicon-o-chevron-down class="w-5 h-5 transition-transform" x-bind:class="activeTab === 'insurance' ? 'rotate-180' : ''" />
                    </button>
                    <div x-show="activeTab === 'insurance'" x-collapse class="px-4 pb-4">
                        <div class="text-2xl font-bold text-primary-600 mb-2">Flag suspicious claims before payout</div>
                        <p class="text-neutral-700 mb-4">Automatically verify claim photos were taken at the reported location and time. Detect AI-generated damage documentation and altered evidence.</p>
                        <ul class="space-y-2 text-neutral-700">
                            <li class="flex items-start gap-2"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Instant verification of claim photo authenticity</li>
                            <li class="flex items-start gap-2"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> AI-generated and altered damage documentation flagged</li>
                            <li class="flex items-start gap-2"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Geolocation matches reported incident location</li>
                            <li class="flex items-start gap-2"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Reduced SIU referral backlog through automated flagging</li>
                        </ul>
                    </div>

                    <button @click="activeTab = activeTab === 'kyc' ? '' : 'kyc'"
                        :class="activeTab === 'kyc' ? 'border-primary-500 bg-primary-50' : 'border-neutral-200'"
                        class="w-full px-4 py-3 text-left font-semibold text-neutral-900 flex items-center justify-between border rounded-lg transition-colors">
                        <span class="flex items-center gap-2"><x-heroicon-o-identification class="w-4 h-4 text-primary-600" /> KYC Onboarding</span>
                        <x-heroicon-o-chevron-down class="w-5 h-5 transition-transform" x-bind:class="activeTab === 'kyc' ? 'rotate-180' : ''" />
                    </button>
                    <div x-show="activeTab === 'kyc'" x-collapse class="px-4 pb-4">
                        <div class="text-2xl font-bold text-primary-600 mb-2">Stop synthetic IDs at the source</div>
                        <p class="text-neutral-700 mb-4">Verify identity documents are photographed live — not uploaded from a gallery or generated by AI. Block fraudulent onboarding before it enters your system.</p>
                        <ul class="space-y-2 text-neutral-700">
                            <li class="flex items-start gap-2"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> ID photos confirmed as live capture, not uploaded</li>
                            <li class="flex items-start gap-2"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Document tampering and digital manipulation detected</li>
                            <li class="flex items-start gap-2"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Text extraction and validation via integrated OCR</li>
                            <li class="flex items-start gap-2"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Compliance-ready audit trails for regulatory review</li>
                        </ul>
                    </div>

                    <button @click="activeTab = activeTab === 'asset' ? '' : 'asset'"
                        :class="activeTab === 'asset' ? 'border-primary-500 bg-primary-50' : 'border-neutral-200'"
                        class="w-full px-4 py-3 text-left font-semibold text-neutral-900 flex items-center justify-between border rounded-lg transition-colors">
                        <span class="flex items-center gap-2"><x-heroicon-o-cube class="w-4 h-4 text-primary-600" /> Asset Verification</span>
                        <x-heroicon-o-chevron-down class="w-5 h-5 transition-transform" x-bind:class="activeTab === 'asset' ? 'rotate-180' : ''" />
                    </button>
                    <div x-show="activeTab === 'asset'" x-collapse class="px-4 pb-4">
                        <div class="text-2xl font-bold text-primary-600 mb-2">Verify what exists, where it exists</div>
                        <p class="text-neutral-700 mb-4">Confirm collateral and inventory documentation with timestamped, geolocated photography that can't be recycled or manipulated.</p>
                        <ul class="space-y-2 text-neutral-700">
                            <li class="flex items-start gap-2"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Timestamped, geolocated asset photography</li>
                            <li class="flex items-start gap-2"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Unique capture confirmed — no duplicated imagery</li>
                            <li class="flex items-start gap-2"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Photo manipulation and staging detection</li>
                            <li class="flex items-start gap-2"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Chain of custody for audit requirements</li>
                        </ul>
                    </div>
                </div>

                {{-- Tab Content - Desktop --}}
                <div class="hidden md:block">
                    {{-- Loan Draw Inspections --}}
                    <div x-show="activeTab === 'loan-draw'" x-transition class="grid lg:grid-cols-5 gap-8 items-start bg-white rounded-lg border border-neutral-200 p-8">
                        <div class="lg:col-span-3">
                            <div class="text-2xl font-bold text-primary-600 mb-3">Reduce inspection costs by up to 60%</div>
                            <h3 class="text-xl font-semibold text-neutral-900 mb-4">Construction Verification Without Site Visits</h3>
                            <p class="text-neutral-700 mb-6">Replace physical site visits with verified progress photos. Lenders can confirm images were captured on-site with authenticated GPS and timestamps — not uploaded from a gallery or recycled from a previous draw.</p>
                            <ul class="space-y-3 text-neutral-700">
                                <li class="flex items-start gap-3"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Verified progress photos with authenticated timestamps and GPS</li>
                                <li class="flex items-start gap-3"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Live capture enforced — gallery uploads blocked at SDK level</li>
                                <li class="flex items-start gap-3"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Detection of recycled or manipulated construction photos</li>
                                <li class="flex items-start gap-3"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Auditable documentation for loan file compliance</li>
                            </ul>
                        </div>
                        <div class="lg:col-span-2 flex justify-center">
                            <x-graphics.phone-mockup variant="default" size="lg" image="images/mockups/loan-draw-construction.webp" imageAlt="Construction site progress photo" />
                        </div>
                    </div>

                    {{-- Insurance Claims --}}
                    <div x-show="activeTab === 'insurance'" x-transition class="grid lg:grid-cols-5 gap-8 items-start bg-white rounded-lg border border-neutral-200 p-8">
                        <div class="lg:col-span-3">
                            <div class="text-2xl font-bold text-primary-600 mb-3">Flag suspicious claims before payout</div>
                            <h3 class="text-xl font-semibold text-neutral-900 mb-4">Accelerate Legitimate Claims. Flag Suspicious Submissions.</h3>
                            <p class="text-neutral-700 mb-6">Automatically verify claim photos were taken at the reported location and time. Detect AI-generated damage documentation and altered evidence before it reaches an adjuster.</p>
                            <ul class="space-y-3 text-neutral-700">
                                <li class="flex items-start gap-3"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Instant verification of claim photo authenticity</li>
                                <li class="flex items-start gap-3"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> AI-generated and altered damage documentation flagged</li>
                                <li class="flex items-start gap-3"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Geolocation confirmation matching reported incident location</li>
                                <li class="flex items-start gap-3"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Reduced SIU referral backlog through automated flagging</li>
                            </ul>
                        </div>
                        <div class="lg:col-span-2 flex justify-center">
                            <x-graphics.phone-mockup variant="scanning" size="lg" image="images/mockups/insurance-car-damage.webp" imageAlt="Insurance claim damage photo" />
                        </div>
                    </div>

                    {{-- KYC Onboarding --}}
                    <div x-show="activeTab === 'kyc'" x-transition class="grid lg:grid-cols-5 gap-8 items-start bg-white rounded-lg border border-neutral-200 p-8">
                        <div class="lg:col-span-3">
                            <div class="text-2xl font-bold text-primary-600 mb-3">Stop synthetic IDs at the source</div>
                            <h3 class="text-xl font-semibold text-neutral-900 mb-4">Document Authentication at Point of Capture</h3>
                            <p class="text-neutral-700 mb-6">Verify identity documents are photographed live — not uploaded from a gallery or generated by AI. Block fraudulent onboarding before it enters your system.</p>
                            <ul class="space-y-3 text-neutral-700">
                                <li class="flex items-start gap-3"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> ID photos confirmed as live capture, not uploaded</li>
                                <li class="flex items-start gap-3"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Document tampering and digital manipulation detected</li>
                                <li class="flex items-start gap-3"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Text extraction and validation via integrated OCR</li>
                                <li class="flex items-start gap-3"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Compliance-ready audit trails for regulatory review</li>
                            </ul>
                        </div>
                        <div class="lg:col-span-2 flex justify-center">
                            <x-graphics.phone-mockup variant="error" size="lg" image="images/mockups/kyc-id-document.webp" imageAlt="KYC identity document verification" />
                        </div>
                    </div>

                    {{-- Asset Verification --}}
                    <div x-show="activeTab === 'asset'" x-transition class="grid lg:grid-cols-5 gap-8 items-start bg-white rounded-lg border border-neutral-200 p-8">
                        <div class="lg:col-span-3">
                            <div class="text-2xl font-bold text-primary-600 mb-3">Verify what exists, where it exists</div>
                            <h3 class="text-xl font-semibold text-neutral-900 mb-4">Authenticated Evidence for Collateral and Inventory</h3>
                            <p class="text-neutral-700 mb-6">Confirm collateral and inventory documentation with timestamped, geolocated photography that can't be recycled or manipulated.</p>
                            <ul class="space-y-3 text-neutral-700">
                                <li class="flex items-start gap-3"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Timestamped, geolocated asset photography</li>
                                <li class="flex items-start gap-3"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Unique capture confirmed — no duplicated imagery</li>
                                <li class="flex items-start gap-3"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Photo manipulation and staging detection</li>
                                <li class="flex items-start gap-3"><x-heroicon-s-check class="w-5 h-5 text-primary-600 mt-0.5 shrink-0" /> Chain of custody documentation for audit requirements</li>
                            </ul>
                        </div>
                        <div class="lg:col-span-2 flex justify-center">
                            <x-graphics.phone-mockup variant="success" size="lg" image="images/mockups/asset-warehouse.webp" imageAlt="Asset warehouse inventory verification" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section 8: Statistics Strip --}}
    <section class="py-16 bg-primary-600"
        x-data="{
            visible: false,
            animateCount(el, target, suffix = '') {
                let current = 0;
                const step = Math.ceil(target / 40);
                const interval = setInterval(() => {
                    current += step;
                    if (current >= target) { current = target; clearInterval(interval); }
                    el.textContent = current.toLocaleString() + suffix;
                }, 30);
            }
        }"
        x-intersect.once="visible = true"
    >
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-4xl md:text-5xl font-bold text-white mb-2"
                        x-show="visible"
                        x-transition
                        x-init="$watch('visible', v => { if (v) animateCount($el, 10, 'M+') })">0</div>
                    <div class="text-primary-100 text-sm uppercase tracking-wider">ID Verifications</div>
                </div>
                <div>
                    <div class="text-4xl md:text-5xl font-bold text-white mb-2"
                        x-show="visible"
                        x-transition
                        x-text="visible ? '<500ms' : '0'">0</div>
                    <div class="text-primary-100 text-sm uppercase tracking-wider">Verification Speed</div>
                </div>
                <div>
                    <div class="text-4xl md:text-5xl font-bold text-white mb-2"
                        x-show="visible"
                        x-transition
                        x-init="$watch('visible', v => { if (v) animateCount($el, 35, '+') })">0</div>
                    <div class="text-primary-100 text-sm uppercase tracking-wider">Security Tests</div>
                </div>
                <div>
                    <div class="text-4xl md:text-5xl font-bold text-white mb-2"
                        x-show="visible"
                        x-transition
                        x-init="$watch('visible', v => { if (v) animateCount($el, 3, '') })">0</div>
                    <div class="text-primary-100 text-sm uppercase tracking-wider">Granted Patents</div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section 9: Technology Highlights (Bento Grid) --}}
    <section id="technology" class="py-20 lg:py-28 bg-white"
        x-data="{ visible: false }" x-intersect.once="visible = true">
        <div class="max-w-7xl mx-auto px-4 transition-all duration-700 ease-out" :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'">
            <div class="text-center mb-12">
                <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">Technology</p>
                <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                    Enterprise-Grade Infrastructure You Can Trust
                </h2>
            </div>

            {{-- Bento Grid --}}
            <div class="grid md:grid-cols-3 gap-6">
                {{-- Large card: API Response Preview --}}
                <div class="md:col-span-2 md:row-span-2 p-8 bg-white rounded-lg border border-neutral-200">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-12 h-12 rounded-lg bg-primary-100 flex items-center justify-center">
                            <x-heroicon-o-check-badge class="w-7 h-7 text-primary-600" />
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-neutral-900">Results in Under 500 Milliseconds</h3>
                            <p class="text-sm text-neutral-500">35+ checks, one API call</p>
                        </div>
                    </div>
                    {{-- API Response mockup (keep dark — code blocks are conventionally dark) --}}
                    <div class="rounded-lg bg-neutral-900 p-5 font-mono text-sm leading-relaxed overflow-x-auto">
                        <div class="text-neutral-500">// POST /api/v1/verify</div>
                        <div class="mt-2 text-neutral-300">{</div>
                        <div class="ml-4 text-neutral-300">"<span class="text-primary-400">authenticity_status</span>": "<span class="text-green-400">verified</span>",</div>
                        <div class="ml-4 text-neutral-300">"<span class="text-primary-400">capture_confidence</span>": <span class="text-amber-400">0.98</span>,</div>
                        <div class="ml-4 text-neutral-300">"<span class="text-primary-400">live_capture</span>": <span class="text-green-400">true</span>,</div>
                        <div class="ml-4 text-neutral-300">"<span class="text-primary-400">ai_generated</span>": <span class="text-red-400">false</span>,</div>
                        <div class="ml-4 text-neutral-300">"<span class="text-primary-400">tampering_detected</span>": <span class="text-red-400">false</span>,</div>
                        <div class="ml-4 text-neutral-300">"<span class="text-primary-400">gps_verified</span>": <span class="text-green-400">true</span>,</div>
                        <div class="ml-4 text-neutral-300">"<span class="text-primary-400">processing_time_ms</span>": <span class="text-amber-400">347</span></div>
                        <div class="text-neutral-300">}</div>
                    </div>
                </div>

                {{-- Medium card: SDK Integration --}}
                <div class="p-6 bg-white rounded-lg border border-neutral-200">
                    <div class="w-12 h-12 mb-4 rounded-lg bg-primary-100 flex items-center justify-center">
                        <x-heroicon-o-code-bracket class="w-6 h-6 text-primary-600" />
                    </div>
                    <h3 class="text-lg font-semibold text-neutral-900 mb-2">Integrate in Hours, Not Weeks</h3>
                    <p class="text-sm text-neutral-600">Native SDKs for iOS and Android. Embed capture and verification directly into existing mobile applications with minimal code changes.</p>
                </div>

                {{-- Medium card: Real-Time Processing --}}
                <div class="p-6 bg-white rounded-lg border border-neutral-200">
                    <div class="w-12 h-12 mb-4 rounded-lg bg-primary-100 flex items-center justify-center">
                        <x-heroicon-o-bolt class="w-6 h-6 text-primary-600" />
                    </div>
                    <h3 class="text-lg font-semibold text-neutral-900 mb-2">Real-Time, Not Batch</h3>
                    <p class="text-sm text-neutral-600">Verification results returned via REST API before your user finishes the next step. No queues, no delays.</p>
                </div>

                {{-- Small card: On-Premise --}}
                <div class="p-6 bg-white rounded-lg border border-neutral-200">
                    <div class="w-10 h-10 mb-3 rounded-lg bg-primary-100 flex items-center justify-center">
                        <x-heroicon-o-server class="w-5 h-5 text-primary-600" />
                    </div>
                    <h3 class="text-base font-semibold text-neutral-900 mb-1">On-Premise Available</h3>
                    <p class="text-sm text-neutral-600">Deploy in your own infrastructure for data residency and air-gapped environments.</p>
                </div>

                {{-- Small card: API-First --}}
                <div class="p-6 bg-white rounded-lg border border-neutral-200">
                    <div class="w-10 h-10 mb-3 rounded-lg bg-primary-100 flex items-center justify-center">
                        <x-heroicon-o-command-line class="w-5 h-5 text-primary-600" />
                    </div>
                    <h3 class="text-base font-semibold text-neutral-900 mb-1">API-First Architecture</h3>
                    <p class="text-sm text-neutral-600">RESTful APIs with comprehensive documentation. Plug into existing workflows and CI pipelines.</p>
                </div>

                {{-- Small card: Compliance --}}
                <div class="p-6 bg-white rounded-lg border border-neutral-200">
                    <div class="w-10 h-10 mb-3 rounded-lg bg-primary-100 flex items-center justify-center">
                        <x-heroicon-o-document-check class="w-5 h-5 text-primary-600" />
                    </div>
                    <h3 class="text-base font-semibold text-neutral-900 mb-1">Compliance Ready</h3>
                    <p class="text-sm text-neutral-600">Every verification generates a signed audit trail for regulatory review and dispute resolution.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Section 10: Comparison Table --}}
    <section class="py-20 lg:py-28 bg-neutral-50"
        x-data="{ visible: false }" x-intersect.once="visible = true">
        <div class="max-w-5xl mx-auto px-4 transition-all duration-700 ease-out" :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'">
            <div class="text-center mb-12">
                <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">Why PixaProof</p>
                <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                    How We Compare
                </h2>
            </div>

            {{-- Desktop Table --}}
            <div class="hidden md:block overflow-hidden rounded-lg border border-neutral-200">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="bg-neutral-100">
                            <th class="px-6 py-4 text-left font-semibold text-neutral-900">Capability</th>
                            <th class="px-6 py-4 text-center font-semibold text-neutral-500">Manual Review</th>
                            <th class="px-6 py-4 text-center font-semibold text-neutral-500">Basic Metadata</th>
                            <th class="px-6 py-4 text-center font-semibold text-primary-700 bg-primary-50">PixaProof</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-neutral-200">
                        <tr>
                            <td class="px-6 py-4 text-neutral-700">Detect gallery uploads</td>
                            <td class="px-6 py-4 text-center"><x-heroicon-o-x-mark class="w-5 h-5 text-red-400 mx-auto" /></td>
                            <td class="px-6 py-4 text-center"><x-heroicon-o-x-mark class="w-5 h-5 text-red-400 mx-auto" /></td>
                            <td class="px-6 py-4 text-center bg-primary-50"><x-heroicon-s-check class="w-5 h-5 text-green-500 mx-auto" /></td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 text-neutral-700">Verify GPS authenticity</td>
                            <td class="px-6 py-4 text-center"><x-heroicon-o-x-mark class="w-5 h-5 text-red-400 mx-auto" /></td>
                            <td class="px-6 py-4 text-center text-neutral-500">Partial</td>
                            <td class="px-6 py-4 text-center bg-primary-50"><x-heroicon-s-check class="w-5 h-5 text-green-500 mx-auto" /></td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 text-neutral-700">Detect AI-generated content</td>
                            <td class="px-6 py-4 text-center"><x-heroicon-o-x-mark class="w-5 h-5 text-red-400 mx-auto" /></td>
                            <td class="px-6 py-4 text-center"><x-heroicon-o-x-mark class="w-5 h-5 text-red-400 mx-auto" /></td>
                            <td class="px-6 py-4 text-center bg-primary-50"><x-heroicon-s-check class="w-5 h-5 text-green-500 mx-auto" /></td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 text-neutral-700">Detect pixel-level edits</td>
                            <td class="px-6 py-4 text-center text-neutral-500">Subjective</td>
                            <td class="px-6 py-4 text-center"><x-heroicon-o-x-mark class="w-5 h-5 text-red-400 mx-auto" /></td>
                            <td class="px-6 py-4 text-center bg-primary-50"><x-heroicon-s-check class="w-5 h-5 text-green-500 mx-auto" /></td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 text-neutral-700">Time to verify</td>
                            <td class="px-6 py-4 text-center text-neutral-500">Hours–Days</td>
                            <td class="px-6 py-4 text-center text-neutral-500">Minutes</td>
                            <td class="px-6 py-4 text-center bg-primary-50 font-semibold text-primary-700">&lt;500ms</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 text-neutral-700">Audit trail</td>
                            <td class="px-6 py-4 text-center text-neutral-500">Manual</td>
                            <td class="px-6 py-4 text-center"><x-heroicon-o-x-mark class="w-5 h-5 text-red-400 mx-auto" /></td>
                            <td class="px-6 py-4 text-center bg-primary-50 font-semibold text-primary-700">Automatic</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            {{-- Mobile: Stacked cards --}}
            <div class="md:hidden space-y-4">
                @php
                    $comparisons = [
                        ['label' => 'Detect gallery uploads', 'manual' => 'No', 'metadata' => 'No', 'pixaproof' => 'Yes'],
                        ['label' => 'Verify GPS authenticity', 'manual' => 'No', 'metadata' => 'Partial', 'pixaproof' => 'Yes'],
                        ['label' => 'Detect AI content', 'manual' => 'No', 'metadata' => 'No', 'pixaproof' => 'Yes'],
                        ['label' => 'Detect pixel edits', 'manual' => 'Subjective', 'metadata' => 'No', 'pixaproof' => 'Yes'],
                        ['label' => 'Time to verify', 'manual' => 'Hours', 'metadata' => 'Minutes', 'pixaproof' => '<500ms'],
                        ['label' => 'Audit trail', 'manual' => 'Manual', 'metadata' => 'None', 'pixaproof' => 'Automatic'],
                    ];
                @endphp
                @foreach($comparisons as $row)
                    <div class="rounded-lg border border-neutral-200 p-4">
                        <div class="font-semibold text-neutral-900 mb-3">{{ $row['label'] }}</div>
                        <div class="grid grid-cols-3 gap-2 text-center text-sm">
                            <div>
                                <div class="text-neutral-500 text-xs mb-1">Manual</div>
                                <div class="text-neutral-600">{{ $row['manual'] }}</div>
                            </div>
                            <div>
                                <div class="text-neutral-500 text-xs mb-1">Metadata</div>
                                <div class="text-neutral-600">{{ $row['metadata'] }}</div>
                            </div>
                            <div class="bg-primary-50 rounded p-1">
                                <div class="text-primary-600 text-xs mb-1 font-semibold">PixaProof</div>
                                <div class="text-primary-700 font-semibold">{{ $row['pixaproof'] }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Section 11: Credibility / Heritage --}}
    <section id="about" class="py-20 lg:py-28 bg-neutral-100 border-t-4 border-primary-500"
        x-data="{ visible: false }" x-intersect.once="visible = true">
        <div class="max-w-7xl mx-auto px-4 transition-all duration-700 ease-out" :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'">
            <div class="text-center mb-16">
                <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">Heritage</p>
                <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                    Built by Southeast Asia's Most Experienced Identity Verification Team
                </h2>
                <p class="text-neutral-600 text-lg max-w-3xl mx-auto">
                    PixaProof is developed by MyNasional eKYC (formerly Innov8tif Solutions), Southeast Asia's largest identity assurance provider. Over a decade of experience securing identity workflows for banks, insurers, and government agencies across ASEAN.
                </p>
            </div>

            {{-- Timeline --}}
            <div class="relative mb-16">
                {{-- Connecting line (desktop) --}}
                <div class="hidden md:block absolute top-6 left-0 right-0 h-0.5 bg-neutral-300"></div>

                <div class="grid grid-cols-2 md:grid-cols-6 gap-6">
                    @php
                        $milestones = [
                            ['year' => '2011', 'label' => 'Founded as Innov8tif', 'icon' => 'flag'],
                            ['year' => '2019', 'label' => 'ISO 30107-3 Certified', 'icon' => 'shield-check'],
                            ['year' => '2020', 'label' => 'US Patent Granted', 'icon' => 'light-bulb'],
                            ['year' => '2023', 'label' => 'NexG / Bursa Listed', 'icon' => 'building-office'],
                            ['year' => '2024', 'label' => '10M+ Verifications', 'icon' => 'finger-print'],
                            ['year' => '2025', 'label' => 'PixaProof Launches', 'icon' => 'rocket-launch'],
                        ];
                    @endphp
                    @foreach($milestones as $m)
                        <div class="text-center relative">
                            <div class="relative z-10 w-12 h-12 mx-auto mb-3 rounded-full bg-white border-2 border-primary-500 flex items-center justify-center">
                                @if($m['icon'] === 'flag')
                                    <x-heroicon-o-flag class="w-5 h-5 text-primary-600" />
                                @elseif($m['icon'] === 'shield-check')
                                    <x-heroicon-o-shield-check class="w-5 h-5 text-primary-600" />
                                @elseif($m['icon'] === 'light-bulb')
                                    <x-heroicon-o-light-bulb class="w-5 h-5 text-primary-600" />
                                @elseif($m['icon'] === 'building-office')
                                    <x-heroicon-o-building-office class="w-5 h-5 text-primary-600" />
                                @elseif($m['icon'] === 'finger-print')
                                    <x-heroicon-o-finger-print class="w-5 h-5 text-primary-600" />
                                @elseif($m['icon'] === 'rocket-launch')
                                    <x-heroicon-o-rocket-launch class="w-5 h-5 text-primary-600" />
                                @endif
                            </div>
                            <div class="text-lg font-bold text-neutral-900">{{ $m['year'] }}</div>
                            <div class="text-sm text-neutral-600 mt-1">{{ $m['label'] }}</div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Certifications Row --}}
            <div class="grid sm:grid-cols-3 gap-6">
                <div class="text-center p-6 bg-white border border-neutral-200 rounded-lg">
                    <div class="w-12 h-12 mx-auto mb-4 rounded-lg bg-primary-100 flex items-center justify-center">
                        <x-heroicon-o-shield-check class="w-6 h-6 text-primary-600" />
                    </div>
                    <h3 class="font-semibold text-neutral-900 mb-1">ISO 30107-3</h3>
                    <p class="text-sm text-neutral-600">iBeta Level 1 & 2 Liveness Compliance</p>
                </div>
                <div class="text-center p-6 bg-white border border-neutral-200 rounded-lg">
                    <div class="w-12 h-12 mx-auto mb-4 rounded-lg bg-primary-100 flex items-center justify-center">
                        <x-heroicon-o-light-bulb class="w-6 h-6 text-primary-600" />
                    </div>
                    <h3 class="font-semibold text-neutral-900 mb-1">3 Patents</h3>
                    <p class="text-sm text-neutral-600">Including US patent for hologram detection</p>
                </div>
                <div class="text-center p-6 bg-white border border-neutral-200 rounded-lg">
                    <div class="w-12 h-12 mx-auto mb-4 rounded-lg bg-primary-100 flex items-center justify-center">
                        <x-heroicon-o-building-office class="w-6 h-6 text-primary-600" />
                    </div>
                    <h3 class="font-semibold text-neutral-900 mb-1">Bursa Malaysia Listed</h3>
                    <p class="text-sm text-neutral-600">Part of NexG Bhd. public-listed group</p>
                </div>
            </div>

            <div class="text-center mt-10">
                <a href="https://innov8tif.com" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 text-primary-600 hover:text-primary-700 transition-colors">
                    Learn more about Innov8tif
                    <x-heroicon-o-arrow-right class="w-4 h-4" />
                </a>
            </div>
        </div>
    </section>

    {{-- Section 12: FAQ --}}
    <section id="faq" class="py-20 lg:py-28 bg-white"
        x-data="{ visible: false }" x-intersect.once="visible = true">
        <div class="max-w-3xl mx-auto px-4 transition-all duration-700 ease-out" :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'">
            <div class="text-center mb-12">
                <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">FAQ</p>
                <h2 class="text-3xl md:text-4xl font-bold text-neutral-900">
                    Frequently Asked Questions
                </h2>
            </div>

            {{-- Accordion --}}
            <div x-data="{ openFaq: null }" class="space-y-3">
                @php
                    $faqs = [
                        [
                            'q' => 'How does PixaProof integrate with existing systems?',
                            'a' => 'PixaProof provides REST APIs and native SDKs for iOS and Android. Integration involves embedding the SDK in your mobile application and connecting verification results to your backend via API. Basic integration takes hours; production deployment typically 1-2 weeks with full support.',
                        ],
                        [
                            'q' => 'How does PixaProof detect AI-generated images?',
                            'a' => 'Our verification engine runs 35+ checks including pixel-level analysis, metadata consistency verification, and purpose-built AI detection models trained on millions of synthetic and authentic images. The system identifies deepfakes, AI-generated documents, and digitally altered evidence with high confidence.',
                        ],
                        [
                            'q' => 'What is PIEA and how does it work?',
                            'a' => 'PIEA (Photo Integrity Encoding Algorithm) is our proprietary cryptographic signature system. At the moment of capture, the SDK generates a unique signature binding the image to the device, timestamp, and GPS coordinates. This signature is verified server-side — any modification to the image invalidates it.',
                        ],
                        [
                            'q' => 'Can PixaProof work with our existing mobile app?',
                            'a' => 'Yes. The PixaProof SDK embeds directly into existing iOS (Swift/Objective-C) and Android (Kotlin/Java) applications, as well as React Native and Flutter apps. Your users capture photos through your app — PixaProof runs invisibly in the background.',
                        ],
                        [
                            'q' => 'What deployment options are available?',
                            'a' => 'Cloud-hosted (SaaS), private cloud, and on-premise deployments. On-premise options support data residency requirements and air-gapped infrastructure. All options include the same verification capabilities.',
                        ],
                        [
                            'q' => 'What happens when manipulation is detected?',
                            'a' => 'The API response includes detailed flags indicating specific anomalies — whether it\'s a gallery upload, GPS spoofing, pixel manipulation, or AI-generated content. Your organization configures thresholds and routing rules for flagged submissions.',
                        ],
                        [
                            'q' => 'What industries does PixaProof serve?',
                            'a' => 'PixaProof is built for any industry that relies on user-submitted photographic evidence: banking and lending (loan draw inspections, KYC), insurance (claims verification), government (identity documents), real estate, and e-commerce (product verification, returns).',
                        ],
                        [
                            'q' => 'How is data handled and protected?',
                            'a' => 'PixaProof supports international data protection standards including GDPR. Verification metadata retention is configurable per organizational policy. All data is encrypted in transit (TLS 1.3) and at rest. Full audit trails are maintained for compliance and dispute resolution.',
                        ],
                    ];
                @endphp

                @foreach($faqs as $index => $faq)
                    <div class="border border-neutral-200 rounded-lg overflow-hidden">
                        <button
                            @click="openFaq = openFaq === {{ $index + 1 }} ? null : {{ $index + 1 }}"
                            class="w-full px-6 py-4 text-left font-semibold text-neutral-900 bg-white hover:bg-neutral-50 flex justify-between items-center gap-4 transition-colors"
                        >
                            {{ $faq['q'] }}
                            <x-heroicon-o-chevron-down class="w-5 h-5 text-neutral-500 transition-transform shrink-0" x-bind:class="openFaq === {{ $index + 1 }} ? 'rotate-180' : ''" />
                        </button>
                        <div x-show="openFaq === {{ $index + 1 }}" x-collapse class="px-6 py-4 bg-neutral-50 border-t border-neutral-200">
                            <p class="text-neutral-700 leading-relaxed">{{ $faq['a'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Section 13: Final CTA --}}
    <section class="py-20 lg:py-28 bg-gradient-to-b from-primary-50 to-primary-100"
        x-data="{ visible: false }" x-intersect.once="visible = true">
        <div class="max-w-4xl mx-auto px-4 text-center transition-all duration-700 ease-out" :class="visible ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-8'">
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                Your Next Fraudulent Image Could Arrive Today
            </h2>
            <p class="text-xl text-neutral-600 mb-10 max-w-2xl mx-auto">
                See PixaProof verify a live photo in under 500 milliseconds. Book a demo with our solutions team.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <x-button href="{{ route('contact') }}" size="lg">
                    Book a Demo
                </x-button>
                <x-button href="mailto:sales@innov8tif.com" variant="outline" size="lg" class="border-neutral-300 text-neutral-700 hover:bg-neutral-100">
                    Email Sales Team
                </x-button>
            </div>

            <p class="mt-10 text-sm text-neutral-500">
                Trusted by the team behind 10M+ identity verifications across ASEAN
            </p>
        </div>
    </section>
@endsection
