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

Cart::getTotalQuantity()

## To list the products added to the cart

$cart = \Cart::getContent();