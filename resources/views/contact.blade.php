<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact - Formula 1 Hub</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-neutral-950 text-white min-h-screen">

    {{-- NAVBAR --}}
    @include('partials.navbar')

    <section class="py-16 text-center">
        <h1 class="text-5xl font-extrabold mb-4">
            Contact <span class="text-red-500">Us</span>
        </h1>
        <p class="text-gray-400 text-lg">Send us a message, suggestion or feedback</p>
    </section>

    <div class="max-w-xl mx-auto bg-neutral-900 p-8 rounded-xl border border-neutral-800 shadow-lg">

        @if (session('success'))
            <div class="bg-green-600 text-white px-6 py-3 rounded-xl mb-4 text-center">
                {{ session('success') }}
            </div>
        @endif

        <form action="/contact" method="POST" class="space-y-6">
            @csrf

            <div>
                <label class="block mb-1 text-gray-300">Your Name</label>
                <input type="text" name="name" class="w-full bg-neutral-800 rounded-xl px-4 py-3" required>
            </div>

            <div>
                <label class="block mb-1 text-gray-300">Your Email</label>
                <input type="email" name="email" class="w-full bg-neutral-800 rounded-xl px-4 py-3" required>
            </div>

            <div>
                <label class="block mb-1 text-gray-300">Subject</label>
                <input type="text" name="subject" class="w-full bg-neutral-800 rounded-xl px-4 py-3" required>
            </div>

            <div>
                <label class="block mb-1 text-gray-300">Message</label>
                <textarea name="message" rows="5" class="w-full bg-neutral-800 rounded-xl px-4 py-3" required></textarea>
            </div>

            <button class="w-full bg-red-600 hover:bg-red-700 text-white py-3 rounded-xl font-semibold">
                Send Message
            </button>

        </form>

    </div>

    <footer class="bg-black py-12 text-gray-400 text-center mt-20">
        <p>© 2025 Formula 1 Hub. All rights reserved.</p>
    </footer>

</body>
</html>
