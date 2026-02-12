{{--
Phone Mockup Component
Displays a simple div-based phone frame with customizable screen content

Usage:
<x-graphics.phone-mockup>
    <div>Screen content here</div>
</x-graphics.phone-mockup>

Props:
- variant: 'default' | 'success' | 'error' | 'scanning'
- size: 'sm' | 'md' | 'lg' (default: 'md')
- image: optional background image path
- imageAlt: alt text for image
- overlay: 'dark' | 'light' | null
--}}

@props([
    'variant' => 'default',
    'size' => 'md',
    'image' => null,
    'imageAlt' => '',
    'overlay' => null,
])

@php
    $sizes = [
        'sm' => 'w-28',
        'md' => 'w-36',
        'lg' => 'w-44',
    ];
    $sizeClass = $sizes[$size] ?? $sizes['md'];
@endphp

<div {{ $attributes->merge(['class' => $sizeClass]) }}>
    {{-- Phone frame --}}
    <div class="overflow-hidden rounded-2xl border-2 border-neutral-300 bg-neutral-50 p-1">
        {{-- Screen --}}
        <div class="aspect-[9/16] overflow-hidden rounded-xl bg-neutral-100">
            @if($slot->isEmpty())
                <div class="relative h-full w-full">
                    {{-- Background image (when provided) --}}
                    @if($image)
                        <img src="{{ asset($image) }}" alt="{{ $imageAlt }}" class="absolute inset-0 h-full w-full object-cover">
                        @if($overlay === 'dark')
                            <div class="absolute inset-0 bg-black/40"></div>
                        @elseif($overlay === 'light')
                            <div class="absolute inset-0 bg-white/30"></div>
                        @endif
                    @endif

                    {{-- Variant overlays --}}
                    @if($variant === 'scanning')
                        <div class="absolute inset-0 flex flex-col items-center justify-center {{ $image ? 'bg-neutral-900/70 backdrop-blur-sm' : 'bg-neutral-900' }} p-12">
                            <div class="relative mb-8 h-32 w-32 rounded-full border-4 border-primary-500">
                                <div class="absolute inset-0 animate-ping rounded-full border-4 border-primary-500 opacity-20"></div>
                                <div class="flex h-full items-center justify-center">
                                    <svg class="h-16 w-16 text-primary-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="text-2xl font-medium text-white">Scanning</p>
                            <p class="mt-2 text-lg text-neutral-400">Hold steady...</p>
                        </div>
                    @elseif($variant === 'success')
                        <div class="absolute inset-0 flex flex-col items-center justify-center {{ $image ? 'bg-neutral-900/70 backdrop-blur-sm' : 'bg-neutral-900' }} p-12">
                            <div class="mb-8 flex h-28 w-28 items-center justify-center rounded-full bg-green-500/20">
                                <svg class="h-14 w-14 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                </svg>
                            </div>
                            <p class="text-2xl font-medium text-white">Verified</p>
                            <p class="mt-2 text-lg text-green-400">Authenticity confirmed</p>
                        </div>
                    @elseif($variant === 'error')
                        <div class="absolute inset-0 flex flex-col items-center justify-center {{ $image ? 'bg-neutral-900/70 backdrop-blur-sm' : 'bg-neutral-900' }} p-12">
                            <div class="mb-8 flex h-28 w-28 items-center justify-center rounded-full bg-red-500/20">
                                <svg class="h-14 w-14 text-red-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </div>
                            <p class="text-2xl font-medium text-white">Blocked</p>
                            <p class="mt-2 text-lg text-red-400">Gallery upload detected</p>
                        </div>
                    @else
                        @if($image)
                            {{-- Image with camera viewfinder overlay --}}
                            <div class="absolute inset-0 flex flex-col bg-neutral-900/50">
                                <div class="flex items-center justify-between px-6 py-3 text-lg text-white/70">
                                    <span>9:41</span>
                                    <div class="flex items-center gap-2">
                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M1 9l2 2c4.97-4.97 13.03-4.97 18 0l2-2C16.93 2.93 7.08 2.93 1 9zm8 8l3 3 3-3c-1.65-1.66-4.34-1.66-6 0zm-4-4l2 2c2.76-2.76 7.24-2.76 10 0l2-2C15.14 9.14 8.87 9.14 5 13z"/></svg>
                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M15.67 4H14V2h-4v2H8.33C7.6 4 7 4.6 7 5.33v15.33C7 21.4 7.6 22 8.33 22h7.33c.74 0 1.34-.6 1.34-1.33V5.33C17 4.6 16.4 4 15.67 4z"/></svg>
                                    </div>
                                </div>
                                <div class="flex flex-1 items-center justify-center p-6">
                                    <div class="relative h-44 w-64 rounded-lg border-2 border-dashed border-primary-500/50">
                                        <div class="absolute -left-1 -top-1 h-5 w-5 border-l-2 border-t-2 border-primary-500"></div>
                                        <div class="absolute -right-1 -top-1 h-5 w-5 border-r-2 border-t-2 border-primary-500"></div>
                                        <div class="absolute -bottom-1 -left-1 h-5 w-5 border-b-2 border-l-2 border-primary-500"></div>
                                        <div class="absolute -bottom-1 -right-1 h-5 w-5 border-b-2 border-r-2 border-primary-500"></div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-center bg-neutral-800/80 py-6">
                                    <div class="h-12 w-12 rounded-full border-4 border-white bg-white/20"></div>
                                </div>
                            </div>
                        @else
                            {{-- Default: Camera viewfinder UI (no image) --}}
                            <div class="flex h-full w-full flex-col bg-neutral-900">
                                <div class="flex items-center justify-between px-6 py-3 text-lg text-neutral-400">
                                    <span>9:41</span>
                                    <div class="flex items-center gap-2">
                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M1 9l2 2c4.97-4.97 13.03-4.97 18 0l2-2C16.93 2.93 7.08 2.93 1 9zm8 8l3 3 3-3c-1.65-1.66-4.34-1.66-6 0zm-4-4l2 2c2.76-2.76 7.24-2.76 10 0l2-2C15.14 9.14 8.87 9.14 5 13z"/></svg>
                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M15.67 4H14V2h-4v2H8.33C7.6 4 7 4.6 7 5.33v15.33C7 21.4 7.6 22 8.33 22h7.33c.74 0 1.34-.6 1.34-1.33V5.33C17 4.6 16.4 4 15.67 4z"/></svg>
                                    </div>
                                </div>
                                <div class="flex flex-1 items-center justify-center p-6">
                                    <div class="relative h-44 w-64 rounded-lg border-2 border-dashed border-primary-500/50">
                                        <div class="absolute -left-1 -top-1 h-5 w-5 border-l-2 border-t-2 border-primary-500"></div>
                                        <div class="absolute -right-1 -top-1 h-5 w-5 border-r-2 border-t-2 border-primary-500"></div>
                                        <div class="absolute -bottom-1 -left-1 h-5 w-5 border-b-2 border-l-2 border-primary-500"></div>
                                        <div class="absolute -bottom-1 -right-1 h-5 w-5 border-b-2 border-r-2 border-primary-500"></div>
                                        <div class="flex h-full flex-col items-center justify-center">
                                            <svg class="h-10 w-10 text-neutral-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0z" />
                                            </svg>
                                            <p class="mt-2 text-base text-neutral-400">Position ID</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-center bg-neutral-800 py-6">
                                    <div class="h-12 w-12 rounded-full border-4 border-white bg-white/20"></div>
                                </div>
                            </div>
                        @endif
                    @endif
                </div>
            @else
                <div class="relative h-full w-full bg-neutral-900">
                    @if($image)
                        <img src="{{ asset($image) }}" alt="{{ $imageAlt }}" class="absolute inset-0 h-full w-full object-cover">
                        @if($overlay === 'dark')
                            <div class="absolute inset-0 bg-black/40"></div>
                        @elseif($overlay === 'light')
                            <div class="absolute inset-0 bg-white/30"></div>
                        @endif
                    @endif
                    <div class="relative h-full w-full">
                        {{ $slot }}
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
