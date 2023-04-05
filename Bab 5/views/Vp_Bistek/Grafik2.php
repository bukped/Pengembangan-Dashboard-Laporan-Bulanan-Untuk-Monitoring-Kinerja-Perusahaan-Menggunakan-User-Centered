<?php

$a = $exp['Data'][1]['nilai'];;
$b = $incm['Data'][1]['nilai'];
$c = $hpp['Data'][1]['nilai'];
$d = $laba['Data'][1]['nilai'];
$e = $kasbank['Data'][1]['nilai'];

$f = $exp['Data'][2]['nilai'];
$g = $incm['Data'][2]['nilai'];
$h = $hpp['Data'][2]['nilai'];
$i = $laba['Data'][2]['nilai'];
$j = $kasbank['Data'][2]['nilai'];

$k = 68192898;
$l = 220001122;
$m = 1054336;
$n = 107121889;
$o = 517990127;

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
        <canvas id="myChart3"></canvas>
    </div>
    <script>
        
        var a = [<?php echo $a; ?>];
        var b = [<?php echo $b; ?>];
        var c = [<?php echo $c; ?>];
        var d = [<?php echo $d; ?>];
        var e = [<?php echo $e; ?>];
        var f = [<?php echo $f; ?>];
        var g = [<?php echo $g; ?>];
        var h = [<?php echo $h; ?>];
        var i = [<?php echo $i; ?>];
        var j = [<?php echo $j; ?>];
        var k = [<?php echo $k; ?>];
        var l = [<?php echo $l; ?>];
        var m = [<?php echo $m; ?>];
        var n = [<?php echo $n; ?>];
        var o = [<?php echo $o; ?>];


        const data6 = {
            labels: ['Oktober', 'November', 'Desember'],
            datasets: [{
                    label: "Biaya",
                    data: [a[0],f[0],k[0] ],
                    borderColor: [
                        'rgba(255, 206, 86, 1)',
                    ],
                    backgroundColor: ['rgba(255, 206, 86, 1)', ],
                    borderWidth: 3
                },
                {
                    label: "Pendapatan",
                    data: [b[0], g[0], l[0]],
                    borderColor: [
                        'rgba(250, 26, 104, 4)',
                    ],
                    backgroundColor: ['rgba(250, 26, 104, 4)', ],
                    borderWidth: 3
                },
                {
                    label: "Hpp",
                    data: [c[0], h[0], m[0]],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                    ],
                    backgroundColor: ['rgba(54, 162, 235, 1)', ],
                    borderWidth: 3
                },
                {
                    label: "Laba",
                    data: [d[0],i[0], n[0]],
                    borderColor: [
                        'rgba(200, 35, 150, 4)',
                    ],
                    backgroundColor: ['rgba(200, 35, 150, 4)', ],
                    borderWidth: 3
                },
                {
                    label: "Kasbank",
                    data: [e[0],j[0], o[0]],
                    borderColor: [
                        'rgba(70, 200, 10, 1)',
                    ],
                    backgroundColor: ['rgba(70, 200, 10, 1)', ],
                    borderWidth: 3
                },
            ]
        };
        // config 
        const config3 = {
            type: 'bar',
            data: data6,
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
        const myChart3 = new Chart(
            document.getElementById('myChart3'),
            config3
        );
    </script>

</body>

</html>