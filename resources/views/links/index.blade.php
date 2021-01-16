<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Links') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="md:px-6 pt-2 pb-5 bg-white border-b border-gray-200">
                    @livewire('link-table')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
