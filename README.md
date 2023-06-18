## Laravel "Add to Cart": With/Without Livewire
Adding a product to cart, first with full page refresh, and then introducing Livewire to avoid that refresh.

## Install Laravel

## Install tailwinds

## Install Livewire

## Install Darryldecode Cart
composer require "darryldecode/cart"

### CONFIGURATION
Open config/app.php and add this line to your Service Providers Array.
Darryldecode\Cart\CartServiceProvider::class
Open config/app.php and add this line to your Aliases
  'Cart' => Darryldecode\Cart\Facades\CartFacade::class
Optional configuration file (useful if you plan to have full control)
php artisan vendor:publish --provider="Darryldecode\Cart\CartServiceProvider" --tag="config"

## Retrieve the quantity of products ordered

Cart::getContent()->count()

## To list the products added to the cart

\Cart::getContent()

## remove item from cart by id

\Cart::remove($itemId)

## add item to cart

\Cart::add([
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $request->quantity,
        ]);