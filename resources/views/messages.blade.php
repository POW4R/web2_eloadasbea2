<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Messages - Formula 1 Hub</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-neutral-950 text-white min-h-screen">

    {{-- NAVBAR --}}
    @include('partials.navbar')

    {{-- HEADER --}}
    <section class="py-16 text-center">
        <h1 class="text-5xl font-extrabold mb-4">
            Contact <span class="text-red-500">Messages</span>
        </h1>
        <p class="text-gray-400 text-lg">All messages submitted by users</p>
    </section>

    <div class="max-w-7xl mx-auto px-6">

        @if (session('success'))
            <div class="bg-green-600 text-white px-6 py-3 rounded-xl mb-6 text-center">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto rounded-xl border border-neutral-800 bg-neutral-900 shadow-lg mb-20">
            <table class="w-full">
                <thead class="bg-neutral-800 text-gray-300 uppercase text-sm">
                    <tr>
                        <th class="py-3 px-4">ID</th>
                        <th class="py-3 px-4">Name</th>
                        <th class="py-3 px-4">Email</th>
                        <th class="py-3 px-4">Subject</th>
                        <th class="py-3 px-4">Message</th>
                        <th class="py-3 px-4">Date</th>
                        <th class="py-3 px-4">Actions</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-neutral-800">

                    @foreach ($messages as $msg)
                        <tr class="hover:bg-neutral-800/40 transition">

                            <td class="py-3 px-4">{{ $msg->id }}</td>
                            <td class="py-3 px-4 font-semibold">{{ $msg->name }}</td>
                            <td class="py-3 px-4">{{ $msg->email }}</td>
                            <td class="py-3 px-4">{{ $msg->subject }}</td>

                            <td class="py-3 px-4 max-w-xs text-ellipsis overflow-hidden">
                                {{ $msg->message }}
                            </td>

                            <td class="py-3 px-4">
                                {{ $msg->created_at }}
                            </td>

                            <td class="py-3 px-4">

                                {{-- DELETE --}}
                                <form action="{{ route('messages.delete', $msg->id) }}"
                                      method="POST"
                                      onsubmit="return confirm('Are you sure you want to delete this message?');">
                                    @csrf
                                    @method('DELETE')

                                    <button class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg">
                                        Delete
                                    </button>
                                </form>

                            </td>

                        </tr>
                    @endforeach

                </tbody>

            </table>
        </div>

    </div>

    {{-- FOOTER --}}
    <footer class="bg-black py-12 text-gray-400 text-center">
        <p>© 2025 Formula 1 Hub. All rights reserved.</p>
    </footer>

</body>
</html>
