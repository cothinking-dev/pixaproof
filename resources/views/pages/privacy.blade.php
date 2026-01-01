@extends('layouts.app')

@section('title', 'Privacy Policy')

@section('content')
    <section class="py-20">
        <div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-bold text-white">Privacy Policy</h1>
            <p class="mt-4 text-sm text-gray-400">Last updated: {{ date('F j, Y') }}</p>

            <div class="prose prose-lg prose-invert mt-8">
                <h2 class="text-2xl font-semibold text-white">Introduction</h2>
                <p class="text-gray-300">
                    PixaProof ("we", "our", or "us") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, and safeguard your information when you use our mobile application.
                </p>

                <h2 class="mt-8 text-2xl font-semibold text-white">Information We Collect</h2>
                <p class="text-gray-300">
                    When you use PixaProof, we may collect:
                </p>
                <ul class="list-disc pl-6 text-gray-300">
                    <li>Images you submit for verification (processed in real-time, not stored)</li>
                    <li>Device information for app functionality</li>
                    <li>Usage analytics to improve our service</li>
                </ul>

                <h2 class="mt-8 text-2xl font-semibold text-white">How We Use Your Information</h2>
                <p class="text-gray-300">
                    We use the information we collect to:
                </p>
                <ul class="list-disc pl-6 text-gray-300">
                    <li>Provide photo authenticity verification services</li>
                    <li>Improve and optimize our application</li>
                    <li>Respond to your inquiries and support requests</li>
                </ul>

                <h2 class="mt-8 text-2xl font-semibold text-white">Data Security</h2>
                <p class="text-gray-300">
                    We implement appropriate security measures to protect your information. Images submitted for verification are processed in real-time and are not stored on our servers after analysis is complete.
                </p>

                <h2 class="mt-8 text-2xl font-semibold text-white">Contact Us</h2>
                <p class="text-gray-300">
                    If you have questions about this Privacy Policy, please <a href="{{ route('contact') }}" class="text-brand-400 hover:text-brand-300">contact us</a>.
                </p>
            </div>
        </div>
    </section>
@endsection
