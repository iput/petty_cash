<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class S_beranda extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_pengeluaranuser');
    }

    public function index() {
        if ($this->session->userdata('username') && $this->session->userdata('idUser')) {

            $data_in['transaksi'] = $this->m_pengeluaranuser->get_pengeluaran_user($this->session->userdata('idUser'));
            $this->load->view('attribute/header_user');
            $this->load->view('user/u_beranda', $data_in);
            $this->load->view('attribute/footer_user');
        } else {
            $this->load->view('v_login');
        }
    }

    public function cetak_pdf() {
        $data['transaksi'] = $this->m_pengeluaranuser->get_pengeluaran_user($this->session->userdata('idUser'));

        $this->load->view('data_master/user_pdf', $data);
    }

}

?>