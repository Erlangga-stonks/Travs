@extends('layouts.app')
@section('content')
    <div class="container mx-auto mt-10">
        <form action="{{ route('search') }}" method="POST">
            @csrf
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <input type="text" name="search" id="default-search"
                    class="block border border-gray w-full p-4 pl-10 text-sm text-gray-900  rounded-lg bg-gray-50  "
                    placeholder="Search Mockups, Logos..." required>
                <button type="submit"
                    class="text-white absolute right-2.5 bottom-2.5 bg-blue-700  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 ">Search</button>
            </div>
        </form>
    </div>

    <!-- category 1 -->

    <div class="bg-white">
        <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8 mx-10">
            @foreach ($datas as $data)
                <div class="group relative">
                    <div
                        class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200 group-hover:opacity-75 lg:aspect-none lg:h-80">
                        <img src="{{ asset('storage/' . $data->picture) }}"
                            alt="{{ $data->name }}"
                            class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                    </div>
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-gray-700">
                                <a href="{{ route('product', $data->id) }}">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    {{  $data->name }}
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">{{ $data->name }}</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900">Rp {{ $data->price }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- end category 1 -->
@endsection
