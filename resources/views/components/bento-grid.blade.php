@props([
    'cols' => 3, // 2, 3, or 4
    'gap' => 'md', // sm, md, lg
])

@php
$colClasses = match($cols) {
    2 => 'grid-cols-1 md:grid-cols-2',
    4 => 'grid-cols-1 sm:grid-cols-2 lg:grid-cols-4',
    default => 'grid-cols-1 md:grid-cols-2 lg:grid-cols-3',
};

$gapClasses = match($gap) {
    'sm' => 'gap-3 md:gap-4',
    'lg' => 'gap-6 md:gap-8',
    default => 'gap-4 md:gap-6',
};
@endphp

<div {{ $attributes->merge(['class' => "grid $colClasses $gapClasses"]) }}>
    {{ $slot }}
</div>
