<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Driver - Formula 1 Hub</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-neutral-950 text-white min-h-screen">

    {{-- NAVBAR --}}
    @include('partials.navbar')

    <section class="py-12 text-center">
        <h1 class="text-5xl font-extrabold">
            Edit <span class="text-red-500">{{ $driver->name }}</span>
        </h1>
    </section>

    <div class="max-w-xl mx-auto bg-neutral-900 p-8 rounded-xl border border-neutral-800 shadow-lg">

        <form action="{{ route('drivers.update', $driver->id) }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label class="block mb-1 text-gray-300">Name</label>
                <input type="text" name="name" value="{{ $driver->name }}"
                       class="w-full bg-neutral-800 rounded-xl px-4 py-3">
            </div>

            <div>
                <label class="block mb-1 text-gray-300">Sex</label>
                <select name="sex" class="w-full bg-neutral-800 rounded-xl px-4 py-3">
                    <option value="M" @selected($driver->sex == 'M')>Male</option>
                    <option value="F" @selected($driver->sex == 'F')>Female</option>
                </select>
            </div>

            <div>
                <label class="block mb-1 text-gray-300">Birth Date</label>
                <input type="date" name="birthDate" value="{{ $driver->birthDate }}"
                       class="w-full bg-neutral-800 rounded-xl px-4 py-3">
            </div>

            <div>
                <label class="block mb-1 text-gray-300">Country</label>
                <input type="text" name="country" value="{{ $driver->country }}"
                       class="w-full bg-neutral-800 rounded-xl px-4 py-3">
            </div>

            <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-xl">
                Save Changes
            </button>

        </form>

    </div>

</body>
</html>
