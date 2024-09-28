<?php
use function Laravel\Folio\name;
name('posts.index');

?>
<x-guest>

    @slot('navbar')
    @endslot

    <div class="px-4 py-6">
        <x-typography.h4 label="What ur search ?" />
        <x-typography.muted label='we have greatfull news today ✨' />
    </div>

    <div class="grid grid-cols-4 overflow-hidden min-w-fit">
        <x-card class="bg-gray-100 border-0 shadow-none ">
            <x-card.content class="pt-5">
               <img class="object-cover h-48 rounded-lg w-96" src="{{ asset('img/nature.jpg') }}" alt="Nature" >
            </x-card.content>
            <x-card.footer class="flex flex-col space-y-3 ">
                <x-typography.p class="leading-tight" label="Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel consequatur odit in!" />
                <x-typography.muted class="w-full text-start" label="Nature | 25 minutes ago" />
            </x-card.footer>
        </x-card>
        <x-card class="bg-gray-100 border-0 shadow-none ">
            <x-card.content class="pt-5">
               <img class="object-cover h-48 rounded-lg w-96" src="{{ asset('img/nature.jpg') }}" alt="Nature" >
            </x-card.content>
            <x-card.footer class="flex flex-col space-y-3 ">
                <x-typography.p class="leading-tight" label="Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel consequatur odit in!" />
                <x-typography.muted class="w-full text-start" label="Nature | 25 minutes ago" />
            </x-card.footer>
        </x-card>
        <x-card class="bg-gray-100 border-0 shadow-none ">
            <x-card.content class="pt-5">
               <img class="object-cover h-48 rounded-lg w-96" src="{{ asset('img/nature.jpg') }}" alt="Nature" >
            </x-card.content>
            <x-card.footer class="flex flex-col space-y-3 ">
                <x-typography.p class="leading-tight" label="Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel consequatur odit in!" />
                <x-typography.muted class="w-full text-start" label="Nature | 25 minutes ago" />
            </x-card.footer>
        </x-card>
        <x-card class="bg-gray-100 border-0 shadow-none ">
            <x-card.content class="pt-5">
               <img class="object-cover h-48 rounded-lg w-96" src="{{ asset('img/nature.jpg') }}" alt="Nature" >
            </x-card.content>
            <x-card.footer class="flex flex-col space-y-3 ">
                <x-typography.p class="leading-tight" label="Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel consequatur odit in!" />
                <x-typography.muted class="w-full text-start" label="Nature | 25 minutes ago" />
            </x-card.footer>
        </x-card>
        <x-card class="bg-gray-100 border-0 shadow-none ">
            <x-card.content class="pt-5">
               <img class="object-cover h-48 rounded-lg w-96" src="{{ asset('img/nature.jpg') }}" alt="Nature" >
            </x-card.content>
            <x-card.footer class="flex flex-col space-y-3 ">
                <x-typography.p class="leading-tight" label="Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel consequatur odit in!" />
                <x-typography.muted class="w-full text-start" label="Nature | 25 minutes ago" />
            </x-card.footer>
        </x-card>
    </div>


</x-guest>
