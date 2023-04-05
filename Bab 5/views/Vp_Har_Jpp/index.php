<?php
?>

<div class="content">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-title">LIST WORK ORDER</h5>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myChart"></canvas>
                        <?php $this->load->view('Vp_Har_Jpp/Grafik1'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-title">RINGKASAN BIAYA</h5>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myChart1"></canvas>
                        <?php $this->load->view('Vp_Har_Jpp/Grafik2'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-title">RINGKASAN PENDAPATAN </h5>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myChart2"></canvas>
                        <?php $this->load->view('Vp_Har_Jpp/Grafik3'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

?>