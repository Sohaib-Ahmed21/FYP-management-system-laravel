@auth
<x-layout>
    <x-card>
        <h2 class="text-xl text-center mb-4">Performance Evaluations for <strong>{{ $project->title }}</strong></h2>
        <div class="flex flex-wrap gap-x-3">
            @php
                $evaluationIndex = 1;
            @endphp
            @foreach ($evaluations as $evaluation)
                <div class="mb-4 flex gap-x-5 items-center bg-red-500 w-fit p-3 rounded-lg text-white">
                    <p class="font-bold bg-blue-500 p-2 rounded-xl">{{$evaluationIndex++}}</p>
                    <div>
                        <p><strong>Evaluator:</strong> {{ $evaluation->evaluator->name }}</p>
                        <p><strong>Evaluator Email:</strong> {{ $evaluation->evaluator->email }}</p>
                        <p><strong>Rating:</strong> {{ $evaluation->rating }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </x-card>
</x-layout>
@endauth
