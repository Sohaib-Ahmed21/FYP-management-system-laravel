<x-layout>
    <x-card class="max-w-md mx-auto mt-10 bg-white p-8 rounded-lg shadow-md">
        <header class="mb-6">
            <h2 class="text-3xl font-extrabold text-black-600 uppercase">Register Yourself</h2>
            
        </header>

        <form method="POST" action="/user/register">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-gray-600 text-lg mb-2">Name</label>
                <input type="text" class="form-input w-full border rounded-md py-2 px-3" name="name" value="{{ old('name') }}" />

                @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-600 text-lg mb-2">Email</label>
                <input type="email" class="form-input w-full border rounded-md py-2 px-3" name="email" value="{{ old('email') }}" />

                @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-600 text-lg mb-2">Password</label>
                <input type="password" class="form-input w-full border rounded-md py-2 px-3" name="password" value="{{ old('password') }}" />

                @error('password')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-600 text-lg mb-2">Confirm Password</label>
                <input type="password" class="form-input w-full border rounded-md py-2 px-3" name="password_confirmation" value="{{ old('password_confirmation') }}" />

                @error('password_confirmation')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <label class="block text-gray-600 text-lg">Register As</label>
            <div class="mb-4 flex items-center mt-2">
                <div class="mr-6">
                    <input type="radio" class="form-radio" name="role" value="guest" id="guest" />
                    <label for="guest" class="text-gray-700">Guest</label>
                </div>
                <div>
                    <input type="radio" class="form-radio" name="role" value="student" id="student" />
                    <label for="student" class="text-gray-700">Student</label>
                </div>
            </div>

            <div class="mb-6">
                <button type="submit" class="bg-light-600 text-dark rounded-md py-2 px-4 hover:bg-dark-700 focus:outline-none focus:shadow-outline-dark active:bg-dark-800">
                    Sign Up
                </button>
            </div>

            <div class="text-center">
                <p class="text-gray-600">Already have an account? <a href="/login" class="text-dark-600">Login</a></p>
            </div>
        </form>
    </x-card>
</x-layout>
