@props([
    'steps' => [],
    'activeStep' => 0, // 0-indexed, set to -1 for all inactive
])

<div {{ $attributes->merge(['class' => 'relative']) }}>
    {{-- Desktop: Horizontal layout --}}
    <div class="hidden md:block">
        {{-- Connecting line (background) --}}
        <div class="absolute top-6 left-0 right-0 h-0.5 bg-neutral-100"></div>

        {{-- Active line (progress) --}}
        @if($activeStep >= 0)
        <div class="absolute top-6 left-0 h-0.5 bg-primary-500 transition-all duration-500"
             style="width: {{ min(100, ($activeStep + 1) / count($steps) * 100) }}%"></div>
        @endif

        <div class="flex items-start justify-between relative">
            @foreach($steps as $index => $step)
                @php
                    $isActive = $activeStep >= $index;
                    $isCurrent = $activeStep === $index;
                @endphp
                <div class="flex flex-col items-center text-center z-10 flex-1">
                    {{-- Icon circle --}}
                    <div class="w-12 h-12 rounded-full flex items-center justify-center mb-3 transition-all duration-300
                                {{ $isActive ? 'bg-primary-500/20 border-2 border-primary-500' : 'bg-white border-2 border-neutral-300' }}
                                {{ $isCurrent ? 'ring-4 ring-primary-500/20' : '' }}">
                        @if(isset($step['icon']))
                            <span class="{{ $isActive ? 'text-primary-600' : 'text-gray-400' }}">
                                {!! $step['icon'] !!}
                            </span>
                        @else
                            <span class="text-sm font-semibold {{ $isActive ? 'text-primary-600' : 'text-gray-400' }}">
                                {{ $index + 1 }}
                            </span>
                        @endif
                    </div>

                    {{-- Title --}}
                    <h4 class="text-sm font-semibold {{ $isActive ? 'text-white' : 'text-gray-400' }}">
                        {{ $step['title'] }}
                    </h4>

                    {{-- Description --}}
                    @if(isset($step['description']))
                        <p class="text-xs text-gray-500 mt-1 max-w-28">
                            {{ $step['description'] }}
                        </p>
                    @endif
                </div>
            @endforeach
        </div>
    </div>

    {{-- Mobile: Vertical layout --}}
    <div class="md:hidden space-y-4">
        @foreach($steps as $index => $step)
            @php
                $isActive = $activeStep >= $index;
            @endphp
            <div class="flex items-start gap-4">
                {{-- Icon circle --}}
                <div class="w-10 h-10 rounded-full flex items-center justify-center shrink-0
                            {{ $isActive ? 'bg-primary-500/20 border-2 border-primary-500' : 'bg-white border-2 border-neutral-300' }}">
                    @if(isset($step['icon']))
                        <span class="{{ $isActive ? 'text-primary-600' : 'text-gray-400' }}">
                            {!! $step['icon'] !!}
                        </span>
                    @else
                        <span class="text-sm font-semibold {{ $isActive ? 'text-primary-600' : 'text-gray-400' }}">
                            {{ $index + 1 }}
                        </span>
                    @endif
                </div>

                <div>
                    <h4 class="text-sm font-semibold {{ $isActive ? 'text-white' : 'text-gray-400' }}">
                        {{ $step['title'] }}
                    </h4>
                    @if(isset($step['description']))
                        <p class="text-xs text-gray-500 mt-0.5">
                            {{ $step['description'] }}
                        </p>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>
