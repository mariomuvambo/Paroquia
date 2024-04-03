<!DOCTYPE html>
<html>
<head>
    <title>Statistics</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="userStatistics" width="300" height="300"></canvas>

    <script>
        var ctx = document.getElementById('userStatistics').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Total Users', 'Total Birthdays'],
                datasets: [{
                    label: 'Statistics',
                    backgroundColor: ['#36a2eb', '#ff6384'],
                    data: [{{$totalUsers}}, {{$totalBirthdays}}],
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'User Statistics'
                },
                responsive: true,
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        right: 10,
                        top: 10,
                        bottom: 10
                    }
                },
                legend: {
                    display: true,
                    position: 'bottom'
                }
            }
        });
    </script>
</body>
</html>
