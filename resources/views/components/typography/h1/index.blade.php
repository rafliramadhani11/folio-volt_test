@props(['label' => null])

<h1 {{ $attributes->twMerge('scroll-m-20 text-4xl font-extrabold tracking-tight lg:text-5xl') }}>
    {{ $label ?? $slot }}
</h1>
