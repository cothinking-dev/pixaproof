@props([
    'appStoreUrl' => '#',
    'playStoreUrl' => '#',
    'size' => 'md', // sm, md, lg
])

@php
$sizeClasses = match($size) {
    'sm' => 'h-8',
    'lg' => 'h-12',
    default => 'h-10',
};
@endphp

<div {{ $attributes->merge(['class' => 'flex items-center gap-3']) }}>
    {{-- App Store Badge --}}
    <a href="{{ $appStoreUrl }}"
       class="opacity-80 hover:opacity-100 transition-opacity"
       target="_blank"
       rel="noopener noreferrer"
       aria-label="Download on App Store">
        <svg class="{{ $sizeClasses }}" viewBox="0 0 120 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="120" height="40" rx="5" fill="black"/>
            <rect x="0.5" y="0.5" width="119" height="39" rx="4.5" stroke="white" stroke-opacity="0.3"/>
            <path d="M24.5 20.5c0-3.5 2.8-5.2 2.9-5.3-1.6-2.3-4.1-2.6-5-2.7-2.1-.2-4.1 1.2-5.2 1.2-1.1 0-2.8-1.2-4.5-1.2-2.3 0-4.5 1.4-5.7 3.5-2.4 4.2-.6 10.5 1.7 13.9 1.2 1.7 2.5 3.5 4.3 3.5 1.7-.1 2.4-1.1 4.5-1.1 2.1 0 2.7 1.1 4.5 1 1.9 0 3-1.7 4.1-3.4.7-1 1.2-2 1.6-3.2-3.4-1.3-4.2-6.1-4.2-6.2z" fill="white"/>
            <path d="M21.5 10.5c1-1.2 1.6-2.8 1.4-4.5-1.4.1-3.1.9-4.1 2.1-.9 1-1.7 2.7-1.5 4.3 1.6.1 3.2-.8 4.2-1.9z" fill="white"/>
            <text x="42" y="15" fill="white" font-size="7" font-family="system-ui">Download on the</text>
            <text x="42" y="27" fill="white" font-size="12" font-weight="600" font-family="system-ui">App Store</text>
        </svg>
    </a>

    {{-- Google Play Badge --}}
    <a href="{{ $playStoreUrl }}"
       class="opacity-80 hover:opacity-100 transition-opacity"
       target="_blank"
       rel="noopener noreferrer"
       aria-label="Get it on Google Play">
        <svg class="{{ $sizeClasses }}" viewBox="0 0 135 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="135" height="40" rx="5" fill="black"/>
            <rect x="0.5" y="0.5" width="134" height="39" rx="4.5" stroke="white" stroke-opacity="0.3"/>
            {{-- Google Play icon with official colors --}}
            <path d="M10 8.2c-.4.4-.6 1-.6 1.8v20c0 .8.2 1.4.6 1.8l.1.1 11.2-11.2v-.3L10 8.2z" fill="url(#play-blue)"/>
            <path d="M25 24.1l-3.7-3.7v-.3l3.7-3.7.1.1 4.4 2.5c1.3.7 1.3 1.9 0 2.6l-4.5 2.5z" fill="url(#play-yellow)"/>
            <path d="M25.1 24l-3.8-3.8L10 31.5c.4.5 1.1.5 1.9.1L25.1 24z" fill="url(#play-red)"/>
            <path d="M25.1 16.4L11.9 8.9c-.8-.5-1.5-.4-1.9.1l11.3 11.3 3.8-3.9z" fill="url(#play-green)"/>
            <text x="36" y="14" fill="white" font-size="6" font-family="system-ui">GET IT ON</text>
            <text x="36" y="27" fill="white" font-size="11" font-weight="600" font-family="system-ui">Google Play</text>
            <defs>
                <linearGradient id="play-blue" x1="20.4" y1="9.2" x2="5.2" y2="24.4" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#00A0FF"/>
                    <stop offset="1" stop-color="#00D9FF"/>
                </linearGradient>
                <linearGradient id="play-yellow" x1="27.5" y1="20.3" x2="12.5" y2="20.3" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#FFE000"/>
                    <stop offset="1" stop-color="#FFBD00"/>
                </linearGradient>
                <linearGradient id="play-red" x1="22.9" y1="22.2" x2="10" y2="35.1" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#FF3A44"/>
                    <stop offset="1" stop-color="#C31162"/>
                </linearGradient>
                <linearGradient id="play-green" x1="8.4" y1="5.5" x2="16.5" y2="13.6" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#32A071"/>
                    <stop offset="1" stop-color="#2DA771"/>
                </linearGradient>
            </defs>
        </svg>
    </a>
</div>
