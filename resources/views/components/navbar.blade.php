<nav class="relative top-0 left-0 right-0 z-20 shadow bg-white/50" x-data="{ isOpen: false }">


    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <x-nav-items />
    </div>

    {{-- MOBILE MENU --}}
    <div class="md:hidden" id="mobile-menu" x-show="isOpen" x-transition:enter="transition ease-out duration-100 transform"
        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75 transform" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95">
        <x-nav-mobile />
    </div>
</nav>
