{{--
Feature Card Component

Usage:
<x-card.feature title="AI Detection" description="Advanced detection capabilities">
    <x-slot:icon>
        <svg>...</svg>
    </x-slot:icon>
</x-card.feature>

Props:
- title: Card title (required)
- description: Card description (required)
- variant: 'default' (dark text for light bg) or 'light' (light text for dark bg)
- icon slot: SVG icon to display
--}}

@props([
    'title',
    'description',
    'variant' => 'default',
])

@php
    $titleColor = $variant === 'light' ? 'text-white' : 'text-neutral-900';
    $descColor = $variant === 'light' ? 'text-gray-300' : 'text-neutral-600';
    $iconBg = $variant === 'light' ? 'bg-primary-500/10' : 'bg-primary-50';
    $iconColor = $variant === 'light' ? 'text-primary-400' : 'text-primary-600';
@endphp

<x-card padding="lg">
    @isset($icon)
        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg {{ $iconBg }} {{ $iconColor }}">
            {{ $icon }}
        </div>
    @endisset

    <h3 class="text-xl font-semibold {{ $titleColor }}">{{ $title }}</h3>
    <p class="mt-2 {{ $descColor }}">{{ $description }}</p>

    @isset($footer)
        <div class="mt-4">
            {{ $footer }}
        </div>
    @endisset
</x-card>
