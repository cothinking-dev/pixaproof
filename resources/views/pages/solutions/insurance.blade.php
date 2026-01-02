@extends('layouts.app')

@section('title', 'Insurance Solutions - PixaProof')
@section('description', 'Stop claims fraud at the point of capture. Prevent staged damage photos, pre-edited images, and fraudulent claims with authenticated photo capture and real-time verification.')

@section('content')
    {{-- Hero Section --}}
    <section class="relative isolate overflow-hidden bg-surface-950 px-4 pt-32 pb-20 lg:pt-40 lg:pb-28">
        {{-- Background Image --}}
        <div class="absolute inset-0 size-full">
            <img
                src="/images/backgrounds/hero-insurance.webp"
                alt=""
                class="size-full object-cover object-center"
            />
            {{-- Gradient Overlay --}}
            <div class="absolute inset-0 bg-gradient-to-r from-brand-600/95 via-brand-600/85 to-brand-600/75"></div>
        </div>

        <div class="relative z-10 max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-surface-800/10 border border-white/20 mb-6">
                <x-heroicon-s-shield-check class="w-4 h-4 text-white" />
                <span class="text-sm font-medium text-white uppercase tracking-wider">Insurance Solutions</span>
            </div>

            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                Stop claims fraud at the point of capture
            </h1>

            <p class="text-lg md:text-xl text-brand-100 mb-8 max-w-3xl mx-auto">
                Prevent staged damage photos, pre-edited images, and fraudulent claims with authenticated photo capture and real-time verification.
            </p>

            {{-- Hero Stat --}}
            <div class="inline-flex items-center gap-3 px-6 py-3 rounded-xl bg-surface-800/10 border border-white/20">
                <span class="text-3xl font-bold text-white">40-60%</span>
                <span class="text-brand-100 text-left text-sm">reduction in fraudulent claims<br>for insurers using PixaProof</span>
            </div>

            <div class="flex flex-col sm:flex-row gap-4 justify-center mt-10">
                <x-button href="/contact" variant="white" size="lg">
                    Request Demo
                </x-button>
                <x-button href="#solution" variant="outline-white" size="lg">
                    See How It Works
                </x-button>
            </div>
        </div>
    </section>

    {{-- The Crisis Section --}}
    <x-section>
        <div class="text-center mb-16">
            <p class="text-brand-500 font-semibold uppercase tracking-wider text-sm mb-4">The Crisis</p>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Claims fraud is costing you millions
            </h2>
        </div>

        {{-- Statistics --}}
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 max-w-5xl mx-auto mb-16">
            @php
                $stats = [
                    ['value' => '$40B+', 'label' => 'Annual insurance fraud losses globally'],
                    ['value' => '15-20%', 'label' => 'Of claims contain false elements'],
                    ['value' => '30-40%', 'label' => 'Of damage photos are pre-staged'],
                    ['value' => '72 hrs', 'label' => 'Average claims investigation time'],
                ];
            @endphp
            @foreach ($stats as $stat)
                <div class="text-center p-6 rounded-xl bg-surface-800 border border-surface-700 shadow-lg shadow-black/20">
                    <div class="text-2xl lg:text-3xl font-bold text-brand-500 mb-2">{{ $stat['value'] }}</div>
                    <div class="text-sm text-gray-300">{{ $stat['label'] }}</div>
                </div>
            @endforeach
        </div>

        {{-- Problem Types --}}
        <div class="max-w-5xl mx-auto">
            <h3 class="text-xl font-semibold text-white text-center mb-8">Common Fraud Types</h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                @php
                    $problems = [
                        ['icon' => 'clock', 'title' => 'Pre-Staged Damage', 'desc' => 'Old damage photos submitted as new incidents'],
                        ['icon' => 'paint-brush', 'title' => 'Photo Enhancement', 'desc' => 'Dents enlarged, scratches darkened digitally'],
                        ['icon' => 'document-duplicate', 'title' => 'Re-Upload Fraud', 'desc' => 'Same photos used for multiple claims'],
                        ['icon' => 'photo', 'title' => 'Gallery Injection', 'desc' => 'Internet photos uploaded as own evidence'],
                        ['icon' => 'cpu-chip', 'title' => 'AI Generation', 'desc' => 'Synthetic damage images created by AI'],
                    ];
                @endphp
                @foreach ($problems as $problem)
                    <div class="flex items-start gap-4 p-4 rounded-xl bg-surface-800 border border-surface-700 shadow-lg shadow-black/20">
                        <div class="flex-shrink-0 w-10 h-10 rounded-lg bg-brand-500/10 flex items-center justify-center">
                            <x-dynamic-component :component="'heroicon-s-' . $problem['icon']" class="w-5 h-5 text-brand-500" />
                        </div>
                        <div>
                            <h4 class="font-medium text-white mb-1">{{ $problem['title'] }}</h4>
                            <p class="text-sm text-gray-300">{{ $problem['desc'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </x-section>

    {{-- The Solution Section --}}
    <x-section id="solution" bg="surface">
        <div class="text-center mb-16">
            <p class="text-brand-500 font-semibold uppercase tracking-wider text-sm mb-4">The Solution</p>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Every claim photo captured live, verified authentic
            </h2>
            <p class="text-gray-300 text-lg max-w-2xl mx-auto">
                PixaProof ensures all claim evidence is captured in real-time with verified location and timestamp.
            </p>
        </div>

        {{-- Claims Flow --}}
        <div class="max-w-4xl mx-auto">
            <div class="relative">
                {{-- Vertical line --}}
                <div class="absolute left-6 top-0 bottom-0 w-px bg-surface-200 hidden md:block"></div>

                <div class="space-y-6">
                    @php
                        $steps = [
                            ['title' => 'Claim Initiation', 'desc' => 'Customer reports incident via mobile app'],
                            ['title' => 'Photo Request', 'desc' => 'SDK activates with gallery blocked and GPS captured'],
                            ['title' => 'Guided Capture', 'desc' => 'Multiple angles, VIN/license plate, and context photos'],
                            ['title' => 'Instant Verification', 'desc' => 'Live capture confirmed, location validated, not from internet'],
                            ['title' => 'Automated Processing', 'desc' => 'AI damage assessment, cost estimation, fast settlement'],
                        ];
                    @endphp

                    @foreach ($steps as $index => $step)
                        <div class="relative flex items-start gap-6">
                            <div class="relative z-10 flex-shrink-0 w-12 h-12 rounded-full bg-brand-500 flex items-center justify-center text-white font-bold">
                                {{ $index + 1 }}
                            </div>
                            <div class="flex-1 pt-2 pb-6">
                                <h3 class="text-lg font-semibold text-white mb-2">{{ $step['title'] }}</h3>
                                <p class="text-gray-300">{{ $step['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </x-section>

    {{-- Capabilities Section --}}
    <x-section>
        <div class="text-center mb-16">
            <p class="text-brand-500 font-semibold uppercase tracking-wider text-sm mb-4">Capabilities</p>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Insurance-specific capture features
            </h2>
        </div>

        <div class="max-w-5xl mx-auto overflow-hidden rounded-2xl border border-surface-700 bg-surface-800">
            <table class="w-full">
                <thead class="bg-surface-800/50">
                    <tr>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-white">Category</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold text-white">Features</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-surface-200">
                    @php
                        $capabilities = [
                            ['Vehicle Damage', 'Multi-angle capture, VIN extraction, license plate OCR, odometer reading'],
                            ['Property Damage', 'Room-by-room documentation, before/after comparison, serial numbers'],
                            ['Personal Injury', 'Medical documentation, prescription verification, HIPAA-compliant handling'],
                            ['Theft/Loss', 'Asset documentation, serial numbers, proof of purchase capture'],
                            ['Field Adjuster', 'Offline capture, inspection checklists, batch upload capability'],
                        ];
                    @endphp
                    @foreach ($capabilities as $row)
                        <tr class="hover:bg-surface-800 transition-colors">
                            <td class="px-6 py-4 text-brand-500 font-medium whitespace-nowrap">{{ $row[0] }}</td>
                            <td class="px-6 py-4 text-gray-300">{{ $row[1] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-section>

    {{-- Fraud Detection Section --}}
    <x-section bg="surface">
        <div class="text-center mb-16">
            <p class="text-brand-500 font-semibold uppercase tracking-wider text-sm mb-4">Detection</p>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Multi-layer fraud detection
            </h2>
        </div>

        <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            @php
                $detection = [
                    [
                        'title' => 'Pre-Staging Detection',
                        'items' => ['Timestamp-location correlation', 'Weather condition matching', 'Lighting/shadow analysis', 'Historical photo comparison']
                    ],
                    [
                        'title' => 'Enhancement Detection',
                        'items' => ['Pixel-level manipulation analysis', 'Cloning tool fingerprints', 'Damage exaggeration detection', 'Color/contrast manipulation']
                    ],
                    [
                        'title' => 'Re-Upload Prevention',
                        'items' => ['Reverse image search', 'Duplicate photo flagging', 'Cross-claim comparison', 'Known fraud image database']
                    ],
                    [
                        'title' => 'Location Validation',
                        'items' => ['GPS spoofing detection', 'Landmark identification', 'Geofencing validation', 'Address verification']
                    ],
                ];
            @endphp

            @foreach ($detection as $category)
                <div class="p-6 rounded-2xl bg-surface-800 border border-surface-700 shadow-lg shadow-black/20">
                    <h3 class="text-lg font-semibold text-white mb-4">{{ $category['title'] }}</h3>
                    <ul class="space-y-3">
                        @foreach ($category['items'] as $item)
                            <li class="flex items-center gap-3">
                                <x-heroicon-s-check-circle class="w-5 h-5 text-brand-500 flex-shrink-0" />
                                <span class="text-gray-300">{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </x-section>

    {{-- Process Improvement Section --}}
    <x-section>
        <div class="text-center mb-16">
            <p class="text-brand-500 font-semibold uppercase tracking-wider text-sm mb-4">Speed</p>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                From weeks to hours
            </h2>
        </div>

        <div class="max-w-4xl mx-auto">
            {{-- Timeline Comparison --}}
            <div class="grid md:grid-cols-2 gap-8 mb-12">
                {{-- Traditional --}}
                <div class="p-6 rounded-2xl bg-surface-800 border border-surface-700 shadow-lg shadow-black/20">
                    <div class="flex items-center gap-3 mb-6">
                        <x-heroicon-s-x-circle class="w-6 h-6 text-red-500" />
                        <h3 class="text-lg font-semibold text-white">Traditional: 2-3 Weeks</h3>
                    </div>
                    <div class="space-y-4 text-sm">
                        <div class="flex justify-between text-gray-300">
                            <span>Day 0-1</span>
                            <span>Report filed</span>
                        </div>
                        <div class="flex justify-between text-gray-300">
                            <span>Day 2-3</span>
                            <span>Photos requested</span>
                        </div>
                        <div class="flex justify-between text-gray-300">
                            <span>Day 3-5</span>
                            <span>Fraud review</span>
                        </div>
                        <div class="flex justify-between text-gray-300">
                            <span>Day 5-14</span>
                            <span>Site inspection</span>
                        </div>
                        <div class="flex justify-between text-gray-300">
                            <span>Day 14-21</span>
                            <span>Settlement</span>
                        </div>
                    </div>
                </div>

                {{-- With PixaProof --}}
                <div class="p-6 rounded-2xl bg-brand-50 border border-brand-200">
                    <div class="flex items-center gap-3 mb-6">
                        <x-heroicon-s-check-circle class="w-6 h-6 text-brand-500" />
                        <h3 class="text-lg font-semibold text-white">With PixaProof: Same Day</h3>
                    </div>
                    <div class="space-y-4 text-sm">
                        <div class="flex justify-between text-surface-700">
                            <span>Hour 0</span>
                            <span>Report with verified photos</span>
                        </div>
                        <div class="flex justify-between text-surface-700">
                            <span>Hour 1</span>
                            <span>AI damage assessment</span>
                        </div>
                        <div class="flex justify-between text-surface-700">
                            <span>Hour 2</span>
                            <span>Auto-approval</span>
                        </div>
                        <div class="flex justify-between text-brand-500 font-medium">
                            <span>Same Day</span>
                            <span>Settlement complete</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Benefits --}}
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @php
                    $benefits = [
                        ['value' => '90%', 'label' => 'Less investigation time'],
                        ['value' => '60%', 'label' => 'Faster settlements'],
                        ['value' => '40%', 'label' => 'Fewer site visits'],
                        ['value' => '75%', 'label' => 'Lower fraud losses'],
                    ];
                @endphp
                @foreach ($benefits as $benefit)
                    <div class="text-center p-4 rounded-xl bg-surface-800 border border-surface-700 shadow-lg shadow-black/20">
                        <div class="text-2xl font-bold text-brand-500 mb-1">{{ $benefit['value'] }}</div>
                        <div class="text-xs text-gray-300">{{ $benefit['label'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </x-section>

    {{-- Customer Success Section --}}
    <x-section bg="surface">
        <div class="max-w-5xl mx-auto">
            <div class="text-center mb-16">
                <p class="text-brand-500 font-semibold uppercase tracking-wider text-sm mb-4">Customer Success</p>
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                    International insurance carrier results
                </h2>
            </div>

            <div class="grid lg:grid-cols-2 gap-8 items-start">
                {{-- Profile --}}
                <div class="p-8 rounded-2xl bg-surface-800 border border-surface-700 shadow-lg shadow-black/20">
                    <h3 class="text-xl font-bold text-white mb-6">Carrier Profile</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between py-3 border-b border-surface-700">
                            <span class="text-gray-300">Policies</span>
                            <span class="text-white font-medium">2M+ auto policies</span>
                        </div>
                        <div class="flex justify-between py-3 border-b border-surface-700">
                            <span class="text-gray-300">Annual Claims</span>
                            <span class="text-white font-medium">$500M+</span>
                        </div>
                        <div class="flex justify-between py-3">
                            <span class="text-gray-300">Previous Fraud Rate</span>
                            <span class="text-red-600 font-medium">18%</span>
                        </div>
                    </div>
                </div>

                {{-- Results --}}
                <div class="p-8 rounded-2xl bg-surface-800 border border-surface-700 shadow-lg shadow-black/20">
                    <h3 class="text-xl font-bold text-white mb-6">Results After 6 Months</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="p-4 rounded-xl bg-surface-800">
                            <div class="text-2xl font-bold text-brand-500">62%</div>
                            <div class="text-sm text-surface-700">Fraud reduction</div>
                            <div class="text-xs text-gray-400">18% → 6.8%</div>
                        </div>
                        <div class="p-4 rounded-xl bg-surface-800">
                            <div class="text-2xl font-bold text-brand-500">$12M</div>
                            <div class="text-sm text-surface-700">Prevented payouts</div>
                        </div>
                        <div class="p-4 rounded-xl bg-surface-800">
                            <div class="text-2xl font-bold text-brand-500">9 days</div>
                            <div class="text-sm text-surface-700">Faster settlement</div>
                            <div class="text-xs text-gray-400">14 → 5 days</div>
                        </div>
                        <div class="p-4 rounded-xl bg-surface-800">
                            <div class="text-2xl font-bold text-brand-500">45%</div>
                            <div class="text-sm text-surface-700">Fewer site visits</div>
                        </div>
                        <div class="p-4 rounded-xl bg-surface-800">
                            <div class="text-2xl font-bold text-brand-500">28%</div>
                            <div class="text-sm text-surface-700">Better CSAT</div>
                        </div>
                        <div class="p-4 rounded-xl bg-surface-800">
                            <div class="text-2xl font-bold text-brand-500">$3.2M</div>
                            <div class="text-sm text-surface-700">Op. savings</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-section>

    {{-- Final CTA Section --}}
    <x-section bg="brand">
        <div class="text-center max-w-3xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Ready to stop claims fraud?
            </h2>
            <p class="text-xl text-white/80 mb-8">
                Join leading insurers protecting billions in claims with PixaProof.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <x-button href="/contact" variant="white" size="lg">
                    Request Demo
                </x-button>
                <x-button href="/developers" variant="outline-white" size="lg">
                    View Developer Docs
                </x-button>
            </div>
        </div>
    </x-section>
@endsection
