<div class="flex items-center justify-between h-20">
    <div class="flex items-center">

        <x-nav-brand label='Newspaper' />

        <div class="hidden md:block">
            <div class="flex items-baseline ml-10 space-x-4">

                <x-nav-link label="Home" route='posts' href="{{ route('posts.index') }}" />
                <x-nav-link label="About" route='about' />
                <x-nav-link label="Community" route='community' />

            </div>
        </div>
    </div>
    <div class="hidden md:block">
        <div class="flex items-center ">

            <div class="space-x-5">
                @auth
                    <div x-data="{
                            dropdownOpen: false
                        }"
                        class="relative">
                        @php
                            $parts = explode(" ", auth()->user()->name);
                            $lastname = array_pop($parts);
                            $firstname = implode(" ", $parts);
                        @endphp
                        <button @click="dropdownOpen=true" class="flex items-center justify-center h-12 py-2 pl-3 pr-12 space-x-3 text-sm font-semibold text-black transition duration-200 hover:rounded-lg hover:bg-gray-200">
                            <img src="https://github.com/{{ $firstname }}.png" alt="{{ auth()->user()->name }}"  class="object-cover w-8 h-8 border rounded-full border-neutral-200" />
                            <span>{{ auth()->user()->name }}</span>
                            <x-lucide-chevron-down class="ml-3"/>
                        </button>

                        <div x-show="dropdownOpen"
                            @click.away="dropdownOpen=false"
                            x-transition:enter="ease-out duration-200"
                            x-transition:enter-start="-translate-y-2"
                            x-transition:enter-end="translate-y-0"
                            class="absolute top-0 z-50 w-56 mt-12 -translate-x-1/2 left-1/2"
                            x-cloak>
                            <div class="p-1 mt-1 bg-white border rounded-md shadow-md border-neutral-200/70 text-neutral-700">
                                <div class="px-2 py-1.5 text-sm font-semibold">My Account</div>
                                <div class="h-px my-1 -mx-1 bg-neutral-200"></div>
                                <a href="{{ route('admin.index') }}" class="relative flex select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                    <x-lucide-layout-dashboard class="mr-3"/>
                                        <span>Dashboard</span>
                                    </a>

                                <a href="#" class="relative flex select-none hover:bg-neutral-100 items-center rounded px-2 py-1.5 text-sm outline-none transition-colors data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
                                <x-lucide-user-pen class="mr-3"/>
                                    <span>Profile</span>
                                </a>

                                <livewire:logout />

                            </div>
                        </div>
                    </div>
                @endauth
                @guest
                    <x-link.button href="{{ route('auth.login') }}" label="Login" size='lg' />
                    <x-link label="Register" href="{{ route('auth.register') }}" />
                @endguest
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
