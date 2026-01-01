{{--
Stat Card Component

Usage:
<x-card.stat value="99.9%" label="Accuracy Rate" />
<x-card.stat value="<100ms" label="Response Time" description="Average API latency" />
<x-card.stat value="$16.6B" label="Fraud Losses" variant="highlight" />

Props:
- value: The stat number/value (required)
- label: Label below the value (required)
- description: Optional description text
- variant: default or highlight (uses brand color for value)
--}}

@props([
    'value',
    'label',
    'description' => null,
    'variant' => 'default',
])

@php
    $valueColor = $variant === 'highlight' ? 'text-brand-500' : 'text-white';
@endphp

<div {{ $attributes->merge(['class' => 'text-center']) }}>
    <div class="text-4xl font-bold md:text-5xl {{ $valueColor }}">{{ $value }}</div>
    <div class="mt-2 text-lg font-medium text-gray-300">{{ $label }}</div>
    @if($description)
        <p class="mt-1 text-sm text-gray-400">{{ $description }}</p>
    @endif
</div>
