<x-layout>
    <x-card class="max-w-md mx-auto mt-10 bg-white p-8 rounded-lg shadow-md">
        <header class="text-center mb-6">
            <h2 class="text-3xl font-extrabold text-black-600 uppercase">Welcome back!</h2>
            <p class="text-gray-500">Log in to your account</p>
        </header>

        <form method="POST" action="/user/authenticate">
            @csrf

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
                <label class="block text-gray-600 text-lg">Role</label>
                <div class="flex items-center mt-2">
                    <div class="mr-6">
                        <input type="radio" class="form-radio" name="role" value="admin" id="admin" />
                        <label for="admin" class="text-gray-700">Admin</label>
                    </div>
                    <div class="mr-6">
                        <input type="radio" class="form-radio" name="role" value="guest" id="guest" />
                        <label for="guest" class="text-gray-700">Guest</label>
                    </div>
                    <div>
                        <input type="radio" class="form-radio" name="role" value="student" id="student" />
                        <label for="student" class="text-gray-700">Student</label>
                    </div>
                </div>
                @error('role')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit" class="bg-black-600 text-black rounded-md py-2 px-4 hover:bg-black-700 focus:outline-none focus:shadow-outline-black active:bg-black-800">
                    Sign In
                </button>
            </div>

            <div class="text-center">
                <p class="text-gray-600">Don't have an account? <a href="/register" class="text-black-600">Register</a></p>
            </div>
        </form>
    </x-card>
</x-layout>
