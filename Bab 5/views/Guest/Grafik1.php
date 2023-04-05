<?php
$total_wo = $pm_order['Summary']['Total_WO_Terconvert'];
$total_teco = $pm_order['Summary']['Total_WO_TECO'];
$total_pend = $pm_order['Summary']['Total_WO_Pending'];
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-6">
  <meta name="viewport" content="width=100, initial-scale=1">
  <style>
    * {
      margin: 0;
      padding: 0;
      font-family: sans-serif;
      color: 'black';
    }
  </style>
</head>

<body>
  <div class="chartBox">
    <canvas id="myChart" width="1000px" height="600px"></canvas>
  </div>
  <script>
    // setup 

    var data1 = [<?php echo $total_wo; ?>];
    var data2 = [<?php echo $total_teco; ?>];
    var data3 = [<?php echo $total_pend; ?>];


    const data = {
      labels: ['WO Terconvert', 'WO TECO', 'WO Pending'],
      datasets: [{
        label: "",
        data: [data1[0], data2[0], data3[0]],
        borderColor: [
          'rgba(250, 26, 104, 4)',
          'rgba(250, 26, 104, 4)',
          'rgba(250, 26, 104, 4)',
        ],
        backgroundColor: [
          'rgba(250, 26, 104, 4)',
          'rgba(250, 26, 104, 4)',
          'rgba(250, 26, 104, 4)',
        ],
        borderWidth: 3,
      }]
    };
    // config 
    const config = {
      type: 'bar',
      data,
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
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );
  </script>

</body>

</html>