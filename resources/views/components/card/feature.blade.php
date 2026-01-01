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
- icon slot: SVG icon to display
--}}

@props([
    'title',
    'description',
])

<x-card padding="lg">
    @isset($icon)
        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-lg bg-brand-500/10 text-brand-500">
            {{ $icon }}
        </div>
    @endisset

    <h3 class="text-xl font-semibold text-white">{{ $title }}</h3>
    <p class="mt-2 text-gray-400">{{ $description }}</p>

    @isset($footer)
        <div class="mt-4">
            {{ $footer }}
        </div>
    @endisset
</x-card>
