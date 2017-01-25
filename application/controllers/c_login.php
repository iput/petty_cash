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
        $this->load->model('m_pengeluaranuser');
    }

    public function index() {
        $this->load->view('v_login');
    }

    public function lupa_password() {
        $this->load->view('v_lupa_sandi');
    }

    public function login_process() {
        $idUser = "";
        $huser = "";
        $hpass = "";
        $hlevel = "";
        $hemail = "";
        $user = mysql_real_escape_string($this->input->post('txt_log_user'));
        $pass = mysql_real_escape_string($this->input->post('txt_log_password'));
        $hasil = $this->Mod_login->login($user, $pass);
        foreach ($hasil as $h) {
            $idUser = $h['idUser'];
            $huser = $h['username'];
            $hpass = $h['password'];
            $hlevel = $h['level'];
            $hemail = $h['email'];
        }
        if ($hlevel == 'admin') {
            if ($user == $huser && $pass == $hpass || $user == $hemail && $pass == $hpass) {
                $this->session->set_userdata('username', $huser);
                $this->session->set_userdata('idUser', $idUser);
                redirect('c_login/admin_page');
            } else {
                echo $user;
                echo $pass;
                redirect('c_login/index');
            }
        } else if ($hlevel == 'user') {
            if ($user == $huser && $pass == $hpass || $user == $hemail && $pass == $hpass) {
                $this->session->set_userdata('username', $huser);
                $this->session->set_userdata('idUser', $idUser);
                redirect('c_login/user_page');
            } else {
                echo $user;
                echo $pass;
                redirect('c_login/index');
            }
        } else {
            echo "salah";
            echo $user;
            echo $pass;
            redirect('c_login/index');
        }
    }

    public function admin_page() {
        $data = $this->m_user->getAllUser();
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
            $data_in['transaksi'] = $this->m_pengeluaranuser->get_pengeluaran_user($this->session->userdata('idUser'));
            $this->load->view('attribute/header_user');
            $this->load->view('user/u_beranda', $data_in);
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