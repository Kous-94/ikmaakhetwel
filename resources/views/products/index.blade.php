<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-end mb-4">
                        <a href="{{ route('products.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Add Product
                        </a>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-100 dark:bg-gray-700">
                                <tr>
                                    <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Name</th>
                                    <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Type</th>
                                    <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Price</th>
                                    <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Quantity</th>
                                    <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                @foreach ($products as $product)
                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <td class="py-4 px-6 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">{{ $product->name }}</td>
                                        <td class="py-4 px-6 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">{{ $product->type }}</td>
                                        <td class="py-4 px-6 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">${{ number_format($product->price, 2) }}</td>
                                        <td class="py-4 px-6 whitespace-nowrap text-sm text-gray-900 dark:text-gray-200">{{ $product->quantity }}</td>
                                        <td class="py-4 px-6 whitespace-nowrap text-sm flex space-x-2">
                                            <a href="{{ route('products.show', $product->id) }}" class="text-blue-500 hover:text-blue-700">View</a>
                                            <a href="{{ route('products.edit', $product->id) }}" class="text-yellow-500 hover:text-yellow-700">Edit</a>
                                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500 hover:text-red-700" onclick="return confirm('Are you sure?');">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
