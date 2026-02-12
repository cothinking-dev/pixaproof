{{--
Breadcrumb Navigation Component

Usage:
<x-breadcrumb :items="[
    ['label' => 'Resources', 'url' => '#'],
    ['label' => 'Fraud Statistics'],
]" />

Props:
- items: Array of breadcrumb items
  - label: Display text (required)
  - url: Link URL (optional, omit for current page)
- variant: 'default' (light bg) or 'light' (dark bg)
--}}

@props([
    'items' => [],
    'variant' => 'default',
])

@php
    $homeLink = $variant === 'light' ? 'text-neutral-400 hover:text-white' : 'text-neutral-600 hover:text-primary-600';
    $linkColor = $variant === 'light' ? 'text-neutral-400 hover:text-white' : 'text-neutral-600 hover:text-primary-600';
    $currentColor = $variant === 'light' ? 'text-neutral-300' : 'text-neutral-900 font-medium';
    $iconColor = $variant === 'light' ? 'text-neutral-600' : 'text-neutral-400';
@endphp

<nav {{ $attributes->merge(['class' => 'text-sm mb-6']) }} aria-label="Breadcrumb">
    <ol class="flex items-center gap-2 flex-wrap">
        {{-- Home is always first --}}
        <li>
            <a href="/" class="{{ $homeLink }} transition-colors">
                Home
            </a>
        </li>

        @foreach($items as $index => $item)
            <li class="flex items-center gap-2">
                <svg class="w-4 h-4 {{ $iconColor }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>

                @if(isset($item['url']) && $index < count($items) - 1)
                    <a href="{{ $item['url'] }}" class="{{ $linkColor }} transition-colors">
                        {{ $item['label'] }}
                    </a>
                @else
                    <span class="{{ $currentColor }}">
                        {{ $item['label'] }}
                    </span>
                @endif
            </li>
        @endforeach
    </ol>
</nav>
