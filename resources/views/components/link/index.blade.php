@props(['label' => null])

<a {{ $attributes->twMerge('font-medium underline underline-offset-4') }}>{{ $label ?? $slot }}</a>
