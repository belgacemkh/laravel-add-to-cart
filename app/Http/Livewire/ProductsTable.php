<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class ProductsTable extends Component
{
    public $products;
    public array $quantity = [];

    public function mount()
    {
        
        $this->products = Product::all();
        foreach ($this->products as $product) {
            $this->quantity[$product->id] = 1;
        }
    }

    public function render()
    {   
        
        $cart = \Cart::getContent();

        return view('livewire.products-table',
            compact('cart'));
    }

    public function addToCart($product_id)
    {
       
        $product = Product::findOrFail($product_id);
        
        \Cart::add(
            $product->id,
            $product->name,
            $product->price / 100,
            $this->quantity[$product_id],
        );

        $this->emit('cart_updated');
    }
    
    public function deletFromCart($product_id)
    {
       
        \Cart::remove(intval($product_id));

        $this->emit('cart_updated');
    }
}
