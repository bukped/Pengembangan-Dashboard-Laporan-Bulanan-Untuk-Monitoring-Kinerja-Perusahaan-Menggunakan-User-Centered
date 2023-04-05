<div class="sidebar">
  <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
        -->
  <div class="sidebar-wrapper">
    <div class="logo">
      <a href="javascript:void(0)" class="simple-text logo-mini">
        SBU
      </a>
      <a href="javascript:void(0)" class="simple-text logo-normal">
        APP
      </a>
    </div>
    <ul class="nav">
      <li class="">
        <a href=<?= base_url('Home')  ?>>
          <i class="tim-icons icon-chart-pie-36"></i>
          <p>Dashboard</p>
        </a>
      </li>
      <!-- <li>
        <a href=<?= base_url('Svp')  ?>>
          <i class="tim-icons icon-atom"></i>
          <p>SVP</p>
        </a>
      </li> -->
      <?php 
if ($this->fungsi->username() == 'Tono Sartono') {
      ?>
      <li>
        <a href=<?= base_url('vp_Bistek')  ?>>
          <i class=" tim-icons icon-single-02"></i>
          <p>Detail</p>
        </a>
      </li>
      <?php
}
?>
      <!-- <li>
        <a href=<?= base_url('Vp_Har_Jpp')  ?>>
          <i class="tim-icons icon-single-02"></i>
          <p>VP HAR & JPP </p>
        </a>
      </li> -->
    </ul>
  </div>
</div>