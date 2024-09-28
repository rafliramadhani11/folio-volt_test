@props(['href' => '#', 'label' => null, 'route' => null])

@php
    $isActive = Route::currentRouteName() === $route;
    $classes = $isActive ? 'bg-gray-200 text-black' : 'text-black hover:bg-gray-200 hover:text-black';
@endphp

<a href="{{ $href }}"
    class="px-3 py-2 text-sm font-semibold transition duration-200 rounded-md {{ $classes }}"
    aria-current="{{ $isActive ? 'page' : '' }}">
    {{ $label ?? $slot }}
</a>
