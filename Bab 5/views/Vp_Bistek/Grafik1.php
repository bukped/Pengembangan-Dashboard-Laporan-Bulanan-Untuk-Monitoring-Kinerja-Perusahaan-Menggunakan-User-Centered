<?php
$total_wo = $pm_order['Summary']['Total_WO_Terconvert'];
$total_teco = $pm_order['Summary']['Total_WO_TECO'];
$total_pend = $pm_order['Summary']['Total_WO_Pending'];
$total_cnf = $cnf['Total'];
$total_rfq = 800;//$rfq['Total'];

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-6">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <canvas id="myChart5"></canvas>
    </div>
    <script>
        // setup 

        var data1 = [<?php echo $total_wo; ?>];
        var data2 = [<?php echo $total_teco; ?>];
        var data3 = [<?php echo $total_pend; ?>];
        var data4 = [<?php echo $total_cnf; ?>];
        var data5 = [<?php echo $total_rfq; ?>];


        const data8 = {
            labels: ['Wo Terconvert', 'Wo Teco', 'Wo Pending', 'Wo Cnf', 'Rfq'],
            datasets: [{
                label: "",
                data: [data1[0], data2[0], data3[0], data4[0], data5[0]],

                borderColor: [
                    'rgba(250, 26, 104, 4)',
                    'rgba(250, 26, 104, 4)',
                    'rgba(250, 26, 104, 4)',
                    'rgba(250, 26, 104, 4)',
                    'rgba(250, 26, 104, 4)',
                ],
                backgroundColor: [
                    'rgba(250, 26, 104, 4)',
                    'rgba(250, 26, 104, 4)',
                    'rgba(250, 26, 104, 4)',
                    'rgba(250, 26, 104, 4)',
                    'rgba(250, 26, 104, 4)',
                ],
                borderWidth: 3
            }]
        };
        // config 
        const config5 = {
            type: 'bar',
            data: data8,
            options: {
                plugins: {
                    legend: {
                        display: false
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
        const myChart5 = new Chart(
            document.getElementById('myChart5'),
            config5
        );
    </script>

</body>

</html>