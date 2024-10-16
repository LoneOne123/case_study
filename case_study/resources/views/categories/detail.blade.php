<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $category->name }}
        </h2>
    </x-slot>
    <div class="mt-10 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="mt-5 p-5 bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <p class="font-semibold">{{ $category->name }}</p>
            @if ($category->user_id == Auth()->user()->id)
            <div class="pb-5 pt-10 text-center">
                <a class="py-2 px-4 rounded-lg" style="background-color: green; color: white" href="{{ route('categories.edit', $category) }}">Edit</a>
            </div>
            @endif
        </div>
    </div>
</x-app-layout>