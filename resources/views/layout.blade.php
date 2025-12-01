<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'F1 Hub' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-neutral-950 text-white min-h-screen">

    {{-- NAVBAR --}}
    <nav class="bg-neutral-900 border-b border-neutral-800 shadow-lg">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

            {{-- LOGO --}}
            <a href="/" class="text-2xl font-bold text-red-500 hover:text-red-400">
                F1 Hub
            </a>

            {{-- NAV ITEMS --}}
            <div class="flex gap-6 text-lg">

                <a href="/" class="hover:text-red-400">Home</a>
                <a href="/contact" class="hover:text-red-400">Contact</a>
                <a href="/chart" class="hover:text-red-400">Chart</a>

                @auth
                    {{-- Logged-in user links --}}
                    <a href="/drivers" class="hover:text-red-400">Drivers</a>
                    <a href="/messages" class="hover:text-red-400">Messages</a>
                    <a href="/admin" class="hover:text-red-400">Admin</a>

                    {{-- Logout --}}
                    <form action="/logout" method="POST" class="inline">
                        @csrf
                        <button class="text-red-500 hover:text-red-400">Logout</button>
                    </form>

                @else
                    {{-- Guest links --}}
                    <a href="/login" class="hover:text-red-400">Login</a>
                    <a href="/register" class="hover:text-red-400">Register</a>
                @endauth

            </div>
        </div>
    </nav>

    {{-- CONTENT --}}
    <main class="max-w-7xl mx-auto p-6">
        {{ $slot }}
    </main>

</body>
</html>
