{{--
Button Component

Usage:
<x-button href="/contact">Get Started</x-button>
<x-button href="/demo" variant="secondary">Watch Demo</x-button>
<x-button type="submit" variant="primary">Submit</x-button>
<x-button href="/docs" variant="ghost">Learn More</x-button>
<x-button href="/contact" size="lg" icon>Get Started</x-button>

Variants:
- primary: Red fill, white text (default)
- secondary: Transparent with border
- ghost: Text only with arrow
- white: White fill, brand text (for brand bg sections)

Sizes:
- sm: Smaller padding
- md: Default
- lg: Larger padding

Icons:
- icon: Adds arrow icon (default true for primary)
--}}

@props([
    'variant' => 'primary',
    'size' => 'md',
    'href' => null,
    'icon' => null,
    'type' => 'button',
])

@php
    // Default icon behavior: primary has icon by default
    $showIcon = $icon ?? ($variant === 'primary');

    $baseClasses = 'inline-flex items-center justify-center font-semibold rounded-lg transition focus:outline-none focus:ring-2 focus:ring-brand-500 focus:ring-offset-2 focus:ring-offset-surface-950';

    $variantClasses = match($variant) {
        'secondary' => 'border border-surface-600 bg-surface-800 text-gray-300 hover:bg-surface-700 hover:border-surface-500',
        'ghost' => 'text-gray-300 hover:text-white',
        'white' => 'bg-white text-brand-600 hover:bg-gray-100 shadow-sm',
        default => 'bg-brand-500 text-white hover:bg-brand-600 shadow-sm',
    };

    $sizeClasses = match($size) {
        'sm' => 'px-4 py-2 text-sm gap-1.5',
        'lg' => 'px-8 py-4 text-lg gap-3',
        default => 'px-6 py-3 text-base gap-2',
    };

    $iconSize = match($size) {
        'sm' => 'h-3.5 w-3.5',
        'lg' => 'h-5 w-5',
        default => 'h-4 w-4',
    };
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => "{$baseClasses} {$variantClasses} {$sizeClasses}"]) }}>
        {{ $slot }}
        @if($showIcon)
            <svg class="{{ $iconSize }}" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
            </svg>
        @endif
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => "{$baseClasses} {$variantClasses} {$sizeClasses}"]) }}>
        {{ $slot }}
        @if($showIcon)
            <svg class="{{ $iconSize }}" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
            </svg>
        @endif
    </button>
@endif
