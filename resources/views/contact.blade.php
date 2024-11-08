<x-guest-layout>
    <div class="container mx-auto px-4 py-8">
        <!-- Page Title -->
        <h2 class="text-3xl font-semibold text-white mb-6">Contact Us</h2>

        <!-- Success Message -->
        @if(session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        <!-- Contact Form -->
        <form method="POST" action="{{ route('contact.send') }}" class="bg-gray-800 p-6 rounded-lg shadow-lg">
            @csrf
            <!-- Name Field -->
            <div class="mb-4">
                <label for="name" class="block text-white text-lg font-medium mb-2">Name</label>
                <input type="text" id="name" name="name" class="w-full px-4 py-2 bg-gray-700 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Email Field -->
            <div class="mb-4">
                <label for="email" class="block text-white text-lg font-medium mb-2">Email Address</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 bg-gray-700 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <!-- Phone Field -->
            <div class="mb-4">
                <label for="phone" class="block text-white text-lg font-medium mb-2">Phone Number</label>
                <input type="text" id="phone" name="phone" class="w-full px-4 py-2 bg-gray-700 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Message Field -->
            <div class="mb-6">
                <label for="message" class="block text-white text-lg font-medium mb-2">Message</label>
                <textarea id="message" name="message" rows="5" class="w-full px-4 py-2 bg-gray-700 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="w-full py-3 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Submit</button>
        </form>
    </div>
</x-guest-layout>
