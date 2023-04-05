<?php

$c = $incm['Data'][0]['nilai'];
$d = 12934106;//$incm_monthly['Data'];
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
    <canvas id="myChart2"></canvas>
  </div>
  <script>
    // setup 

    var c = [<?php echo $c; ?>];
    var d = [<?php echo $d; ?>];


    const data5 = {
      labels: ['Pendapatan Sampai Bulan Ini', 'Pendapatan Bulan Ini'],
      datasets: [{
        label: "",
        data: [c[0], d[0]],
        borderColor: [
          'rgba(255, 206, 86, 1)',
          'rgba(255, 206, 86, 1)',
        ],
        backgroundColor: [
          'rgba(255, 206, 86, 1)',
          'rgba(255, 206, 86, 1)',
        ],
        borderWidth: 3
      }]
    };
    // config 
    const config2 = {
      type: 'bar',
      data: data5,
      color: 'white',
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
    const myChart2 = new Chart(
      document.getElementById('myChart2'),
      config2
    );
  </script>

</body>

</html>