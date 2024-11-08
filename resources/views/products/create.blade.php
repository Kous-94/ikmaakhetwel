<x-guest-layout>
    <!-- Only allow access if user is logged in -->
    @auth
    <div class="container mx-auto p-6 mt-8"> <!-- Add margin-top here -->

        <!-- Form Container with Dark Background -->
        <div class="max-w-4xl mx-auto bg-gray-800 text-white p-8 rounded-lg shadow-xl">

            <!-- Heading -->
            <h2 class="text-3xl font-semibold text-gray-100 mb-8 text-center">Add Product</h2>
            
            <!-- Product Form -->
            <form method="POST" action="{{ route('products.store') }}">
                @csrf
                
                <!-- Product Name -->
                <div class="mb-6">
                    <label for="name" class="block text-gray-300 font-medium mb-2">Product Name</label>
                    <input type="text" id="name" name="name" class="w-full px-4 py-3 border border-gray-600 bg-gray-700 text-white rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter the product name" required>
                </div>
                
                <!-- Product Type -->
                <div class="mb-6">
                    <label for="type" class="block text-gray-300 font-medium mb-2">Product Type</label>
                    <input type="text" id="type" name="type" class="w-full px-4 py-3 border border-gray-600 bg-gray-700 text-white rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter the product type" required>
                </div>
                
                <!-- Product Description -->
                <div class="mb-6">
                    <label for="description" class="block text-gray-300 font-medium mb-2">Product Description</label>
                    <textarea id="description" name="description" rows="5" class="w-full px-4 py-3 border border-gray-600 bg-gray-700 text-white rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Describe the product" required></textarea>
                </div>

                <!-- Product Price -->
                <div class="mb-6">
                    <label for="price" class="block text-gray-300 font-medium mb-2">Price</label>
                    <input type="text" id="price" name="price" class="w-full px-4 py-3 border border-gray-600 bg-gray-700 text-white rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter the product price" required>
                </div>

                <!-- Product Quantity -->
                <div class="mb-6">
                    <label for="quantity" class="block text-gray-300 font-medium mb-2">Quantity</label>
                    <input type="number" id="quantity" name="quantity" class="w-full px-4 py-3 border border-gray-600 bg-gray-700 text-white rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter the product quantity" required>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full bg-blue-600 text-white py-3 px-4 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Add Product
                </button>
            </form>
        </div>
    </div>
    @else
    <!-- If the user is not authenticated, show this message -->
    <div class="container mx-auto p-6 mt-8">
        <div class="bg-red-100 text-red-800 p-4 rounded-lg shadow-md">
            <p>You need to be logged in to add a product. Please <a href="{{ route('login') }}" class="text-blue-600 hover:underline">login</a> first.</p>
        </div>
    </div>
    @endauth
</x-guest-layout>
