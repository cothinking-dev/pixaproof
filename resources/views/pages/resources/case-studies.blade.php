@extends('layouts.app')

@section('title', 'Case Studies - PixaProof')
@section('description', 'See how enterprises are stopping injection attacks and preventing fraud with PixaProof\'s photo verification technology.')

@section('content')
    {{-- Hero Section --}}
    <section class="relative isolate overflow-hidden bg-neutral-900 px-4 pt-24 pb-20 lg:pt-32 lg:pb-28">
        {{-- Background Pattern --}}
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-primary-900/20 via-neutral-900 to-neutral-900"></div>
            <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg%20width%3D%2260%22%20height%3D%2260%22%20viewBox%3D%220%200%2060%2060%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%3Cg%20fill%3D%22%23ffffff%22%20fill-opacity%3D%220.03%22%3E%3Ccircle%20cx%3D%2230%22%20cy%3D%2230%22%20r%3D%221.5%22%2F%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E')]"></div>
        </div>

        <div class="relative z-10 mx-auto max-w-4xl">
            {{-- Breadcrumb --}}
            <x-breadcrumb :items="[
                ['label' => 'Resources'],
                ['label' => 'Case Studies'],
            ]" variant="light" class="mb-8 justify-center" />

            <div class="text-center">
                <div class="inline-flex items-center gap-2 rounded-full border border-primary-500/20 bg-primary-500/10 px-4 py-2 mb-6">
                    <x-heroicon-s-document-text class="h-4 w-4 text-primary-400" />
                    <span class="text-sm font-medium uppercase tracking-wider text-primary-400">Case Studies</span>
                </div>

                <h1 class="text-4xl font-bold text-white md:text-5xl lg:text-6xl">
                    Customer Success Stories
                </h1>

                <p class="mx-auto mt-6 max-w-2xl text-lg text-neutral-300 md:text-xl">
                    See how enterprises are stopping injection attacks and preventing fraud with PixaProof's photo verification technology.
                </p>
            </div>
        </div>
    </section>

    {{-- Featured Case Study Section --}}
    <x-section>
        <div class="text-center mb-12">
            <p class="text-sm font-semibold uppercase tracking-wider text-primary-600 mb-3">Featured Success Story</p>
            <h2 class="text-3xl font-bold text-neutral-900 md:text-4xl">
                Southeast Asian Bank
            </h2>
            <p class="mx-auto mt-4 max-w-2xl text-lg text-neutral-600">
                How a leading financial institution reduced identity fraud by 85% and transformed their digital onboarding experience.
            </p>
        </div>

        <div class="max-w-5xl mx-auto">
            <div class="rounded-xl border border-neutral-200 bg-white p-8 md:p-10 shadow-sm">
                {{-- Industry Badge --}}
                <div class="inline-flex items-center gap-2 rounded-full border border-primary-200 bg-primary-50 px-3 py-1 mb-8">
                    <x-heroicon-s-building-library class="h-4 w-4 text-primary-600" />
                    <span class="text-sm font-medium text-primary-700">Banking & Finance</span>
                </div>

                <div class="grid lg:grid-cols-2 gap-10">
                    {{-- Challenge & Solution --}}
                    <div class="space-y-8">
                        {{-- Challenge --}}
                        <div>
                            <h3 class="flex items-center gap-2 text-lg font-semibold text-neutral-900 mb-3">
                                <span class="flex h-7 w-7 items-center justify-center rounded-full bg-red-100 text-red-600">
                                    <x-heroicon-s-exclamation-triangle class="h-4 w-4" />
                                </span>
                                The Challenge
                            </h3>
                            <p class="text-neutral-600 leading-relaxed">
                                The bank faced a <strong class="text-neutral-900">15% fraud rate</strong> in their digital account opening process. Fraudsters were exploiting mobile banking apps by uploading pre-edited IDs and stolen photos from their device galleries, bypassing traditional verification checks.
                            </p>
                        </div>

                        {{-- Solution --}}
                        <div>
                            <h3 class="flex items-center gap-2 text-lg font-semibold text-neutral-900 mb-3">
                                <span class="flex h-7 w-7 items-center justify-center rounded-full bg-primary-100 text-primary-600">
                                    <x-heroicon-s-light-bulb class="h-4 w-4" />
                                </span>
                                The Solution
                            </h3>
                            <p class="text-neutral-600 leading-relaxed">
                                Integrated PixaProof SDK into their mobile banking application. The SDK enforces live capture for all identity documents and selfies, blocking gallery uploads entirely and embedding cryptographic signatures at the moment of capture.
                            </p>
                        </div>
                    </div>

                    {{-- Results --}}
                    <div>
                        <h3 class="flex items-center gap-2 text-lg font-semibold text-neutral-900 mb-6">
                            <span class="flex h-7 w-7 items-center justify-center rounded-full bg-green-100 text-green-600">
                                <x-heroicon-s-chart-bar class="h-4 w-4" />
                            </span>
                            Results*
                        </h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="rounded-lg border border-neutral-200 bg-neutral-50 p-5">
                                <div class="text-3xl font-bold text-primary-600">85%</div>
                                <div class="text-sm font-medium text-neutral-900 mt-1">Fraud Reduction</div>
                                <div class="text-xs text-neutral-500 mt-1">15% to 2.2% fraud rate</div>
                            </div>
                            <div class="rounded-lg border border-neutral-200 bg-neutral-50 p-5">
                                <div class="text-3xl font-bold text-primary-600">$2.4M</div>
                                <div class="text-sm font-medium text-neutral-900 mt-1">Annual Savings</div>
                                <div class="text-xs text-neutral-500 mt-1">Fraud losses prevented</div>
                            </div>
                            <div class="rounded-lg border border-neutral-200 bg-neutral-50 p-5">
                                <div class="text-3xl font-bold text-primary-600">65%</div>
                                <div class="text-sm font-medium text-neutral-900 mt-1">Faster Onboarding</div>
                                <div class="text-xs text-neutral-500 mt-1">48hrs to 17hrs</div>
                            </div>
                            <div class="rounded-lg border border-neutral-200 bg-neutral-50 p-5">
                                <div class="text-3xl font-bold text-primary-600">40%</div>
                                <div class="text-sm font-medium text-neutral-900 mt-1">Cost Reduction</div>
                                <div class="text-xs text-neutral-500 mt-1">Manual review savings</div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Quote --}}
                <div class="mt-10 pt-8 border-t border-neutral-200">
                    <div class="flex gap-4">
                        <x-heroicon-s-chat-bubble-bottom-center-text class="h-8 w-8 text-primary-400 shrink-0" />
                        <div>
                            <blockquote class="text-lg text-neutral-700 italic leading-relaxed">
                                "PixaProof transformed our digital onboarding. Gallery uploads are completely blocked, so we know every ID was captured live. The impact on fraud rates was immediate and dramatic."
                            </blockquote>
                            <div class="mt-4 flex items-center gap-3">
                                <div class="h-10 w-10 rounded-full bg-neutral-200 flex items-center justify-center">
                                    <x-heroicon-s-user class="h-5 w-5 text-neutral-500" />
                                </div>
                                <div>
                                    <div class="font-medium text-neutral-900">Head of Digital Banking</div>
                                    <div class="text-sm text-neutral-500">Southeast Asian Bank</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Coming Soon Notice --}}
                <div class="mt-8 rounded-lg border border-amber-200 bg-amber-50 px-4 py-3">
                    <div class="flex items-center gap-3">
                        <x-heroicon-s-clock class="h-5 w-5 text-amber-600 shrink-0" />
                        <p class="text-sm text-amber-800">
                            <strong>Full case study coming soon.</strong> Detailed implementation guide and extended results analysis in development.
                        </p>
                    </div>
                </div>

                {{-- Disclaimer --}}
                <p class="mt-4 text-xs text-neutral-400">
                    *Representative results based on composite data from similar implementations. Individual results may vary.
                </p>
            </div>
        </div>
    </x-section>

    {{-- More Case Studies Coming Section --}}
    <x-section bg="neutral">
        <div class="text-center mb-12">
            <p class="text-sm font-semibold uppercase tracking-wider text-primary-600 mb-3">More Stories</p>
            <h2 class="text-3xl font-bold text-neutral-900 md:text-4xl">
                Case Studies in Development
            </h2>
            <p class="mx-auto mt-4 max-w-2xl text-lg text-neutral-600">
                We're documenting success stories from customers across multiple industries.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto">
            {{-- Insurance --}}
            <div class="relative rounded-xl border border-neutral-200 bg-white p-6 overflow-hidden">
                {{-- Coming Soon Overlay --}}
                <div class="absolute inset-0 bg-neutral-900/80 backdrop-blur-sm flex flex-col items-center justify-center z-10">
                    <x-heroicon-o-clock class="h-10 w-10 text-white/60 mb-3" />
                    <span class="text-sm font-semibold text-white uppercase tracking-wider">Coming Soon</span>
                </div>

                {{-- Card Content (visible behind overlay) --}}
                <div class="opacity-40">
                    <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-emerald-100 mb-4">
                        <x-heroicon-o-shield-check class="h-6 w-6 text-emerald-600" />
                    </div>
                    <h3 class="text-lg font-semibold text-neutral-900 mb-2">Regional Insurance Provider</h3>
                    <p class="text-sm text-neutral-500 mb-4">Claims Fraud Prevention</p>
                    <p class="text-sm text-neutral-600">
                        How a motor insurance company reduced fraudulent claims by preventing pre-staged damage photos and ensuring all documentation is captured live at the incident scene.
                    </p>
                </div>
            </div>

            {{-- Government --}}
            <div class="relative rounded-xl border border-neutral-200 bg-white p-6 overflow-hidden">
                {{-- Coming Soon Overlay --}}
                <div class="absolute inset-0 bg-neutral-900/80 backdrop-blur-sm flex flex-col items-center justify-center z-10">
                    <x-heroicon-o-clock class="h-10 w-10 text-white/60 mb-3" />
                    <span class="text-sm font-semibold text-white uppercase tracking-wider">Coming Soon</span>
                </div>

                {{-- Card Content (visible behind overlay) --}}
                <div class="opacity-40">
                    <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-purple-100 mb-4">
                        <x-heroicon-o-building-office-2 class="h-6 w-6 text-purple-600" />
                    </div>
                    <h3 class="text-lg font-semibold text-neutral-900 mb-2">Government Agency</h3>
                    <p class="text-sm text-neutral-500 mb-4">Citizen Services Verification</p>
                    <p class="text-sm text-neutral-600">
                        How a national agency improved identity verification for online services, reducing fraud in benefits applications while improving citizen experience.
                    </p>
                </div>
            </div>

            {{-- E-commerce --}}
            <div class="relative rounded-xl border border-neutral-200 bg-white p-6 overflow-hidden">
                {{-- Coming Soon Overlay --}}
                <div class="absolute inset-0 bg-neutral-900/80 backdrop-blur-sm flex flex-col items-center justify-center z-10">
                    <x-heroicon-o-clock class="h-10 w-10 text-white/60 mb-3" />
                    <span class="text-sm font-semibold text-white uppercase tracking-wider">Coming Soon</span>
                </div>

                {{-- Card Content (visible behind overlay) --}}
                <div class="opacity-40">
                    <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-rose-100 mb-4">
                        <x-heroicon-o-shopping-bag class="h-6 w-6 text-rose-600" />
                    </div>
                    <h3 class="text-lg font-semibold text-neutral-900 mb-2">E-commerce Platform</h3>
                    <p class="text-sm text-neutral-500 mb-4">Seller Verification</p>
                    <p class="text-sm text-neutral-600">
                        How a regional marketplace improved buyer trust by requiring verified product photos from sellers, reducing disputes and counterfeit listings.
                    </p>
                </div>
            </div>
        </div>
    </x-section>

    {{-- Request References Section --}}
    <x-section>
        <div class="max-w-3xl mx-auto">
            <div class="rounded-xl border border-neutral-200 bg-white p-8 md:p-10 shadow-sm">
                <div class="text-center">
                    <div class="inline-flex items-center justify-center h-14 w-14 rounded-full bg-primary-100 mb-6">
                        <x-heroicon-o-user-group class="h-7 w-7 text-primary-600" />
                    </div>
                    <h2 class="text-2xl font-bold text-neutral-900 md:text-3xl mb-4">
                        Request Customer References
                    </h2>
                    <p class="text-neutral-600 mb-8 max-w-xl mx-auto">
                        While we prepare our detailed case studies, we're happy to connect you with reference customers in your industry who can share their experience with PixaProof.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <x-button href="{{ route('contact') }}" size="lg">
                            Request References
                        </x-button>
                        <x-button href="{{ route('contact') }}" variant="outline" size="lg" :icon="false">
                            Schedule a Call
                        </x-button>
                    </div>
                </div>
            </div>
        </div>
    </x-section>

    {{-- Final CTA Section --}}
    <x-section bg="dark">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-white md:text-4xl mb-6">
                Join Our Success Stories
            </h2>
            <p class="text-lg text-neutral-300 mb-8 max-w-2xl mx-auto">
                Ready to protect your organization from photo fraud? See how PixaProof can deliver similar results for your business.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <x-button href="{{ route('contact') }}" size="lg">
                    Request Demo
                </x-button>
                <x-button href="{{ route('solutions.banking') }}" variant="outline" size="lg" :icon="false" class="border-neutral-600 text-neutral-300 hover:bg-neutral-800">
                    Explore Solutions
                </x-button>
            </div>
        </div>
    </x-section>
@endsection
