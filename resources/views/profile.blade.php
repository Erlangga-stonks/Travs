@extends('layouts.app')
@section('content')

<div class="block p-6 rounded-lg shadow-lg bg-white max-w-md mx-auto mt-20">
    <form action="/profile" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="user_id" value="{{ $user->id }}">
        <input type="hidden" name="gender" value="{{ $user->gender }}">
        <input type="hidden" name="country" value="{{ $user->country }}">
        <input type="hidden" name="dob" value="{{ $user->dob }}">
        <div class="font-bold text-xl p-3 text-center">
            Update Profile
        </div>
        <div class="form-group mb-6">
            <label for="default-radio-1" class="ml-2 text-sm font-medium">Name</label>
            <input name="name" type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput125" placeholder="{{ $user->name }}" value="{{ $user->name }}">
        </div>
        <div class="form-group mb-6">
            <label for="default-radio-1" class="ml-2 text-sm font-medium">Email</label>
            <input name="email" type="email" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput125" placeholder="{{ $user->email }}" value="{{ $user->email }}">
        </div>
        <div class="form-group mb-6">
            <label for="default-radio-1" class="ml-2 text-sm font-medium">Gender</label>
            <div class="flex flex-row items-center">
                <input name="gender" type="radio" class="mr-4 form-control block px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0" id="exampleInput125">Male
            </div>
            <div class="flex flex-row items-center">
                <input name="gender" type="radio" class="mr-4 form-control block px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0" id="exampleInput125">Female
            </div>
        </div>
        <div class="form-group mb-6">
            <label for="default-radio-1" class="ml-2 text-sm font-medium">Date of birth</label>
            <input name="dob" type="date" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput125" placeholder="">
        </div>
        <div class="form-group mb-6">
            <label for="default-radio-1" class="ml-2 text-sm font-medium">Country</label>
            <select name="country" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput125">
                <option selected>Choose a country</option>
                <option value="Indonesia">Indonesia</option>
                <option value="United States">Inggris</option>
                <option value="Canada">Brazil</option>
                <option value="France">Qatar</option>
                <option value="Germany">Malaysia</option>
            </select>
        </div>
        <button type="submit" class="font-normal form-control block w-full px-3 py-1.5 bg-gray-400 rounded-xl text-white hover:bg-green-600 transition-colors duration-300 ease-in-out">Update</button>
    </form>
</div>

@endsection