<?php

include('Header.php');

include('Sidebar.php');

?>

<div class="main-panel">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
    <div class="container-fluid">
      <div class="navbar-wrapper">
        <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
      </div>
      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav ml-auto">
          <p><?= '';
              echo $this->fungsi->username()
              ?></p>
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <div class="photo">
                <i class="tim-icons icon-single-02"></i>
              </div>
              <b class="caret d-none d-lg-block d-xl-block"></b>
              <p class="d-lg-none">
                Login
              </p>
            </a>
            <ul class="dropdown-menu dropdown-navbar">
              <li class="nav-link"><a href="<?php echo base_url('Login') ?>" class="nav-item dropdown-item">Login</a></li>
              <!-- <li class="dropdown-divider"></li>
              <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Log out</a></li> -->
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

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
              <?php $this->load->view('Guest/Grafik1'); ?>
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
              <?php $this->load->view('Guest/Grafik2'); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="card card-chart">
          <div class="card-header">
            <h5 class="card-title">RINGKASAN PENDAPATAN</h5>
          </div>
          <div class="card-body">
            <div class="chart-area">
              <canvas id="myChart2"></canvas>
              <?php $this->load->view('Guest/Grafik3'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  include('Footer.php');
  ?>