<!DOCTYPE html>
<html lang="it" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Trains Dashboard')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        html, body {
            overflow-x: hidden;
            max-width: 100vw;
        }
    </style>
</head>
<body class="bg-base-200 min-h-screen text-base-content">

    {{-- Navbar DaisyUI --}}
    <div class="navbar bg-base-100 shadow-md sticky top-0 z-50">
        <div class="flex-1">
            <a href="{{ route('home') }}" class="btn btn-ghost normal-case text-xl">🚄 Laravel Treni</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="#">Treni</a></li>
                <li><a href="#">Contatti</a></li>
            </ul>
        </div>
    </div>

    {{-- Contenuto --}}
    <main class="w-full max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8 py-8 overflow-hidden">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="footer footer-center p-6 bg-base-300 text-base-content">
        <div>
            <p>Made with ❤️ by Laravel + TailwindCSS + DaisyUI</p>
        </div>
    </footer>

</body>
</html>
