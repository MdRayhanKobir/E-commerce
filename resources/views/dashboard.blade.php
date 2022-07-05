<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           
            hi..{{ Auth::user()->name }}
        </h2>
    </x-slot>
    <h2>this is dashboard in laravel project</h2>
</x-app-layout>
