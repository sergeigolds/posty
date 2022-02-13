@extends('layots.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label class="sr-only" for="name">Name</label>
                    <input class="bg-gray-100 border-2 p-4 rounded-lg w-full @error('name') border-red-500 @enderror"
                        type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Your name">
                    @error('name')
                        <div class="text-red-500 mt-5 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="sr-only" for="username">Username</label>
                    <input class="bg-gray-100 border-2 p-4 rounded-lg w-full @error('username') border-red-500 @enderror"
                        type="text" name="username" id="username" value="{{ old('username') }}" placeholder="Username">
                    @error('username')
                        <div class="text-red-500 mt-5 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="sr-only" for="email">Email</label>
                    <input class="bg-gray-100 border-2 p-4 rounded-lg w-full @error('email') border-red-500 @enderror"
                        type="text" name="email" id="email" value="{{ old('email') }}" placeholder="Your email">
                    @error('email')
                        <div class="text-red-500 mt-5 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="sr-only" for="password">Password</label>
                    <input class="bg-gray-100 border-2 p-4 rounded-lg w-full @error('password') border-red-500 @enderror"
                        type="password" name="password" id="password" value="" placeholder="Choose a password">
                    @error('password')
                        <div class="text-red-500 mt-5 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="sr-only" for="password_confirmation">Password again</label>
                    <input
                        class="bg-gray-100 border-2 p-4 rounded-lg w-full"
                        type="password" name="password_confirmation" id="password_confirmation" value=""
                        placeholder="Repeat your password">
                </div>

                <div>
                    <button type="submit"
                        class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection
