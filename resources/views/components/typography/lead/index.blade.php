@props(['label' => null])
<p {{ $attributes->twMerge('text-xl text-muted-foreground') }}>
    {{ $label ?? $slot }}

</p>
