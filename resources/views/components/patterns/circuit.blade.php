{{-- Circuit board pattern for developer/technical sections --}}
@props(['opacity' => '0.05'])

<svg {{ $attributes->merge(['class' => 'absolute inset-0 h-full w-full']) }} style="opacity: {{ $opacity }}" aria-hidden="true">
    <defs>
        <pattern id="circuit-{{ uniqid() }}" width="100" height="100" patternUnits="userSpaceOnUse">
            {{-- Horizontal lines --}}
            <line x1="0" y1="25" x2="100" y2="25" stroke="currentColor" stroke-width="0.5"/>
            <line x1="0" y1="75" x2="100" y2="75" stroke="currentColor" stroke-width="0.5"/>
            {{-- Vertical lines --}}
            <line x1="25" y1="0" x2="25" y2="100" stroke="currentColor" stroke-width="0.5"/>
            <line x1="75" y1="0" x2="75" y2="100" stroke="currentColor" stroke-width="0.5"/>
            {{-- Connection nodes --}}
            <circle cx="25" cy="25" r="2" fill="currentColor"/>
            <circle cx="75" cy="25" r="2" fill="currentColor"/>
            <circle cx="25" cy="75" r="2" fill="currentColor"/>
            <circle cx="75" cy="75" r="2" fill="currentColor"/>
            {{-- L-shaped connectors --}}
            <path d="M25 25 L50 25 L50 50" fill="none" stroke="currentColor" stroke-width="0.5"/>
            <path d="M75 75 L50 75 L50 50" fill="none" stroke="currentColor" stroke-width="0.5"/>
        </pattern>
    </defs>
    <rect width="100%" height="100%" fill="url(#circuit-{{ uniqid() }})"/>
</svg>
