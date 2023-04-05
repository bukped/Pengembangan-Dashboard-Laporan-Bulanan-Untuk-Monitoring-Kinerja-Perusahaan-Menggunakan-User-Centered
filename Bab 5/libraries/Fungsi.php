<?php
class Fungsi
{
    protected $ci;

    function __construct()
    {
        $this->ci = &get_instance();
    }
    public function username()
    {
        $ci = &get_instance();
        $username = $ci->session->userdata('username');
        return $username;
    }

    function indo_currency($nominal)
{
    $result = number_format($nominal, 0, ',', '.') . " IDR";
    return $result;
}
}
