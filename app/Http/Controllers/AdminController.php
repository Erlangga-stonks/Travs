<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\Transaction;
use App\Models\TransactionDetail;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function product()
    {
        $products = Product::all();
        return view('admin.product', compact('products'));
    }

    public function createProduct()
    {
        $productTypes = ProductType::get();
        return view('admin.create-product', compact('productTypes'));
    }

    public function storeProduct(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type_id' => 'required|exists:product_types,id',
            'description' => 'required',
            'quantity' => 'required|numeric|min:1',
            'price' => 'required|numeric|min:1000',
            'picture' => 'required',
        ]);

        $data = $request->all();
        $productType = ProductType::where('id', '=', $request->type_id)->first();
        $imageName = str_replace(' ', '-', $data['name']);
        $imagePath = $request->file('picture')->store('/public/images/' . $productType->name);
        $imagePath = str_replace('public/', '', $imagePath);
        $product = Product::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'type_id' => $productType->id,
            'price' => $data['price'],
            'quantity' => $data['quantity'],
            'picture' => $imagePath,
        ]);

        return redirect('admin/product');
    }

    public function updateProduct($id)
    {
        $product = Product::find($id);
        $productTypes = ProductType::get();
        return view('admin.update-product', compact('product', 'productTypes'));
    }

    public function storeUpdateProduct(Request $request)
    {
        $data = $request->all();
        $productType = ProductType::where('id', '=', $request->type_id)->first();
        if ($request->picture == null) {
            if ($data['description'] == null) {
                $product = Product::where('id', $data['product_id'])->update([
                    'name' => $data['name'],
                    'type_id' => $productType->id,
                    'price' => $data['price'],
                    'quantity' => $data['quantity']
                ]);
                return redirect('admin/product');
            }
            $product = Product::where('id', $data['product_id'])->update([
                'name' => $data['name'],
                'description' => $data['description'],
                'type_id' => $productType->id,
                'price' => $data['price'],
                'quantity' => $data['quantity']
            ]);

            return redirect('admin/product');
        }

        $imageName = str_replace(' ', '-', $data['name']);
        $imagePath = $request->file('picture')->store('/public/images/' . $productType->name . '/' . $imageName);
        $imagePath = str_replace('public/', '', $imagePath);
        $product = Product::where('id', $data['product_id'])->update([
            'name' => $data['name'],
            'description' => $data['description'],
            'type_id' => $productType->id,
            'price' => $data['price'],
            'quantity' => $data['quantity'],
            'picture' => $imagePath
        ]);

        return redirect('admin/product');
    }

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('admin/product');
    }

    public function transaction()
    {
        $transactions = Transaction::join('users', 'transactions.user_id', '=', 'users.id')
            ->select('transactions.*', 'users.name as userName')
            ->paginate(10);
        return view('admin.transaction', compact('transactions'));
    }

    public function transactionDetail($id)
    {
        $details = TransactionDetail::where('transaction_id', '=', $id)
            ->join('products', 'products.id', '=', 'transaction_details.product_id')
            ->select('products.name as productName', 'transaction_details.*')
            ->paginate(10);
        return view('admin.transaction-detail', compact('details'));
    }

    public function acceptTransaction($id)
    {
        $transactions = Transaction::where('id', $id)->update([
            'status' => 'delivered'
        ]);

        return redirect('admin/transaction');
    }

    public function storeUpdateUser(Request $request)
    {
        $user = User::find($request->user_id);
        $request->validate([
            'gender' => 'required'
        ]);

        $data = $request->all();

        $user->name = $data['name'];
        $user->dob = $data['dob'];
        $user->gender = $data['gender'];
        $user->country = $data['country'];
        $user->save();

        return redirect('admin/user-list');
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('admin/user-list');
    }
}