<div class="w-80 bg-white shadow rounded">
    <div
      class="h-48 w-full bg-gray-200 flex flex-col justify-between p-4 bg-cover bg-center"
      style="background-image: url('{{ $product->image }}')"
    >
      <div class="flex justify-between">
        
      </div>
      <div>
    <span
      class="uppercase text-xs bg-green-50 p-0.5 border-green-500 border rounded text-green-700 font-medium select-none"
    >
      available
    </span>
      </div>
    </div>
    <div class="p-4 flex flex-col items-center">
      
      <h1 class="text-gray-800 text-center mt-1">{{ $product->name }}</h1>
      <p class="text-center text-gray-800 mt-1">${{ $product->price }}</p>
      
        <a href="{{ route('product.show', $product) }}" 
        class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50 mt-4 w-full flex items-center justify-center">
        View Product
        </a>
        
      <button
        class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50 mt-4 w-full flex items-center justify-center"
      >
        Add to order
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-6 w-6 ml-2"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"
          />
        </svg>
      </button>
      <div class="flex justify-between w-full mt-4">
      </div>
    </div>
  </div>