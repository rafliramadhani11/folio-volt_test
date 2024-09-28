<?php

use function Livewire\Volt\{state};
use Illuminate\Support\Facades\Auth;

$logout = function ()
{
   Auth::logout();
   session()->invalidate();
   session()->regenerateToken();
   $this->redirectRoute('posts.index');
};

?>

<button wire:click='logout' wire:loading.class="opacity-50 cursor-not-allowed"  class="relative w-full flex select-none hover:bg-neutral-100 items-center justify-between rounded px-2 py-1.5 text-sm outline-none transition-colors focus:bg-accent focus:text-accent-foreground data-[disabled]:pointer-events-none data-[disabled]:opacity-50">
    <div class="flex">
        <x-lucide-log-out class="mr-3"/>
        <span >Logout</span>
    </div>
    <x-loading />
</button>
