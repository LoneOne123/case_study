<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $company->name }}
        </h2>
    </x-slot>
    <div class="mt-10 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="mt-5 p-5 bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <p class="font-semibold">{{ $company->name }}</p>
            <p class="whitespace-pre-wrap mt-5">{{ $company->description }}</p>
            <p class="mt-5">{{ $company->email }}</p>
            <p class="whitespace-pre-wrap mt-5">{{ $company->adress }}</p>
            @if ($company->user_id == Auth()->user()->id)
            <div class="pb-5 pt-10 text-center">
                <a class="py-2 px-4 rounded-lg" style="background-color: green; color: white;" href="{{ route('companies.edit', $company) }}">Edit</a>
            </div>
            @endif
        </div>
    </div>
</x-app-layout>