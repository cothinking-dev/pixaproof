@extends('layouts.app')

@section('title', 'Pricing - PixaProof')

@section('content')
    {{-- Hero Section --}}
    <section class="relative isolate overflow-hidden bg-surface-950 px-4 pt-24 pb-20">
        <div class="mx-auto max-w-4xl text-center">
            <p class="text-sm font-medium uppercase tracking-wider text-brand-400">
                Pricing
            </p>
            <h1 class="mt-4 text-4xl font-bold text-white md:text-5xl lg:text-6xl">
                Simple, transparent pricing
            </h1>
            <p class="mx-auto mt-6 max-w-2xl text-lg text-gray-300 text-pretty md:text-xl">
                Capture photos free. Pay only for verifications.
            </p>
        </div>
    </section>

    {{-- Pricing Cards --}}
    <x-section py="py-16">
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
            {{-- Free Tier --}}
            <x-pricing-card
                tier="Free"
                price="RM0"
                :features="[
                    'Unlimited photo captures',
                    '3 verifications/month',
                    'Basic support',
                    'Standard verification speed',
                ]"
            />

            {{-- Standard Tier --}}
            <x-pricing-card
                tier="Standard"
                price="RM200"
                :popular="true"
                :features="[
                    'Unlimited photo captures',
                    '25 verifications/month',
                    'Priority support',
                    'Verification history',
                    'Faster verification speed',
                ]"
            />

            {{-- Pro Tier --}}
            <x-pricing-card
                tier="Pro"
                price="RM600"
                :features="[
                    'Unlimited photo captures',
                    '100 verifications/month',
                    'Priority support',
                    'Verification history',
                    'API access (coming soon)',
                    'Export reports',
                ]"
            />

            {{-- Enterprise Tier --}}
            <x-pricing-card
                tier="Enterprise"
                :enterprise="true"
                description="For organizations needing SDK integration, volume pricing, or compliance packages"
                :features="[
                    'Everything in Pro',
                    'Custom verification volume',
                    'SDK integration',
                    'White-label options',
                    'Dedicated support',
                    'SLA guarantees',
                ]"
            />
        </div>
    </x-section>

    {{-- Feature Comparison --}}
    <x-section bg="surface">
        <div class="text-center">
            <h2 class="text-3xl font-bold text-white md:text-4xl">Compare plans</h2>
            <p class="mx-auto mt-4 max-w-2xl text-lg text-gray-300 text-pretty">
                See what's included in each tier
            </p>
        </div>

        <div class="mt-12 overflow-x-auto">
            <table class="w-full min-w-[640px]">
                <thead>
                    <tr class="border-b border-surface-700">
                        <th class="py-4 text-left text-sm font-medium text-gray-400">Feature</th>
                        <th class="py-4 text-center text-sm font-medium text-gray-400">Free</th>
                        <th class="py-4 text-center text-sm font-medium text-brand-400">Standard</th>
                        <th class="py-4 text-center text-sm font-medium text-gray-400">Pro</th>
                        <th class="py-4 text-center text-sm font-medium text-gray-400">Enterprise</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-surface-700">
                    <tr>
                        <td class="py-4 text-sm text-gray-300">Photo captures</td>
                        <td class="py-4 text-center text-sm text-white">Unlimited</td>
                        <td class="py-4 text-center text-sm text-white">Unlimited</td>
                        <td class="py-4 text-center text-sm text-white">Unlimited</td>
                        <td class="py-4 text-center text-sm text-white">Unlimited</td>
                    </tr>
                    <tr>
                        <td class="py-4 text-sm text-gray-300">Verifications/month</td>
                        <td class="py-4 text-center text-sm text-white">3</td>
                        <td class="py-4 text-center text-sm text-white">25</td>
                        <td class="py-4 text-center text-sm text-white">100</td>
                        <td class="py-4 text-center text-sm text-white">Custom</td>
                    </tr>
                    <tr>
                        <td class="py-4 text-sm text-gray-300">Verification history</td>
                        <td class="py-4 text-center">
                            <svg class="mx-auto h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </td>
                        <td class="py-4 text-center">
                            <svg class="mx-auto h-5 w-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                        </td>
                        <td class="py-4 text-center">
                            <svg class="mx-auto h-5 w-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                        </td>
                        <td class="py-4 text-center">
                            <svg class="mx-auto h-5 w-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-4 text-sm text-gray-300">Priority support</td>
                        <td class="py-4 text-center">
                            <svg class="mx-auto h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </td>
                        <td class="py-4 text-center">
                            <svg class="mx-auto h-5 w-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                        </td>
                        <td class="py-4 text-center">
                            <svg class="mx-auto h-5 w-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                        </td>
                        <td class="py-4 text-center">
                            <svg class="mx-auto h-5 w-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-4 text-sm text-gray-300">API access</td>
                        <td class="py-4 text-center">
                            <svg class="mx-auto h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </td>
                        <td class="py-4 text-center">
                            <svg class="mx-auto h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </td>
                        <td class="py-4 text-center text-sm text-gray-400">Coming soon</td>
                        <td class="py-4 text-center">
                            <svg class="mx-auto h-5 w-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-4 text-sm text-gray-300">SDK integration</td>
                        <td class="py-4 text-center">
                            <svg class="mx-auto h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </td>
                        <td class="py-4 text-center">
                            <svg class="mx-auto h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </td>
                        <td class="py-4 text-center">
                            <svg class="mx-auto h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </td>
                        <td class="py-4 text-center">
                            <svg class="mx-auto h-5 w-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-4 text-sm text-gray-300">White-label</td>
                        <td class="py-4 text-center">
                            <svg class="mx-auto h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </td>
                        <td class="py-4 text-center">
                            <svg class="mx-auto h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </td>
                        <td class="py-4 text-center">
                            <svg class="mx-auto h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </td>
                        <td class="py-4 text-center">
                            <svg class="mx-auto h-5 w-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-4 text-sm text-gray-300">SLA guarantee</td>
                        <td class="py-4 text-center">
                            <svg class="mx-auto h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </td>
                        <td class="py-4 text-center">
                            <svg class="mx-auto h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </td>
                        <td class="py-4 text-center">
                            <svg class="mx-auto h-5 w-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </td>
                        <td class="py-4 text-center text-sm text-white">99.9%</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </x-section>

    {{-- FAQ Section --}}
    <x-section>
        <div class="mx-auto max-w-3xl">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-white md:text-4xl">Frequently asked questions</h2>
            </div>

            <div class="mt-12 divide-y divide-surface-700">
                <div class="py-6">
                    <h3 class="text-lg font-semibold text-white">What is a verification?</h3>
                    <p class="mt-2 text-gray-400">
                        A verification is when you use PixaProof to check if a photo is authentic. Each time you verify a photo, it counts against your monthly verification limit. Capturing photos is always free and unlimited.
                    </p>
                </div>

                <div class="py-6">
                    <h3 class="text-lg font-semibold text-white">Can I verify photos not taken with PixaProof?</h3>
                    <p class="mt-2 text-gray-400">
                        Yes, but photos not captured through PixaProof will show as "Unverified" - meaning we can't confirm their authenticity. Only photos taken through PixaProof contain the cryptographic signatures needed for verification.
                    </p>
                </div>

                <div class="py-6">
                    <h3 class="text-lg font-semibold text-white">Do unused verifications roll over?</h3>
                    <p class="mt-2 text-gray-400">
                        No, verification counts reset at the start of each billing period. We recommend choosing a plan that matches your typical monthly usage.
                    </p>
                </div>

                <div class="py-6">
                    <h3 class="text-lg font-semibold text-white">What payment methods do you accept?</h3>
                    <p class="mt-2 text-gray-400">
                        We accept major credit cards (Visa, Mastercard, American Express) and payment through the App Store and Google Play for mobile subscriptions.
                    </p>
                </div>

                <div class="py-6">
                    <h3 class="text-lg font-semibold text-white">Can I cancel anytime?</h3>
                    <p class="mt-2 text-gray-400">
                        Yes, you can cancel your subscription at any time. Your access will continue until the end of the current billing period.
                    </p>
                </div>

                <div class="py-6">
                    <h3 class="text-lg font-semibold text-white">What if I need more than 100 verifications/month?</h3>
                    <p class="mt-2 text-gray-400">
                        Contact our sales team for Enterprise pricing. We offer custom verification volumes, SDK integration, and volume discounts for high-usage organizations.
                    </p>
                </div>
            </div>
        </div>
    </x-section>

    {{-- Enterprise CTA --}}
    <x-section bg="surface">
        <div class="mx-auto max-w-4xl rounded-2xl bg-gradient-to-r from-brand-600 to-rose-600 p-8 md:p-12">
            <div class="grid items-center gap-8 lg:grid-cols-2">
                <div>
                    <h2 class="text-2xl font-bold text-white md:text-3xl">Building for your organization?</h2>
                    <p class="mt-4 text-brand-100">
                        PixaProof Enterprise offers SDK integration, custom pricing, and compliance packages for Banking, Insurance, Government, Healthcare, and E-commerce industries.
                    </p>
                </div>
                <div class="flex flex-col items-start gap-4 lg:items-end">
                    <x-button href="{{ route('contact') }}" variant="white" size="lg">
                        Contact Sales
                    </x-button>
                    <a href="{{ route('enterprise') }}" class="text-sm text-brand-100 hover:text-white transition">
                        Learn about Enterprise Solutions
                    </a>
                </div>
            </div>
        </div>
    </x-section>

    {{-- Final CTA --}}
    <x-section>
        <div class="text-center">
            <h2 class="text-3xl font-bold text-white md:text-4xl">Get started free today</h2>
            <p class="mx-auto mt-4 max-w-2xl text-lg text-gray-300 text-pretty">
                Download PixaProof and start capturing verified photos. No credit card required.
            </p>
            <div class="mt-8 flex flex-wrap justify-center gap-4">
                <x-app-store-badges />
            </div>
            <p class="mt-6 text-sm text-gray-500">
                3 free verifications every month. Upgrade anytime.
            </p>
        </div>
    </x-section>
@endsection
