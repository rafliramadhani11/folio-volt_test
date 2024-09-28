@props(['label' => null])
<blockquote {{ $attributes->twMerge('mt-6 border-l-2 pl-6 italic') }}>
    {{ $label ?? $slot }}
</blockquote>
