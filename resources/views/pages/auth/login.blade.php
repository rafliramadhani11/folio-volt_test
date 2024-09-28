<?php

use App\Livewire\Forms\LoginUser;
use function Livewire\Volt\{form};
use function Laravel\Folio\name;

form(LoginUser::class);

$login = function () {
    dd($this->form->all());
};

name('auth.login');
?>

<x-guest>
    @volt
        <div class="flex items-center justify-center min-h-screen">
            <x-card class="w-1/3">
                <form wire:submit='login'>
                    <x-card.header>

                        <x-card.title label='Login Account' />
                        <x-card.description label="just insert your email & password here 👌" />
                    </x-card.header>

                    <x-card.content class="space-y-3">

                        <div class="grid w-full items-center gap-1.5">
                            <x-label htmlFor="email" label="Email" />
                            <x-input type="email" id="email" placeholder="mail@mail.com" wire:model='form.email' />
                        </div>
                        <div class="grid w-full items-center gap-1.5">
                            <x-label htmlFor="password" label="Password" />
                            <x-input type="password" id="password" wire:model='form.password' />
                        </div>

                    </x-card.content>
                    <x-card.footer class="flex items-end justify-between">

                        <x-button type="submit">
                            <x-loading />
                            Login
                        </x-button>


                        <x-link href="{{ route('auth.register') }}" label="Register your account here" class="text-sm" />

                    </x-card.footer>
                </form>
            </x-card>
        </div>
    @endvolt
</x-guest>
