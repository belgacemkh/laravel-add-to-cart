<div class="flex flex-wrap place-items-center">
  <section class="relative mx-auto">
      <!-- navbar -->
    <nav class="flex justify-between bg-gray-900 text-white w-screen">
      <div class="px-5 xl:px-12 py-6 flex w-full items-center">
        <a class="text-3xl font-bold font-heading" href="#">
          <!-- <img class="h-9" src="logo.png" alt="logo"> -->
          {{ __('Add to Cart: Demo') }}
        </a>
        <!-- Nav Links -->
        <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
          <li><a class="hover:text-gray-200" href="{{ route('products.index') }}">{{ __('Without livewire') }}</a></li>
          <li><a class="hover:text-gray-200" href="{{ route('products.indexWithLivewire') }}">{{ __('With livewire') }}</a></li>
        </ul>
        <!-- Header Icons -->
        <div class="hidden xl:flex items-center space-x-5 items-center">
          <a class="flex items-center hover:text-gray-200" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
            <span class="flex absolute mt-6 mb-20">
             
            ({{ Cart::getTotalQuantity() }})
               
              </span>
          </a>
        
        </div>
      </div>
      
    </nav>
    
  </section>
</div>