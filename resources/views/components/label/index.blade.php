@props(['htmlFor' => '', 'label' => null])

<label @if ($htmlFor) for="{{ $htmlFor }}" @endif
    {{ $attributes->twMerge('text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70') }}>
    {{ $label ?? $slot }}
</label>
