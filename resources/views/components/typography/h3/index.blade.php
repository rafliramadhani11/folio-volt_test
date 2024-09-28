@props(['label' => null])

<h3 {{ $attributes->twMerge('scroll-m-20 text-2xl font-semibold tracking-tight') }}>
    {{ $label ?? $slot }}
</h3>
