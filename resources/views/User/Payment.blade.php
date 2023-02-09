@extends('layouts.user-sidebar-dashboard')

@section('content')

<link rel="stylesheet" href="/assets/css/Payment.css">
<header>
	<div class="container">
            <div class="left">
                <h3>PAYMENT</h3>
                <form action="{{ route('user-cart-process') }}" method="POST">
                    @csrf
                    <input type="hidden" name="transaction_id" value="{{ $transaction->id }}">
                    Accepted Card <br>
                    <img src="{{ asset('storage/images/CardPayment/card1.png')}}" width="100">
                    <img src="{{ asset('storage/images/CardPayment/card2.png')}}" width="50">
                    <br><br>

                    Credit card number
                    <input type="text" name="" placeholder="Enter card number">
                    
                    Exp month
                    <input type="text" name="" placeholder="Enter Month">
                    <div id="zip">
                        <label>
                            Exp year
                            <select>
                                <option>Choose Year..</option>
                                <option>2022</option>
                                <option>2023</option>
                                <option>2024</option>
                                <option>2025</option>
                            </select>
                        </label>
                        <label>
                            CVV
                            <input type="number" name="" placeholder="CVV">
                        </label>
                    </div>
                    <button type="submit"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Proceed
                    </button>
                </form>
            </div>     
	</div>
</header>
@endsection