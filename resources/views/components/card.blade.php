{{--
Card Component

Usage:
<x-card>Basic card content</x-card>
<x-card variant="elevated">Slightly elevated card</x-card>
<x-card hover>Card with hover effect</x-card>
<x-card padding="lg">Card with large padding</x-card>

Variants:
- default: bg-surface-800 with border
- elevated: bg-surface-700 (higher contrast)
- ghost: transparent with border only

Padding:
- sm: p-4
- md: p-6 (default)
- lg: p-8
--}}

@props([
    'variant' => 'default',
    'hover' => false,
    'padding' => 'md',
])

@php
    $variantClasses = match($variant) {
        'elevated' => 'bg-surface-700 border-surface-600',
        'ghost' => 'bg-transparent border-surface-700',
        default => 'bg-surface-800 border-surface-700',
    };

    $paddingClasses = match($padding) {
        'sm' => 'p-4',
        'lg' => 'p-8',
        default => 'p-6',
    };

    $hoverClasses = $hover ? 'transition hover:border-surface-600 hover:bg-surface-700' : '';
@endphp

<div {{ $attributes->merge(['class' => "rounded-xl border {$variantClasses} {$paddingClasses} {$hoverClasses}"]) }}>
    {{ $slot }}
</div>
