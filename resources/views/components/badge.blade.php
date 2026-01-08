{{--
Badge Component (Enterprise Design System)

Variants:
- default: Sky blue (primary brand)
- success: Green (positive outcomes)
- warning: Amber (caution)
- enterprise: Sky blue outlined (enterprise features)
--}}

@props([
    'variant' => 'default',
])

@php
$variantClasses = match($variant) {
    'success' => 'border-emerald-500/50 text-emerald-600 bg-emerald-50',
    'warning' => 'border-amber-500/50 text-amber-600 bg-amber-50',
    'enterprise' => 'border-primary-500/50 text-primary-600 bg-primary-50',
    default => 'border-primary-500/50 text-primary-600 bg-primary-50',
};
@endphp

<span {{ $attributes->merge(['class' => "inline-flex items-center px-3 py-1 text-xs font-medium uppercase tracking-wider border rounded $variantClasses"]) }}>
    {{ $slot }}
</span>
