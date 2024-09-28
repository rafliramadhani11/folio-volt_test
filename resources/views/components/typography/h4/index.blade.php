@props(['label' => null])

<h4 {{ $attributes->twMerge('scroll-m-20 text-xl font-semibold tracking-tight') }}>
    {{ $label ?? $slot }}
</h4>
