<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class S_setting extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_pengeluaranuser');
    }

    public function index() {
        if ($this->session->userdata('username')) {
            $this->load->view('attribute/header_user');
            $this->load->view('user/u_setting');
            $this->load->view('attribute/footer_user');
        } else {
            $this->load->view('v_login');
        }
    }


}

?>