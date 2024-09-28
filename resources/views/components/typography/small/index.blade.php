@props(['label' => null])
<small {{ $attributes->twMerge('text-sm font-medium leading-none') }}>
    {{ $label ?? $slot }}
</small>
