@extends('layouts.app')
@section('content')
<div class="block max-w-md p-6 mx-auto mt-20 bg-white rounded-lg shadow-lg">
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="p-3 text-xl font-bold text-center">
            Register
        </div>
        <div class="mb-6 form-group">
            <label for="default-radio-1" class="ml-2 text-sm font-medium">Name</label>
            <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput125" placeholder="Name" name="name">
            @error('name')
            <p class="text-sm text-red-400">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6 form-group">
            <label for="default-radio-1" class="ml-2 text-sm font-medium">Email</label>
            <input type="email" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput125" placeholder="Email " name="email">
            @error('email')
            <p class="text-sm text-red-400">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6 form-group">
            <label for="default-radio-1" class="ml-2 text-sm font-medium">Password</label>
            <input type="password" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput126" placeholder=" Password" name="password">
            @error('password')
            <p class="text-sm text-red-400">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6 form-group">
            <label for="default-radio-1" class="ml-2 text-sm font-medium">Confirm Password</label>
            <input type="password" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput126" placeholder="Confirm Password" name="password_confirmation">
            @error('password_confirmation')
            <p class="text-sm text-red-400">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-2 form-group">
            <input id="default-radio-1" type="radio" name="gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
            <label for="default-radio-1" class="ml-2 text-sm font-medium ">Male</label>
        </div>
        <div class="mb-6 form-group">
            <input id="default-radio-1" type="radio" name="gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
            <label for="default-radio-1" class="ml-2 text-sm font-medium">Female</label>
        </div>
        @error('gender')
        <p class="text-sm text-red-400">{{ $message }}</p>
        @enderror

        <div class="relative items-center mb-3">
            <label for="default-radio-1" class="ml-2 text-sm font-medium">Date of birth</label>
            <input datepicker type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 " placeholder="Select date" name="dob">
            @error('dob')
            <p class="text-sm text-red-400">{{ $message }}</p>
            @enderror
        </div>

        <label for="countries" class="block mb-2 text-sm font-medium ">Country</label>
        <select id="countries" class="mb-3 bg-gray-50 border text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " name="country">
            <option selected>Choose a country</option>
            <option value="Indonesia">Indonesia</option>
            <option value="United States">Inggris</option>
            <option value="Canada">Brazil</option>
            <option value="France">Qatar</option>
            <option value="Germany">Malaysia</option>
        </select>
        @error('country')
        <p class="text-sm text-red-400">{{ $message }}</p>
        @enderror

        <div class="mb-3 text-center form-group form-check">
            <label class="inline-block text-gray-800 form-check-label" for="exampleCheck25">Have an account ? <a href="{{ route('login') }}" class="font-bold">Login</a></label>
        </div>
        <button type="submit" class=" w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Sign
            up</button>
    </form>
</div>
@endsection