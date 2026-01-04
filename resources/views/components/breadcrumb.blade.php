@props([
    'items' => [], // Array of ['label' => 'Name', 'url' => '/path'] or just ['label' => 'Name'] for current page
])

<nav {{ $attributes->merge(['class' => 'text-sm']) }} aria-label="Breadcrumb">
    <ol class="flex items-center gap-2">
        {{-- Home is always first --}}
        <li>
            <a href="/" class="text-gray-400 hover:text-white transition-colors">
                Home
            </a>
        </li>

        @foreach($items as $index => $item)
            <li class="flex items-center gap-2">
                <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>

                @if(isset($item['url']) && $index < count($items) - 1)
                    <a href="{{ $item['url'] }}" class="text-gray-400 hover:text-white transition-colors">
                        {{ $item['label'] }}
                    </a>
                @else
                    <span class="text-gray-300">
                        {{ $item['label'] }}
                    </span>
                @endif
            </li>
        @endforeach
    </ol>
</nav>
