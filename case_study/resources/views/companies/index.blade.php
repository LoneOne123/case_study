<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Companies
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-10 text-right">
        <a href="{{ route('companies.add') }}" class="p-5 rounded-lg cursor-pointer" style="background-color: green;">Add companie</a>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center">
                    Companies
                </div>
            </div>
        </div>
    </div>
</x-app-layout>