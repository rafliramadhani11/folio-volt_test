@props(['label' => null])
<p {{ $attributes->twMerge('text-sm text-muted-foreground') }}>
    {{ $label ?? $slot }}

</p>
