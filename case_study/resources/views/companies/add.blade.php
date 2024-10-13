<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add company
        </h2>
    </x-slot>

    <form class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-10" method="POST" action="">

        <!-- Name -->
        <div>
            <x-input-label for="name" value="Name" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Description -->
        <div class="mt-5">
            <x-input-label for="description" value="Description" />
            <textarea id="description" class="block mt-1 w-full rounded-lg" type="text" name="description" required autocomplete="description">{{ old('description') }}</textarea>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <!-- Adress -->
        <div class="mt-5">
            <x-input-label for="adress" value="Adress" />
            <textarea id="adress" class="block mt-1 w-full rounded-lg" type="text" name="adress" required autocomplete="adress">{{ old('adress') }}</textarea>
            <x-input-error :messages="$errors->get('adress')" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="mt-5">
            <x-input-label for="email" value="Email" />
            <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" value="{{ old('email') }}" required autofocus autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="text-right mt-5">
            <button class="p-5 rounded-lg" style="background-color: green;">Add</button>
        </div>
    </form>
</x-app-layout>