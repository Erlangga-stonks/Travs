<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductType;
use App\Models\Product;

class GuestController extends Controller
{
    public function dashboard()
    {
        $datas = ProductType::with('products')->get();
        return view('index', compact('datas'));
    }

    public function product($id)
    {
        $product = Product::where('id', '=', $id)->first();
        return view('product', ['product' => $product]);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $datas = Product::query()
            ->join('product_types', 'products.type_id', '=', 'product_types.id')
            ->where('products.name', 'LIKE', "%{$search}%")
            ->orWhere('product_types.name', 'LIKE', "%{$search}%")
            ->select('products.name as name', 'products.price as price', 'products.id as id', 'product_types.name as productType', 'products.picture as picture')
            ->get();
        return view('search', compact('datas'));
    }

    public function products($id)
    {
        $data = ProductType::where('id', '=', $id)->with('product')->first();
        return view('products', compact('data'));
    }
}
