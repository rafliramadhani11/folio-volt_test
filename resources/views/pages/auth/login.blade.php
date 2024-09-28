<?php

use function Laravel\Folio\name;
use App\Livewire\Forms\LoginUser;
use function Livewire\Volt\{form};
use Illuminate\Support\Facades\Auth;

form(LoginUser::class);

$login = function () {
    $validated = $this->validate();
    if(Auth::attempt($validated)){
        session()->regenerate();
        $this->redirectRoute('posts.index');
    };
    return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');
};

name('auth.login');
?>

<x-guest>

    @volt
        <div class="flex flex-col items-center justify-center w-1/3 min-h-screen mx-auto space-y-3">

            @if (session('success'))
                <x-alert message="{{ session('success') }}"/>
            @endif

            <x-card class="w-full">
                <form wire:submit='login'>
                    <x-card.header>

                        <x-card.title label='Login Account' />
                        <x-card.description label="just insert your email & password here 👌" />

                    </x-card.header>

                    <x-card.content class="space-y-5">

                        <div class="grid w-full items-center gap-1.5">
                            <x-label htmlFor="email" label="Email" />
                            <x-input type="email" id="email" placeholder="mail@mail.com" wire:model='form.email' />
                            @error('form.email')
                                <x-error-message message="{{ $message }}" />
                            @enderror
                        </div>
                        <div class="grid w-full items-center gap-1.5">
                            <x-label htmlFor="password" label="Password" />
                            <x-input type="password" id="password" autocomplete wire:model='form.password' />
                        </div>

                    </x-card.content>
                    <x-card.footer class="flex items-end justify-between">

                        <x-button type="submit">
                            <x-loading />
                            Login
                        </x-button>


                        <x-link wire:navigate href="{{ route('auth.register') }}" label="Register your account here" class="text-sm" />

                    </x-card.footer>
                </form>
            </x-card>
        </div>
    @endvolt
</x-guest>
