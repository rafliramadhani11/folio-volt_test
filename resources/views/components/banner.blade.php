<div x-data="{
    bannerVisible: {{ auth()->check() ? 'false' : 'true' }},
    bannerVisibleAfter: 300,
}" x-show="bannerVisible" x-transition:enter="transition ease-out duration-500"
    x-transition:enter-start="-translate-y-10" x-transition:enter-end="translate-y-0"
    x-transition:leave="transition ease-in duration-300" x-transition:leave-start="translate-y-0"
    x-transition:leave-end="-translate-y-10" x-init="setTimeout(() => { bannerVisible = true }, bannerVisibleAfter);"
    class="w-full h-auto py-2 duration-300 ease-out bg-white shadow-md sm:py-0 sm:h-10" x-cloak>
    <div class="flex items-center justify-between w-full h-full px-3 mx-auto max-w-7xl">
        <a href="#"
            class="flex flex-col w-full h-full text-xs leading-6 text-black duration-150 ease-out sm:flex-row sm:items-center opacity-80 hover:opacity-100">
            <span class="flex items-center">
                <svg class="w-4 h-4 mr-1" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <!-- SVG content -->
                </svg>
                <strong class="font-semibold">New Feature</strong>
                <span class="hidden w-px h-4 mx-3 rounded-full sm:block bg-neutral-200"></span>
            </span>
            <span class="block pt-1 pb-2 leading-none sm:inline sm:pt-0 sm:pb-0">
                Click here to learn about our latest feature
            </span>
        </a>
        <button @click="bannerVisible = false"
            class="flex items-center justify-center w-6 h-6 p-1.5 text-black rounded-full hover:bg-neutral-100">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-full h-full">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
</div>
