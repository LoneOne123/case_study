@csrf

<div>
    <x-input-label for="title" value="Title" />
    <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" value="{{ old('title', $job->title ?? '') }}" required autofocus autocomplete="title" />
    <x-input-error :messages="$errors->get('title')" class="mt-2" />
</div>

<!-- Description -->
<div class="mt-5">
    <x-input-label for="description" value="Description" />
    <textarea id="description" class="block mt-1 w-full rounded-lg" type="text" name="description" required autocomplete="description">{{ old('description', $job->job_description ?? '') }}</textarea>
    <x-input-error :messages="$errors->get('description')" class="mt-2" />
</div>

<!-- Company -->
<div class="mt-5">
    <x-input-label for="company" value="Company" />
    <select id="company" name="company" class="w-full rounded-lg">
        <option value="{{ $job->company_id ?? ''}}">{{ $job->company_name ?? 'Select company'}}</option>
        @foreach ($companies as $company)
            <option value="{{ $company->id }}">{{ $company->name}}</option>
        @endforeach
    </select>
    <x-input-error :messages="$errors->get('company')" class="mt-2" />
</div>

<!-- Category -->
<div class="mt-5">
    <x-input-label for="category" value="Category" />
    <select id="category" name="category" class="w-full rounded-lg">
        <option value="{{ $job->category_id ?? ''}}">{{ $job->category_name ?? 'Select category'}}</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    <x-input-error :messages="$errors->get('category')" class="mt-2" />
</div>

<!-- Salary -->
<div class="mt-5">
    <x-input-label for="salary" value="Salary" />
    <x-text-input id="salary" class="block mt-1 w-full" type="text" name="salary" value="{{ old('salary', $job->salary ?? '') }}" required autofocus autocomplete="salary" />
    <x-input-error :messages="$errors->get('salary')" class="mt-2" />
</div>