@extends('layout.app')


@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg"> 
             
            <p class="p-5 font-medium">Register</p>
            <form action="{{route('register')}} " method="post">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="Your name" value="{{old('name')}}"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg">

                    @error('name')
                        <div class="text-red-500 mt-2 text-sm"> {{ $message}}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" name="username" id="username" placeholder="Your username" value="{{old('username')}}"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg">

                    @error('username')
                        <div class="text-red-500 mt-2 text-sm"> {{ $message}}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="Your email" value="{{old('email')}}"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg">

                    @error('email')
                    <div class="text-red-500 mt-2 text-sm"> {{ $message}}</div>
                @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Your password" value=""
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg">

                    @error('password')
                    <div class="text-red-500 mt-2 text-sm"> {{ $message}}</div>
                @enderror
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password" value=""
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                </div>

                <div class="flex justify-center">
                    <button type="submit" class="bg-blue-500 p-6 text-white rounded font-medium mt-4">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
@endsection