@extends('layouts.app')

@section('title', 'Fraud Statistics - The Cost of Image-Based Fraud')
@section('description', 'Industry data on injection attacks, document fraud, and identity fraud losses. See why preventing fraud at the source matters.')

@section('content')
    {{-- Hero Section --}}
    <section class="relative isolate overflow-hidden bg-neutral-900 px-4 pt-24 pb-20 lg:pt-32 lg:pb-28">
        {{-- Background Pattern --}}
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_20%,rgba(14,165,233,0.15),transparent_50%)]"></div>
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_70%_80%,rgba(245,158,11,0.1),transparent_50%)]"></div>
        </div>

        <div class="relative z-10 max-w-4xl mx-auto">
            {{-- Breadcrumb --}}
            <x-breadcrumb :items="[
                ['label' => 'Resources'],
                ['label' => 'Fraud Statistics'],
            ]" variant="light" class="mb-8 justify-center" />

            <div class="text-center">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary-500/10 border border-primary-500/20 mb-6">
                    <x-heroicon-s-chart-bar class="w-4 h-4 text-primary-400" />
                    <span class="text-sm font-medium text-primary-400 uppercase tracking-wider">Industry Research</span>
                </div>

                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                    The Cost of Image-Based Fraud
                </h1>

                <p class="text-lg md:text-xl text-neutral-300 mb-8 max-w-3xl mx-auto">
                    Industry data on injection attacks and document fraud. These numbers reveal why stopping fraud at the capture level is critical for enterprises.
                </p>

                <x-button href="/contact" size="lg">
                    Request Demo
                </x-button>
            </div>
        </div>
    </section>

    {{-- Global Overview Stats --}}
    <x-section>
        <div class="text-center mb-16">
            <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">Global Overview</p>
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                The scale of fraud losses worldwide
            </h2>
            <p class="text-neutral-600 text-lg max-w-2xl mx-auto">
                Fraud costs organizations billions annually. These figures represent verified industry research.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl mx-auto">
            {{-- Stat Card 1 --}}
            <div class="p-8 bg-white border border-neutral-200 rounded text-center hover:border-primary-300 hover:shadow-md transition-all">
                <div class="text-4xl md:text-5xl font-bold text-primary-600 mb-2">$56B</div>
                <div class="text-lg font-semibold text-neutral-900 mb-2">Title & Property Fraud</div>
                <p class="text-sm text-neutral-600 mb-3">Annual losses in real estate sector</p>
                <p class="text-xs text-neutral-500">Source: FBI Financial Crimes Report</p>
            </div>

            {{-- Stat Card 2 --}}
            <div class="p-8 bg-white border border-neutral-200 rounded text-center hover:border-primary-300 hover:shadow-md transition-all">
                <div class="text-4xl md:text-5xl font-bold text-primary-600 mb-2">$7.9B</div>
                <div class="text-lg font-semibold text-neutral-900 mb-2">Identity Fraud Losses</div>
                <p class="text-sm text-neutral-600 mb-3">US consumer losses in 2023</p>
                <p class="text-xs text-neutral-500">Source: Javelin Strategy & Research</p>
            </div>

            {{-- Stat Card 3 --}}
            <div class="p-8 bg-white border border-neutral-200 rounded text-center hover:border-primary-300 hover:shadow-md transition-all">
                <div class="text-4xl md:text-5xl font-bold text-accent-500 mb-2">200%</div>
                <div class="text-lg font-semibold text-neutral-900 mb-2">Synthetic Identity Growth</div>
                <p class="text-sm text-neutral-600 mb-3">Year-over-year increase</p>
                <p class="text-xs text-neutral-500">Source: McKinsey & Company</p>
            </div>

            {{-- Stat Card 4 --}}
            <div class="p-8 bg-white border border-neutral-200 rounded text-center hover:border-primary-300 hover:shadow-md transition-all">
                <div class="text-4xl md:text-5xl font-bold text-accent-500 mb-2">30%</div>
                <div class="text-lg font-semibold text-neutral-900 mb-2">E-commerce Chargebacks</div>
                <p class="text-sm text-neutral-600 mb-3">Linked to account takeover fraud</p>
                <p class="text-xs text-neutral-500">Source: Sift Digital Trust & Safety</p>
            </div>
        </div>
    </x-section>

    {{-- Industry-Specific Statistics --}}
    <x-section bg="neutral">
        <div class="text-center mb-16">
            <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">By Industry</p>
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                How fraud impacts each sector
            </h2>
            <p class="text-neutral-600 text-lg max-w-2xl mx-auto">
                Every industry faces unique fraud challenges, but the common thread is compromised identity verification.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            {{-- Banking --}}
            <div class="p-8 bg-white border border-neutral-200 rounded hover:shadow-md transition-all">
                <div class="flex items-center gap-4 mb-6">
                    <div class="flex items-center justify-center w-14 h-14 rounded bg-primary-50 text-primary-600">
                        <x-heroicon-s-building-library class="w-7 h-7" />
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-neutral-900">Banking & Financial Services</h3>
                        <p class="text-sm text-neutral-500">Account fraud & identity theft</p>
                    </div>
                </div>
                <div class="mb-4">
                    <span class="text-3xl font-bold text-primary-600">85%</span>
                    <span class="text-neutral-600 ml-2">of fraud originates from compromised identity verification</span>
                </div>
                <p class="text-sm text-neutral-600 mb-3">
                    Fraudsters exploit digital onboarding by injecting fake IDs and synthetic selfies into verification flows.
                </p>
                <p class="text-xs text-neutral-500">Source: Aite-Novarica Group Research</p>
            </div>

            {{-- Insurance --}}
            <div class="p-8 bg-white border border-neutral-200 rounded hover:shadow-md transition-all">
                <div class="flex items-center gap-4 mb-6">
                    <div class="flex items-center justify-center w-14 h-14 rounded bg-primary-50 text-primary-600">
                        <x-heroicon-s-shield-check class="w-7 h-7" />
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-neutral-900">Insurance</h3>
                        <p class="text-sm text-neutral-500">Claims fraud & staged documentation</p>
                    </div>
                </div>
                <div class="mb-4">
                    <span class="text-3xl font-bold text-primary-600">$80B</span>
                    <span class="text-neutral-600 ml-2">annual insurance fraud in the United States</span>
                </div>
                <p class="text-sm text-neutral-600 mb-3">
                    Falsified damage photos and doctored documentation contribute to billions in fraudulent claims annually.
                </p>
                <p class="text-xs text-neutral-500">Source: FBI Insurance Fraud Report</p>
            </div>

            {{-- Healthcare --}}
            <div class="p-8 bg-white border border-neutral-200 rounded hover:shadow-md transition-all">
                <div class="flex items-center gap-4 mb-6">
                    <div class="flex items-center justify-center w-14 h-14 rounded bg-primary-50 text-primary-600">
                        <x-heroicon-s-heart class="w-7 h-7" />
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-neutral-900">Healthcare</h3>
                        <p class="text-sm text-neutral-500">Billing fraud & identity abuse</p>
                    </div>
                </div>
                <div class="mb-4">
                    <span class="text-3xl font-bold text-primary-600">$300B</span>
                    <span class="text-neutral-600 ml-2">estimated healthcare fraud annually</span>
                </div>
                <p class="text-sm text-neutral-600 mb-3">
                    Medical identity theft and falsified documentation enable fraudulent billing and prescription abuse.
                </p>
                <p class="text-xs text-neutral-500">Source: National Health Care Anti-Fraud Association</p>
            </div>

            {{-- E-commerce --}}
            <div class="p-8 bg-white border border-neutral-200 rounded hover:shadow-md transition-all">
                <div class="flex items-center gap-4 mb-6">
                    <div class="flex items-center justify-center w-14 h-14 rounded bg-primary-50 text-primary-600">
                        <x-heroicon-s-shopping-cart class="w-7 h-7" />
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-neutral-900">E-commerce</h3>
                        <p class="text-sm text-neutral-500">Account takeover & fake listings</p>
                    </div>
                </div>
                <div class="mb-4">
                    <span class="text-3xl font-bold text-primary-600">30%</span>
                    <span class="text-neutral-600 ml-2">of chargebacks linked to account takeover</span>
                </div>
                <p class="text-sm text-neutral-600 mb-3">
                    Fraudulent accounts use stolen identities and fake product photos to deceive buyers and platforms.
                </p>
                <p class="text-xs text-neutral-500">Source: Sift Digital Trust & Safety</p>
            </div>
        </div>
    </x-section>

    {{-- The Injection Attack Connection --}}
    <x-section>
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">The Root Cause</p>
                <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                    The Injection Attack Connection
                </h2>
            </div>

            <div class="grid md:grid-cols-2 gap-8 items-center">
                {{-- Left: Visual --}}
                <div class="p-8 bg-neutral-50 border border-neutral-200 rounded">
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-red-100 text-red-600 flex items-center justify-center">
                                <x-heroicon-s-exclamation-triangle class="w-5 h-5" />
                            </div>
                            <div>
                                <h4 class="font-semibold text-neutral-900 mb-1">Gallery Injection</h4>
                                <p class="text-sm text-neutral-600">Pre-edited photos uploaded instead of live captures</p>
                            </div>
                        </div>
                        <div class="w-full h-px bg-neutral-200"></div>
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-red-100 text-red-600 flex items-center justify-center">
                                <x-heroicon-s-exclamation-triangle class="w-5 h-5" />
                            </div>
                            <div>
                                <h4 class="font-semibold text-neutral-900 mb-1">Deepfake Selfies</h4>
                                <p class="text-sm text-neutral-600">AI-generated faces bypass liveness checks</p>
                            </div>
                        </div>
                        <div class="w-full h-px bg-neutral-200"></div>
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-red-100 text-red-600 flex items-center justify-center">
                                <x-heroicon-s-exclamation-triangle class="w-5 h-5" />
                            </div>
                            <div>
                                <h4 class="font-semibold text-neutral-900 mb-1">Synthetic Documents</h4>
                                <p class="text-sm text-neutral-600">Forged IDs with real document templates</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Right: Content --}}
                <div>
                    <blockquote class="text-2xl font-medium text-neutral-900 mb-6 leading-relaxed">
                        "Most fraud starts with bypassing live capture verification."
                    </blockquote>
                    <p class="text-neutral-600 mb-6">
                        Injection attacks are the gateway to larger fraud schemes. By allowing users to submit pre-edited photos instead of live captures, organizations leave the door open to identity fraud, account takeover, and document forgery.
                    </p>
                    <p class="text-neutral-600 mb-8">
                        PixaProof blocks these attacks at the source by ensuring every photo is captured live through our SDK, with cryptographic proof of authenticity embedded at the moment of capture.
                    </p>
                    <x-button href="{{ route('resources.injection-attacks') }}" variant="secondary">
                        Learn About Injection Attacks
                    </x-button>
                </div>
            </div>
        </div>
    </x-section>

    {{-- The Cost of Inaction --}}
    <x-section bg="primary">
        <div class="text-center mb-12">
            <p class="text-primary-700 font-semibold uppercase tracking-wider text-sm mb-4">The Bottom Line</p>
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                The cost of inaction
            </h2>
        </div>

        <div class="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto">
            <div class="p-6 bg-white border border-neutral-200 rounded text-center">
                <div class="w-12 h-12 rounded-full bg-red-100 text-red-600 flex items-center justify-center mx-auto mb-4">
                    <x-heroicon-s-currency-dollar class="w-6 h-6" />
                </div>
                <h3 class="text-lg font-bold text-neutral-900 mb-2">Direct Financial Losses</h3>
                <p class="text-sm text-neutral-600">Fraudulent transactions, chargebacks, and remediation costs add up quickly</p>
            </div>

            <div class="p-6 bg-white border border-neutral-200 rounded text-center">
                <div class="w-12 h-12 rounded-full bg-red-100 text-red-600 flex items-center justify-center mx-auto mb-4">
                    <x-heroicon-s-shield-exclamation class="w-6 h-6" />
                </div>
                <h3 class="text-lg font-bold text-neutral-900 mb-2">Regulatory Penalties</h3>
                <p class="text-sm text-neutral-600">Non-compliance with KYC/AML requirements leads to significant fines</p>
            </div>

            <div class="p-6 bg-white border border-neutral-200 rounded text-center">
                <div class="w-12 h-12 rounded-full bg-red-100 text-red-600 flex items-center justify-center mx-auto mb-4">
                    <x-heroicon-s-user-minus class="w-6 h-6" />
                </div>
                <h3 class="text-lg font-bold text-neutral-900 mb-2">Reputation Damage</h3>
                <p class="text-sm text-neutral-600">Customer trust erodes when fraud incidents become public</p>
            </div>
        </div>
    </x-section>

    {{-- Sources Section --}}
    <x-section>
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">Data Sources</p>
                <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                    Research & citations
                </h2>
                <p class="text-neutral-600 text-lg">
                    All statistics on this page are sourced from reputable industry research organizations.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-4">
                <a href="https://www.fbi.gov/investigate/white-collar-crime" target="_blank" rel="noopener" class="flex items-center gap-4 p-4 bg-white border border-neutral-200 rounded hover:border-primary-300 hover:shadow-sm transition-all group">
                    <div class="flex-shrink-0 w-10 h-10 rounded bg-neutral-100 text-neutral-600 flex items-center justify-center group-hover:bg-primary-50 group-hover:text-primary-600 transition-colors">
                        <x-heroicon-o-document-text class="w-5 h-5" />
                    </div>
                    <div class="flex-1">
                        <h4 class="font-semibold text-neutral-900 group-hover:text-primary-600 transition-colors">FBI Financial Crimes Report</h4>
                        <p class="text-sm text-neutral-500">Property fraud, insurance fraud statistics</p>
                    </div>
                    <x-heroicon-o-arrow-top-right-on-square class="w-4 h-4 text-neutral-400 group-hover:text-primary-500" />
                </a>

                <a href="https://javelinstrategy.com/research" target="_blank" rel="noopener" class="flex items-center gap-4 p-4 bg-white border border-neutral-200 rounded hover:border-primary-300 hover:shadow-sm transition-all group">
                    <div class="flex-shrink-0 w-10 h-10 rounded bg-neutral-100 text-neutral-600 flex items-center justify-center group-hover:bg-primary-50 group-hover:text-primary-600 transition-colors">
                        <x-heroicon-o-document-text class="w-5 h-5" />
                    </div>
                    <div class="flex-1">
                        <h4 class="font-semibold text-neutral-900 group-hover:text-primary-600 transition-colors">Javelin Strategy & Research</h4>
                        <p class="text-sm text-neutral-500">Identity fraud losses, consumer impact</p>
                    </div>
                    <x-heroicon-o-arrow-top-right-on-square class="w-4 h-4 text-neutral-400 group-hover:text-primary-500" />
                </a>

                <a href="https://www.mckinsey.com/capabilities/risk-and-resilience/our-insights" target="_blank" rel="noopener" class="flex items-center gap-4 p-4 bg-white border border-neutral-200 rounded hover:border-primary-300 hover:shadow-sm transition-all group">
                    <div class="flex-shrink-0 w-10 h-10 rounded bg-neutral-100 text-neutral-600 flex items-center justify-center group-hover:bg-primary-50 group-hover:text-primary-600 transition-colors">
                        <x-heroicon-o-document-text class="w-5 h-5" />
                    </div>
                    <div class="flex-1">
                        <h4 class="font-semibold text-neutral-900 group-hover:text-primary-600 transition-colors">McKinsey & Company</h4>
                        <p class="text-sm text-neutral-500">Synthetic identity fraud trends</p>
                    </div>
                    <x-heroicon-o-arrow-top-right-on-square class="w-4 h-4 text-neutral-400 group-hover:text-primary-500" />
                </a>

                <a href="https://www.aite-novarica.com/" target="_blank" rel="noopener" class="flex items-center gap-4 p-4 bg-white border border-neutral-200 rounded hover:border-primary-300 hover:shadow-sm transition-all group">
                    <div class="flex-shrink-0 w-10 h-10 rounded bg-neutral-100 text-neutral-600 flex items-center justify-center group-hover:bg-primary-50 group-hover:text-primary-600 transition-colors">
                        <x-heroicon-o-document-text class="w-5 h-5" />
                    </div>
                    <div class="flex-1">
                        <h4 class="font-semibold text-neutral-900 group-hover:text-primary-600 transition-colors">Aite-Novarica Group</h4>
                        <p class="text-sm text-neutral-500">Banking fraud & identity verification</p>
                    </div>
                    <x-heroicon-o-arrow-top-right-on-square class="w-4 h-4 text-neutral-400 group-hover:text-primary-500" />
                </a>

                <a href="https://www.nhcaa.org/" target="_blank" rel="noopener" class="flex items-center gap-4 p-4 bg-white border border-neutral-200 rounded hover:border-primary-300 hover:shadow-sm transition-all group">
                    <div class="flex-shrink-0 w-10 h-10 rounded bg-neutral-100 text-neutral-600 flex items-center justify-center group-hover:bg-primary-50 group-hover:text-primary-600 transition-colors">
                        <x-heroicon-o-document-text class="w-5 h-5" />
                    </div>
                    <div class="flex-1">
                        <h4 class="font-semibold text-neutral-900 group-hover:text-primary-600 transition-colors">NHCAA</h4>
                        <p class="text-sm text-neutral-500">Healthcare fraud estimates</p>
                    </div>
                    <x-heroicon-o-arrow-top-right-on-square class="w-4 h-4 text-neutral-400 group-hover:text-primary-500" />
                </a>

                <a href="https://sift.com/resources" target="_blank" rel="noopener" class="flex items-center gap-4 p-4 bg-white border border-neutral-200 rounded hover:border-primary-300 hover:shadow-sm transition-all group">
                    <div class="flex-shrink-0 w-10 h-10 rounded bg-neutral-100 text-neutral-600 flex items-center justify-center group-hover:bg-primary-50 group-hover:text-primary-600 transition-colors">
                        <x-heroicon-o-document-text class="w-5 h-5" />
                    </div>
                    <div class="flex-1">
                        <h4 class="font-semibold text-neutral-900 group-hover:text-primary-600 transition-colors">Sift Digital Trust & Safety</h4>
                        <p class="text-sm text-neutral-500">E-commerce fraud & account takeover</p>
                    </div>
                    <x-heroicon-o-arrow-top-right-on-square class="w-4 h-4 text-neutral-400 group-hover:text-primary-500" />
                </a>
            </div>
        </div>
    </x-section>

    {{-- Final CTA Section --}}
    <x-section bg="dark">
        <div class="text-center max-w-3xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Stop Fraud at the Source
            </h2>
            <p class="text-xl text-neutral-300 mb-8">
                Don't become another statistic. PixaProof blocks injection attacks and ensures every photo is captured live with cryptographic proof.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <x-button href="/contact" size="lg">
                    Request Demo
                </x-button>
                <x-button href="/technology" variant="outline" size="lg" class="border-neutral-600 text-neutral-300 hover:bg-neutral-800 hover:text-white">
                    Learn About PIEA Technology
                </x-button>
            </div>
        </div>
    </x-section>
@endsection
