<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    
    public function index()
    {
        $products = Product::paginate(4);
        $cart = \Cart::getContent();
        
        return view('products.index',compact('products','cart'));
    }
}
