<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $transactions = Transaction::where('user_id', '=', Auth::user()->id)->get();
        return view('user.dashboard', compact('transactions'));
    }

    public function detail($id)
    {
        $details = TransactionDetail::where('transaction_id', '=', $id)
                    ->join('products', 'products.id', '=', 'transaction_details.product_id')
                    ->select('products.name as productName', 'transaction_details.*')
                    ->paginate(10);
        return view('user.transaction-detail', compact('details'));
    }

    public function cart()
    {
        $transactions = TransactionDetail::query()
        ->with('product')
        ->join('transactions', 'transactions.id', '=', 'transaction_details.transaction_id')
        ->where('transactions.user_id', '=', Auth::user()->id)
        ->where('transactions.status', '=', 'pending')
        ->select('transaction_details.*')
        ->get();

        $transaction = Transaction::where('user_id', '=', Auth::user()->id)->where('status', '=', 'pending')->first();
        return view('user.cart', compact('transactions', 'transaction'));
    }

    public function storeCart(Request $request)
    {
        $request->validate([
            'quantity' => 'numeric|min: 1'
        ]);

        $data = $request->all();
        $product = Product::where('id', '=', $data['product_id'])->first();
        $subtotal = $product->price * $data['quantity'];

        $transaction = Transaction::where('user_id', '=', Auth::user()->id)->where('status', '=', 'pending')->first();
        if ($transaction) {
            $transactionDetail = TransactionDetail::where('transaction_id', '=', $transaction->id)->where('product_id', '=', $data['product_id'])->first();
            if ($transactionDetail) {
                $transactionDetail->quantity = $transactionDetail->quantity + $data['quantity'];
                $transactionDetail->subtotal_price = $transactionDetail->subtotal_price + $subtotal;
                $transactionDetail->save();
                $transaction->total_price = $transaction->total_price + $subtotal;
                $transaction->save();
            } else {
                TransactionDetail::create([
                    'transaction_id' => $transaction->id,
                    'product_id' => $data['product_id'],
                    'quantity' => $data['quantity'],
                    'subtotal_price' => $subtotal
                ]);
                $transaction->total_price = $transaction->total_price + $subtotal;
                $transaction->save();
            }
        } else {
            $transaction = Transaction::create([
                'user_id' => Auth::user()->id,
                'status' => 'pending',
                'total_price' => $subtotal,
            ]);
            TransactionDetail::create([
                'transaction_id' => $transaction->id,
                'product_id' => $data['product_id'],
                'quantity' => $data['quantity'],
                'subtotal_price' => $subtotal
            ]);
        }
        $product->quantity = $product->quantity - $data['quantity'];

        return redirect('user/cart');
    }

    public function deleteCart($id)
    {
        $transactionDetail = TransactionDetail::where('id', '=', $id)->first();
        $transaction = Transaction::where('id', '=', $transactionDetail->transaction_id)->first();
        $transaction->total_price = $transaction->total_price - $transactionDetail->subtotal_price;
        $transaction->save();
        $transactionDetail->delete();

        return redirect('user/cart');
    }

    public function processCart(Request $request)
    {   

        $transaction = Transaction::where('id', $request->id)        ->update([
            'status' => 'paid'
        ]);
        $transaction = Transaction::where('id', $request->transaction_id)
        ->update([
            'status' => 'paid'
        ]);

        return redirect('user/dashboard');
    }

    public function PaymentCont()
    {
        $transactions = TransactionDetail::query()
        ->with('product')
        ->join('transactions', 'transactions.id', '=', 'transaction_details.transaction_id')
        ->where('transactions.user_id', '=', Auth::user()->id)
        ->where('transactions.status', '=', 'pending')
        ->select('transaction_details.*')
        ->get();

        $transaction = Transaction::where('user_id', '=', Auth::user()->id)->where('status', '=', 'pending')->first();
        return view('user.Payment', compact('transactions', 'transaction'));
    }
}