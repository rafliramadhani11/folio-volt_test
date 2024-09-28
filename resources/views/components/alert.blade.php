@props(['message' => null])

<div x-data="{ alertIsVisible: true }" x-show="alertIsVisible" class="w-full overflow-hidden bg-white rounded-lg shadow text-neutral-600 dark:bg-neutral-950 dark:text-neutral-300" role="alert" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
    <div class="flex items-center w-full gap-2 px-4 py-2 bg-white">
        <div class="p-1 text-green-500 rounded-full" aria-hidden="true">
            <x-lucide-circle-check-big />
        </div>
        <div class="ml-2">
            <p class="text-xs font-medium sm:text-sm text-emerald-500">{{ $message }}</p>
        </div>
        <button type="button" @click="alertIsVisible = false" class="ml-auto" aria-label="dismiss alert">
            <x-lucide-x class="w-4 h-4 shrink-0"/>
        </button>
    </div>
</div>
