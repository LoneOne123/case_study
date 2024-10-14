<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Companies
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-10 text-right">
        <a href="{{ route('companies.add') }}" class="p-5 rounded-lg cursor-pointer" style="background-color: green;">Add companie</a>
    </div>

    <div class="mt-10 max-w-7xl mx-auto sm:px-6 lg:px-8">
        @foreach ($companies as $company)
            <div class="mt-5 p-5 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <a href="{{ route('companies.detail', $company->id) }}">{{ $company->name }}</a>
                <p>{{ $company->description }}</p>
                <p>{{ $company->adress }}</p>
                <p>{{ $company->email }}</p>
                @if ($company->user_id == auth()->user()->id)
                <div class="flex w-full justify-center">
                    <a class="p-5 rounded-lg mr-5" style="background-color: blue;" href="{{ route('companies.edit', $company) }}">Edit</a>
                    <form method="POST" action="{{ route('companies.delete', $company) }}">
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