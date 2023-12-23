<x-layout>
    <x-card class="p-10 max-w-md mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-3xl font-bold uppercase mb-4">Adjust Your Preferences</h2>
        </header>

        <form method="POST" action="/guest/preferences" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="keywords" class="block text-lg mb-2">Your Preferences</label>
                <input type="text" class="form-input w-full border rounded-md py-2 px-3" name="keywords"
                    value="{{ implode(',', $tags) }}" />

                @error('keywords')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit"
                    class="bg-laravel text-white rounded-md py-2 px-4 hover:bg-black focus:outline-none focus:shadow-outline-black active:bg-black">
                    Update
                </button>

                <a href="/guest/preferences" class="text-gray-700 ml-4">Back</a>
            </div>
        </form>
    </x-card>
</x-layout>
