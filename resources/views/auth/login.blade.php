<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Formula 1 Hub</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-neutral-950 text-white min-h-screen">

    {{-- NAVBAR --}}
    @include('partials.navbar')

    {{-- HEADER --}}
    <section class="py-20 text-center">
        <h1 class="text-5xl font-extrabold mb-4">
            Login <span class="text-red-500">to F1 Hub</span>
        </h1>
        <p class="text-gray-400 text-lg">Access your account and explore more features</p>
    </section>

    {{-- LOGIN CARD --}}
    <div class="max-w-md mx-auto bg-neutral-900 p-10 rounded-xl border border-neutral-800 shadow-lg">

        @if (session('error'))
            <div class="bg-red-600 text-white px-6 py-3 rounded-xl mb-6 text-center">
                {{ session('error') }}
            </div>
        @endif

        <form action="/login" method="POST" class="space-y-6">
            @csrf

            {{-- EMAIL --}}
            <div>
                <label class="block mb-1 text-gray-300">Email</label>
                <input type="email" name="email"
                       class="w-full bg-neutral-800 rounded-xl px-4 py-3"
                       placeholder="example@email.com"
                       required>
            </div>

            {{-- PASSWORD --}}
            <div>
                <label class="block mb-1 text-gray-300">Password</label>
                <input type="password" name="password"
                       class="w-full bg-neutral-800 rounded-xl px-4 py-3"
                       placeholder="••••••••"
                       required>
            </div>

            {{-- SUBMIT --}}
            <button class="w-full bg-red-600 hover:bg-red-700 text-white py-3 rounded-xl font-semibold">
                Login
            </button>

        </form>

        <p class="text-center text-gray-400 mt-6">
            Don't have an account?
            <a href="/register" class="text-red-500 hover:text-red-400">Register here</a>
        </p>

    </div>

    {{-- FOOTER --}}
    <footer class="bg-black py-12 text-gray-400 text-center mt-20">
        <p>© 2025 Formula 1 Hub. All rights reserved.</p>
    </footer>

</body>
</html>
