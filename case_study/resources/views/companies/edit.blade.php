<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit company
        </h2>
    </x-slot>
    <div class="mt-10 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="mt-5 py-5 bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <form class="max-w-7xl mx-auto sm:px-6 lg:px-8" method="POST" action="{{ route('companies.update', $company) }}">
                @method('PATCH')

                <x-companies.form :company="$company"/>

                <div class="text-right mt-5">
                    <button class="p-5 rounded-lg" style="background-color: green;">Save</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>