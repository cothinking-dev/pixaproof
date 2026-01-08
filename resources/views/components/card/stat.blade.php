{{--
Stat Card Component

Usage:
<x-card.stat value="99.9%" label="Accuracy Rate" />
<x-card.stat value="<100ms" label="Response Time" description="Average API latency" />
<x-card.stat value="$16.6B" label="Fraud Losses" variant="highlight" />
<x-card.stat value="85%" label="Reduction" variant="light" /> <!-- For dark backgrounds -->

Props:
- value: The stat number/value (required)
- label: Label below the value (required)
- description: Optional description text
- variant: default|light|highlight
  - default: Dark text for light backgrounds
  - light: Light text for dark backgrounds
  - highlight: Primary brand color (works on any background)
--}}

@props([
    'value',
    'label',
    'description' => null,
    'variant' => 'default',
])

@php
    if ($variant === 'highlight') {
        $valueColor = 'text-primary-600';
        $labelColor = 'text-neutral-700';
        $descColor = 'text-neutral-500';
    } elseif ($variant === 'light') {
        $valueColor = 'text-white';
        $labelColor = 'text-gray-300';
        $descColor = 'text-gray-400';
    } else {
        $valueColor = 'text-neutral-900';
        $labelColor = 'text-neutral-700';
        $descColor = 'text-neutral-500';
    }
@endphp

<div {{ $attributes->merge(['class' => 'text-center']) }}>
    <div class="text-4xl font-bold md:text-5xl {{ $valueColor }}">{{ $value }}</div>
    <div class="mt-2 text-lg font-medium {{ $labelColor }}">{{ $label }}</div>
    @if($description)
        <p class="mt-1 text-sm {{ $descColor }}">{{ $description }}</p>
    @endif
</div>
