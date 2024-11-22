<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Product Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mb-6">
                        <h3 class="text-2xl font-bold">{{ $product->name }}</h3>
                        <p class="text-gray-600 dark:text-gray-400 mt-2">{{ $product->description }}</p>
                    </div>

                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div>
                            <strong class="block text-gray-700 dark:text-gray-300">Type:</strong>
                            <span class="text-gray-900 dark:text-gray-100">{{ $product->type }}</span>
                        </div>

                        <div>
                            <strong class="block text-gray-700 dark:text-gray-300">Price:</strong>
                            <span class="text-gray-900 dark:text-gray-100">${{ number_format($product->price, 2) }}</span>
                        </div>

                        <div>
                            <strong class="block text-gray-700 dark:text-gray-300">Quantity:</strong>
                            <span class="text-gray-900 dark:text-gray-100">{{ $product->quantity }}</span>
                        </div>
                    </div>

                    <div class="flex justify-between items-center">
                        <a href="{{ route('products.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                            Back to Products
                        </a>
                        <a href="{{ route('products.edit', $product->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Edit Product
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
