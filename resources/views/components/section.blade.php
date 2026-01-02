{{--
Section Component

Usage:
<x-section>Content here</x-section>
<x-section bg="gradient">With gradient background</x-section>
<x-section bg="brand">Brand colored section</x-section>
<x-section pattern="hexagonal">With hexagonal pattern</x-section>
<x-section pattern="circuit" pattern-opacity="0.08">Custom pattern opacity</x-section>

Image Background:
<x-section bg-image="/images/hero-bg.svg">With image background</x-section>
<x-section bg-image="/images/bg.jpg" bg-overlay="dark">Image with dark gradient overlay</x-section>
<x-section bg-image="/images/bg.svg" bg-overlay="radial">With radial fade overlay</x-section>

Overlay presets:
- dark: from-surface-950/80 to-surface-950
- darker: from-surface-950/90 to-surface-950
- brand: from-brand-950/80 to-surface-950
- fade-up: gradient from bottom to transparent top
- fade-down: gradient from top to transparent bottom
- radial: radial gradient fading to edges

Backgrounds:
- default: bg-surface-950
- surface: bg-surface-900
- gradient: gradient from surface-900 to surface-950
- brand: bg-brand-600 (for CTAs)

Patterns:
- hexagonal: tech/platform sections
- circuit: developer sections
- waves: hero sections
- grid: general sections
--}}

@props([
    'bg' => 'default',
    'pattern' => null,
    'patternOpacity' => '0.05',
    'py' => 'py-20',
    'bgImage' => null,
    'bgOverlay' => null, // 'dark', 'brand', 'light', or custom gradient class
])

@php
    $bgClasses = match($bg) {
        'surface' => 'bg-surface-900',
        'gradient' => 'bg-gradient-to-b from-surface-900 to-surface-950',
        'brand' => 'bg-brand-600',
        default => 'bg-surface-950',
    };

    $textColor = $bg === 'brand' ? 'text-white' : 'text-gray-300';

    // Predefined overlay gradients for common use cases
    $overlayClasses = match($bgOverlay) {
        'dark' => 'bg-gradient-to-b from-surface-950/80 to-surface-950',
        'darker' => 'bg-gradient-to-b from-surface-950/90 to-surface-950',
        'brand' => 'bg-gradient-to-b from-brand-950/80 to-surface-950',
        'fade-up' => 'bg-gradient-to-t from-surface-950 via-surface-950/80 to-transparent',
        'fade-down' => 'bg-gradient-to-b from-surface-950 via-surface-950/80 to-transparent',
        'radial' => 'bg-[radial-gradient(ellipse_at_center,transparent_0%,var(--color-surface-950)_70%)]',
        default => $bgOverlay, // Allow custom classes
    };
@endphp

<section {{ $attributes->merge(['class' => "px-4 relative isolate overflow-hidden {$bgClasses}"]) }}>
    {{-- Background Image (layer 1 - bottom) --}}
    @if($bgImage)
        <img
            src="{{ $bgImage }}"
            alt=""
            class="absolute inset-0 z-0 h-full w-full object-cover"
        />
    @endif

    {{-- Gradient Overlay (layer 2 - above image) --}}
    @if($bgOverlay)
        <div class="absolute inset-0 z-10 h-full w-full {{ $overlayClasses }}"></div>
    @endif

    {{-- Pattern (layer 3 - above overlay) --}}
    @if($pattern)
        <div class="absolute inset-0 z-20 {{ $textColor }}">
            @switch($pattern)
                @case('hexagonal')
                    <x-patterns.hexagonal :opacity="$patternOpacity" />
                    @break
                @case('circuit')
                    <x-patterns.circuit :opacity="$patternOpacity" />
                    @break
                @case('waves')
                    <x-patterns.waves :opacity="$patternOpacity" />
                    @break
                @case('grid')
                    <x-patterns.grid :opacity="$patternOpacity" />
                    @break
            @endswitch
        </div>
    @endif

    {{-- Content (layer 4 - top) --}}
    <div class="relative z-30 mx-auto max-w-7xl {{ $py }}">
        {{ $slot }}
    </div>
</section>
