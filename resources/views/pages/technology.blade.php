@extends('layouts.app')

@section('title', 'Technology - PIEA™ Photo Integrity')

@section('content')
    {{-- Hero Section --}}
    <x-section bg="brand" class="pt-24">
        <div class="mx-auto max-w-4xl text-center">
            <p class="text-sm font-medium uppercase tracking-wider text-brand-100">
                Our Technology
            </p>
            <h1 class="mt-4 text-4xl font-bold text-white md:text-5xl lg:text-6xl">
                Security That Begins at the <span class="text-brand-100">Shutter</span>
            </h1>
            <p class="mx-auto mt-6 max-w-2xl text-lg text-brand-100 md:text-xl">
                PixaProof's core innovation lies in our Photo Integrity Encoding Algorithm (PIEA™) - a proprietary
                method that embeds authenticity data directly into a photo during live capture, without altering
                its visual quality.
            </p>
            <div class="mt-10 flex flex-wrap justify-center gap-4">
                <x-button href="{{ route('contact') }}" size="lg">Talk to Technical Team</x-button>
                <x-button href="#how-it-works" variant="secondary" size="lg">Learn How It Works</x-button>
            </div>
        </div>
    </x-section>

    {{-- How Secure Capture Works --}}
    <x-section id="how-it-works" pattern="hexagonal" pattern-opacity="0.03">
        <div class="text-center">
            <p class="text-sm font-medium uppercase tracking-wider text-brand-500">PIEA™ Technology</p>
            <h2 class="mt-2 text-3xl font-bold text-white md:text-4xl">How Secure Capture Works</h2>
            <p class="mx-auto mt-4 max-w-2xl text-lg text-gray-300">
                When a user captures a photo via an app integrated with our SDK, three critical processes occur.
            </p>
        </div>

        <div class="mt-16 grid gap-8 lg:grid-cols-3">
            {{-- Step 1 --}}
            <div class="relative">
                <div class="absolute -left-4 -top-4 flex h-12 w-12 items-center justify-center rounded-full bg-brand-500 text-xl font-bold text-white">
                    1
                </div>
                <x-card padding="lg" class="pt-10">
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-brand-500/10 text-brand-500">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white">Live Capture Authentication</h3>
                    <ul class="mt-4 space-y-2 text-gray-300">
                        <li class="flex items-start gap-2">
                            <svg class="mt-1 h-4 w-4 shrink-0 text-brand-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            Verifies image is captured in real-time through the app
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="mt-1 h-4 w-4 shrink-0 text-brand-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            Extracts device, timestamp, and capture metadata
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="mt-1 h-4 w-4 shrink-0 text-brand-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            Prevents re-upload or external photo injection
                        </li>
                    </ul>
                </x-card>
            </div>

            {{-- Step 2 --}}
            <div class="relative">
                <div class="absolute -left-4 -top-4 flex h-12 w-12 items-center justify-center rounded-full bg-brand-500 text-xl font-bold text-white">
                    2
                </div>
                <x-card padding="lg" class="pt-10">
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-brand-500/10 text-brand-500">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white">Cryptographic Signature Generation</h3>
                    <ul class="mt-4 space-y-2 text-gray-300">
                        <li class="flex items-start gap-2">
                            <svg class="mt-1 h-4 w-4 shrink-0 text-brand-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            Generates unique cryptographic hash for that specific capture
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="mt-1 h-4 w-4 shrink-0 text-brand-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            Creates tamper-evident fingerprint of the image
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="mt-1 h-4 w-4 shrink-0 text-brand-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            Uses SHA-256 based signature generation
                        </li>
                    </ul>
                </x-card>
            </div>

            {{-- Step 3 --}}
            <div class="relative">
                <div class="absolute -left-4 -top-4 flex h-12 w-12 items-center justify-center rounded-full bg-brand-500 text-xl font-bold text-white">
                    3
                </div>
                <x-card padding="lg" class="pt-10">
                    <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-brand-500/10 text-brand-500">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 013.75 9.375v-4.5zM3.75 14.625c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5a1.125 1.125 0 01-1.125-1.125v-4.5zM13.5 4.875c0-.621.504-1.125 1.125-1.125h4.5c.621 0 1.125.504 1.125 1.125v4.5c0 .621-.504 1.125-1.125 1.125h-4.5A1.125 1.125 0 0113.5 9.375v-4.5z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 6.75h.75v.75h-.75v-.75zM6.75 16.5h.75v.75h-.75v-.75zM16.5 6.75h.75v.75h-.75v-.75zM13.5 13.5h.75v.75h-.75v-.75zM13.5 19.5h.75v.75h-.75v-.75zM19.5 13.5h.75v.75h-.75v-.75zM19.5 19.5h.75v.75h-.75v-.75zM16.5 16.5h.75v.75h-.75v-.75z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white">Invisible Encoding</h3>
                    <ul class="mt-4 space-y-2 text-gray-300">
                        <li class="flex items-start gap-2">
                            <svg class="mt-1 h-4 w-4 shrink-0 text-brand-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            Embeds signature invisibly within image's data structure
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="mt-1 h-4 w-4 shrink-0 text-brand-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            Maintains original photo quality and usability
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="mt-1 h-4 w-4 shrink-0 text-brand-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                            No biometric or personal data stored in encoded layer
                        </li>
                    </ul>
                </x-card>
            </div>
        </div>

        <div class="mx-auto mt-12 max-w-2xl text-center">
            <p class="text-lg text-gray-300">
                <span class="font-semibold text-white">Result:</span> Photo can be stored, shared, or uploaded normally -
                but its authenticity can always be verified.
            </p>
        </div>
    </x-section>

    {{-- Secure Transmission Pipeline --}}
    <x-section bg="surface">
        <div class="grid items-center gap-12 lg:grid-cols-2">
            <div>
                <p class="text-sm font-medium uppercase tracking-wider text-brand-500">End-to-End Protection</p>
                <h2 class="mt-2 text-3xl font-bold text-white md:text-4xl">Secure Transmission Pipeline</h2>
                <p class="mt-4 text-lg text-gray-300">
                    From the moment of capture to verification, your images are protected by enterprise-grade security.
                </p>

                <div class="mt-8 space-y-4">
                    <div class="flex items-center gap-4 rounded-lg border border-surface-700 bg-surface-800 p-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-green-500/100/10 text-green-500">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white">Encrypted Upload</h4>
                            <p class="text-sm text-gray-400">TLS 1.3 encryption for all data in transit</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 rounded-lg border border-surface-700 bg-surface-800 p-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-blue-500/10 text-blue-500">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white">MITM Prevention</h4>
                            <p class="text-sm text-gray-400">Certificate pinning prevents interception</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 rounded-lg border border-surface-700 bg-surface-800 p-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-purple-500/10 text-purple-500">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white">Integrity Verification</h4>
                            <p class="text-sm text-gray-400">Signature validated during transmission</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 rounded-lg border border-surface-700 bg-surface-800 p-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-amber-500/10 text-amber-500">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white">Secure Storage</h4>
                            <p class="text-sm text-gray-400">Protected at rest in ISO 27001 infrastructure</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Visual --}}
            <div class="flex justify-center">
                <div class="relative w-full max-w-md">
                    {{-- Pipeline visualization --}}
                    <div class="rounded-2xl border border-surface-700 bg-surface-800 p-8 shadow-lg shadow-black/20">
                        <div class="flex flex-col items-center gap-4">
                            {{-- SDK --}}
                            <div class="flex w-full items-center justify-between rounded-lg bg-surface-800/50 p-4">
                                <span class="font-medium text-white">SDK Capture</span>
                                <span class="rounded-full bg-green-500/100/10 px-2 py-1 text-xs font-medium text-green-500">PIEA™ Signed</span>
                            </div>
                            {{-- Arrow --}}
                            <svg class="h-6 w-6 text-brand-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3" />
                            </svg>
                            {{-- Encryption --}}
                            <div class="flex w-full items-center justify-between rounded-lg bg-surface-800/50 p-4">
                                <span class="font-medium text-white">TLS 1.3 Encrypted</span>
                                <svg class="h-5 w-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                </svg>
                            </div>
                            {{-- Arrow --}}
                            <svg class="h-6 w-6 text-brand-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3" />
                            </svg>
                            {{-- Cloud --}}
                            <div class="flex w-full items-center justify-between rounded-lg bg-surface-800/50 p-4">
                                <span class="font-medium text-white">PixaProof Cloud</span>
                                <span class="rounded-full bg-brand-500/10 px-2 py-1 text-xs font-medium text-brand-500">ISO 27001</span>
                            </div>
                            {{-- Arrow --}}
                            <svg class="h-6 w-6 text-brand-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3" />
                            </svg>
                            {{-- Result --}}
                            <div class="flex w-full items-center justify-between rounded-lg bg-green-500/10 p-4">
                                <span class="font-medium text-white">Verification Result</span>
                                <svg class="h-5 w-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-section>

    {{-- 35+ Tamper Detection Tests --}}
    <x-section pattern="circuit" pattern-opacity="0.03">
        <div class="text-center">
            <p class="text-sm font-medium uppercase tracking-wider text-brand-500">Detection Capabilities</p>
            <h2 class="mt-2 text-3xl font-bold text-white md:text-4xl">35+ Tamper Detection Tests</h2>
            <p class="mx-auto mt-4 max-w-2xl text-lg text-gray-300">
                Our verification engine runs comprehensive analysis across four key categories to ensure photo authenticity.
            </p>
        </div>

        <div class="mt-12 grid gap-6 md:grid-cols-2">
            {{-- Capture Authenticity --}}
            <x-card padding="lg">
                <div class="flex items-center gap-4">
                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-emerald-500/10 text-emerald-500">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-white">Capture Authenticity</h3>
                        <p class="text-sm text-gray-400">7 tests</p>
                    </div>
                </div>
                <ul class="mt-6 grid grid-cols-2 gap-2 text-sm text-gray-300">
                    <li class="flex items-center gap-2">
                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                        Live capture signature
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                        Device fingerprint
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                        Timestamp consistency
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                        Geolocation validation
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                        Screen recording detection
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                        Emulator detection
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                        Gallery injection ID
                    </li>
                </ul>
            </x-card>

            {{-- Image Integrity --}}
            <x-card padding="lg">
                <div class="flex items-center gap-4">
                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-blue-500/10 text-blue-500">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-white">Image Integrity</h3>
                        <p class="text-sm text-gray-400">12 tests</p>
                    </div>
                </div>
                <ul class="mt-6 grid grid-cols-2 gap-2 text-sm text-gray-300">
                    <li class="flex items-center gap-2">
                        <span class="h-1.5 w-1.5 rounded-full bg-blue-500"></span>
                        Pixel-level analysis
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="h-1.5 w-1.5 rounded-full bg-blue-500"></span>
                        Compression artifacts
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="h-1.5 w-1.5 rounded-full bg-blue-500"></span>
                        Cloning detection
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="h-1.5 w-1.5 rounded-full bg-blue-500"></span>
                        Error level analysis
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="h-1.5 w-1.5 rounded-full bg-blue-500"></span>
                        CFA analysis
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="h-1.5 w-1.5 rounded-full bg-blue-500"></span>
                        Double compression
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="h-1.5 w-1.5 rounded-full bg-blue-500"></span>
                        Noise pattern
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="h-1.5 w-1.5 rounded-full bg-blue-500"></span>
                        Shadow consistency
                    </li>
                </ul>
            </x-card>

            {{-- AI & Synthetic Media --}}
            <x-card padding="lg">
                <div class="flex items-center gap-4">
                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-purple-500/10 text-purple-500">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-white">AI & Synthetic Media</h3>
                        <p class="text-sm text-gray-400">8 tests</p>
                    </div>
                </div>
                <ul class="mt-6 grid grid-cols-2 gap-2 text-sm text-gray-300">
                    <li class="flex items-center gap-2">
                        <span class="h-1.5 w-1.5 rounded-full bg-purple-500"></span>
                        GAN signature detection
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="h-1.5 w-1.5 rounded-full bg-purple-500"></span>
                        Deepfake scoring
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="h-1.5 w-1.5 rounded-full bg-purple-500"></span>
                        Synthetic image ID
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="h-1.5 w-1.5 rounded-full bg-purple-500"></span>
                        AI model fingerprints
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="h-1.5 w-1.5 rounded-full bg-purple-500"></span>
                        Facial manipulation
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="h-1.5 w-1.5 rounded-full bg-purple-500"></span>
                        Document synthesis
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="h-1.5 w-1.5 rounded-full bg-purple-500"></span>
                        Text alteration
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="h-1.5 w-1.5 rounded-full bg-purple-500"></span>
                        Temporal consistency
                    </li>
                </ul>
            </x-card>

            {{-- Metadata & Context --}}
            <x-card padding="lg">
                <div class="flex items-center gap-4">
                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-lg bg-amber-500/10 text-amber-500">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 00-1.883 2.542l.857 6a2.25 2.25 0 002.227 1.932H19.05a2.25 2.25 0 002.227-1.932l.857-6a2.25 2.25 0 00-1.883-2.542m-16.5 0V6A2.25 2.25 0 016 3.75h3.879a1.5 1.5 0 011.06.44l2.122 2.12a1.5 1.5 0 001.06.44H18A2.25 2.25 0 0120.25 9v.776" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-white">Metadata & Context</h3>
                        <p class="text-sm text-gray-400">8 tests</p>
                    </div>
                </div>
                <ul class="mt-6 grid grid-cols-2 gap-2 text-sm text-gray-300">
                    <li class="flex items-center gap-2">
                        <span class="h-1.5 w-1.5 rounded-full bg-amber-500"></span>
                        EXIF data integrity
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="h-1.5 w-1.5 rounded-full bg-amber-500"></span>
                        Metadata consistency
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="h-1.5 w-1.5 rounded-full bg-amber-500"></span>
                        Reverse image search
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="h-1.5 w-1.5 rounded-full bg-amber-500"></span>
                        Duplicate detection
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="h-1.5 w-1.5 rounded-full bg-amber-500"></span>
                        Picture-of-picture
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="h-1.5 w-1.5 rounded-full bg-amber-500"></span>
                        Fraud pattern matching
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="h-1.5 w-1.5 rounded-full bg-amber-500"></span>
                        Historical database
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="h-1.5 w-1.5 rounded-full bg-amber-500"></span>
                        Risk scoring
                    </li>
                </ul>
            </x-card>
        </div>
    </x-section>

    {{-- SDK Capabilities --}}
    <x-section bg="surface">
        <div class="text-center">
            <p class="text-sm font-medium uppercase tracking-wider text-brand-500">SDK Features</p>
            <h2 class="mt-2 text-3xl font-bold text-white md:text-4xl">SDK Capabilities</h2>
            <p class="mx-auto mt-4 max-w-2xl text-lg text-gray-300">
                A lightweight, powerful SDK designed for seamless integration into your mobile applications.
            </p>
        </div>

        <div class="mt-12 grid gap-8 lg:grid-cols-2">
            {{-- Platforms --}}
            <div>
                <h3 class="text-lg font-semibold text-white">Platforms Supported</h3>
                <div class="mt-4 flex flex-wrap gap-3">
                    <span class="inline-flex items-center gap-2 rounded-lg bg-surface-800/50 px-4 py-2 text-sm font-medium text-gray-300">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/></svg>
                        iOS (Swift/Obj-C)
                    </span>
                    <span class="inline-flex items-center gap-2 rounded-lg bg-surface-800/50 px-4 py-2 text-sm font-medium text-gray-300">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M17.523 15.34c-.5 0-.909.41-.909.91s.41.91.91.91.909-.41.909-.91-.41-.91-.91-.91m-11.046 0c-.5 0-.91.41-.91.91s.41.91.91.91.91-.41.91-.91-.41-.91-.91-.91m11.046-6.88l1.59-2.89c.09-.16.04-.36-.11-.45-.16-.09-.36-.04-.45.11l-1.61 2.93c-1.34-.59-2.85-.92-4.47-.92s-3.13.33-4.47.92L6.44 6.11c-.09-.16-.29-.2-.45-.11-.15.09-.2.29-.11.45l1.59 2.89C4.75 10.6 2.86 13.41 2.5 16.61h19c-.36-3.2-2.25-6.01-4.97-7.21"/></svg>
                        Android (Kotlin/Java)
                    </span>
                    <span class="inline-flex items-center gap-2 rounded-lg bg-surface-800/50 px-4 py-2 text-sm font-medium text-gray-300">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 10.11c1.03 0 1.87.84 1.87 1.89 0 1-.84 1.85-1.87 1.85-1.03 0-1.87-.85-1.87-1.85 0-1.05.84-1.89 1.87-1.89M7.37 20c.63.38 2.01-.2 3.6-1.7-.52-.59-1.03-1.23-1.51-1.9-.82-.08-1.63-.2-2.4-.36-.51 2.14-.32 3.61.31 3.96m.71-5.74l-.29-.51c-.11.29-.22.58-.29.86.27.06.57.11.88.16l-.3-.51m6.54-.76l.81-1.5-.81-1.5c-.3-.53-.62-1-.91-1.47C13.17 9 12.6 9 12 9c-.6 0-1.17 0-1.71.03-.29.47-.61.94-.91 1.47L8.57 12l.81 1.5c.3.53.62 1 .91 1.47.54.03 1.11.03 1.71.03.6 0 1.17 0 1.71-.03.29-.47.61-.94.91-1.47M12 6.78c-.19.22-.39.45-.59.72h1.18c-.2-.27-.4-.5-.59-.72m0 10.44c.19-.22.39-.45.59-.72h-1.18c.2.27.4.5.59.72M16.62 4c-.62-.38-2 .2-3.59 1.7.52.59 1.03 1.23 1.51 1.9.82.08 1.63.2 2.4.36.51-2.14.32-3.61-.32-3.96m-.7 5.74l.29.51c.11-.29.22-.58.29-.86-.27-.06-.57-.11-.88-.16l.3.51m1.45-7.05c1.47.84 1.63 3.05 1.01 5.63 2.54.75 4.37 1.99 4.37 3.68 0 1.69-1.83 2.93-4.37 3.68.62 2.58.46 4.79-1.01 5.63-1.46.84-3.45-.12-5.37-1.95-1.92 1.83-3.91 2.79-5.38 1.95-1.46-.84-1.62-3.05-1-5.63-2.54-.75-4.37-1.99-4.37-3.68 0-1.69 1.83-2.93 4.37-3.68-.62-2.58-.46-4.79 1-5.63 1.47-.84 3.46.12 5.38 1.95 1.92-1.83 3.91-2.79 5.37-1.95M17.08 12c.34.75.64 1.5.89 2.26 2.1-.63 3.28-1.53 3.28-2.26 0-.73-1.18-1.63-3.28-2.26-.25.76-.55 1.51-.89 2.26M6.92 12c-.34-.75-.64-1.5-.89-2.26-2.1.63-3.28 1.53-3.28 2.26 0 .73 1.18 1.63 3.28 2.26.25-.76.55-1.51.89-2.26m9 2.26l-.3.51c.31-.05.61-.1.88-.16-.07-.28-.18-.57-.29-.86l-.29.51m-2.89 4.04c1.59 1.5 2.97 2.08 3.59 1.7.64-.35.83-1.82.32-3.96-.77.16-1.58.28-2.4.36-.48.67-.99 1.31-1.51 1.9M8.08 9.74l.3-.51c-.31.05-.61.1-.88.16.07.28.18.57.29.86l.29-.51m2.89-4.04C9.38 4.2 8 3.62 7.37 4c-.63.35-.82 1.82-.31 3.96.77-.16 1.58-.28 2.4-.36.48-.67.99-1.31 1.51-1.9z"/></svg>
                        React Native
                    </span>
                    <span class="inline-flex items-center gap-2 rounded-lg bg-surface-700 px-4 py-2 text-sm font-medium text-gray-400">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M14.314 0L2.3 12 6 15.7 21.684.012h-7.357L14.314 0zm.014 11.072l-6.471 6.457 6.47 6.47H21.7l-6.46-6.468 6.46-6.46h-7.386z"/></svg>
                        Flutter (Planned)
                    </span>
                </div>
            </div>

            {{-- Features --}}
            <div>
                <h3 class="text-lg font-semibold text-white">Core Features</h3>
                <ul class="mt-4 space-y-3">
                    <li class="flex items-center gap-3 text-gray-300">
                        <svg class="h-5 w-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        Native camera integration
                    </li>
                    <li class="flex items-center gap-3 text-gray-300">
                        <svg class="h-5 w-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        Real-time capture validation
                    </li>
                    <li class="flex items-center gap-3 text-gray-300">
                        <svg class="h-5 w-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        Automatic signature encoding
                    </li>
                    <li class="flex items-center gap-3 text-gray-300">
                        <svg class="h-5 w-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        Offline capture support (with sync)
                    </li>
                    <li class="flex items-center gap-3 text-gray-300">
                        <svg class="h-5 w-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        Lightweight (~8-9MB footprint)
                    </li>
                </ul>
            </div>
        </div>

        {{-- Security Measures --}}
        <div class="mt-12">
            <h3 class="text-center text-lg font-semibold text-white">Built-in Security Measures</h3>
            <div class="mt-6 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <div class="flex items-center gap-3 rounded-lg border border-red-500/30 bg-red-500/10 p-4">
                    <svg class="h-6 w-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                    </svg>
                    <span class="text-sm font-medium text-gray-300">Gallery access blocked</span>
                </div>
                <div class="flex items-center gap-3 rounded-lg border border-red-500/30 bg-red-500/10 p-4">
                    <svg class="h-6 w-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                    </svg>
                    <span class="text-sm font-medium text-gray-300">Screenshot detection</span>
                </div>
                <div class="flex items-center gap-3 rounded-lg border border-red-500/30 bg-red-500/10 p-4">
                    <svg class="h-6 w-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                    </svg>
                    <span class="text-sm font-medium text-gray-300">Emulator/VM blocked</span>
                </div>
                <div class="flex items-center gap-3 rounded-lg border border-red-500/30 bg-red-500/10 p-4">
                    <svg class="h-6 w-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                    </svg>
                    <span class="text-sm font-medium text-gray-300">Replay attacks prevented</span>
                </div>
            </div>
        </div>
    </x-section>

    {{-- Performance --}}
    <x-section>
        <div class="text-center">
            <p class="text-sm font-medium uppercase tracking-wider text-brand-500">Performance</p>
            <h2 class="mt-2 text-3xl font-bold text-white md:text-4xl">Enterprise-Grade Performance</h2>
        </div>

        <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-5">
            <x-card.stat value="<500ms" label="Verification Latency" description="Real-time response" />
            <x-card.stat value="1000+" label="Verifications/sec" description="High throughput" />
            <x-card.stat value="~8MB" label="SDK Size" description="Lightweight footprint" />
            <x-card.stat value="2-4hrs" label="Integration Time" description="Basic setup" />
            <x-card.stat value="99.9%" label="Uptime SLA" description="Enterprise reliability" />
        </div>
    </x-section>

    {{-- Final CTA Section --}}
    <x-section bg="brand" bg-image="/images/backgrounds/gradient-mesh.svg">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-white md:text-4xl">Ready to secure your photo capture?</h2>
            <p class="mx-auto mt-4 max-w-2xl text-lg text-brand-100">
                Talk to our technical team to learn how PIEA™ technology can protect your verification workflows.
            </p>
            <div class="mt-8 flex flex-wrap justify-center gap-4">
                <x-button href="{{ route('contact') }}" variant="white" size="lg">Talk to Technical Team</x-button>
                <x-button href="#" variant="ghost" size="lg" class="text-white hover:text-white/80">View Developer Docs</x-button>
            </div>
        </div>
    </x-section>
@endsection
