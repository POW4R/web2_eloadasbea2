<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Driver - Formula 1 Hub</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-neutral-950 text-white min-h-screen">

    {{-- NAVBAR --}}
    @include('partials.navbar')

    <section class="py-12 text-center">
        <h1 class="text-5xl font-extrabold">Add <span class="text-red-500">Driver</span></h1>
    </section>

    <div class="max-w-xl mx-auto bg-neutral-900 p-8 rounded-xl border border-neutral-800 shadow-lg">

        <form action="{{ route('drivers.store') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label class="block mb-1 text-gray-300">Name</label>
                <input type="text" name="name" class="w-full bg-neutral-800 rounded-xl px-4 py-3" required>
            </div>

            <div>
                <label class="block mb-1 text-gray-300">Sex</label>
                <select name="sex" class="w-full bg-neutral-800 rounded-xl px-4 py-3" required>
                    <option value="">Select</option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                </select>
            </div>

            <div>
                <label class="block mb-1 text-gray-300">Birth Date</label>
                <input type="date" name="birthDate" class="w-full bg-neutral-800 rounded-xl px-4 py-3" required>
            </div>

            <div>
                <label class="block mb-1 text-gray-300">Country</label>
                <input type="text" name="country" class="w-full bg-neutral-800 rounded-xl px-4 py-3" required>
            </div>

            <button class="w-full bg-red-600 hover:bg-red-700 text-white py-3 rounded-xl">
                Create Driver
            </button>

        </form>

    </div>

</body>
</html>
