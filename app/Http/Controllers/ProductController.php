<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    
    public function index()
    {
        $products = Product::all();
        $cart = \Cart::getContent();
        
        return view('products.index',compact('products','cart'));
    }
    
    public function indexWithLivewire()
    {
        
        
        return view('products.indexWithLivewire');
    }
}
