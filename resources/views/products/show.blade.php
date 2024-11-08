<x-guest-layout>

<div class="container mx-auto px-4 py-8">
    <div class="flex flex-col md:flex-row gap-8">
        <!-- Product Image -->
        <div class="md:w-1/2">
            <img src="{{ asset('storage/' . $product->image_path) }}" class="w-full h-auto object-cover rounded-lg" alt="{{ $product->name }}">
        </div>

        <!-- Product Details -->
        <div class="md:w-1/2">
            <h2 class="text-3xl font-semibold text-gray-800">{{ $product->name }}</h2>
            <p class="text-lg text-gray-600 mt-2">{{ $product->description }}</p>
            <p class="text-lg font-semibold text-gray-800 mt-4"><strong>Price:</strong> ${{ $product->price }}</p>
            <p class="text-lg font-semibold text-gray-800 mt-2"><strong>Quantity:</strong> {{ $product->quantity }}</p>
            <div class="mt-6">
                <a href="{{ route('products.index') }}" class="bg-gray-800 text-white py-2 px-6 rounded-lg hover:bg-gray-700 transition duration-300">
                    Back to Products
                </a>
            </div>
        </div>
    </div>
</div>

</x-guest-layout>
