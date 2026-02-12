{{--
Process Step Card Component

Usage:
<x-card.process step="1" title="Upload Image" description="Select or capture an image" />
<x-card.process step="2" title="Analyze" description="AI processes the image" />
<x-card.process step="3" title="Get Results" description="Receive authenticity report" />

Props:
- step: Step number (required)
- title: Step title (required)
- description: Step description (required)
- variant: 'default' (for light bg) or 'light' (for dark bg)
--}}

@props([
    'step',
    'title',
    'description',
    'variant' => 'default',
])

@php
    $titleColor = $variant === 'light' ? 'text-white' : 'text-neutral-900';
    $descColor = $variant === 'light' ? 'text-neutral-400' : 'text-neutral-600';
    $stepBadge = $variant === 'light' ? 'bg-primary-500 text-white' : 'bg-primary-500 text-white';
@endphp

<x-card padding="lg" class="relative">
    <div class="absolute -top-4 left-6 flex h-8 w-8 items-center justify-center rounded-full {{ $stepBadge }} text-sm font-bold">
        {{ $step }}
    </div>

    <div class="mt-2">
        <h3 class="text-xl font-semibold {{ $titleColor }}">{{ $title }}</h3>
        <p class="mt-2 {{ $descColor }}">{{ $description }}</p>
    </div>

    {{ $slot }}
</x-card>
