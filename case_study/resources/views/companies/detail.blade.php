<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $company->name }}
        </h2>
    </x-slot>
    <div class="mt-10 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="mt-5 p-5 bg-white overflow-hidden shadow-sm sm:rounded-lg text-center">
            <p>{{ $company->name }}</p>
            <p>{{ $company->description }}</p>
            <p>{{ $company->adress }}</p>
            <p>{{ $company->email }}</p>
            @if ($company->user_id == Auth()->user()->id)
            <div class="pb-5 pt-10 text-center">
                <a class="p-5 rounded-lg" style="background-color: green;" href="{{ route('companies.edit', $company) }}">Edit</a>
            </div>
            @endif
        </div>
    </div>
</x-app-layout>