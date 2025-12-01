<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Drivers - Formula 1 Hub</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-neutral-950 text-white min-h-screen">

    {{-- NAVBAR --}}
    @include('partials.navbar')

    <section class="py-12 text-center">
        <h1 class="text-5xl font-extrabold">Drivers <span class="text-red-500">List</span></h1>
        <a href="{{ route('drivers.create') }}"
           class="mt-6 inline-block bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-xl shadow">
            Add New Driver
        </a>
    </section>

    <div class="max-w-6xl mx-auto px-6 mt-10">
        <div class="overflow-x-auto rounded-xl border border-neutral-800 bg-neutral-900 shadow-lg">
            <table class="w-full">
                <thead class="bg-neutral-800 text-gray-300 uppercase text-sm">
                    <tr>
                        <th class="py-3 px-4">ID</th>
                        <th class="py-3 px-4">Name</th>
                        <th class="py-3 px-4">Sex</th>
                        <th class="py-3 px-4">Birth Date</th>
                        <th class="py-3 px-4">Country</th>
                        <th class="py-3 px-4">Actions</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-neutral-800">
                    @foreach($drivers as $driver)
                        <tr class="hover:bg-neutral-800/40 transition">
                            <td class="py-3 px-4">{{ $driver->id }}</td>
                            <td class="py-3 px-4">{{ $driver->name }}</td>
                            <td class="py-3 px-4">{{ $driver->sex }}</td>
                            <td class="py-3 px-4">{{ $driver->birthDate }}</td>
                            <td class="py-3 px-4">{{ $driver->country }}</td>
                            <td class="py-3 px-4 flex gap-3">

                                <a href="{{ route('drivers.edit', $driver->id) }}"
                                   class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
                                    Edit
                                </a>

                                <form action="{{ route('drivers.delete', $driver->id) }}"
                                      method="POST"
                                      onsubmit="return confirm('Delete this driver?');">
                                    @csrf
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

</body>
</html>
