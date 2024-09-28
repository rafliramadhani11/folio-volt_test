@props([
    'variant' => null,
    'size' => null,
    'label' => null,
    'href' => '#',
    'type' => 'button',
])

@inject('button', 'App\Services\ButtonCvaService')

<a href="{{ $href }}" type="{{ $type }}"
    {{ $attributes->twMerge($button(['variant' => $variant, 'size' => $size])) }}>
    {{ $label ?? $slot }}
</a>
