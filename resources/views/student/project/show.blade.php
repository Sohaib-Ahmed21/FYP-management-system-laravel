<x-layout>
    <h2 class="text-3xl font-extrabold mb-6 text-center text-black-600">Final Year Project Group</h2>

    <x-card>
        @if($project)
            <div class=" flex flex-col items-center justify-center text-center">
                <img class="w-48 mr-6 mb-6"
                    src="{{$project->picture ? asset('storage/' . $project->picture) : asset('/images/no-image.png')}}"
                    alt="Project Image" />

                <h3 class="text-2xl mb-2">
                    {{$project->title}}
                </h3>

                <x-project-tags :tags="$project->tags" />

                <h3 class="text-xl mb-2">Total Ratings:
                    {{$project->evaluations ? count($project->evaluations) : 0}}
                </h3>

                <div class="border border-gray-200 w-full mb-6"></div>

                <div>
                    <h3 class="text-3xl font-bold mb-4">Project Description</h3>
                    <div class="text-lg space-y-6">
                        {{$project->description}}
                    </div>
                </div>
            </div>
        @else
            <form method="POST" action="/student/project" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="title" class="block text-gray-600 text-lg mb-2">Title</label>
                    <input type="text" class="form-input w-full border rounded-md py-2 px-3" name="title"
                        placeholder="Example: Open House Management System" value="{{old('title')}}" />

                    @error('title')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="tags" class="block text-gray-600 text-lg mb-2">Keywords (Comma Separated)</label>
                    <input type="text" class="form-input w-full border rounded-md py-2 px-3" name="tags"
                        placeholder="Example: Laravel, Backend, Postgres, etc" value="{{old('tags')}}" />

                    @error('tags')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="picture" class="block text-gray-600 text-lg mb-2">Project Picture</label>
                    <input type="file" class="form-input w-full border rounded-md py-2 px-3" name="picture" />

                    @error('picture')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-gray-600 text-lg mb-2">Project Description</label>
                    <textarea class="form-textarea w-full border rounded-md py-2 px-3" name="description" rows="10"
                        placeholder="Describe your project...">{{old('description')}}</textarea>

                    @error('description')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>

                <div class="flex items-center">
                    <button type="submit"
                        class="bg-black-600 text-black rounded-md py-2 px-4 hover:bg-black-700 focus:outline-none focus:shadow-outline-black active:bg-black-800">
                        Create Project
                    </button>

                    <a href="/" class="text-gray-700 ml-4">Back</a>
                </div>
            </form>
        @endif
    </x-card>
</x-layout>
