<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Categories
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5 text-right">
        <a href="{{ route('categories.add') }}" class="py-2 px-4 rounded-lg cursor-pointer" style="background-color: green; color: white;">Add category</a>
    </div>

    <div class="mt-5 max-w-7xl mx-auto sm:px-6 lg:px-8">
        @foreach ($categories as $category)
            <div class="mt-5 p-5 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a class="font-semibold" href="{{ route('categories.detail', $category->id) }}">{{ $category->name }}</a>
                @if ($category->user_id == auth()->user()->id)
                <div class="flex w-full justify-center">
                    <a class="py-2 px-4 rounded-lg mr-5" style="background-color: blue; color: white;" href="{{ route('categories.edit', $category) }}">Edit</a>
                    <form method="POST" action="{{ route('categories.delete', $category) }}">
                        @csrf
                        @method('DELETE')
                        <button class="py-2 px-4 rounded-lg" style="background-color: red; color: white">delete</button>
                    </form>
                </div>
                @endif
            </div>
        @endforeach
        <div class="py-5">
            {{ $categories->links() }}
        </div>
    </div>
</x-app-layout>