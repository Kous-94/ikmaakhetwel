<x-guest-layout>
    <div class="container mx-auto px-4 py-6">

        <!-- Add Product Button: Visible only to logged-in users -->
        <!-- @auth
        <div class="mb-6">
            <a href="{{ route('products.create') }}" class="bg-blue-600 text-white font-semibold py-2 px-6 rounded-lg shadow-md hover:bg-blue-700 hover:shadow-lg transition duration-300">
                Add Product
            </a>
        </div>
        @endauth -->

        <!-- Check if there are no products and show a message -->
        @if ($products->isEmpty())
            <div class="bg-yellow-100 text-yellow-800 p-4 rounded-lg shadow-md">
                <p class="text-lg font-semibold">No products available at the moment.</p>
                <p>Please check back later or <a href="{{ route('products.create') }}" class="text-blue-600 hover:underline">add a product</a> if you're logged in.</p>
            </div>
        @else
            <!-- Grid Layout for Products -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

                <!-- Loop through each product and display its details -->
                @foreach ($products as $product)
                <div class="bg-white border rounded-lg shadow-xl hover:shadow-2xl transition duration-300 transform hover:scale-105">
                    <!-- Product Image -->
                    <!-- <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}" class="w-full h-48 object-cover rounded-t-lg"> -->
                    <img src="https://th.bing.com/th/id/OIP.JK-TAyqjDmXfxGvtDijnnAHaGS?w=201&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="{{ $product->name }}" class="w-full h-48 object-cover rounded-t-lg">

                    <div class="p-6">
                        <!-- Product Name -->
                        <h5 class="text-xl font-semibold text-gray-800 hover:text-blue-600 transition duration-300">{{ $product->name }}</h5>

                        <!-- Product Description -->
                        <p class="text-gray-600 mt-2 line-clamp-3">{{ $product->description }}</p>

                        <!-- Product Price and Quantity -->
                        <p class="text-gray-800 mt-4 font-semibold">Price: ${{ $product->price }}</p>
                        <p class="text-gray-500">Quantity: {{ $product->quantity }}</p>

                        <!-- View Product Button -->
                        <div class="mt-6">
                            <a href="{{ route('webshop.show', ['id' => $product->id]) }}" class="bg-blue-600 text-white py-2 px-6 rounded-lg shadow-md hover:bg-blue-700 hover:shadow-lg transition duration-300">
                                View Product
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        @endif

    </div>
</x-guest-layout>
