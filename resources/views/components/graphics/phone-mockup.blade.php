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
--}}

@props([
    'variant' => 'default',
    'size' => 'md',
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
    <div class="rounded-2xl border-2 border-surface-600 bg-surface-900 p-1">
        {{-- Screen --}}
        <div class="aspect-[9/16] overflow-hidden rounded-xl bg-surface-950">
            @if($slot->isEmpty())
                {{-- Default placeholder content based on variant --}}
                @if($variant === 'scanning')
                    <div class="flex h-full flex-col items-center justify-center p-4">
                        <div class="relative mb-3 h-12 w-12 rounded-full border-2 border-brand-500">
                            <div class="absolute inset-0 animate-ping rounded-full border-2 border-brand-500 opacity-20"></div>
                            <div class="flex h-full items-center justify-center">
                                <svg class="h-6 w-6 text-brand-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                                </svg>
                            </div>
                        </div>
                        <p class="text-xs font-medium text-white">Scanning</p>
                        <p class="mt-1 text-[10px] text-gray-400">Hold steady...</p>
                    </div>
                @elseif($variant === 'success')
                    <div class="flex h-full flex-col items-center justify-center p-4">
                        <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-full bg-green-500/20">
                            <svg class="h-5 w-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>
                        </div>
                        <p class="text-xs font-medium text-white">Verified</p>
                        <p class="mt-1 text-[10px] text-green-400">Authenticity confirmed</p>
                    </div>
                @elseif($variant === 'error')
                    <div class="flex h-full flex-col items-center justify-center p-4">
                        <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-full bg-red-500/20">
                            <svg class="h-5 w-5 text-red-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </div>
                        <p class="text-xs font-medium text-white">Blocked</p>
                        <p class="mt-1 text-[10px] text-red-400">Gallery upload detected</p>
                    </div>
                @else
                    {{-- Default: Camera viewfinder UI --}}
                    <div class="flex h-full flex-col">
                        {{-- Status bar --}}
                        <div class="flex items-center justify-between px-2 py-1 text-[8px] text-gray-400">
                            <span>9:41</span>
                            <div class="flex items-center gap-1">
                                <svg class="h-2 w-2" fill="currentColor" viewBox="0 0 24 24"><path d="M1 9l2 2c4.97-4.97 13.03-4.97 18 0l2-2C16.93 2.93 7.08 2.93 1 9zm8 8l3 3 3-3c-1.65-1.66-4.34-1.66-6 0zm-4-4l2 2c2.76-2.76 7.24-2.76 10 0l2-2C15.14 9.14 8.87 9.14 5 13z"/></svg>
                                <svg class="h-2 w-2" fill="currentColor" viewBox="0 0 24 24"><path d="M15.67 4H14V2h-4v2H8.33C7.6 4 7 4.6 7 5.33v15.33C7 21.4 7.6 22 8.33 22h7.33c.74 0 1.34-.6 1.34-1.33V5.33C17 4.6 16.4 4 15.67 4z"/></svg>
                            </div>
                        </div>

                        {{-- Camera viewfinder area --}}
                        <div class="flex flex-1 items-center justify-center p-2">
                            <div class="relative h-16 w-24 rounded border border-dashed border-brand-500/50">
                                {{-- Corner brackets --}}
                                <div class="absolute -left-0.5 -top-0.5 h-2 w-2 border-l border-t border-brand-500"></div>
                                <div class="absolute -right-0.5 -top-0.5 h-2 w-2 border-r border-t border-brand-500"></div>
                                <div class="absolute -bottom-0.5 -left-0.5 h-2 w-2 border-b border-l border-brand-500"></div>
                                <div class="absolute -bottom-0.5 -right-0.5 h-2 w-2 border-b border-r border-brand-500"></div>

                                <div class="flex h-full flex-col items-center justify-center">
                                    <svg class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0z" />
                                    </svg>
                                    <p class="mt-1 text-[6px] text-gray-400">Position ID</p>
                                </div>
                            </div>
                        </div>

                        {{-- Capture button --}}
                        <div class="flex items-center justify-center bg-surface-900 py-2">
                            <div class="h-4 w-4 rounded-full border-2 border-white bg-white/20"></div>
                        </div>
                    </div>
                @endif
            @else
                {{ $slot }}
            @endif
        </div>
    </div>
</div>
