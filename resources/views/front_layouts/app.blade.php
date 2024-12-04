<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>خريطة خدمات OSM</title>

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    <!-- Tailwind CSS (CDN version) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap');

        :root {
            --primary-color: #1b7f64;  /* Primary */
            --secondary-color: #968c50;  /* Secondary */
            --accent-color: #168c6a;  /* Accent */
            --background-color: #f4f4f9;  /* Light Background Color */
        }

        body, button, input, select, textarea {
            font-family: 'Cairo', sans-serif;
        }

        #map { height: 500px; }
        .leaflet-popup-content { font-size: 14px; }

        .bg-primary { background-color: var(--primary-color); }
        .bg-secondary { background-color: var(--secondary-color); }
        .bg-accent { background-color: var(--accent-color); }
        .bg-background { background-color: var(--background-color); }

        .text-primary { color: var(--primary-color); }
        .text-secondary { color: var(--secondary-color); }
        .text-accent { color: var(--accent-color); }
    </style>
</head>
<body class="bg-background" dir="rtl">

    <!-- Navbar -->
    <nav class="bg-primary text-white p-4">
        <div class="max-w-screen-xl mx-auto flex items-center justify-between">
            <div class="text-lg font-bold">خريطة خدمات OSM</div>
            
            <!-- Navbar Links -->
            <div class="hidden md:flex space-x-6">
                <a href="#home" class="hover:text-accent">الرئيسية</a>
                <a href="#about" class="hover:text-accent">عن التطبيق</a>
                <a href="{{ route('contacts.index') }}" class="hover:text-accent">اتصل بنا</a>
            </div>

            <!-- Hamburger Icon for mobile -->
            <div class="md:hidden">
                <button id="hamburger" class="text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="md:hidden hidden bg-primary text-white p-4 space-y-4">
            <a href="#home" class="block hover:text-accent">الرئيسية</a>
            <a href="#about" class="block hover:text-accent">عن التطبيق</a>
            <a href="#contact" class="block hover:text-accent">اتصل بنا</a>
        </div>
    </nav>
    
    @yield('content')



    </body>
</html>
