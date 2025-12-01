<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - Formula 1 Hub</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-neutral-950 text-white min-h-screen">

    {{-- NAVBAR --}}
    @include('partials.navbar')

    {{-- HEADER --}}
    <section class="py-16 text-center">
        <h1 class="text-5xl font-extrabold mb-3">
            Admin <span class="text-red-500">Dashboard</span>
        </h1>
        <p class="text-gray-400 text-lg">Manage data, view statistics and control the platform</p>
    </section>

    <div class="max-w-7xl mx-auto px-6">

        {{-- STAT CARDS --}}
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-6 mb-16">

            {{-- USERS --}}
            <div class="bg-neutral-900 border border-neutral-800 rounded-xl p-6 shadow-lg">
                <h3 class="text-lg font-semibold text-gray-300">Users</h3>
                <p class="text-4xl font-extrabold mt-4 text-red-500">
                    {{ $stats['users'] }}
                </p>
            </div>

            {{-- DRIVERS --}}
            <div class="bg-neutral-900 border border-neutral-800 rounded-xl p-6 shadow-lg">
                <h3 class="text-lg font-semibold text-gray-300">Drivers</h3>
                <p class="text-4xl font-extrabold mt-4 text-red-500">
                    {{ $stats['drivers'] }}
                </p>
            </div>

            {{-- GP --}}
            <div class="bg-neutral-900 border border-neutral-800 rounded-xl p-6 shadow-lg">
                <h3 class="text-lg font-semibold text-gray-300">Grand Prix</h3>
                <p class="text-4xl font-extrabold mt-4 text-red-500">
                    {{ $stats['gp'] }}
                </p>
            </div>

            {{-- RESULTS --}}
            <div class="bg-neutral-900 border border-neutral-800 rounded-xl p-6 shadow-lg">
                <h3 class="text-lg font-semibold text-gray-300">Race Results</h3>
                <p class="text-4xl font-extrabold mt-4 text-red-500">
                    {{ $stats['results'] }}
                </p>
            </div>

            {{-- MESSAGES --}}
            <div class="bg-neutral-900 border border-neutral-800 rounded-xl p-6 shadow-lg">
                <h3 class="text-lg font-semibold text-gray-300">Messages</h3>
                <p class="text-4xl font-extrabold mt-4 text-red-500">
                    {{ $stats['messages'] }}
                </p>
            </div>

        </div>

        {{-- QUICK ACTIONS --}}
        <h2 class="text-3xl font-bold mb-6">Quick Actions</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            <a href="/database" class="block bg-neutral-900 border border-neutral-800 hover:border-red-600 transition rounded-xl p-6">
                <h3 class="text-xl font-semibold mb-2">Database Explorer</h3>
                <p class="text-gray-400">View drivers, races and results</p>
            </a>

            <a href="/crud" class="block bg-neutral-900 border border-neutral-800 hover:border-red-600 transition rounded-xl p-6">
                <h3 class="text-xl font-semibold mb-2">Driver CRUD</h3>
                <p class="text-gray-400">Add or edit driver data</p>
            </a>

            <a href="/messages" class="block bg-neutral-900 border border-neutral-800 hover:border-red-600 transition rounded-xl p-6">
                <h3 class="text-xl font-semibold mb-2">Messages</h3>
                <p class="text-gray-400">View or delete user messages</p>
            </a>

            <a href="/chart" class="block bg-neutral-900 border border-neutral-800 hover:border-red-600 transition rounded-xl p-6">
                <h3 class="text-xl font-semibold mb-2">Charts</h3>
                <p class="text-gray-400">Visual statistics and insights</p>
            </a>

            <a href="/contact" class="block bg-neutral-900 border border-neutral-800 hover:border-red-600 transition rounded-xl p-6">
                <h3 class="text-xl font-semibold mb-2">Contact</h3>
                <p class="text-gray-400">Send a message or get help</p>
            </a>

        </div>

    </div>

    {{-- FOOTER --}}
    <footer class="bg-black py-12 text-gray-400 text-center mt-20">
        <p>© 2025 Formula 1 Hub. All rights reserved.</p>
    </footer>

</body>
</html>
