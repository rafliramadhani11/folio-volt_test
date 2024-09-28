<div class="flex items-center justify-between h-20">
    <div class="flex items-center">

        <x-nav-brand label='Newspaper' />

        <div class="hidden md:block">
            <div class="flex items-baseline ml-10 space-x-4">

                <x-nav-link label="Home" route='home' href="{{ route('home') }}" />
                <x-nav-link label="About" route='about' />
                <x-nav-link label="Community" route='community' />

            </div>
        </div>
    </div>
    <div class="hidden md:block">
        <div class="flex items-center ">

            <div class="space-x-5">
                <x-link.button href="{{ route('auth.login') }}" label="Login" size='lg' />
                <x-link label="Register" href="{{ route('auth.register') }}" />
            </div>

        </div>
    </div>
    <div class="flex -mr-2 md:hidden">
        <!-- Mobile menu button -->
        <button type="button" @click="isOpen = !isOpen"
            class="relative inline-flex items-center justify-center p-2 text-gray-400 transition duration-300 bg-gray-200 rounded-md text-primary hover:shadow-sm focus:outline-none"
            aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block w-6 h-6"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-align-justify">
                <line x1="3" x2="21" y1="6" y2="6" />
                <line x1="3" x2="21" y1="12" y2="12" />
                <line x1="3" x2="21" y1="18" y2="18" />
            </svg>
            <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden w-6 h-6"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-x">
                <path d="M18 6 6 18" />
                <path d="m6 6 12 12" />
            </svg>

        </button>
    </div>
</div>
