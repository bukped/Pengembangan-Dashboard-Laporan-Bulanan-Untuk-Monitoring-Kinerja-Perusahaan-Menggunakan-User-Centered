<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        //get list work order//
        $readAPI = file_get_contents('https://apps.pupuk-kujang.co.id/sbu-services/public/api/pm_order/sum');
        $data['pm_order'] = json_decode($readAPI, true);
        //get total biaya operasional//
        $readAPIexp = file_get_contents('https://apps.pupuk-kujang.co.id/sbu-services/public/api/financial/exp');
        $data['exp'] = json_decode($readAPIexp, true);
        //get total biaya operasional monthly//
        $readAPIexpMonthly = file_get_contents('https://apps.pupuk-kujang.co.id/sbu-services/public/api/financial/exp/monthly');
        $data['exp_monthly'] = json_decode($readAPIexpMonthly, true);
        //get total pendapatan
        $readAPIincm = file_get_contents('https://apps.pupuk-kujang.co.id/sbu-services/public/api/financial/incm');
        $data['incm'] = json_decode($readAPIincm, true);
        //get total pendapatan monthly//
        $readAPIincmMonthly = file_get_contents('https://apps.pupuk-kujang.co.id/sbu-services/public/api/financial/incm/monthly');
        $data['incm_monthly'] = json_decode($readAPIincmMonthly, true);

        $this->load->view('Dashboard', $data);
    }
}
