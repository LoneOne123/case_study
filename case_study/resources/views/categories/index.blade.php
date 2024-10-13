<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Categories
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-10 text-right">
        <a href="{{ route('categories.add') }}" class="p-5 rounded-lg cursor-pointer" style="background-color: green;">Create category</a>
    </div>

    <div class="mt-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center">
                    Categories
                </div>
            </div>
        </div>
    </div>
</x-app-layout>