@props([
    'type' => 'text',
])

<div x-data="{ show: false }" class="relative flex items-center">
    <input :type="(show && '{{ $type }}'
        === 'password') ? 'text' : '{{ $type }}'"
        {{ $attributes->twMerge('flex h-9 w-full rounded-md border border-input bg-transparent px-3 py-1 text-sm shadow-sm transition-colors file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-1  disabled:cursor-not-allowed disabled:opacity-50') }} />

    @if ($type === 'password')
        <button type="button" @click="show = !show"
            class="absolute inset-y-0 right-0 flex items-center pr-3 text-sm leading-5">
            <x-lucide-eye x-show="!show" />
            <x-lucide-eye-off x-show="show" />
        </button>
    @endif
</div>
