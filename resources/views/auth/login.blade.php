@extends('layouts.app')
@section('content')
    <div class="block p-6 rounded-lg shadow-lg bg-white max-w-md mx-auto mt-20">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="font-bold text-xl p-3 text-center">
                User Login
            </div>
            <div class="form-group mb-6">
                <label for="default-radio-1" class="ml-2 text-sm font-medium">Email</label>
                <input type="email"
                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    id="exampleInput125" placeholder="Email " name="email">
                @error('email')
                    <p class="text-red-400 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group mb-6">
                <label for="default-radio-1" class="ml-2 text-sm font-medium">Password</label>
                <input type="password"
                    class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                    id="exampleInput126" placeholder=" Password" name="password">
                @error('password')
                    <p class="text-red-400 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group form-check text-center mb-3">
                <label class="form-check-label inline-block text-gray-800" for="exampleCheck25">Don't have an account ? <a
                        href="{{ route('register') }}" class="font-bold">Register</a></label>
            </div>
            <button type="submit"
                class=" w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Login</button>
        </form>
    </div>
@endsection
