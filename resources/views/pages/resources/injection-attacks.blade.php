@extends('layouts.app')

@section('title', 'What Are Injection Attacks? - PixaProof')
@section('description', 'Learn how injection attacks compromise identity verification systems and how PixaProof prevents them with live capture enforcement and cryptographic proof.')

@section('content')
    {{-- Hero Section --}}
    <section class="relative isolate overflow-hidden bg-white px-4 pt-24 pb-20 lg:pt-32 lg:pb-28">
        {{-- Decorative background --}}
        <div class="absolute inset-0 -z-10">
            <div class="absolute inset-0 bg-gradient-to-b from-primary-50/50 to-white"></div>
            <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-primary-50/30 to-transparent"></div>
        </div>

        <div class="relative z-10 max-w-4xl mx-auto">
            {{-- Breadcrumb --}}
            <x-breadcrumb :items="[
                ['label' => 'Resources'],
                ['label' => 'Injection Attacks'],
            ]" class="mb-8 justify-center" />

            <div class="text-center">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded bg-primary-100 border border-primary-200 mb-6">
                    <x-heroicon-s-shield-exclamation class="w-4 h-4 text-primary-600" />
                    <span class="text-sm font-medium text-primary-700 uppercase tracking-wider">Security Resource</span>
                </div>

                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-neutral-900 mb-6 leading-tight">
                    What Are Injection Attacks?
                </h1>

                <p class="text-lg md:text-xl text-neutral-700 mb-8 max-w-3xl mx-auto leading-relaxed">
                    Understanding the primary gateway for digital identity fraud and how organizations can protect their verification systems.
                </p>

                {{-- Reading time indicator --}}
                <div class="inline-flex items-center gap-2 text-neutral-500 text-sm">
                    <x-heroicon-o-clock class="w-4 h-4" />
                    <span>5 min read</span>
                </div>
            </div>
        </div>
    </section>

    {{-- Definition Section --}}
    <x-section>
        <div class="max-w-3xl mx-auto">
            <p class="text-sm font-semibold uppercase tracking-wider text-primary-600 mb-4">Definition</p>
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                The anatomy of an injection attack
            </h2>
            
            <div class="prose prose-lg max-w-none">
                <p class="text-neutral-700 text-lg leading-relaxed mb-6">
                    An <strong class="text-neutral-900">injection attack</strong> occurs when a fraudster bypasses live photo capture by uploading a pre-existing, edited, or synthetic image into a verification system. Instead of taking a genuine photo in real-time, they "inject" a fraudulent image that the system accepts as authentic.
                </p>

                <p class="text-neutral-700 text-lg leading-relaxed mb-6">
                    This attack vector exploits a fundamental weakness in traditional verification systems: <strong class="text-neutral-900">they cannot distinguish between a freshly captured photo and one that was prepared beforehand</strong>.
                </p>

                <div class="bg-neutral-50 border border-neutral-200 rounded p-6 my-8">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0">
                            <x-heroicon-s-light-bulb class="w-6 h-6 text-accent-500" />
                        </div>
                        <div>
                            <p class="text-neutral-900 font-semibold mb-2">Why it matters</p>
                            <p class="text-neutral-700">
                                Industry data suggests that 15-20% of digital account opening attempts involve some form of injection attack. For organizations processing thousands of verifications daily, this represents a significant fraud risk and potential regulatory exposure.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-section>

    {{-- Common Attack Types Section --}}
    <x-section bg="primary">
        <div class="text-center mb-16">
            <p class="text-sm font-semibold uppercase tracking-wider text-primary-600 mb-4">Attack Vectors</p>
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                Common types of injection attacks
            </h2>
            <p class="text-neutral-700 text-lg max-w-2xl mx-auto">
                Fraudsters employ various techniques to inject fraudulent images into verification workflows. Understanding these methods is the first step to defending against them.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-6 max-w-5xl mx-auto">
            {{-- Gallery Injection --}}
            <div class="bg-white border border-neutral-200 rounded p-8 shadow-sm">
                <div class="flex items-center gap-4 mb-4">
                    <div class="flex items-center justify-center w-12 h-12 rounded bg-rose-100">
                        <x-heroicon-s-photo class="w-6 h-6 text-rose-600" />
                    </div>
                    <h3 class="text-xl font-semibold text-neutral-900">Gallery Injection</h3>
                </div>
                <p class="text-neutral-700 mb-4">
                    User uploads a pre-captured or edited photo from their device's gallery instead of taking a live photo. This is the most common attack vector, often using stolen ID images or professionally edited documents.
                </p>
                <div class="flex items-center gap-2 text-sm">
                    <span class="px-2 py-1 bg-rose-50 text-rose-700 rounded font-medium">High frequency</span>
                    <span class="px-2 py-1 bg-neutral-100 text-neutral-600 rounded">Easy to execute</span>
                </div>
            </div>

            {{-- Virtual Camera Injection --}}
            <div class="bg-white border border-neutral-200 rounded p-8 shadow-sm">
                <div class="flex items-center gap-4 mb-4">
                    <div class="flex items-center justify-center w-12 h-12 rounded bg-purple-100">
                        <x-heroicon-s-video-camera class="w-6 h-6 text-purple-600" />
                    </div>
                    <h3 class="text-xl font-semibold text-neutral-900">Virtual Camera Injection</h3>
                </div>
                <p class="text-neutral-700 mb-4">
                    Software intercepts the camera feed at the system level and injects fake video or static images. Uses tools like ManyCam or OBS to substitute the real camera feed with pre-recorded content.
                </p>
                <div class="flex items-center gap-2 text-sm">
                    <span class="px-2 py-1 bg-purple-50 text-purple-700 rounded font-medium">Sophisticated</span>
                    <span class="px-2 py-1 bg-neutral-100 text-neutral-600 rounded">Hard to detect</span>
                </div>
            </div>

            {{-- Deepfake Injection --}}
            <div class="bg-white border border-neutral-200 rounded p-8 shadow-sm">
                <div class="flex items-center gap-4 mb-4">
                    <div class="flex items-center justify-center w-12 h-12 rounded bg-amber-100">
                        <x-heroicon-s-cpu-chip class="w-6 h-6 text-amber-600" />
                    </div>
                    <h3 class="text-xl font-semibold text-neutral-900">Deepfake Injection</h3>
                </div>
                <p class="text-neutral-700 mb-4">
                    AI-generated faces or documents are injected into the verification flow. Modern deepfakes can animate still photos with realistic eye blinks and head movements to fool liveness checks.
                </p>
                <div class="flex items-center gap-2 text-sm">
                    <span class="px-2 py-1 bg-amber-50 text-amber-700 rounded font-medium">Growing threat</span>
                    <span class="px-2 py-1 bg-neutral-100 text-neutral-600 rounded">AI-powered</span>
                </div>
            </div>

            {{-- Screenshot Injection --}}
            <div class="bg-white border border-neutral-200 rounded p-8 shadow-sm">
                <div class="flex items-center gap-4 mb-4">
                    <div class="flex items-center justify-center w-12 h-12 rounded bg-cyan-100">
                        <x-heroicon-s-device-phone-mobile class="w-6 h-6 text-cyan-600" />
                    </div>
                    <h3 class="text-xl font-semibold text-neutral-900">Screenshot Injection</h3>
                </div>
                <p class="text-neutral-700 mb-4">
                    Captures a legitimate person's photo from social media, corporate websites, or other public sources to inject during verification. Often combined with synthetic document generation.
                </p>
                <div class="flex items-center gap-2 text-sm">
                    <span class="px-2 py-1 bg-cyan-50 text-cyan-700 rounded font-medium">Identity theft</span>
                    <span class="px-2 py-1 bg-neutral-100 text-neutral-600 rounded">Social engineering</span>
                </div>
            </div>
        </div>
    </x-section>

    {{-- Why Traditional Verification Fails Section --}}
    <x-section>
        <div class="grid lg:grid-cols-2 gap-12 items-center max-w-6xl mx-auto">
            <div>
                <p class="text-sm font-semibold uppercase tracking-wider text-primary-600 mb-4">The Problem</p>
                <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                    Why traditional verification fails
                </h2>
                <p class="text-neutral-700 text-lg mb-8">
                    Most identity verification systems rely on analyzing the submitted image after it has been received. This approach has fundamental limitations that sophisticated fraudsters exploit.
                </p>

                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-10 h-10 rounded bg-red-100 flex items-center justify-center">
                            <x-heroicon-s-x-mark class="w-5 h-5 text-red-600" />
                        </div>
                        <div>
                            <h4 class="text-neutral-900 font-semibold mb-1">File analysis alone cannot detect live capture</h4>
                            <p class="text-neutral-600">
                                Once an image is on the device, there's no reliable way to determine if it was just captured or retrieved from storage.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-10 h-10 rounded bg-red-100 flex items-center justify-center">
                            <x-heroicon-s-x-mark class="w-5 h-5 text-red-600" />
                        </div>
                        <div>
                            <h4 class="text-neutral-900 font-semibold mb-1">Metadata can be spoofed or stripped</h4>
                            <p class="text-neutral-600">
                                EXIF data, timestamps, and device information are easily manipulated with freely available tools.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-10 h-10 rounded bg-red-100 flex items-center justify-center">
                            <x-heroicon-s-x-mark class="w-5 h-5 text-red-600" />
                        </div>
                        <div>
                            <h4 class="text-neutral-900 font-semibold mb-1">Image quality checks are insufficient</h4>
                            <p class="text-neutral-600">
                                High-resolution photos from digital cameras or smartphones pass quality thresholds regardless of when they were taken.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Visual callout --}}
            <div class="bg-neutral-50 border border-neutral-200 rounded p-8">
                <div class="text-center mb-6">
                    <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-red-100 mb-4">
                        <x-heroicon-s-exclamation-triangle class="w-8 h-8 text-red-600" />
                    </div>
                    <h4 class="text-xl font-bold text-neutral-900 mb-2">Traditional Systems Are Vulnerable</h4>
                    <p class="text-neutral-600">
                        Without capture-level protection, verification systems remain highly susceptible to injection attacks across all vectors.
                    </p>
                </div>

                <div class="space-y-3 mt-6">
                    <div class="flex items-center gap-3 p-3 bg-white rounded border border-neutral-200">
                        <x-heroicon-s-x-circle class="w-5 h-5 text-red-500 shrink-0" />
                        <span class="text-sm text-neutral-700"><strong>Gallery injection</strong> bypasses live capture requirements</span>
                    </div>
                    <div class="flex items-center gap-3 p-3 bg-white rounded border border-neutral-200">
                        <x-heroicon-s-x-circle class="w-5 h-5 text-red-500 shrink-0" />
                        <span class="text-sm text-neutral-700"><strong>Virtual cameras</strong> intercept and manipulate video feeds</span>
                    </div>
                    <div class="flex items-center gap-3 p-3 bg-white rounded border border-neutral-200">
                        <x-heroicon-s-x-circle class="w-5 h-5 text-red-500 shrink-0" />
                        <span class="text-sm text-neutral-700"><strong>Deepfakes</strong> fool liveness detection mechanisms</span>
                    </div>
                    <div class="flex items-center gap-3 p-3 bg-white rounded border border-neutral-200">
                        <x-heroicon-s-x-circle class="w-5 h-5 text-red-500 shrink-0" />
                        <span class="text-sm text-neutral-700"><strong>Screenshot injection</strong> uses stolen images from public sources</span>
                    </div>
                </div>
            </div>
        </div>
    </x-section>

    {{-- The Solution Section --}}
    <x-section bg="neutral">
        <div class="text-center mb-16">
            <p class="text-sm font-semibold uppercase tracking-wider text-primary-600 mb-4">The Solution</p>
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                Live capture enforcement
            </h2>
            <p class="text-neutral-700 text-lg max-w-2xl mx-auto">
                PixaProof prevents injection attacks at the source by ensuring every photo is captured live through a secured camera interface with cryptographic proof of authenticity.
            </p>
        </div>

        <div class="grid lg:grid-cols-3 gap-8 max-w-5xl mx-auto">
            {{-- Prevention at Capture --}}
            <div class="bg-white border border-neutral-200 rounded p-8 shadow-sm">
                <div class="flex items-center justify-center w-14 h-14 rounded bg-primary-100 mb-6">
                    <x-heroicon-s-camera class="w-7 h-7 text-primary-600" />
                </div>
                <h3 class="text-xl font-semibold text-neutral-900 mb-3">Prevention at Capture Level</h3>
                <p class="text-neutral-700 mb-4">
                    Our SDK takes control of the camera interface, completely blocking gallery access and file picker dialogs. The only way to submit an image is through live capture.
                </p>
                <ul class="space-y-2">
                    <li class="flex items-center gap-2 text-sm text-neutral-600">
                        <x-heroicon-s-check class="w-4 h-4 text-green-600 flex-shrink-0" />
                        Gallery access completely blocked
                    </li>
                    <li class="flex items-center gap-2 text-sm text-neutral-600">
                        <x-heroicon-s-check class="w-4 h-4 text-green-600 flex-shrink-0" />
                        Virtual camera detection
                    </li>
                    <li class="flex items-center gap-2 text-sm text-neutral-600">
                        <x-heroicon-s-check class="w-4 h-4 text-green-600 flex-shrink-0" />
                        Emulator/simulator blocking
                    </li>
                </ul>
            </div>

            {{-- 35+ Detection Algorithms --}}
            <div class="bg-white border border-neutral-200 rounded p-8 shadow-sm">
                <div class="flex items-center justify-center w-14 h-14 rounded bg-primary-100 mb-6">
                    <x-heroicon-s-shield-check class="w-7 h-7 text-primary-600" />
                </div>
                <h3 class="text-xl font-semibold text-neutral-900 mb-3">35+ Tamper Detection Algorithms</h3>
                <p class="text-neutral-700 mb-4">
                    Every captured image undergoes comprehensive analysis across four categories: capture authenticity, image integrity, AI/synthetic media detection, and metadata validation.
                </p>
                <ul class="space-y-2">
                    <li class="flex items-center gap-2 text-sm text-neutral-600">
                        <x-heroicon-s-check class="w-4 h-4 text-green-600 flex-shrink-0" />
                        Deepfake detection
                    </li>
                    <li class="flex items-center gap-2 text-sm text-neutral-600">
                        <x-heroicon-s-check class="w-4 h-4 text-green-600 flex-shrink-0" />
                        Image manipulation analysis
                    </li>
                    <li class="flex items-center gap-2 text-sm text-neutral-600">
                        <x-heroicon-s-check class="w-4 h-4 text-green-600 flex-shrink-0" />
                        GAN signature detection
                    </li>
                </ul>
            </div>

            {{-- Cryptographic Proof --}}
            <div class="bg-white border border-neutral-200 rounded p-8 shadow-sm">
                <div class="flex items-center justify-center w-14 h-14 rounded bg-primary-100 mb-6">
                    <x-heroicon-s-finger-print class="w-7 h-7 text-primary-600" />
                </div>
                <h3 class="text-xl font-semibold text-neutral-900 mb-3">Cryptographic Proof of Live Capture</h3>
                <p class="text-neutral-700 mb-4">
                    Our PIEA technology embeds a cryptographic signature directly into the image at the moment of capture, creating tamper-evident proof that can be verified at any time.
                </p>
                <ul class="space-y-2">
                    <li class="flex items-center gap-2 text-sm text-neutral-600">
                        <x-heroicon-s-check class="w-4 h-4 text-green-600 flex-shrink-0" />
                        SHA-256 based signatures
                    </li>
                    <li class="flex items-center gap-2 text-sm text-neutral-600">
                        <x-heroicon-s-check class="w-4 h-4 text-green-600 flex-shrink-0" />
                        Device fingerprinting
                    </li>
                    <li class="flex items-center gap-2 text-sm text-neutral-600">
                        <x-heroicon-s-check class="w-4 h-4 text-green-600 flex-shrink-0" />
                        Timestamped verification
                    </li>
                </ul>
            </div>
        </div>

        {{-- Results comparison --}}
        <div class="mt-16 max-w-3xl mx-auto">
            <div class="bg-white border border-neutral-200 rounded overflow-hidden shadow-sm">
                <div class="grid grid-cols-2 divide-x divide-neutral-200">
                    <div class="p-8 text-center">
                        <p class="text-sm font-medium text-neutral-500 uppercase tracking-wider mb-4">Without PixaProof</p>
                        <p class="text-5xl font-bold text-red-600 mb-2">High Risk</p>
                        <p class="text-neutral-600">Vulnerable to injection attacks</p>
                    </div>
                    <div class="p-8 text-center bg-green-50">
                        <p class="text-sm font-medium text-neutral-500 uppercase tracking-wider mb-4">With PixaProof</p>
                        <p class="text-5xl font-bold text-green-600 mb-2">Protected</p>
                        <p class="text-neutral-600">Live capture enforced & verified</p>
                    </div>
                </div>
            </div>
            <p class="text-xs text-neutral-500 text-center mt-4">
                Based on deployment results across multiple enterprise customers. Individual results may vary based on implementation and use case.
            </p>
        </div>
    </x-section>

    {{-- CTA Section --}}
    <x-section bg="primary">
        <div class="text-center max-w-3xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                Protect your system from injection attacks
            </h2>
            <p class="text-lg text-neutral-700 mb-8">
                See how PixaProof's live capture enforcement and PIEA technology can secure your identity verification workflows against sophisticated injection attacks.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <x-button href="/contact" size="lg">
                    Request Demo
                </x-button>
                <x-button href="/technology" variant="secondary" size="lg">
                    Learn About PIEA Technology
                </x-button>
            </div>
        </div>
    </x-section>

    {{-- Related Resources --}}
    <x-section>
        <div class="max-w-5xl mx-auto">
            <p class="text-sm font-semibold uppercase tracking-wider text-primary-600 mb-4">Related Resources</p>
            <h3 class="text-2xl font-bold text-neutral-900 mb-8">Continue learning</h3>
            
            <div class="grid md:grid-cols-3 gap-6">
                <a href="/technology" class="group block bg-white border border-neutral-200 rounded p-6 hover:border-primary-300 hover:shadow-sm transition">
                    <div class="flex items-center justify-center w-10 h-10 rounded bg-primary-100 mb-4">
                        <x-heroicon-s-cpu-chip class="w-5 h-5 text-primary-600" />
                    </div>
                    <h4 class="text-neutral-900 font-semibold mb-2 group-hover:text-primary-600 transition">PIEA Technology</h4>
                    <p class="text-neutral-600 text-sm">Understand how our Photo Integrity Encoding Algorithm works at the technical level.</p>
                </a>

                <a href="/enterprise" class="group block bg-white border border-neutral-200 rounded p-6 hover:border-primary-300 hover:shadow-sm transition">
                    <div class="flex items-center justify-center w-10 h-10 rounded bg-primary-100 mb-4">
                        <x-heroicon-s-building-office class="w-5 h-5 text-primary-600" />
                    </div>
                    <h4 class="text-neutral-900 font-semibold mb-2 group-hover:text-primary-600 transition">Enterprise Solutions</h4>
                    <p class="text-neutral-600 text-sm">Explore how organizations across industries are using PixaProof to prevent fraud.</p>
                </a>

                <a href="/developers" class="group block bg-white border border-neutral-200 rounded p-6 hover:border-primary-300 hover:shadow-sm transition">
                    <div class="flex items-center justify-center w-10 h-10 rounded bg-primary-100 mb-4">
                        <x-heroicon-s-code-bracket class="w-5 h-5 text-primary-600" />
                    </div>
                    <h4 class="text-neutral-900 font-semibold mb-2 group-hover:text-primary-600 transition">Developer Documentation</h4>
                    <p class="text-neutral-600 text-sm">Get started with SDK integration and explore our API reference.</p>
                </a>
            </div>
        </div>
    </x-section>
@endsection
