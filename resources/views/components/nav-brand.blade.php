@props(['label' => null, 'src' => null])

@if ($src)
    <img src="{{ $src }}" alt="Brand Logo" class="w-auto h-8">
@else
    <span class="text-xl font-bold">{{ $label }}</span>
@endif


{{-- <img class="w-8 h-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company"> --}}
