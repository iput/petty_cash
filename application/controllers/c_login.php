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
//test
    public function login_process() {
        $idUser = "";
        $huser = "";
        $hpass = "";
        $hlevel = "";
        $hemail = "";
        $hstatus = "";
        $user = mysql_real_escape_string($this->input->post('txt_log_user'));
        $pass = mysql_real_escape_string($this->input->post('txt_log_password'));
        $hasil = $this->Mod_login->login($user, $pass);
        foreach ($hasil as $h) {
            $idUser = $h['idUser'];
            $huser = $h['username'];
            $hpass = $h['password'];
            $hlevel = $h['level'];
            $hemail = $h['email'];
            $hstatus = $h['status'];
        }
        if ($hlevel == 'admin') {
            if ($hstatus == 'sudah terverifikasi') {
                if ($user == $huser && $pass == $hpass || $user == $hemail && $pass == $hpass) {
                    $this->session->set_userdata('username', $huser);
                    $this->session->set_userdata('idUser', $idUser);
                    redirect('c_login/admin_page');
                } else if ($user == $huser && $pass != $hpass || $user == $hemail && $pass != $hpass){    
                    $this->session->set_flashdata('pesan_verifikasi', '&nbsp;<span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Password Kurang Tepat');
                    redirect('c_login/index');
                }
                else if ($user != $huser && $pass == $hpass || $user != $hemail && $pass == $hpass){    
                    $this->session->set_flashdata('pesan_verifikasi', '&nbsp;<span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Username Kurang Tepat');
                    redirect('c_login/index');
                }
            } else {
                if ($user == $huser && $pass == $hpass || $user == $hemail && $pass == $hpass) {
                    $this->session->set_flashdata('pesan_verifikasi', '&nbsp;<span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Akun Anda Belum Terverifikasi');
                    redirect('c_login/index');
                }
                else if ($user == $huser && $pass != $hpass || $user == $hemail && $pass != $hpass){    
                    $this->session->set_flashdata('pesan_verifikasi', '&nbsp;<span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Anda Belum Terverifikasi');
                    redirect('c_login/index');
                }
                else if ($user != $huser && $pass == $hpass || $user != $hemail && $pass == $hpass){    
                    $this->session->set_flashdata('pesan_verifikasi', '&nbsp;<span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Anda Belum Terverifikasi');
                    redirect('c_login/index');
                }
            }
        } else if ($hlevel == 'user') {
            if ($hstatus == 'sudah terverifikasi') {
                if ($user == $huser && $pass == $hpass || $user == $hemail && $pass == $hpass) {
                    $this->session->set_userdata('username', $huser);
                    $this->session->set_userdata('idUser', $idUser);
                    redirect('c_login/user_page');
                }
                else if ($user == $huser && $pass != $hpass || $user == $hemail && $pass != $hpass){    
                    $this->session->set_flashdata('pesan_verifikasi', '&nbsp;<span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Password Kurang Tepat');
                    redirect('c_login/index');
                }
                else if ($user != $huser && $pass == $hpass || $user != $hemail && $pass == $hpass){    
                    $this->session->set_flashdata('pesan_verifikasi', '&nbsp;<span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Username Kurang Tepat');

                    redirect('c_login/index');
                }
                
                else {
                if ($user == $huser && $pass == $hpass || $user == $hemail && $pass == $hpass) {
                    $this->session->set_flashdata('pesan_verifikasi', '&nbsp;<span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Akun Anda Belum Terverifikasi');
                    redirect('c_login/index');
                }
                else if ($user == $huser && $pass != $hpass || $user == $hemail && $pass != $hpass){    
                    $this->session->set_flashdata('pesan_verifikasi', '&nbsp;<span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Anda Belum Terverifikasi');
                    redirect('c_login/index');
                }
                else if ($user != $huser && $pass == $hpass || $user != $hemail && $pass == $hpass){    
                    $this->session->set_flashdata('pesan_verifikasi', '&nbsp;<span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Anda Belum Terverifikasi');
                    redirect('c_login/index');
                }
            }
            } else {
                if ($user == $huser && $pass == $hpass || $user == $hemail && $pass == $hpass) {
                    $this->session->set_flashdata('pesan_verifikasi', '&nbsp;<span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Akun Anda Belum Terverifikasi');
                    redirect('c_login/index');
                } else {
                    $this->session->set_flashdata('pesan_error_user', '&nbsp;<span class="glyphicon glyphicon-warning-sign"></span>&nbsp;' . $user . ' bukan user yang terdaftar');
                    $this->session->set_flashdata('pesan_error_pass', '&nbsp;<span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Password Kurang Tepat');
                    redirect('c_login/index');
                }
            }
        } else {
            $this->session->set_flashdata('pesan_verifikasi', '&nbsp;<span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Anda Belum Terdaftar di Petty Cash');           
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
            $this->load->view('user/u_beranda');
            $this->load->view('tabel_user/tabel_user', $data_in);
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