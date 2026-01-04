@props([
    'title' => "Don't need enterprise-level customization?",
    'note' => '',
])

<div {{ $attributes->merge(['class' => 'bg-brand-500/10 border-l-4 border-brand-500 rounded-r-xl p-6 md:p-8']) }}>
    <h3 class="text-xl font-semibold text-white">
        {{ $title }}
    </h3>

    <p class="mt-2 text-gray-400">
        {{ $slot->isEmpty()
            ? 'The Community Edition offers the same verification technology for individuals and small teams. No SDK integration required.'
            : $slot
        }}
    </p>

    <div class="mt-6 flex flex-col sm:flex-row items-start sm:items-center gap-4">
        <x-button href="/">
            Try Community Edition
        </x-button>
        <x-app-store-badges size="sm" />
    </div>

    @if($note)
        <p class="mt-4 text-sm text-gray-500">
            {{ $note }}
        </p>
    @endif
</div>
