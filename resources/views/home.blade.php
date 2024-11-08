<x-guest-layout>
    <div class="container mx-auto px-4">
        <!-- Banner Section -->
        <section class="relative bg-cover bg-center h-[400px] flex items-center justify-center text-white"
            style="background-image: url('{{ asset('images/banner.jpg') }}'); background-color: rgb(17 24 39 / var(--tw-bg-opacity));">
            <div class="absolute inset-0 bg-black opacity-40"></div> <!-- Dark overlay to improve text contrast -->
            <div class="text-center relative z-10">
                <h1 class="text-4xl font-bold md:text-5xl drop-shadow-lg">Welcome to UNeed-IT</h1>
                <p class="mt-2 text-lg md:text-xl">Ontdek onze uitgebreide diensten voor betrouwbare laptop- en PC-reparaties en upgrades</p>
            </div>
        </section>

        <!-- Introduction Section -->
        <section class="mt-12 text-center">
            <h2 class="text-3xl font-semibold text-white mb-4">Why Choose UNeed-IT?</h2>
            <p class="text-lg text-gray-300 max-w-3xl mx-auto">
                At UNeed-IT, we pride ourselves on providing high-quality laptop and PC repairs, custom builds, and upgrades. Whether you're dealing with hardware issues, software glitches, or just need an upgrade, we've got you covered. Our team of experienced technicians is dedicated to delivering fast, reliable, and affordable solutions tailored to your needs.
            </p>
        </section>

        <!-- Services Section -->
        <section class="mt-12">
            <h2 class="text-3xl font-semibold text-white text-center mb-8">Our Services</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-white">
                    <h3 class="text-xl font-semibold text-gray-200 mb-4">Laptop Repairs</h3>
                    <p class="text-gray-300">We provide professional laptop repair services to fix any issue with your laptop, from hardware to software repairs. Our expert technicians work fast to get your laptop back in working order.</p>
                </div>
                <!-- Service 2 -->
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-white">
                    <h3 class="text-xl font-semibold text-gray-200 mb-4">PC Upgrades</h3>
                    <p class="text-gray-300">Upgrade your PC with the latest hardware and software to boost its performance for work or gaming. Whether you need a faster processor, more RAM, or a new graphics card, we can help.</p>
                </div>
                <!-- Service 3 -->
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg text-white">
                    <h3 class="text-xl font-semibold text-gray-200 mb-4">Custom Builds</h3>
                    <p class="text-gray-300">Looking for a custom PC build? We design and assemble computers tailored to your specific needs and preferences, whether for gaming, video editing, or business use.</p>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="mt-12 bg-gray-900 py-12">
            <h2 class="text-3xl font-semibold text-white text-center mb-6">What Our Customers Say</h2>
            <div class="flex flex-col lg:flex-row items-center justify-center gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg max-w-xs mx-auto text-center">
                    <p class="text-gray-300 mb-4">"UNeed-IT helped me fix my laptop when it wouldn't turn on. Their service was quick, affordable, and effective. Highly recommend!"</p>
                    <p class="font-semibold text-gray-200">Jane Doe</p>
                    <p class="text-gray-400">Satisfied Customer</p>
                </div>
                <!-- Testimonial 2 -->
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg max-w-xs mx-auto text-center">
                    <p class="text-gray-300 mb-4">"I had a custom PC built by UNeed-IT for gaming. It runs like a dream. Great service and excellent attention to detail."</p>
                    <p class="font-semibold text-gray-200">John Smith</p>
                    <p class="text-gray-400">Gaming Enthusiast</p>
                </div>
                <!-- Testimonial 3 -->
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg max-w-xs mx-auto text-center">
                    <p class="text-gray-300 mb-4">"The team at UNeed-IT upgraded my desktop for work, and now it's faster than ever. I'm very impressed with their professionalism."</p>
                    <p class="font-semibold text-gray-200">Alice Johnson</p>
                    <p class="text-gray-400">Business Professional</p>
                </div>
            </div>
        </section>

        <!-- Call-to-Action Section -->
        <section class="mt-12 bg-blue-600 text-white py-12 text-center rounded-lg">
            <h2 class="text-3xl font-semibold mb-4">Ready to Get Started?</h2>
            <p class="text-lg mb-6">Whether you're in need of a repair, upgrade, or custom build, we're here to help. Get in touch today to discuss your needs!</p>
            <a href="{{ route('contact') }}" class="bg-white text-blue-600 px-6 py-3 rounded-lg font-semibold">Contact Us</a>
        </section>
    </div>
</x-guest-layout>
