<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Migration Seeder')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-base-200 min-h-screen">
    {{-- Navbar di esempio DaisyUI --}}
    <div class="navbar bg-base-100 shadow-md">
        <div class="flex-1">
            <a href="{{ route('home') }}" class="btn btn-ghost normal-case text-xl">🚂 Laravel Migration Seeder</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1">
                <li><a href="#">Home</a></li>
                <li><a href="#">Trains</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </div>
    </div>

    {{-- contenuto dinamico --}}
    <main class="container mx-auto px-6">
    @yield('content')
    </main>

    {{-- Footer di esempio DaisyUI --}}
    {{-- Footer di esempio --}}
    <footer class="footer footer-center p-4 bg-base-300 text-base-content">
        <p>Made with ❤️ in Laravel + DaisyUI</p>
    </footer>

</body>
</html>