@props(['label' => null])
<div {{ $attributes->twMerge('text-lg font-semibold') }}>
    {{ $label ?? $slot }}

</div>
