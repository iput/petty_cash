<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class S_statistik extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_pengeluaranuser', 'datauser');
    }

    public function index() {
        if ($this->session->userdata('username') && $this->session->userdata('idUser')) {
            $parameter = $this->session->userdata('idUser');
             $data['report'] = $this->datauser->tampil_statistik($parameter);
            $this->load->view('attribute/header_user');
            $this->load->view('user/u_statistika');
            $this->load->view('attribute/footer_user', $data);
        } else {
            $this->load->view('v_login');
        }
    }



}

?>