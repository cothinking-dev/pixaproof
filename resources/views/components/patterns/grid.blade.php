{{-- Simple dot grid pattern --}}
@props(['opacity' => '0.05'])

<svg {{ $attributes->merge(['class' => 'absolute inset-0 h-full w-full']) }} style="opacity: {{ $opacity }}" aria-hidden="true">
    <defs>
        <pattern id="grid-{{ uniqid() }}" width="40" height="40" patternUnits="userSpaceOnUse">
            <circle cx="20" cy="20" r="1" fill="currentColor"/>
        </pattern>
    </defs>
    <rect width="100%" height="100%" fill="url(#grid-{{ uniqid() }})"/>
</svg>
