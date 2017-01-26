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
            $this->load->view('user/u_beranda');
            $this->load->view('tabel_user/tabel_user', $data_in);
            $this->load->view('attribute/footer_user');
//            echo json_encode($data_in);
        } else {
            $this->load->view('v_login');
        }
    }

    public function get_data_all()
    {
        $data_in['transaksi'] = $this->m_pengeluaranuser->get_base_project($this->session->userdata('idUser'));
        $this->load->view('attribute/header_user');
        $this->load->view('user/u_beranda');
        $this->load->view('tabel_user/tabel_project', $data_in);
        $this->load->view('attribute/footer_user');
    }

    public function cetak_pdf() {
        $data['transaksi'] = $this->m_pengeluaranuser->get_pengeluaran_user($this->session->userdata('idUser'));
        $data['jumlah'] = $this->m_pengeluaranuser->count_pengeluaran($this->session->userdata('idUser'));
        $this->load->view('data_master/user_pdf', $data);
    }


    public function cetak_xls()
    {
        $data['transaksi'] = $this->m_pengeluaranuser->get_pengeluaran_user($this->session->userdata('idUser'));
        $data['jumlah'] = $this->m_pengeluaranuser->count_pengeluaran($this->session->userdata('idUser'));
        $this->load->view('data_master/user_excel', $data);
    }

}

?>