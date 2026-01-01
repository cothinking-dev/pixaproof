{{-- Hexagonal grid pattern for tech/platform sections --}}
@props(['opacity' => '0.05'])

<svg {{ $attributes->merge(['class' => 'absolute inset-0 h-full w-full']) }} style="opacity: {{ $opacity }}" aria-hidden="true">
    <defs>
        <pattern id="hexagonal-{{ uniqid() }}" width="56" height="100" patternUnits="userSpaceOnUse" patternTransform="scale(1)">
            <path d="M28 66L0 50L0 16L28 0L56 16L56 50L28 66L28 100" fill="none" stroke="currentColor" stroke-width="0.5"/>
            <path d="M28 0L28 34L0 50L0 84L28 100L56 84L56 50L28 34" fill="none" stroke="currentColor" stroke-width="0.5"/>
        </pattern>
    </defs>
    <rect width="100%" height="100%" fill="url(#hexagonal-{{ uniqid() }})"/>
</svg>
