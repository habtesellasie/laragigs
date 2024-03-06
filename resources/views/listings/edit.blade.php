@extends('layout')

@section('content')
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Edit Gig
            </h2>
            <p class="mb-4">Edit: {{ $listing->title }}</p>
        </header>

        <form action="/listings/{{ $listing->id }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="company" class="inline-block text-lg mb-2">Company Name</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company"
                    value="{{ $listing->company }}" />
            </div>

            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Job Title</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                    placeholder="Example: Senior Laravel Developer" value="{{ $listing->title }}" />
            </div>

            <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2">Job Location</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
                    placeholder="Example: Remote, Boston MA, etc" value="{{ $listing->location }}" />
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">Contact Email</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email"
                    value="{{ $listing->email }}" />
            </div>

            <div class="mb-6">
                <label for="website" class="inline-block text-lg mb-2">
                    Website/Application URL
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website"
                    value="{{ $listing->website }}" />
            </div>

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tags (Comma Separated)
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                    placeholder="Example: Laravel, Backend, Postgres, etc" value="{{ $listing->tags }}" />
            </div>

            <div class="mb-6">
                <div class="flex flex-col gap-3">
                    <label for="logo" class="inline-block text-lg mb-2">
                        Company Logo
                    </label>
                    <img src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.png') }}"
                        alt="" class="rounded max-h-[250] block object-cover">
                    <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
                </div>
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    Job Description
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                    placeholder="Include tasks, requirements, salary, etc">{{ $listing->description }}
                </textarea>
            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black text-lg">
                    Update Gig
                </button>

                <a href="{{ url()->previous() }}" class="text-black ml-4">
                    Back
                </a>
            </div>
    </x-card>
@endsection
