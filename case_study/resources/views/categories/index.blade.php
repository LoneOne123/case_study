<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Categories
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-10 text-right">
        <a href="{{ route('categories.add') }}" class="p-5 rounded-lg cursor-pointer" style="background-color: green;">Add category</a>
    </div>

    <div class="mt-10 max-w-7xl mx-auto sm:px-6 lg:px-8">
        @foreach ($categories as $category)
            <div class="mt-5 p-5 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a href="{{ route('categories.detail', $category->id) }}">{{ $category->name }}</a>
                @if ($category->user_id == auth()->user()->id)
                <div class="flex w-full justify-center">
                    <a class="p-5 rounded-lg mr-5" style="background-color: blue;" href="{{ route('categories.edit', $category) }}">Edit</a>
                    <form method="POST" action="{{ route('categories.delete', $category) }}">
                        @csrf
                        @method('DELETE')
                        <button class="p-5 rounded-lg" style="background-color: red;">delete</button>
                    </form>
                </div>
                @endif
            </div>
        @endforeach
    </div>
</x-app-layout>