{{-- Flowing wave pattern for hero sections --}}
@props(['opacity' => '0.05'])

<svg {{ $attributes->merge(['class' => 'absolute inset-0 h-full w-full']) }} style="opacity: {{ $opacity }}" preserveAspectRatio="xMidYMid slice" aria-hidden="true">
    <defs>
        <pattern id="waves-{{ uniqid() }}" width="200" height="200" patternUnits="userSpaceOnUse">
            <path d="M0 50 Q50 0 100 50 T200 50" fill="none" stroke="currentColor" stroke-width="0.5"/>
            <path d="M0 100 Q50 50 100 100 T200 100" fill="none" stroke="currentColor" stroke-width="0.5"/>
            <path d="M0 150 Q50 100 100 150 T200 150" fill="none" stroke="currentColor" stroke-width="0.5"/>
            <path d="M0 200 Q50 150 100 200 T200 200" fill="none" stroke="currentColor" stroke-width="0.5"/>
        </pattern>
    </defs>
    <rect width="100%" height="100%" fill="url(#waves-{{ uniqid() }})"/>
</svg>
