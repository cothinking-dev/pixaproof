{{--
Problem Card Component (Attack Vector Card)

Usage:
<x-card.problem title="Deepfake Images" description="AI-generated photos used for fraud">
    <x-slot:icon>
        <svg>...</svg>
    </x-slot:icon>
</x-card.problem>

Props:
- title: Problem/attack title (required)
- description: Description of the problem (required)
- variant: 'default' (for light bg) or 'light' (for dark bg)
- icon slot: SVG icon representing the threat
--}}

@props([
    'title',
    'description',
    'variant' => 'default',
])

@php
    if ($variant === 'light') {
        $cardBg = 'border-red-900/50 bg-red-950/20';
        $iconBg = 'bg-red-500/10';
        $iconColor = 'text-red-500';
        $titleColor = 'text-white';
        $descColor = 'text-gray-400';
    } else {
        $cardBg = 'border-red-200 bg-red-50';
        $iconBg = 'bg-red-100';
        $iconColor = 'text-red-600';
        $titleColor = 'text-neutral-900';
        $descColor = 'text-neutral-600';
    }
@endphp

<x-card padding="md" class="{{ $cardBg }}">
    <div class="flex items-start gap-4">
        @isset($icon)
            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg {{ $iconBg }} {{ $iconColor }}">
                {{ $icon }}
            </div>
        @endisset

        <div class="flex-1">
            <h3 class="font-semibold {{ $titleColor }}">{{ $title }}</h3>
            <p class="mt-1 text-sm {{ $descColor }}">{{ $description }}</p>
        </div>
    </div>

    {{ $slot }}
</x-card>
