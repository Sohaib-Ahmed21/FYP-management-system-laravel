<x-layout>

    @if($project)
        <h2 class="text-3xl font-extrabold mb-6 text-center text-indigo-600">Edit Project</h2>
        <x-card class="max-w-lg mx-auto">
            <form method="POST" action="{{ route('student.project.update') }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="title" class="block text-gray-600 text-lg mb-2">Title</label>
                    <input type="text" class="form-input w-full border rounded-md py-2 px-3" name="title"
                        placeholder="Example: Senior Laravel Developer" value="{{ old('title', $project->title) }}" />

                    @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="tags" class="block text-gray-600 text-lg mb-2">Keywords (Comma Separated)</label>
                    <input type="text" class="form-input w-full border rounded-md py-2 px-3" name="tags"
                        placeholder="Example: Laravel, Backend, Postgres, etc" value="{{ old('tags', $project->tags) }}" />

                    @error('tags')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="picture" class="block text-gray-600 text-lg mb-2">Project Cover</label>
                    <input type="file" class="form-input w-full border rounded-md py-2 px-3" name="picture" />

                    <img class="w-48 mt-2 mb-4"
                        src="{{ $project->picture ? asset('storage/' . $project->picture) : asset('/images/no-image.png') }}"
                        alt="Project Cover" />

                    @error('picture')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-gray-600 text-lg mb-2">Project Description</label>
                    <textarea class="form-textarea w-full border rounded-md py-2 px-3" name="description" rows="5">
                        {{ old('description', $project->description) }}
                    </textarea>

                    @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center">
                    <button type="submit"
                        class="bg-indigo-600 text-white rounded-md py-2 px-4 hover:bg-indigo-700 focus:outline-none focus:shadow-outline-indigo active:bg-indigo-800">
                        Update Project
                    </button>

                    <a href="{{ route('student.project.show') }}" class="text-gray-700 ml-4">Back</a>
                </div>
            </form>
        </x-card>
    @else
        <p class="text-2xl mt-8 text-center text-red-500">
            <a href="/student/project" class="underline text-blue-500">Add a project</a> first!
        </p>
    @endif

</x-layout>
