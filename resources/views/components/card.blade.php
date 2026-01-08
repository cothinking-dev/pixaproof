{{--
Card Component (Enterprise Design System)

Usage:
<x-card>Basic card content</x-card>
<x-card variant="elevated">Slightly elevated card</x-card>
<x-card hover>Card with hover effect</x-card>
<x-card padding="lg">Card with large padding</x-card>

Variants:
- default: White bg with slate border
- elevated: White bg with subtle shadow
- ghost: Transparent with border only
- primary: Sky-50 background (highlight sections)

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
        'elevated' => 'bg-white border-neutral-200 shadow-sm',
        'ghost' => 'bg-transparent border-neutral-200',
        'primary' => 'bg-primary-50 border-primary-200',
        default => 'bg-white border-neutral-200',
    };

    $paddingClasses = match($padding) {
        'sm' => 'p-4',
        'lg' => 'p-8',
        default => 'p-6',
    };

    $hoverClasses = $hover ? 'transition hover:border-primary-300 hover:shadow-md' : '';
@endphp

<div {{ $attributes->merge(['class' => "rounded border {$variantClasses} {$paddingClasses} {$hoverClasses}"]) }}>
    {{ $slot }}
</div>
