<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('products.update', $product->id) }}">
                        @csrf
                        @method('PATCH')

                        <div class="mb-4">
                            <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2" for="name">
                                Product Name
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-black leading-tight focus:outline-none" id="name" name="name" type="text" value="{{ $product->name }}" required>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2" for="type">
                                Type
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-black leading-tight focus:outline-none" id="type" name="type" type="text" value="{{ $product->type }}" required>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2" for="price">
                                Price
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-black leading-tight focus:outline-none" id="price" name="price" type="number" step="0.01" value="{{ $product->price }}" required>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 dark:text-gray-300 text-sm font-bold mb-2" for="quantity">
                                Quantity
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-black leading-tight focus:outline-none" id="quantity" name="quantity" type="number" value="{{ $product->quantity }}" required>
                        </div>

                        <div class="flex items-center justify-between">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">
                                Update Product
                            </button>
                            <a href="{{ route('products.index') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
