<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $job->title }}
        </h2>
    </x-slot>
    <div class="mt-10 pb-5 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="mt-5 p-5 bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <p class="font-semibold">{{ $job->title }}</p>
            <p class="">{{ $job->name }}</p>
            <p class="font-medium mt-5">Company</p>
            <p class="whitespace-pre-wrap">{{ $job->company_description }}</p>
            <p class="font-medium mt-5">Job</p>
            <p class="whitespace-pre-wrap">{{ $job->job_description }}</p>
            <p class="font-medium mt-5">Salary</p>
            <p class="">{{ $job->salary }}</p>
            <p class="font-medium mt-5">Email</p>
            <p class="">{{ $job->email }}</p>
            <p class="font-medium mt-5">Adress</p>
            <p class="whitespace-pre-wrap">{{ $job->adress }}</p>
            <p class="text-right mt-5">created at {{ $job->created_at }} by {{ $job->user_prename }} {{ $job->user_name }}</p>
            @auth
                @if ($job->user_id == auth()->user()->id)
                    <div class="flex w-full justify-center">
                        <a class="py-2 px-4 rounded-lg mr-5" style="background-color: blue;" href="{{ route('jobs.edit', $job->id) }}">Edit</a>
                        <form method="POST" action="{{ route('jobs.delete', $job->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="py-2 px-4 rounded-lg" style="background-color: red;">delete</button>
                        </form>
                    </div>
                @endif
            @endauth
        </div>
    </div>
</x-app-layout>