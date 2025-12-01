<nav class="bg-neutral-900 border-b border-neutral-800 shadow-lg fixed w-full z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

        {{-- LOGO --}}
        <a href="/" class="text-2xl font-bold text-red-500 hover:text-red-400 transition">
            F1 Hub
        </a>

        {{-- NAV LINKS --}}
        <div class="hidden md:flex gap-6 text-lg">

            <a href="/" class="hover:text-red-400 transition">Home</a>
            <a href="/database" class="hover:text-red-400 transition">Database</a>
            <a href="/drivers" class="hover:text-red-400 transition">Drivers</a>
            <a href="/messages" class="hover:text-red-400 transition">Messages</a>
            <a href="/chart" class="hover:text-red-400 transition">Chart</a>
            <a href="/contact" class="hover:text-red-400 transition">Contact</a>

            @auth
                {{-- LOGOUT --}}
                <form action="/logout" method="POST">
                    @csrf
                    <button class="text-red-500 hover:text-red-400 transition">
                        Logout
                    </button>
                </form>
            @else
                {{-- GUEST LINKS --}}
                <a href="/login" class="hover:text-red-400 transition">Login</a>
                <a href="/register" class="hover:text-red-400 transition">Register</a>
            @endauth
        </div>

        {{-- MOBILE MENU BUTTON --}}
        <button id="mobileMenuBtn" class="md:hidden text-white text-3xl">
            ☰
        </button>

    </div>

    {{-- MOBILE MENU --}}
    <div id="mobileMenu" class="md:hidden bg-neutral-900 border-t border-neutral-800 hidden flex-col px-6 py-4 text-lg gap-4">

        <a href="/" class="hover:text-red-400 transition">Home</a>
        <a href="/database" class="hover:text-red-400 transition">Database</a>
        <a href="/drivers" class="hover:text-red-400 transition">Drivers</a>
        <a href="/messages" class="hover:text-red-400 transition">Messages</a>
        <a href="/chart" class="hover:text-red-400 transition">Chart</a>
        <a href="/contact" class="hover:text-red-400 transition">Contact</a>

        @auth
            <form action="/logout" method="POST">
                @csrf
                <button class="text-red-500 hover:text-red-400 transition">Logout</button>
            </form>
        @else
            <a href="/login" class="hover:text-red-400 transition">Login</a>
            <a href="/register" class="hover:text-red-400 transition">Register</a>
        @endauth
    </div>
</nav>

<script>
    // Mobile menu toggle
    document.getElementById("mobileMenuBtn").onclick = () => {
        document.getElementById("mobileMenu").classList.toggle("hidden");
    };
</script>
