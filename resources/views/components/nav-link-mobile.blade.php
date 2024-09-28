@props([
    'href' => '#',
    'label' => null,
    'route' => null,
])

@php
    $isActive = Route::currentRouteName() === $route;
    $classes = $isActive ? 'bg-gray-200 text-black' : 'text-black hover:bg-gray-200 hover:text-black';
@endphp

<!-- Current: "bg-gray-200 text-black", Default: "text-black hover:bg-gray-200 hover:text-black" -->
<a href="{{ $href }}"
    class="block px-3 py-2 text-base font-semibold  transition duration-200 rounded-md {{ $classes }}"
    aria-current="page">
    {{ $label ?? $slot }}
</a>
