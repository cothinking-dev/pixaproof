@extends('layouts.app')

@section('title', 'E-Commerce & Marketplaces - PixaProof')
@section('description', 'Build buyer trust with verified product photos. Prevent fake product listings from stock photos and edited images with live product photo verification.')

@section('content')
    {{-- Hero Section --}}
    <section class="relative isolate overflow-hidden bg-white px-4 pt-32 pb-20 lg:pt-40 lg:pb-28">
        {{-- Background Image --}}
        <div class="absolute inset-0 size-full">
            <img
                src="/images/heroes/hero-ecommerce.webp"
                alt=""
                class="size-full object-cover object-center"
            />
            <div class="absolute inset-0 bg-gradient-to-r from-primary-900/95 via-primary-800/90 to-primary-900/85"></div>
        </div>

        <div class="relative z-10 max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary-500/20 border border-primary-400/30 mb-6">
                <x-heroicon-s-shopping-bag class="w-4 h-4 text-primary-300" />
                <span class="text-sm font-medium text-primary-200 uppercase tracking-wider">E-Commerce & Marketplaces</span>
            </div>

            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                Build buyer trust with verified product photos
            </h1>

            <p class="text-lg md:text-xl text-neutral-100 mb-10 max-w-3xl mx-auto">
                Prevent fake product listings from stock photos and edited images with live product photo verification for seller trust.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <x-button href="/contact" size="lg" variant="white">
                    Request Marketplace Demo
                </x-button>
                <x-button href="#solution" variant="outline-white" size="lg">
                    See How It Works
                </x-button>
            </div>
        </div>
    </section>

    {{-- The Challenge Section --}}
    <x-section bg="surface">
        <div class="text-center mb-16">
            <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">The Challenge</p>
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                Fake photos destroy buyer trust
            </h2>
            <p class="text-neutral-600 text-lg max-w-2xl mx-auto">
                Marketplace platforms struggle with sellers who use misleading images that damage the entire ecosystem.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto">
            <x-card.problem
                title="Stock Photo Fraud"
                description="Sellers upload generic stock images instead of actual product photos"
                impact="Products don't match listings"
                icon="photo"
            />
            <x-card.problem
                title="Edited Images"
                description="Photos are enhanced to hide defects and exaggerate condition"
                impact="Returns and disputes surge"
                icon="paint-brush"
            />
            <x-card.problem
                title="Internet Scraping"
                description="Product images copied from other sellers or manufacturer sites"
                impact="No proof of actual inventory"
                icon="globe-alt"
            />
            <x-card.problem
                title="Return Fraud"
                description="Different items photographed and returned than what was sold"
                impact="Platform absorbs losses"
                icon="arrow-path"
            />
            <x-card.problem
                title="Buyer Distrust"
                description="Buyers can't verify if images show the actual item for sale"
                impact="Conversion rates decline"
                icon="exclamation-triangle"
            />
            <x-card.problem
                title="Platform Reputation"
                description="Bad seller behavior damages the entire marketplace brand"
                impact="Customer churn increases"
                icon="building-storefront"
            />
        </div>
    </x-section>

    {{-- The Solution Section --}}
    <x-section id="solution" bg="default" bgImage="hexagon-pattern" bgOverlay="darker">
        <div class="text-center mb-16">
            <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">The Solution</p>
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                Every product photo captured live, verified authentic
            </h2>
            <p class="text-neutral-600 text-lg max-w-2xl mx-auto">
                PixaProof ensures sellers photograph the actual items they're selling, building trust with every listing.
            </p>
        </div>

        {{-- Flow --}}
        <div class="max-w-4xl mx-auto">
            <div class="grid md:grid-cols-5 gap-6">
                @php
                    $steps = [
                        ['icon' => 'plus-circle', 'title' => 'List Item', 'desc' => 'Seller creates listing'],
                        ['icon' => 'camera', 'title' => 'Live Capture', 'desc' => 'SDK enforces real-time photo'],
                        ['icon' => 'check-badge', 'title' => 'Verify', 'desc' => 'Authenticity confirmed'],
                        ['icon' => 'sparkles', 'title' => 'Badge', 'desc' => '"Verified Photo" shown'],
                        ['icon' => 'arrow-trending-up', 'title' => 'Convert', 'desc' => 'Trust drives sales'],
                    ];
                @endphp

                @foreach ($steps as $index => $step)
                    <div class="text-center">
                        <div class="relative">
                            <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-primary-500 flex items-center justify-center">
                                <x-dynamic-component :component="'heroicon-s-' . $step['icon']" class="w-8 h-8 text-neutral-900" />
                            </div>
                            @if ($index < count($steps) - 1)
                                <div class="hidden md:block absolute top-8 left-[60%] w-full h-px bg-gradient-to-r from-primary-500/50 to-transparent"></div>
                            @endif
                        </div>
                        <h3 class="font-semibold text-neutral-900 mb-1">{{ $step['title'] }}</h3>
                        <p class="text-sm text-neutral-500">{{ $step['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </x-section>

    {{-- Verification Badge Section --}}
    <x-section bg="surface">
        <div class="max-w-5xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">Trust Signal</p>
                    <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                        The Verified Photo badge
                    </h2>
                    <p class="text-neutral-600 text-lg mb-8">
                        Buyers see a clear trust indicator on listings with verified photos, knowing the seller actually photographed the item they're purchasing.
                    </p>

                    <div class="space-y-4">
                        @php
                            $badgeFeatures = [
                                'Photo captured live through the app',
                                'Not uploaded from gallery or internet',
                                'Timestamp confirms recency',
                                'Seller photographed actual item',
                            ];
                        @endphp
                        @foreach ($badgeFeatures as $feature)
                            <div class="flex items-center gap-3">
                                <x-heroicon-s-check-circle class="w-5 h-5 text-primary-600 flex-shrink-0" />
                                <span class="text-neutral-600">{{ $feature }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- Badge Visual --}}
                <div class="flex justify-center">
                    <div class="relative p-8 rounded-2xl bg-white border border-neutral-200 max-w-sm">
                        {{-- Mock Product Card --}}
                        <div class="aspect-square rounded-xl bg-neutral-100 mb-4 relative overflow-hidden">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <x-heroicon-o-photo class="w-16 h-16 text-neutral-400" />
                            </div>
                            {{-- Verified Badge --}}
                            <div class="absolute top-3 right-3 flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-primary-500 text-neutral-900 text-xs font-medium">
                                <x-heroicon-s-check-badge class="w-4 h-4" />
                                Verified Photo
                            </div>
                        </div>
                        <h4 class="text-neutral-900 font-medium mb-1">Premium Product Listing</h4>
                        <p class="text-neutral-500 text-sm mb-3">Authentic condition documented</p>
                        <div class="flex items-center justify-between">
                            <span class="text-xl font-bold text-neutral-900">$299</span>
                            <span class="text-xs text-neutral-400">Verified 2 min ago</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-section>

    {{-- Use Cases Section --}}
    <x-section bg="default" bgImage="grid-tech" bgOverlay="dark">
        <div class="text-center mb-16">
            <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">Use Cases</p>
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                Marketplace applications
            </h2>
        </div>

        <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            @php
                $useCases = [
                    [
                        'icon' => 'tag',
                        'title' => 'Seller Product Verification',
                        'features' => [
                            'Live product photo requirements',
                            'Stock photo prevention',
                            'Condition accuracy assurance',
                            'Verified seller differentiation'
                        ]
                    ],
                    [
                        'icon' => 'sparkles',
                        'title' => 'High-Value Authentication',
                        'features' => [
                            'Luxury goods verification',
                            'Collectibles and antiques',
                            'Condition documentation',
                            'Provenance support'
                        ]
                    ],
                    [
                        'icon' => 'arrow-path',
                        'title' => 'Return & Refund Verification',
                        'features' => [
                            'Live capture of returned item',
                            'Before/after comparison',
                            'Fraud prevention',
                            'Accurate processing'
                        ]
                    ],
                    [
                        'icon' => 'key',
                        'title' => 'Rental Platforms',
                        'features' => [
                            'Property condition documentation',
                            'Vehicle rental check-in/out',
                            'Equipment rental verification',
                            'Damage dispute resolution'
                        ]
                    ],
                ];
            @endphp

            @foreach ($useCases as $useCase)
                <div class="p-8 rounded-2xl bg-neutral-50/80 border border-neutral-200 hover:border-primary-500/50 transition-colors">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 rounded-xl bg-primary-500/10 flex items-center justify-center">
                            <x-dynamic-component :component="'heroicon-s-' . $useCase['icon']" class="w-6 h-6 text-primary-600" />
                        </div>
                        <h3 class="text-xl font-semibold text-neutral-900">{{ $useCase['title'] }}</h3>
                    </div>
                    <ul class="space-y-3">
                        @foreach ($useCase['features'] as $feature)
                            <li class="flex items-center gap-3">
                                <x-heroicon-s-check-circle class="w-5 h-5 text-primary-600 flex-shrink-0" />
                                <span class="text-neutral-600">{{ $feature }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </x-section>

    {{-- Benefits Section --}}
    <x-section bg="surface">
        <div class="text-center mb-16">
            <p class="text-primary-600 font-semibold uppercase tracking-wider text-sm mb-4">Impact</p>
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                Platform-wide benefits
            </h2>
        </div>

        <div class="max-w-4xl mx-auto overflow-hidden rounded-2xl border border-neutral-200">
            <table class="w-full">
                <thead class="bg-white">
                    <tr>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-neutral-900">Benefit</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-neutral-900">Impact</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-neutral-200 bg-neutral-50/50">
                    @php
                        $benefits = [
                            ['Reduces fake listings', 'Stock photos blocked at capture'],
                            ['Improves buyer confidence', 'Trust badges visible on listings'],
                            ['Differentiates sellers', 'Verified status as competitive advantage'],
                            ['Reduces disputes', 'Authentic condition photos as evidence'],
                            ['Increases conversions', 'Trust drives purchase decisions'],
                        ];
                    @endphp
                    @foreach ($benefits as $row)
                        <tr class="hover:bg-white/50 transition-colors">
                            <td class="px-6 py-4 text-primary-600 font-medium">{{ $row[0] }}</td>
                            <td class="px-6 py-4 text-neutral-600">{{ $row[1] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-section>

    {{-- Final CTA Section --}}
    <x-section bg="brand">
        <div class="text-center max-w-3xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 mb-6">
                Ready to build marketplace trust?
            </h2>
            <p class="text-xl text-neutral-900/80 mb-8">
                Join leading marketplaces protecting buyers and sellers with PixaProof.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <x-button href="/contact" variant="white" size="lg">
                    Request Marketplace Demo
                </x-button>
                <x-button href="/developers" variant="outline-white" size="lg">
                    View Developer Docs
                </x-button>
            </div>
        </div>
    </x-section>
@endsection
