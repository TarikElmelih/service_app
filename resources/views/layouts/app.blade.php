<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Aleppo Services') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

    <!-- Scripts and Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-gray-50">
    <div class="min-h-screen flex flex-col">
        <!-- Navigation -->
        <nav class="bg-gradient-to-r from-[#1b7f64] to-[#168c6a] text-white shadow-lg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-20">
                    <!-- Logo and Brand -->
                    <div class="flex items-center gap-4">
                        <!-- Mobile menu button -->
                        <button type="button" class="lg:hidden p-2 rounded-md hover:bg-white/10 transition-colors" onclick="toggleMobileMenu()">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                            </svg>
                        </button>
                        
                        <!-- Logo -->
                        <a href="{{ route('home') }}" class="flex items-center gap-3 hover:opacity-90 transition-opacity">
                            <div class="relative">
                                <img src="{{ asset('images/aleppo-logo.png') }}" alt="Aleppo Services" class="h-12 w-18">                                
                            </div>
                            <div class="flex flex-col">
                                <span class="text-xl font-bold tracking-wide">Aleppo Services</span>
                                <span class="text-sm text-white/90 font-medium">خدمات حلب</span>
                            </div>
                        </a>
                    </div>

                    <!-- Desktop Navigation Links -->
                    <div class="hidden lg:flex items-center gap-6">
                        <a href="{{ route('home') }}" class="nav-link">الرئيسية</a>
                        <a href="{{ route('about') }}" class="nav-link">عن الموقع</a>
                        <a href="{{ route('contact') }}" class="nav-link">اتصل بنا</a>
                        
                        <div class="h-6 w-px bg-white/20 mx-2"></div>
                        
                        <a href="#" class="px-4 py-2 rounded-md text-sm font-medium hover:bg-white/10 transition-colors">
                            تسجيل الدخول
                        </a>
                        <a href="#" class="px-4 py-2 rounded-md text-sm font-medium bg-white text-[#1b7f64] hover:bg-white/90 transition-colors">
                            إنشاء حساب
                        </a>
                    </div>
                </div>
            </div>

            <!-- Mobile Navigation Menu -->
            <div id="mobile-menu" class="hidden lg:hidden">
                <div class="px-4 pt-2 pb-3 space-y-2 bg-white/5">
                    <a href="{{ route('home') }}" class="mobile-nav-link">الرئيسية</a>
                    <a href="{{ route('about') }}" class="mobile-nav-link">عن الموقع</a>
                    <a href="{{ route('contact') }}" class="mobile-nav-link">اتصل بنا</a>
                    <div class="h-px bg-white/10 my-2"></div>
                    <a href="#" class="mobile-nav-link">تسجيل الدخول</a>
                    <a href="#" class="mobile-nav-link bg-white/10">إنشاء حساب</a>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <main class="flex-1">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="bg-[#010101] text-white py-6">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <p class="text-sm">&copy; {{ date('Y') }} Aleppo Services. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>

    <!-- Flash Messages -->
    @if (session()->has('success'))
        <div id="flash-message" class="fixed bottom-4 right-4 bg-[#168c6a] text-white px-6 py-3 rounded-lg shadow-lg">
            {{ session('success') }}
        </div>
    @endif

    @if (session()->has('error'))
        <div id="flash-message" class="fixed bottom-4 right-4 bg-red-500 text-white px-6 py-3 rounded-lg shadow-lg">
            {{ session('error') }}
        </div>
    @endif

    <script>
        // Mobile menu toggle
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }

        // Flash message
        setTimeout(() => {
            const flashMessage = document.getElementById('flash-message');
            if (flashMessage) {
                flashMessage.style.display = 'none';
            }
        }, 3000);
    </script>

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
</body>
</html>
