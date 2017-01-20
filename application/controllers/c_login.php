<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class C_login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Mod_login'); 
        $this->load->model('m_user');

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

    public function admin_page() {
        $data= $this->m_user->getAllUser();
        if ($this->session->userdata('username')) {
            $this->load->view('attribute/header');
            $this->load->view('admin/v_index', array('data' => $data));
            $this->load->view('attribute/footer');
        } else {
            redirect('C_login/index');
        }
    }
    public function user_page() {
        if ($this->session->userdata('idUser')) {
            $this->load->view('attribute/header_user');
            $this->load->view('user/u_beranda');
            $this->load->view('attribute/footer_user');
        } else {
            redirect('');
        }
    }

     public function logout() {
        $this->session->sess_destroy();
        redirect(c_login / index);
    }







}

?>