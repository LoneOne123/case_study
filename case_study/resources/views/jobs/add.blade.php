<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add Job
        </h2>
    </x-slot>

    <form class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-10" method="POST" action="">

        <!-- Title -->
        <div>
            <x-input-label for="title" value="Title" />
            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" value="{{ old('title') }}" required autofocus autocomplete="title" />
            <x-input-error :messages="$errors->get('title')" class="mt-2" />
        </div>

        <!-- Description -->
        <div class="mt-5">
            <x-input-label for="description" value="Description" />
            <textarea id="description" class="block mt-1 w-full rounded-lg" type="text" name="description" required autocomplete="description">{{ old('description') }}</textarea>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <!-- Category -->
        <div class="mt-5">
            <x-input-label for="category" value="Category" />
            <select class="block mt-1 w-full rounded-lg" name="category" id="category">
                <option value="">Val1</option>
                <option value="">Val2</option>
                <option value="">Val3</option>
                <option value="">Val4</option>
            </select>
            <x-input-error :messages="$errors->get('adress')" class="mt-2" />
        </div>

        <!-- Company -->
        <div class="mt-5">
            <x-input-label for="company" value="Company" />
            <select class="block mt-1 w-full rounded-lg" name="company" id="company">
                <option value="">Val1</option>
                <option value="">Val2</option>
                <option value="">Val3</option>
                <option value="">Val4</option>
            </select>
            <x-input-error :messages="$errors->get('adress')" class="mt-2" />
        </div>

        <div class="text-right mt-5">
            <button class="p-5 rounded-lg" style="background-color: green;">Add</button>
        </div>
    </form>
</x-app-layout>