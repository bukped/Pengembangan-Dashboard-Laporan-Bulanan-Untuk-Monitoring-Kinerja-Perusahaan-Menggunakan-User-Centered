<?php
$a = $exp['Data'][0]['nilai'];
$b = $incm['Data'][0]['nilai'];
?>

<div class="content">
      <div class="row">
            <div class="col-lg-12 col-md-12">
                  <div class="card card-chart">
                        <div class="card-header">
                              <h5 class="card-title">REPORT WO & RFQ</h5>
                        </div>
                        <div class="col-sm-6">
                              <div class="btn-group btn-group-toggle float-left" data-toggle="buttons">
                                    <label class="btn btn-sm btn-primary btn-simple active" id="0">
                                          <input type="radio" name="options" checked>
                                          <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Total Biaya Sampai Bulan Ini : <?php echo $a ?></span>

                                    </label>
                              </div>
                              <div class="btn-group btn-group-toggle float-left" data-toggle="buttons">
                                    <label class="btn btn-sm btn-primary btn-simple active" id="0">
                                          <input type="radio" name="options" checked>
                                          <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Total Pendapatan Sampai Bulan Ini : <?php echo $b ?></span>

                                    </label>
                              </div>
                        </div>
                        <div class="card-body">
                              <div class="chart-area">
                                    <canvas id="myChart5"></canvas>
                                    <?php $this->load->view('Vp_Bistek/Grafik1'); ?>
                              </div>
                        </div>
                  </div>
            </div>
            <div class="col-lg-8">
                  <div class="card card-chart">
                        <div class="card-header">
                              <h5 class="card-title">REPORT PM & SD</h5>
                        </div>
                        <div class="card-body">
                              <div class="chart-area">
                                    <canvas id="myChart3"></canvas>
                                    <?php $this->load->view('Vp_Bistek/Grafik2'); ?>
                              </div>
                        </div>
                  </div>
            </div>
            <div class="col-lg-4">
                  <div class="card card-chart">
                        <div class="card-header">
                              <h5 class="card-title">REPORT PIUTANG & HUTANG</h5>
                        </div>
                        <div class="card-body">
                              <div class="chart-area">
                                    <canvas id="myChart4"></canvas>
                                    <?php $this->load->view('Vp_Bistek/Grafik3'); ?>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</div>