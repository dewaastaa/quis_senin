<!DOCTYPE html>
<html lang="en" class="h-full bg-slate-50">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel 12 Web') - Laragon Web Practicum</title>
    
    <!-- Google Font: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Font Awesome Icons 6 CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#eef2ff',
                            100: '#e0e7ff',
                            500: '#6366f1',
                            600: '#4f46e5',
                            700: '#4338ca',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="flex flex-col min-h-screen text-slate-800 font-sans antialiased selection:bg-indigo-500 selection:text-white bg-slate-50">

    {{-- HEADER TERPISAH (Hanya muncul saat user sudah MASUK ke website) --}}
    @if (!request()->routeIs('welcome'))
        @include('layouts.header')
    @endif

    {{-- KONTEN UTAMA DARI SETIAP HALAMAN --}}
    <main class="{{ request()->routeIs('welcome') ? 'flex-grow flex items-center justify-center p-4 sm:p-8 w-full' : 'flex-grow py-8 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto w-full' }}">
        @yield('content')
    </main>

    {{-- FOOTER TERPISAH (Hanya muncul pada halaman dalam website) --}}
    @if (!request()->routeIs('welcome'))
        @include('layouts.footer')
    @endif

</body>
</html>
