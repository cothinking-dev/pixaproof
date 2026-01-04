@props([
    'tier' => 'Free',
    'price' => 'RM0',
    'period' => '/month',
    'description' => '',
    'features' => [],
    'popular' => false,
    'enterprise' => false,
    'ctaText' => 'Get Started',
    'ctaUrl' => '/download',
])

<div {{ $attributes->merge(['class' => 'rounded-xl bg-surface-800 border p-6 relative flex flex-col ' . ($popular ? 'border-brand-500 ring-1 ring-brand-500/20' : 'border-surface-700')]) }}>
    {{-- Popular badge --}}
    @if($popular)
        <div class="absolute -top-3 left-1/2 -translate-x-1/2 px-3 py-1 bg-brand-500 text-surface-950 text-xs font-semibold rounded-full whitespace-nowrap">
            Most Popular
        </div>
    @endif

    {{-- Tier name --}}
    <h3 class="text-xl font-semibold text-white">{{ $tier }}</h3>

    {{-- Description --}}
    @if($description)
        <p class="mt-2 text-sm text-gray-400">{{ $description }}</p>
    @endif

    {{-- Price --}}
    <div class="mt-4">
        @if($enterprise)
            <span class="text-4xl font-bold text-white">Custom</span>
            <p class="text-sm text-gray-400 mt-1">Tailored to your organization</p>
        @else
            <span class="text-4xl font-bold text-white">{{ $price }}</span>
            <span class="text-gray-400">{{ $period }}</span>
        @endif
    </div>

    {{-- CTA Button --}}
    <div class="mt-6">
        @if($enterprise)
            <x-button href="/contact" class="w-full" variant="secondary">
                Contact Sales
            </x-button>
        @else
            <x-button href="{{ $ctaUrl }}" class="w-full" :variant="$popular ? 'primary' : 'secondary'">
                {{ $ctaText }}
            </x-button>
        @endif
    </div>

    {{-- Features list --}}
    @if(count($features) > 0)
        <ul class="mt-6 space-y-3 flex-1">
            @foreach($features as $feature)
                <li class="flex items-start gap-2 text-sm text-gray-300">
                    <svg class="w-5 h-5 text-brand-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>{{ $feature }}</span>
                </li>
            @endforeach
        </ul>
    @endif
</div>
