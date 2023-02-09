@extends('layouts.app')
@section('content')
    <div class="w-full max-w-sm bg-white rounded-lg shadow-md mx-auto mt-10">
        <img class="p-8 rounded-t-lg" src="{{ asset('storage/' . $product->picture) }}" alt="product image" />
        <div class="px-5 pb-5">
            <h5 class="text-xl font-semibold tracking-tight text-gray-900 ">{{ $product->name }}</h5>
            <h5 class="text-sm  tracking-tight text-gray-900 ">{{ $product->description }}</h5>
            <form action="/user/cart" method="POST">
                @csrf
                <div class="mb-3 mt-3">
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900 ">Qty :
                        {{ $product->quantity }}</label>
                    <input type="number"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        min="1" max="{{ $product->quantity }}" placeholder="1" name="quantity" required>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-xl font-bold text-gray-900 ">Rp {{ $product->price }}</span>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Purchase</button>
                </div>
            </form>
        </div>
    </div>
@endsection
