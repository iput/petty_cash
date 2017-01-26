<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class C_verifikasi extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_user');
    }

    public function index($param) {
        $this->load->view('v_verifikasi');
        $this->session->set_userdata('nama', $param);
    }
    
    public function verifikasi_akun(){
        $husername='';
        $hcode='';
        $username = $this->session->userdata('nama');
        $code = $this->input->post('txt_code_user');
        $data = $this->m_user->verifikasi_data($username, $code);
        
        foreach ($data as $d) {
            $husername = $d['username'];
            $hcode = $d['kode_verifikasi'];
        }
        
        if ($username == $husername && $code == $hcode){
            $param = array(
              'username' =>$username,
              'kode_verifikasi' => $code
            );
            $data_update = array(
              'status' => 'sudah terverifikasi'  
            );
            $this->m_user->update_status('tb_user', $data_update, $param);
            $this->session->set_flashdata('msg', '<span class="glyphicon glyphicon-ok"></span>&nbsp;Akun Anda Sudah Terverifikasi');
            redirect('c_login');
        }
        else{
            $this->session->set_flashdata('gagal', '<span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Kode Anda Salah');
            redirect('c_verifikasi/index/'.$this->session->userdata('nama'));
        }
    }

}

?>