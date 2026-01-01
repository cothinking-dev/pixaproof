@extends('layouts.app')

@section('title', 'Photo Authenticity Verification')

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-b from-surface-900 to-surface-950 py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl md:text-6xl">
                    Verify Photo
                    <span class="text-brand-500">Authenticity</span>
                </h1>
                <p class="mx-auto mt-6 max-w-2xl text-lg text-gray-300">
                    Instantly verify if photos are real or AI-generated. Protect yourself from deepfakes and manipulated images with PixaProof.
                </p>
                <div class="mt-10 flex flex-wrap justify-center gap-4">
                    <a href="#" class="inline-flex items-center rounded-lg bg-brand-500 px-6 py-3 text-base font-medium text-white shadow-sm transition hover:bg-brand-600">
                        Coming Soon to App Store
                    </a>
                    <a href="#" class="inline-flex items-center rounded-lg border border-surface-600 bg-surface-800 px-6 py-3 text-base font-medium text-gray-300 shadow-sm transition hover:bg-surface-700">
                        Coming Soon to Google Play
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-white">Why PixaProof?</h2>
                <p class="mt-4 text-lg text-gray-300">
                    Advanced AI detection to keep you informed about the images you see.
                </p>
            </div>

            <div class="mt-16 grid gap-8 md:grid-cols-3">
                <!-- Feature 1 -->
                <div class="rounded-xl border border-surface-700 bg-surface-800 p-8">
                    <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-brand-500/10 text-brand-500">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                        </svg>
                    </div>
                    <h3 class="mt-6 text-xl font-semibold text-white">AI Detection</h3>
                    <p class="mt-2 text-gray-400">
                        Advanced algorithms detect AI-generated images with high accuracy.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="rounded-xl border border-surface-700 bg-surface-800 p-8">
                    <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-brand-500/10 text-brand-500">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                        </svg>
                    </div>
                    <h3 class="mt-6 text-xl font-semibold text-white">Instant Results</h3>
                    <p class="mt-2 text-gray-400">
                        Get verification results in seconds, right from your mobile device.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="rounded-xl border border-surface-700 bg-surface-800 p-8">
                    <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-brand-500/10 text-brand-500">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                        </svg>
                    </div>
                    <h3 class="mt-6 text-xl font-semibold text-white">Privacy First</h3>
                    <p class="mt-2 text-gray-400">
                        Your images are processed securely and never stored on our servers.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-brand-600 py-16">
        <div class="mx-auto max-w-7xl px-4 text-center sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-white">Ready to verify photo authenticity?</h2>
            <p class="mt-4 text-lg text-brand-100">
                Join the waitlist to be notified when PixaProof launches.
            </p>
            <a href="{{ route('contact') }}" class="mt-8 inline-flex items-center rounded-lg bg-white px-6 py-3 text-base font-medium text-brand-600 shadow-sm transition hover:bg-gray-100">
                Get in Touch
            </a>
        </div>
    </section>
@endsection
