@extends('layots.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            @if (session('status'))
                <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                    {{ session('status') }}
                </div>
            @endif

            <form action="{{ route('login') }}" method="post">
                @csrf

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

                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection
