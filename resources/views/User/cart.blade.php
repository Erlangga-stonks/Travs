@extends('layouts.user-sidebar-dashboard')
@section('content')
    <div class="grid grid-cols-3 p-3">
        @foreach ($transactions as $data)
            <div
                class="mt-10 mx-auto flex flex-col items-center bg-white border rounded-lg shadow-md md:flex-row md:max-w-xl  p-3">
                <img class="object-cover w-full rounded-t-lg h-48 md:h-auto md:w-32 md:rounded-none md:rounded-l-lg"
                    src="{{ asset('storage/' . $data->product->picture) }}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight ">{{ $data->product->name }}</h5>
                    <p class="mb-3 font-semibold ">Qty : {{ $data->quantity }}</p>
                    <p class="mb-3 font-semibold ">Total : Rp {{ $data->subtotal_price }}</p>
                    <a href="{{ route('user-cart-delete', $data->id) }}"><svg class="p-3 w-16 h-16  rounded-full"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                clip-rule="evenodd"></path>
                        </svg></a>
                </div>
            </div>
        @endforeach
    </div>


    <footer
        class="mt-10 p-4 bg-white rounded-lg shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800 w-1/4 ml-10">
        <p class="font-bold"> Total Price : Rp. {{ $transaction->total_price }}</p>
        @if ($transaction == null || $transaction->total_price == 0)
            <a href="/"
                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Purchase
            </a>
        @else
            <form action="{{ route('user-Payment') }}">
                @csrf
                <button type="submit"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Purchase
                    </a>
            </form>
        @endif
    </footer>
@endsection
