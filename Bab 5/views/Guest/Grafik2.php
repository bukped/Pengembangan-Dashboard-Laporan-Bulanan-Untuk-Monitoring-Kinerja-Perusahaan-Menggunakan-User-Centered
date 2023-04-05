<?php

$a = $exp['Data'][0]['nilai'];
$b = 10791002;//$exp_monthly['Data'];

?>

<!doctype html>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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
    <canvas id="myChart1"></canvas>
  </div>
  <script>
    var a = [<?php echo $a; ?>];
    var b = [<?php echo $b; ?>];


    const data4 = {
      labels: ['Biaya sampai bulan ini', 'Biaya bulan ini'],
      datasets: [{
        label: "",
        data: [a[0], b[0]],
        borderColor: [
          'rgba(54, 162, 235, 1)',
          'rgba(54, 162, 235, 1)',
        ],
        backgroundColor: [
          'rgba(54, 162, 235, 1)',
          'rgba(54, 162, 235, 1)',
        ],
        borderWidth: 3
      }]
    };
    // config 
    const config1 = {
      type: 'bar',
      data: data4,
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
    const myChart1 = new Chart(
      document.getElementById('myChart1'),
      config1
    );
  </script>

</body>

</html>