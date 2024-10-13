<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add category
        </h2>
    </x-slot>

    <form class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-10" method="POST" action="">

        <!-- Name -->
        <div>
            <x-input-label for="name" value="Name" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="text-right mt-5">
            <button class="p-5 rounded-lg" style="background-color: green;">Add</button>
        </div>
    </form>
</x-app-layout>