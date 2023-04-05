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
                Logout
              </p>
            </a>
            <ul class="dropdown-menu dropdown-navbar">
              <li class="nav-link"><a href="<?php echo base_url('Login/logout') ?>" class="nav-item dropdown-item">Logout</a></li>
              <!-- <li class="dropdown-divider"></li>
              <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Log out</a></li> -->
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->