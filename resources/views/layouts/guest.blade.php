<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <!-- Navbar Component -->
    <nav class="bg-gray-900 text-white fixed w-full z-50 shadow-md">
        <div class="container mx-auto flex items-center justify-between px-4 py-3">
            <!-- Logo -->
            <a href="{{ url('/') }}" class="flex items-center space-x-2">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-32 h-auto">
            </a>

            <!-- Hamburger Button for Mobile -->
            <button id="navbar-toggler" class="lg:hidden text-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" aria-expanded="false">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>

            <!-- Navbar Links -->
            <div id="navbar-links" class="hidden lg:flex lg:items-center lg:space-x-4">
                <a href="{{ route('over-ons') }}" class="hover:text-indigo-400 
        @if(request()->routeIs('over-ons')) text-indigo-500 font-semibold @endif">
                    Over Ons
                </a>
                <a href="{{ route('products.index') }}" class="hover:text-indigo-400 
        @if(request()->routeIs('products.index')) text-indigo-500 font-semibold @endif">
                    Webshop
                </a>
                <a href="{{ route('service') }}" class="hover:text-indigo-400 
        @if(request()->routeIs('service')) text-indigo-500 font-semibold @endif">
                    Service
                </a>
                <a href="{{ route('it-nieuws') }}" class="hover:text-indigo-400 
        @if(request()->routeIs('it-nieuws')) text-indigo-500 font-semibold @endif">
                    IT Nieuws
                </a>
                <a href="{{ route('reparaties') }}" class="hover:text-indigo-400 
        @if(request()->routeIs('reparaties')) text-indigo-500 font-semibold @endif">
                    Reparaties
                </a>
                <a href="{{ route('contact') }}" class="hover:text-indigo-400 
        @if(request()->routeIs('contact')) text-indigo-500 font-semibold @endif">
                    Contact
                </a>

                <!-- Authentication Links -->
                @guest
                <a href="{{ route('login') }}" class="hover:text-indigo-400 
        @if(request()->routeIs('login')) text-indigo-500 font-semibold @endif">
                    Login
                </a>
                @else
                <a href="{{ route('logout') }}" class="hover:text-red-400"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
                @endguest
            </div>

        </div>
    </nav>

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
        {{ $slot }}
    </div>

    <!-- Footer Component -->
    <footer class="bg-gray-900 text-gray-300 py-4 text-center">
        <div class="container mx-auto">
            <p>&copy; 2024 ikmaakhetwel. All Rights Reserved.</p>
        </div>
    </footer>


</body>

</html>