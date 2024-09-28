@props(['label' => null])
<p {{ $attributes->twMerge('leading-7 [&:not(:first-child)]:mt-6') }}>
    {{ $label ?? $slot }}

</p>
