<?php
use App\Models\User;
use function Laravel\Folio\name;
use function Livewire\Volt\form;
use App\Livewire\Forms\RegisterUser;

form(RegisterUser::class);

$register = function () {
    $validated = $this->validate();
    $this->form->password = Hash::make($this->form->password);
    User::create($validated);
    $this->reset();

    session()->flash('success', "Account has been registered !");
    $this->redirectRoute('auth.login');
};

name('auth.register');
?>

<x-guest>
    @volt
        <div class="flex items-center justify-center min-h-screen">
            <x-card class="w-1/3">
                <form wire:submit='register'>
                    <x-card.header>

                        <x-card.title label='Register Account' />
                        <x-card.description label="Hai thankyou coz u wanna make a new account 😊" />

                    </x-card.header>

                    <x-card.content class="space-y-5">
                        <div class="grid w-full items-center gap-1.5">
                            <x-label htmlFor="name" label="Name" />
                            <x-input type="text" id="name" placeholder="John doe" wire:model='form.name' />
                            @error('form.name')
                                <x-error-message label="{{ $message }}" />
                            @enderror
                        </div>
                        <div class="grid w-full items-center gap-1.5">
                            <x-label htmlFor="email" label="Email" />
                            <x-input type="email" id="email" placeholder="mail@mail.com" wire:model='form.email' />
                            @error('form.email')
                                <x-error-message label="{{ $message }}" />
                            @enderror
                        </div>
                        <div class="grid w-full items-center gap-1.5">
                            <x-label htmlFor="password" label="Password" />
                            <x-input type="password" id="password" autocomplete wire:model='form.password' />
                            @error('form.password')
                                <x-error-message label="{{ $message }}" />
                            @enderror
                        </div>

                    </x-card.content>
                    <x-card.footer class="flex items-end justify-between">

                        <x-button type="submit">
                            <x-loading />
                            Register
                        </x-button>


                        <x-link wire:navigate href="{{ route('auth.login') }}" label="Login here if u have account" class="text-sm" />

                    </x-card.footer>
                </form>
            </x-card>
        </div>
    @endvolt
</x-guest>
