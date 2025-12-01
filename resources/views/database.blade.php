<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Database Explorer - Formula 1 Hub</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-neutral-950 text-white min-h-screen">

    {{-- NAVBAR --}}
    @include('partials.navbar')

    <section class="py-16 text-center">
        <h1 class="text-5xl font-extrabold mb-4">
            Database <span class="text-red-500">Explorer</span>
        </h1>
        <p class="text-gray-400 text-lg">Drivers, Grand Prix events és eredmények listázása</p>
    </section>

    <div class="max-w-7xl mx-auto px-6">

        {{-- DRIVERS TABLE --}}
        <div class="mb-20">
            <h2 class="text-3xl font-bold mb-6">Drivers</h2>

            <div class="overflow-x-auto rounded-xl border border-neutral-800 bg-neutral-900 shadow-lg">
                <table class="w-full">
                    <thead class="bg-neutral-800 text-gray-300 uppercase text-sm">
                        <tr>
                            <th class="py-3 px-4">ID</th>
                            <th class="py-3 px-4">Name</th>
                            <th class="py-3 px-4">Sex</th>
                            <th class="py-3 px-4">Birth Date</th>
                            <th class="py-3 px-4">Country</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-neutral-800">
                        @foreach ($drivers as $driver)
                            <tr class="hover:bg-neutral-800/40 transition">
                                <td class="py-3 px-4">{{ $driver->id }}</td>
                                <td class="py-3 px-4">{{ $driver->name }}</td>
                                <td class="py-3 px-4">{{ $driver->sex }}</td>
                                <td class="py-3 px-4">{{ $driver->birthDate }}</td>
                                <td class="py-3 px-4">{{ $driver->country }}</td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>

        {{-- GP TABLE --}}
        <div class="mb-20">
            <h2 class="text-3xl font-bold mb-6">Grand Prix Events</h2>

            <div class="overflow-x-auto rounded-xl border border-neutral-800 bg-neutral-900 shadow-lg">
                <table class="w-full">
                    <thead class="bg-neutral-800 text-gray-300 uppercase text-sm">
                        <tr>
                            <th class="py-3 px-4">Date</th>
                            <th class="py-3 px-4">Name</th>
                            <th class="py-3 px-4">Country</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-neutral-800">
                        @foreach ($gps as $gp)
                            <tr class="hover:bg-neutral-800/40 transition">
                                <td class="py-3 px-4">{{ $gp->date }}</td>
                                <td class="py-3 px-4">{{ $gp->name }}</td>
                                <td class="py-3 px-4">{{ $gp->country }}</td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>

        {{-- RESULTS TABLE --}}
        <div class="mb-20">
            <h2 class="text-3xl font-bold mb-6">Race Results</h2>

            <div class="overflow-x-auto rounded-xl border border-neutral-800 bg-neutral-900 shadow-lg">
                <table class="w-full">
                    <thead class="bg-neutral-800 text-gray-300 uppercase text-sm">
                        <tr>
                            <th class="py-3 px-4">ID</th>
                            <th class="py-3 px-4">Driver</th>
                            <th class="py-3 px-4">GP</th>
                            <th class="py-3 px-4">Position</th>
                            <th class="py-3 px-4">Mistake</th>
                            <th class="py-3 px-4">Team</th>
                            <th class="py-3 px-4">Type</th>
                            <th class="py-3 px-4">Engine</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-neutral-800">
                        @foreach ($results as $result)
                            <tr class="hover:bg-neutral-800/40 transition">
                                <td class="py-3 px-4">{{ $result->id }}</td>
                                <td class="py-3 px-4">{{ $result->driver->name }}</td>
                                <td class="py-3 px-4">{{ $result->gp->name }}</td>
                                <td class="py-3 px-4">{{ $result->position ?? '-' }}</td>
                                <td class="py-3 px-4">{{ $result->mistake ?? '-' }}</td>
                                <td class="py-3 px-4">{{ $result->team ?? '-' }}</td>
                                <td class="py-3 px-4">{{ $result->type ?? '-' }}</td>
                                <td class="py-3 px-4">{{ $result->engine ?? '-' }}</td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>

    </div>

    <footer class="bg-black py-12 text-gray-400 text-center mt-20">
        <p>© 2025 Formula 1 Hub. All rights reserved.</p>
    </footer>

</body>
</html>
