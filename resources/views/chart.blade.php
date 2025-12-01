<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chart - F1 Hub</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-neutral-950 text-white min-h-screen p-10">

    <h1 class="text-4xl font-bold text-center mb-10">Formula 1 Results Chart</h1>

    <div class="max-w-4xl mx-auto bg-neutral-900 p-8 rounded-xl shadow-lg border border-neutral-800">

        <canvas id="resultsChart" height="120"></canvas>

    </div>

    <script>
        // GP labels (X axes)
        const labels = [
            @foreach($gps as $gp)
                "{{ $gp->name }}",
            @endforeach
        ];

        // Collect drivers & their positions
        const rawResults = @json($results);

        // Group results by driver
        let driverData = {};

        rawResults.forEach(r => {
            if (!driverData[r.driverId]) driverData[r.driverId] = [];
            driverData[r.driverId].push(r.position ?? null);
        });

        // Create datasets for Chart.js
        const datasets = Object.keys(driverData).map((driverId, i) => {
            return {
                label: "Driver " + driverId,
                data: driverData[driverId],
                borderColor: `hsl(${i * 50}, 100%, 50%)`,
                backgroundColor: `hsl(${i * 50}, 100%, 60%)`,
                borderWidth: 2,
            };
        });

        // Create the chart
        const ctx = document.getElementById('resultsChart').getContext('2d');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: datasets,
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        labels: { color: 'white' }
                    }
                },
                scales: {
                    x: {
                        ticks: { color: 'white' }
                    },
                    y: {
                        beginAtZero: true,
                        ticks: { color: 'white' }
                    }
                }
            }
        });
    </script>

</body>
</html>
