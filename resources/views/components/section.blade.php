{{--
Section Component (Enterprise Design System - Light Mode)

Usage:
<x-section>Content here</x-section>
<x-section bg="primary">Sky blue tinted section</x-section>
<x-section bg="neutral">Gray background section</x-section>
<x-section bg="dark">Dark section (footer style)</x-section>

Backgrounds:
- default: White
- primary: bg-primary-50 (subtle sky blue)
- neutral: bg-neutral-50 (subtle gray)
- dark: bg-neutral-900 (for dark sections like footer)
--}}

@props([
    'bg' => 'default',
    'py' => 'py-20',
])

@php
    $bgClasses = match($bg) {
        'primary' => 'bg-primary-50',
        'neutral' => 'bg-neutral-50',
        'dark' => 'bg-neutral-900',
        default => 'bg-white',
    };

    $textColor = $bg === 'dark' ? 'text-neutral-300' : 'text-neutral-700';
@endphp

<section {{ $attributes->merge(['class' => "px-4 {$bgClasses} {$textColor}"]) }}>
    <div class="mx-auto max-w-7xl {{ $py }}">
        {{ $slot }}
    </div>
</section>
