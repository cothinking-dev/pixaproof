{{--
Phone Mockup Component
Displays a phone frame with customizable screen content

Usage:
<x-graphics.phone-mockup>
    <div>Screen content here</div>
</x-graphics.phone-mockup>

Props:
- variant: 'default' | 'success' | 'error' | 'scanning'
- size: 'sm' | 'md' | 'lg'
--}}

@props([
    'variant' => 'default',
    'size' => 'md',
])

@php
    $sizes = [
        'sm' => 'w-48',
        'md' => 'w-64',
        'lg' => 'w-80',
    ];
    $sizeClass = $sizes[$size] ?? $sizes['md'];
@endphp

<div {{ $attributes->merge(['class' => "relative {$sizeClass}"]) }}>
    {{-- Phone Frame --}}
    <div class="relative rounded-[2.5rem] border-4 border-surface-600 bg-surface-900 p-2 shadow-2xl">
        {{-- Notch --}}
        <div class="absolute left-1/2 top-0 z-10 h-6 w-24 -translate-x-1/2 rounded-b-2xl bg-surface-600"></div>

        {{-- Screen --}}
        <div class="relative overflow-hidden rounded-[2rem] bg-surface-950">
            {{-- Status Bar --}}
            <div class="flex h-8 items-center justify-between bg-surface-900 px-6 pt-2 text-xs text-gray-400">
                <span>9:41</span>
                <div class="flex items-center gap-1">
                    <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 3C6.95 3 3 6.95 3 12c0 1.66.44 3.22 1.2 4.58L2 21l4.42-2.2c1.36.76 2.92 1.2 4.58 1.2 5.05 0 9-3.95 9-9s-3.95-9-9-9z"/>
                    </svg>
                    <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M1 9l2 2c4.97-4.97 13.03-4.97 18 0l2-2C16.93 2.93 7.08 2.93 1 9zm8 8l3 3 3-3c-1.65-1.66-4.34-1.66-6 0zm-4-4l2 2c2.76-2.76 7.24-2.76 10 0l2-2C15.14 9.14 8.87 9.14 5 13z"/>
                    </svg>
                    <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M15.67 4H14V2h-4v2H8.33C7.6 4 7 4.6 7 5.33v15.33C7 21.4 7.6 22 8.33 22h7.33c.74 0 1.34-.6 1.34-1.33V5.33C17 4.6 16.4 4 15.67 4z"/>
                    </svg>
                </div>
            </div>

            {{-- Screen Content --}}
            <div class="aspect-[9/16] w-full">
                @if($slot->isEmpty())
                    {{-- Default placeholder content based on variant --}}
                    @if($variant === 'scanning')
                        <div class="flex h-full flex-col items-center justify-center bg-surface-950 p-4">
                            <div class="relative mb-4 h-32 w-32 rounded-full border-4 border-brand-500">
                                <div class="absolute inset-0 animate-ping rounded-full border-4 border-brand-500 opacity-20"></div>
                                <div class="flex h-full items-center justify-center">
                                    <svg class="h-16 w-16 text-brand-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                                    </svg>
                                </div>
                            </div>
                            <p class="text-sm font-medium text-white">Scanning Document</p>
                            <p class="mt-1 text-xs text-gray-400">Hold steady...</p>
                        </div>
                    @elseif($variant === 'success')
                        <div class="flex h-full flex-col items-center justify-center bg-surface-950 p-4">
                            <div class="mb-4 flex h-20 w-20 items-center justify-center rounded-full bg-green-500/20">
                                <svg class="h-10 w-10 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                </svg>
                            </div>
                            <p class="text-sm font-medium text-white">Verified</p>
                            <p class="mt-1 text-xs text-green-400">Authenticity confirmed</p>
                        </div>
                    @elseif($variant === 'error')
                        <div class="flex h-full flex-col items-center justify-center bg-surface-950 p-4">
                            <div class="mb-4 flex h-20 w-20 items-center justify-center rounded-full bg-red-500/20">
                                <svg class="h-10 w-10 text-red-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </div>
                            <p class="text-sm font-medium text-white">Blocked</p>
                            <p class="mt-1 text-xs text-red-400">Gallery upload detected</p>
                        </div>
                    @else
                        {{-- Default: Camera viewfinder UI --}}
                        <div class="relative flex h-full flex-col bg-surface-950">
                            {{-- Camera viewfinder area --}}
                            <div class="flex flex-1 items-center justify-center p-4">
                                <div class="relative h-40 w-56 rounded-lg border-2 border-dashed border-brand-500/50">
                                    {{-- Corner brackets --}}
                                    <div class="absolute -left-1 -top-1 h-4 w-4 border-l-2 border-t-2 border-brand-500"></div>
                                    <div class="absolute -right-1 -top-1 h-4 w-4 border-r-2 border-t-2 border-brand-500"></div>
                                    <div class="absolute -bottom-1 -left-1 h-4 w-4 border-b-2 border-l-2 border-brand-500"></div>
                                    <div class="absolute -bottom-1 -right-1 h-4 w-4 border-b-2 border-r-2 border-brand-500"></div>

                                    <div class="flex h-full flex-col items-center justify-center text-center">
                                        <svg class="h-8 w-8 text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
                                        </svg>
                                        <p class="mt-2 text-xs text-gray-400">Position ID here</p>
                                    </div>
                                </div>
                            </div>

                            {{-- Bottom controls --}}
                            <div class="flex items-center justify-center gap-8 bg-surface-900 p-4">
                                <button class="flex h-10 w-10 items-center justify-center rounded-full bg-surface-700">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                    </svg>
                                </button>
                                <button class="flex h-16 w-16 items-center justify-center rounded-full border-4 border-white bg-white/10">
                                    <div class="h-12 w-12 rounded-full bg-white"></div>
                                </button>
                                <button class="flex h-10 w-10 items-center justify-center rounded-full bg-surface-700">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    @endif
                @else
                    {{ $slot }}
                @endif
            </div>
        </div>
    </div>

    {{-- Reflection/Glow effect --}}
    <div class="absolute -inset-4 -z-10 rounded-[3rem] bg-brand-500/5 blur-2xl"></div>
</div>
