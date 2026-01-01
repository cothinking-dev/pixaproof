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
--}}

@props([
    'step',
    'title',
    'description',
])

<x-card padding="lg" class="relative">
    <div class="absolute -top-4 left-6 flex h-8 w-8 items-center justify-center rounded-full bg-brand-500 text-sm font-bold text-white">
        {{ $step }}
    </div>

    <div class="mt-2">
        <h3 class="text-xl font-semibold text-white">{{ $title }}</h3>
        <p class="mt-2 text-gray-400">{{ $description }}</p>
    </div>

    {{ $slot }}
</x-card>
