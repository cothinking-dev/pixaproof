{{--
Section Component

Usage:
<x-section>Content here</x-section>
<x-section bg="gradient">With gradient background</x-section>
<x-section bg="brand">Brand colored section</x-section>
<x-section pattern="hexagonal">With hexagonal pattern</x-section>
<x-section pattern="circuit" pattern-opacity="0.08">Custom pattern opacity</x-section>

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
])

@php
    $bgClasses = match($bg) {
        'surface' => 'bg-surface-900',
        'gradient' => 'bg-gradient-to-b from-surface-900 to-surface-950',
        'brand' => 'bg-brand-600',
        default => 'bg-surface-950',
    };

    $textColor = $bg === 'brand' ? 'text-white' : 'text-gray-300';
@endphp

<section {{ $attributes->merge(['class' => "px-4 relative overflow-hidden {$bgClasses}"]) }}>
    @if($pattern)
        <div class="absolute inset-0 {{ $textColor }}">
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

    <div class="relative mx-auto max-w-7xl {{ $py }}">
        {{ $slot }}
    </div>
</section>
