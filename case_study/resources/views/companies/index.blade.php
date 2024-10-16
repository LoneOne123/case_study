<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Companies
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-5 text-right">
        <a href="{{ route('companies.add') }}" class="py-2 px-4 rounded-lg cursor-pointer" style="background-color: green; color: white;">Add companie</a>
    </div>

    <div class="mt-5 max-w-7xl mx-auto sm:px-6 lg:px-8">
        @foreach ($companies as $company)
            <div class="mt-5 p-5 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a class="font-semibold" href="{{ route('companies.detail', $company->id) }}">{{ $company->name }}</a>
                <p class="whitespace-pre-wrap mt-5">{{ $company->description }}</p>
                <p class="mt-5">{{ $company->email }}</p>
                <p class="mt-5">{{ $company->adress }}</p>
                @if ($company->user_id == auth()->user()->id)
                <div class="flex w-full justify-center">
                    <a class="py-2 px-4 rounded-lg mr-5" style="background-color: blue; color: white;" href="{{ route('companies.edit', $company) }}">Edit</a>
                    <form method="POST" action="{{ route('companies.delete', $company) }}">
                        @csrf
                        @method('DELETE')
                        <button class="py-2 px-4 rounded-lg" style="background-color: red; color: white;">delete</button>
                    </form>
                </div>
                @endif
            </div>
        @endforeach
    </div>
</x-app-layout>