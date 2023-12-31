@extends('layouts.app')

@section('content')
<div class="mb-4 px-4 py-3 leading-normal text-blue-700 bg-blue-100 rounded-lg text-right" role="alert">
    <i class="fa fa-shopping-cart"></i>
    Cart ({{ Cart::getContent()->count() }})
</div>
 @if(session('message'))
    <div>{{ session('message') }}</div>
 @endif  
<table class="table min-w-full">
    <thead>
    <tr>
        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Name</th>
        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider">Price</th>
        <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm leading-4 tracking-wider"></th>
    </tr>
    </thead>
    <tbody>
    @forelse ($products as $product)
        <tr>
            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">
                {{ $product->name }}
            </td>
            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">
                ${{ number_format($product->price / 100, 2) }}
            </td>
            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5">
                @if($cart->where('id', $product->id)->count())
                    <form  action="{{ route('cart.delete') }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <button type="submit"
                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                        {!! '&#128686;' !!} Remove from Cart
                        </button>
                    </form>
                @else
                    <form  action="{{ route('cart.store') }}" method="post">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="number" name="quantity" value="1" min="1"
                        class="text-sm sm:text-base px-2 pr-2 rounded-lg border border-gray-400 py-1 focus:outline-none focus:border-blue-400"
                        style="width: 50px"/>
                        <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Add to Cart
                        </button>
                    </form>
                @endif
                    
            </td>
        </tr>
    @empty
        <tr>
            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-sm leading-5" colspan="3">No
                products found.
            </td>
        </tr>
    @endforelse
    </tbody>
</table>

@endsection