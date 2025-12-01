<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formula 1 Hub - Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-gradient-to-b from-black via-neutral-900 to-black text-white">

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
                    <a href="/drivers" class="hover:text-red-400">Drivers</a>
                    <a href="/messages" class="hover:text-red-400">Messages</a>
                    <a href="/admin" class="hover:text-red-400">Admin</a>

                    <form action="/logout" method="POST" class="inline">
                        @csrf
                        <button class="text-red-500 hover:text-red-400">Logout</button>
                    </form>

                @else
                    <a href="/login" class="hover:text-red-400">Login</a>
                    <a href="/register" class="hover:text-red-400">Register</a>
                @endauth

            </div>
        </div>
    </nav>

    {{-- HERO --}}
    <section class="relative overflow-hidden py-32">
        <div class="absolute inset-0 opacity-20 bg-[url('/f1_pattern.svg')] bg-cover bg-center pointer-events-none"></div>

        <div class="relative container mx-auto px-4 text-center">
            <span class="inline-block bg-red-600/80 text-white px-4 py-1 text-sm rounded-full tracking-wider">
                Formula 1 Data Hub
            </span>

            <h1 class="mt-8 text-6xl md:text-7xl font-extrabold tracking-tight leading-tight">
                Dive Into the <span class="text-red-500">World of Speed</span>
            </h1>

            <p class="mt-6 text-lg md:text-xl text-gray-300 max-w-2xl mx-auto">
                The ultimate platform for Formula 1 statistics, results, drivers, constructors and more.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center mt-12">
                <a href="/database"
                   class="inline-flex items-center justify-center bg-red-600 hover:bg-red-700 text-white text-lg px-10 py-3 rounded-xl shadow-lg">
                    Start Exploring
                </a>

                <a href="/chart"
                   class="inline-flex items-center justify-center bg-white/10 hover:bg-white/20 text-white border border-white/20 text-lg px-10 py-3 rounded-xl">
                    View Charts
                </a>
            </div>
        </div>
    </section>

    {{-- FEATURES --}}
    <section class="py-24 bg-neutral-950">
        <div class="container mx-auto px-4">

            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-4">
                    Core Features
                </h2>
                <p class="text-gray-400 max-w-xl mx-auto">
                    The essential tools every Formula 1 enthusiast needs
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10 max-w-6xl mx-auto">

                {{-- Database Explorer --}}
                <div class="bg-neutral-900/60 border border-neutral-800 hover:border-red-600 transition-all duration-300 rounded-xl">
                    <div class="p-6">
                        <div class="w-14 h-14 text-3xl bg-neutral-800 rounded-xl flex items-center justify-center mb-4">
                            📊
                        </div>
                        <h3 class="text-xl font-semibold">Database Explorer</h3>
                        <p class="text-gray-400">
                            Browse drivers, races, circuits and results.
                        </p>
                    </div>
                    <div class="px-6 pb-6">
                        <a href="/database" class="text-red-500">Explore →</a>
                    </div>
                </div>

                {{-- Interactive Charts --}}
                <div class="bg-neutral-900/60 border border-neutral-800 hover:border-red-600 transition-all duration-300 rounded-xl">
                    <div class="p-6">
                        <div class="w-14 h-14 text-3xl bg-neutral-800 rounded-xl flex items-center justify-center mb-4">
                            📈
                        </div>
                        <h3 class="text-xl font-semibold">Interactive Charts</h3>
                        <p class="text-gray-400">
                            Visualize performance trends and race statistics.
                        </p>
                    </div>
                    <div class="px-6 pb-6">
                        <a href="/chart" class="text-red-500">Explore →</a>
                    </div>
                </div>

                {{-- CRUD Operations --}}
                <div class="bg-neutral-900/60 border border-neutral-800 hover:border-red-600 transition-all duration-300 rounded-xl">
                    <div class="p-6">
                        <div class="w-14 h-14 text-3xl bg-neutral-800 rounded-xl flex items-center justify-center mb-4">
                            ✏️
                        </div>
                        <h3 class="text-xl font-semibold">CRUD Operations</h3>
                        <p class="text-gray-400">
                            Manage and update database entries with ease.
                        </p>
                    </div>
                    <div class="px-6 pb-6">
                        <a href="/drivers" class="text-red-500">Explore →</a>
                    </div>
                </div>

                {{-- Messages --}}
                <div class="bg-neutral-900/60 border border-neutral-800 hover:border-red-600 transition-all duration-300 rounded-xl">
                    <div class="p-6">
                        <div class="w-14 h-14 text-3xl bg-neutral-800 rounded-xl flex items-center justify-center mb-4">
                            💬
                        </div>
                        <h3 class="text-xl font-semibold">Messages</h3>
                        <p class="text-gray-400">
                            Handle contact messages and user feedback.
                        </p>
                    </div>
                    <div class="px-6 pb-6">
                        <a href="/messages" class="text-red-500">Explore →</a>
                    </div>
                </div>

                {{-- Contact --}}
                <div class="bg-neutral-900/60 border border-neutral-800 hover:border-red-600 transition-all duration-300 rounded-xl">
                    <div class="p-6">
                        <div class="w-14 h-14 text-3xl bg-neutral-800 rounded-xl flex items-center justify-center mb-4">
                            📧
                        </div>
                        <h3 class="text-xl font-semibold">Contact</h3>
                        <p class="text-gray-400">
                            Get support or send feedback.
                        </p>
                    </div>
                    <div class="px-6 pb-6">
                        <a href="/contact" class="text-red-500">Explore →</a>
                    </div>
                </div>

                {{-- Admin --}}
                <div class="bg-neutral-900/60 border border-neutral-800 hover:border-red-600 transition-all duration-300 rounded-xl">
                    <div class="p-6">
                        <div class="w-14 h-14 text-3xl bg-neutral-800 rounded-xl flex items-center justify-center mb-4">
                            🔐
                        </div>
                        <h3 class="text-xl font-semibold">Admin Panel</h3>
                        <p class="text-gray-400">
                            Access admin tools and platform controls.
                        </p>
                    </div>
                    <div class="px-6 pb-6">
                        <a href="/admin" class="text-red-500">Explore →</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="py-24 bg-gradient-to-r from-red-600 to-red-700 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">Ready to Begin?</h2>
            <p class="text-lg text-red-100 max-w-xl mx-auto mb-10">
                Explore real race data, compare drivers and analyze performance like never before.
            </p>

            <a href="/database"
               class="inline-flex items-center justify-center bg-white text-red-700 font-bold text-lg px-10 py-3 rounded-xl shadow-lg hover:bg-gray-100">
                Get Started
            </a>
        </div>
    </section>

    {{-- FOOTER --}}
    <footer class="bg-black py-12 text-gray-400 text-center">
        <p>© 2025 Formula 1 Hub. All rights reserved.</p>
    </footer>

</body>
</html>
