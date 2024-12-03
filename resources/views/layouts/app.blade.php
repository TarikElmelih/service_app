<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Dashboard</title>

    <!-- Google Fonts - Cairo -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Custom CSS for Color Scheme -->
    <style>
        :root {
            --primary-color: #1b7f64;  /* Primary */
            --secondary-color: #968c50;  /* Secondary */
            --accent-color: #168c6a;  /* Accent */
            --background-color: #f4f4f9;  /* Light Background Color */
        }

        /* Override Tailwind with custom colors */
        .bg-primary { background-color: var(--primary-color); }
        .bg-secondary { background-color: var(--secondary-color); }
        .bg-accent { background-color: var(--accent-color); }
        .bg-background { background-color: var(--background-color); }

        .text-primary { color: var(--primary-color); }
        .text-secondary { color: var(--secondary-color); }
        .text-accent { color: var(--accent-color); }
        .text-white-on-dark { color: white; }
        body{
            font-family: 'Cairo', sans-serif;
        }
    </style>
</head>
<body class="font-Cairo bg-background text-white">
    

    <!-- Sidebar and Dashboard Content -->
    <div class="flex h-screen">

        
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
              
                        {{ $header }}
                    
            @endisset

            <!-- Page Content -->
            <main>
               @yield('content')
            </main>
        </div>
  <!-- Mobile Menu Script -->
  <script>
        const menuToggle = document.getElementById('menu-toggle');
        const sidebar = document.querySelector('div.w-64');

        menuToggle.addEventListener('click', () => {
            sidebar.classList.toggle('hidden');
        });
    </script>
</body>
</html>
