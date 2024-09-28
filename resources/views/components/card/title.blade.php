@props(['label' => null])

<h3 {{ $attributes->twMerge('font-semibold leading-none tracking-tight') }}>
    {{ $label ?? $slot }}
</h3>
