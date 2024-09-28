@props(['label' => null])

<h2 {{ $attributes->twMerge('scroll-m-20 border-b pb-2 text-3xl font-semibold tracking-tight first:mt-0') }}>
    {{ $label ?? $slot }}
</h2>
