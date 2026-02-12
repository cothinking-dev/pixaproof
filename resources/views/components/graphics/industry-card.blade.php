{{--
Industry Card Component
Shows industry with placeholder image and use case description
--}}

@props([
    'title',
    'description',
    'industry' => 'default', // banking, insurance, government, ecommerce, healthcare
    'href' => '#',
])

@php
    $industryConfig = [
        'banking' => [
            'gradient' => 'from-emerald-500/20 to-teal-500/20',
            'accent' => 'emerald',
            'pattern' => 'currency',
        ],
        'insurance' => [
            'gradient' => 'from-blue-500/20 to-cyan-500/20',
            'accent' => 'blue',
            'pattern' => 'shield',
        ],
        'government' => [
            'gradient' => 'from-violet-500/20 to-purple-500/20',
            'accent' => 'violet',
            'pattern' => 'building',
        ],
        'ecommerce' => [
            'gradient' => 'from-rose-500/20 to-red-500/20',
            'accent' => 'rose',
            'pattern' => 'cart',
        ],
        'healthcare' => [
            'gradient' => 'from-rose-500/20 to-pink-500/20',
            'accent' => 'rose',
            'pattern' => 'heart',
        ],
        'default' => [
            'gradient' => 'from-primary-500/20 to-red-500/20',
            'accent' => 'brand',
            'pattern' => 'default',
        ],
    ];
    $config = $industryConfig[$industry] ?? $industryConfig['default'];
@endphp

<a href="{{ $href }}" class="group block">
    <div class="relative overflow-hidden rounded-2xl border border-neutral-200 bg-white transition hover:border-neutral-300">
        {{-- Image placeholder area --}}
        <div class="relative aspect-[16/9] overflow-hidden bg-gradient-to-br {{ $config['gradient'] }}">
            {{-- Pattern overlay --}}
            <div class="absolute inset-0 opacity-30">
                @if($industry === 'banking')
                    {{-- Currency pattern --}}
                    <svg class="h-full w-full" viewBox="0 0 100 100">
                        <pattern id="banking-pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <circle cx="10" cy="10" r="2" fill="currentColor" class="text-emerald-500"/>
                        </pattern>
                        <rect x="0" y="0" width="100" height="100" fill="url(#banking-pattern)"/>
                    </svg>
                @elseif($industry === 'insurance')
                    {{-- Shield pattern --}}
                    <svg class="h-full w-full" viewBox="0 0 100 100">
                        <pattern id="insurance-pattern" x="0" y="0" width="25" height="25" patternUnits="userSpaceOnUse">
                            <path d="M12.5 5 L20 10 L20 17 L12.5 22 L5 17 L5 10 Z" stroke="currentColor" fill="none" stroke-width="1" class="text-blue-500"/>
                        </pattern>
                        <rect x="0" y="0" width="100" height="100" fill="url(#insurance-pattern)"/>
                    </svg>
                @elseif($industry === 'government')
                    {{-- Building columns pattern --}}
                    <svg class="h-full w-full" viewBox="0 0 100 100">
                        <pattern id="gov-pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <rect x="8" y="5" width="4" height="10" fill="currentColor" class="text-violet-500"/>
                        </pattern>
                        <rect x="0" y="0" width="100" height="100" fill="url(#gov-pattern)"/>
                    </svg>
                @elseif($industry === 'ecommerce')
                    {{-- Grid/box pattern --}}
                    <svg class="h-full w-full" viewBox="0 0 100 100">
                        <pattern id="ecom-pattern" x="0" y="0" width="15" height="15" patternUnits="userSpaceOnUse">
                            <rect x="2" y="2" width="11" height="11" rx="2" stroke="currentColor" fill="none" stroke-width="1" class="text-rose-500"/>
                        </pattern>
                        <rect x="0" y="0" width="100" height="100" fill="url(#ecom-pattern)"/>
                    </svg>
                @elseif($industry === 'healthcare')
                    {{-- Cross/plus pattern --}}
                    <svg class="h-full w-full" viewBox="0 0 100 100">
                        <pattern id="health-pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <path d="M10 5 L10 15 M5 10 L15 10" stroke="currentColor" fill="none" stroke-width="2" class="text-rose-500"/>
                        </pattern>
                        <rect x="0" y="0" width="100" height="100" fill="url(#health-pattern)"/>
                    </svg>
                @else
                    <svg class="h-full w-full" viewBox="0 0 100 100">
                        <pattern id="default-pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <circle cx="10" cy="10" r="1" fill="currentColor" class="text-primary-600"/>
                        </pattern>
                        <rect x="0" y="0" width="100" height="100" fill="url(#default-pattern)"/>
                    </svg>
                @endif
            </div>

            {{-- Center icon --}}
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="flex h-20 w-20 items-center justify-center rounded-2xl bg-white/80 backdrop-blur transition group-hover:scale-110">
                    {{ $icon ?? '' }}
                </div>
            </div>

            {{-- Image placeholder indicator --}}
            <div class="absolute bottom-2 right-2 rounded-full bg-white/80 px-2 py-1 text-[10px] text-neutral-400">
                Image placeholder
            </div>
        </div>

        {{-- Content --}}
        <div class="p-6">
            <h3 class="text-lg font-semibold text-neutral-900 transition group-hover:text-primary-600">{{ $title }}</h3>
            <p class="mt-2 text-sm text-neutral-600">{{ $description }}</p>

            {{-- Learn more link --}}
            <div class="mt-4 inline-flex items-center gap-1 text-sm font-medium text-primary-600 transition group-hover:gap-2">
                Learn more
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                </svg>
            </div>
        </div>
    </div>
</a>
