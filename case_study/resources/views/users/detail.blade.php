<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $user->username }}
        </h2>
    </x-slot>
    <div class="mt-10 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="mt-5 p-5 bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <p class="font-semibold">{{ $user->username }}</p>
            <p class="mt-5">{{ $user->prename }}</p> 
            <p>{{ $user->name }}</p>
            <p class="mt-5">{{ $user->email}}</p>
            @if ($user->id == auth()->user()->id)
                <div class="flex w-full justify-center">
                    <a class="py-2 px-4 rounded-lg" style="background-color: blue; color: white;" href="{{ route('profile.edit') }}">Edit</a>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>