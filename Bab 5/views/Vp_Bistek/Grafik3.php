<?php

$a = $piutang['Data'][0]['nilai'];
$b = $hutang['Data'][0]['nilai'];

$c = 375109261;
$d = 387210009;

?>

<!doctype html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<html lang="en">

<head>
    <meta charset="utf-6">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <div class="chartBox">
        <canvas id="myChart4"></canvas>
    </div>
    <script>
        // setup 

        var a = [<?php echo $a; ?>];
        var b = [<?php echo $b; ?>];
        var c = [<?php echo $c; ?>];
        var d = [<?php echo $d; ?>];

        const data7 = {
            labels: ['Oktober', 'November', 'Desember'],
            datasets: [{
                    label: "Piutang",
                    data: [a[0], c[0], d[0]],
                    borderColor: [
                        'rgba(70, 200, 10, 1)',
                    ],
                    backgroundColor: ['rgba(70, 200, 10, 1)', ],
                    borderWidth: 3
                },
                {
                    label: "Hutang",
                    data: [b[0]],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                    ],
                    backgroundColor: ['rgba(54, 162, 235, 1)', ],
                    borderWidth: 3
                },
            ]
        };
        // config 
        const config4 = {
            type: 'bar',
            data: data7,
            options: {
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            color: 'white',
                        },
                    }
                },
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    x: {
                        ticks: {
                            color: 'white'
                        }
                    },
                    y: {
                        ticks: {
                            color: 'white'
                        },
                        beginAtZero: true,
                    },
                }
            }
        };

        // render init block
        const myChart4 = new Chart(
            document.getElementById('myChart4'),
            config4
        );
    </script>

</body>

</html>