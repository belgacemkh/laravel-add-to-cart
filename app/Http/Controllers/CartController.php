<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        \Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price/100,
            'quantity' => $request->quantity,
        ]);

        return redirect()->route('products.index')->with('message', 'Successfully added');
    }
}
