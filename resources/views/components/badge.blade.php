@props([
    'variant' => 'default', // default, success, warning, enterprise
])

@php
$variantClasses = match($variant) {
    'success' => 'border-green-500/50 text-green-400 bg-green-500/10',
    'warning' => 'border-amber-500/50 text-amber-400 bg-amber-500/10',
    'enterprise' => 'border-brand-500/50 text-brand-400 bg-brand-500/10',
    default => 'border-brand-500/50 text-brand-500',
};
@endphp

<span {{ $attributes->merge(['class' => "inline-flex items-center px-3 py-1 text-xs font-medium uppercase tracking-wider border rounded-full $variantClasses"]) }}>
    {{ $slot }}
</span>
