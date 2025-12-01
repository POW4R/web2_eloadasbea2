<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - Formula 1 Hub</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-neutral-950 text-white min-h-screen">

    {{-- NAVBAR --}}
    @include('partials.navbar')

    {{-- HEADER --}}
    <section class="py-20 text-center">
        <h1 class="text-5xl font-extrabold mb-4">
            Create <span class="text-red-500">Account</span>
        </h1>
        <p class="text-gray-400 text-lg">Join the Formula 1 Hub community</p>
    </section>

    {{-- REGISTER CARD --}}
    <div class="max-w-md mx-auto bg-neutral-900 p-10 rounded-xl border border-neutral-800 shadow-lg">

        {{-- VALIDATION ERRORS --}}
        @if ($errors->any())
            <div class="bg-red-600 text-white px-6 py-3 rounded-xl mb-6">
                <ul class="list-disc list-inside text-sm">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- SUCCESS --}}
        @if (session('success'))
            <div class="bg-green-600 text-white px-6 py-3 rounded-xl mb-6 text-center">
                {{ session('success') }}
            </div>
        @endif

        <form action="/register" method="POST" class="space-y-6">
            @csrf

            {{-- EMAIL --}}
            <div>
                <label class="block mb-1 text-gray-300">Email</label>
                <input type="email" name="email"
                       class="w-full bg-neutral-800 rounded-xl px-4 py-3"
                       placeholder="you@example.com"
                       required>
            </div>

            {{-- PASSWORD --}}
            <div>
                <label class="block mb-1 text-gray-300">Password</label>
                <input type="password" name="password"
                       class="w-full bg-neutral-800 rounded-xl px-4 py-3"
                       placeholder="Minimum 6 characters"
                       required>
            </div>

            {{-- PASSWORD CONFIRM --}}
            <div>
                <label class="block mb-1 text-gray-300">Confirm Password</label>
                <input type="password" name="password_confirmation"
                       class="w-full bg-neutral-800 rounded-xl px-4 py-3"
                       placeholder="Repeat your password"
                       required>
            </div>

            {{-- SUBMIT --}}
            <button class="w-full bg-red-600 hover:bg-red-700 text-white py-3 rounded-xl font-semibold">
                Register
            </button>

        </form>

        <p class="text-center text-gray-400 mt-6">
            Already have an account?
            <a href="/login" class="text-red-500 hover:text-red-400">Login here</a>
        </p>

    </div>

    {{-- FOOTER --}}
    <footer class="bg-black py-12 text-gray-400 text-center mt-20">
        <p>© 2025 Formula 1 Hub. All rights reserved.</p>
    </footer>

</body>
</html>
