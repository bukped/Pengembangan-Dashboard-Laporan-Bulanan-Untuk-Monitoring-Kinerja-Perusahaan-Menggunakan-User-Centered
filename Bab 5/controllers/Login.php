<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        // check_already_login();
        $this->load->view('Auth/Login');
    }
    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if (isset($_POST['login'])) {

            $url = "https://apps.pupuk-kujang.co.id/sbu-services/public/api/login";

            $kirim = array(
                'username' => $_POST['username'],
                'password' => $_POST['password']
            );
            $params = http_build_query($kirim);

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLINFO_HEADER_OUT, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
         
            $result = curl_exec($ch);
            curl_close($ch);
            $data = json_decode($result, true);


            if ($data['success'] == true) {
                $user = array(
                    "access_token" => $data['access_token'],
                    'refresh_token' => $data['refresh_token'],
                    'username' => $data['user']['EMPLOYEENAME'],
                    'no_badge' => $data['user']['EMPLOYEEID'],
                    'email' => $data['user']['EMPLOYEEEMAIL'],



                );
                $this->session->set_userdata($user);
                echo '<script>alert("Login Berhasil")</script>';
                echo "<script>
				window.location='" . site_url('/Home') . "';</script>";
                // redirect('dashboard');
            } else {
                echo '<script>alert("Login Gagal")</script>';
                echo "<script>
				window.location='" . site_url('/Login') . "';</script>";
                //redirect('auth/login');
            };
        }
    }
    public function logout()
    {
        $params = array('username', 'password');
        $this->session->unset_userdata($params);
        redirect('/Login');
    }
}

    //     $validasi_email = $this->Login->query_validasi_email($email);
    //     if ($validasi_email->num_rows() > 0) {
    //         $validate_ps = $this->Login->query_validasi_password($email, $password);
    //         if ($validate_ps->num_rows() > 0) {
    //             $x = $validate_ps->row_array();
    //             if ($x['user_status'] == '1') {
    //                 $this->session->set_userdata('logged', TRUE);
    //                 $this->session->set_userdata('user', $email);
    //                 $id = $x['user_id'];
    //                 if ($x['user_akses'] == '1') { //svp
    //                     $name = $x['user_name'];
    //                     $this->session->set_userdata('access', 'Svp');
    //                     $this->session->set_userdata('id', $id);
    //                     $this->session->set_userdata('name', $name);
    //                     redirect('Svp');
    //                 } else if ($x['user_akses'] == '2') { //vp bistek
    //                     $name = $x['user_name'];
    //                     $this->session->set_userdata('access', 'Vp_Bistek');
    //                     $this->session->set_userdata('id', $id);
    //                     $this->session->set_userdata('name', $name);
    //                     redirect('vp_Bistek');
    //                 } else if ($x['user_akses'] == '3') { //vp har & jpp
    //                     $name = $x['user_name'];
    //                     $this->session->set_userdata('access', 'Vp_Har_Jpp');
    //                     $this->session->set_userdata('id', $id);
    //                     $this->session->set_userdata('name', $name);
    //                     redirect('Vp_Har_Jpp ');
    //                 }
    //             } else {
    //                 $url = base_url('login');
    //                 echo $this->session->set_flashdata('msg', '<span onclick="this.parentElement.style.display=`none`" class="w3-button w3-large w3-display-topright">&times;</span>
    //                 <h3>Uupps!</h3>
    //                 <p>Akun kamu telah di blokir. Silahkan hubungi admin.</p>');
    //                 redirect($url);
    //             }
    //         } else {
    //             $url = base_url('login');
    //             echo $this->session->set_flashdata('msg', '<span onclick="this.parentElement.style.display=`none`" class="w3-button w3-large w3-display-topright">&times;</span>
    //                 <h3>Uupps!</h3>
    //                 <p>Password yang kamu masukan salah.</p>');
    //             redirect($url);
    //         }
    //     } else {
    //         $url = base_url('login');
    //         echo $this->session->set_flashdata('msg', '<span onclick="this.parentElement.style.display=`none`" class="w3-button w3-large w3-display-topright">&times;</span>
    //         <h3>Uupps!</h3>
    //         <p>Email yang kamu masukan salah.</p>');
    //         redirect($url);
    //     }
    // }
