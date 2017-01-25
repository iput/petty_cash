<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class S_statistik extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_pengeluaranuser');
    }

    public function index() {
        if ($this->session->userdata('username') && $this->session->userdata('idUser')) {
             $data_in['report'] = $this->m_pengeluaranuser->tampil_statistik($this->session->userdata('idUser'));
            $this->load->view('attribute/header_user');
            $this->load->view('user/u_statistika');
            $this->load->view('attribute/footer_user', $data_in);
        } else {
            $this->load->view('v_login');
        }
    }



}

?>