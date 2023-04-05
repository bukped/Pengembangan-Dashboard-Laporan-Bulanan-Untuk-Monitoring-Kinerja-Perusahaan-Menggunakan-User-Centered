<?php
$total_wo = $pm_order['Summary']['Total_WO_Terconvert'];
$total_teco = $pm_order['Summary']['Total_WO_TECO'];
$total_pend = $pm_order['Summary']['Total_WO_Pending'];
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
    <canvas id="myChart"></canvas>
  </div>
  <script>
    // setup 

    var data1 = [<?php echo $total_wo; ?>];
    var data2 = [<?php echo $total_teco; ?>];
    var data3 = [<?php echo $total_pend; ?>];


    const data = {
      labels: ['Wo Terconvert', 'Wo Teco', 'Wo Pending'],
      datasets: [{
        label: "",
        data: [data1, data2, data3],

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
        borderWidth: 3
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