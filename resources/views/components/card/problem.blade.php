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
- icon slot: SVG icon representing the threat
--}}

@props([
    'title',
    'description',
])

<x-card padding="md" class="border-red-900/50 bg-red-950/20">
    <div class="flex items-start gap-4">
        @isset($icon)
            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-red-500/10 text-red-500">
                {{ $icon }}
            </div>
        @endisset

        <div>
            <h3 class="font-semibold text-white">{{ $title }}</h3>
            <p class="mt-1 text-sm text-gray-400">{{ $description }}</p>
        </div>
    </div>

    {{ $slot }}
</x-card>
