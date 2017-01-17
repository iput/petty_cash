<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class C_login extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('v_login');
    }

    public function lupa_password()
    {
        $this->load->view('v_lupa_sandi');
    }

    public function login_process()
    {
    	$idUser="";
        $huser = "";
        $hpass = "";
        $hlevel = "";
        $xpass = "";
        $user = $this->input->post('txt_log_user');
        $pass = $this->input->post('txt_log_password');
        $level = $this->input->post('cb_log_level');
        $hasil = $this->Mod_login->login($user, $pass, $level);
        foreach ($hasil as $h) {
            $idUser = $h['idUser'];
            $huser = $h['username'];
            $hpass = $h['password'];
            $hlevel = $h['level'];
        }

        if ($level == 'admin' && $level == $hlevel) {
            if ($user == $huser && $pass = $hpass) {
                $this->session->set_userdata('username', $huser);
                $this->session->set_userdata('idUser', $idUser);
                redirect('c_login/admin_page');
            } else {
                redirect('c_login/index');
            }
        } else if ($level == 'user' && $level == $hlevel) {
            if ($user == $huser && $pass = $hpass) {
                $this->session->set_userdata('username', $huser);
                $this->session->set_userdata('idUser', $idUser);
                redirect('c_login/user_page');
            } else {
                redirect('c_login/index');
            }
        } else {
            echo "salah";
            redirect('c_login/index');
        }
    }

}

?>