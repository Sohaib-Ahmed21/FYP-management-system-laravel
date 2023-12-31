@props(['projectId', 'availableLocations'])

<div>
    <h3 class="text-center text-3xl font-bold mb-4">Assign Location to Project {{ $projectId }}</h3>
    <ul class="list-none p-0 grid grid-cols-5 gap-2" id="locations-list">
        @foreach($availableLocations as $availableLocation)
        <form method="POST" action="/assign-location/{{ $projectId }}/{{ $availableLocation }}">
            @csrf
            <button type="submit" class="cursor-pointer bg-red-500 w-full text-white rounded p-2 text-center">
                Location <br>{{ $availableLocation }}
            </button>
        </form>
        @endforeach
    </ul>
</div>
