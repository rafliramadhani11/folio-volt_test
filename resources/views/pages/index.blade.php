<?php
use function Laravel\Folio\name;
name('home');

?>

<x-guest>

    @slot('navbar')
    @endslot


    <div class="px-4 py-6">
        <x-typography.h4 label="What ur search ?" />
        <x-typography.muted label='we have greatfull news today ✨' />
    </div>


</x-guest>
