@auth
<x-layout>
    <x-card>
        <div>
            <h3 class="text-3xl font-bold mb-4 text-left">Discover Projects Await!</h3>
            <p class="text-md mb-4 text-left">Find projects that align with your knacks and interests. If we don't have a perfect match right now, we'll showcase a variety of exciting opportunities. Want to refine your search? Visit the <a class="underline text-blue-500" href="/guest/preferences">preferences</a> tab to tweak your keywords.</p>
        </div>

        @unless(count($projects) == 0)
            <div class="mb-2 mx-4 flex justify-between">
                <div class="flex align-center gap-1 mb-2">
                    <div class="border-2 border-red-500 p-2 w-[20px]"></div>
                    <p class="font-bold">Unrated Gems</p>
                </div>
                <div class="flex align-center gap-1 mb-2">
                    <div class="border-2 border-blue-500 p-2 w-[20px]"></div>
                    <p class="font-bold">Projects You've Rated</p>
                </div>
            </div>
            <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
                @foreach($projects as $project)
                    <x-project-card :project="$project" :bg="($project->getUserRating($project->id)) ? 'border-blue-500' : 'border-red-500'"/>
                @endforeach
            </div>
        @else
            <p>We're brewing up new projects! Check back soon for fresh opportunities.</p>
        @endunless
    </x-card>
</x-layout>
@endauth
