<?php
defined('BASEPATH') or exit('No direct script access allowed');

class vp_Bistek extends CI_Controller
{
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
        //get total hpp//
        $readAPIhpp = file_get_contents('https://apps.pupuk-kujang.co.id/sbu-services/public/api/financial/hpp');
        $data['hpp'] = json_decode($readAPIhpp, true);
        //get total laba
        $readAPIlaba = file_get_contents('https://apps.pupuk-kujang.co.id/sbu-services/public/api/financial/laba');
        $data['laba'] = json_decode($readAPIlaba, true);
        //get wo cnf//
        $readAPIcnf = file_get_contents('https://apps.pupuk-kujang.co.id/sbu-services/public/api/pm_order/cnf');
        $data['cnf'] = json_decode($readAPIcnf, true);
        //get rfq//
        $readAPIrfq = file_get_contents('https://apps.pupuk-kujang.co.id/sbu-services/public/api/pm_order/rfq');
        $data['rfq'] = json_decode($readAPIrfq, true);
        //get total piutang//
        $readAPIpiutang = file_get_contents('https://apps.pupuk-kujang.co.id/sbu-services/public/api/financial/piutang');
        $data['piutang'] = json_decode($readAPIpiutang, true);
        //get total hutang//
        $readAPIhutang = file_get_contents('https://apps.pupuk-kujang.co.id/sbu-services/public/api/financial/utang');
        $data['hutang'] = json_decode($readAPIhutang, true);
        //get kas bank//
        $readAPIkasbank = file_get_contents('https://apps.pupuk-kujang.co.id/sbu-services/public/api/financial/kasbank');
        $data['kasbank'] = json_decode($readAPIkasbank, true);

        $this->load->view('Header');
        $this->load->view('Navbar');
        $this->load->view('Sidebar');
        $this->load->view('Vp_Bistek/index', $data);
        $this->load->view('Footer');
    }
}
