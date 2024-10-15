@csrf

<div>
    <x-input-label for="name" value="Name" />
    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ old('name', $category->name ?? '') }}" required autofocus autocomplete="name" />
    <x-input-error :messages="$errors->get('name')" class="mt-2" />
</div>