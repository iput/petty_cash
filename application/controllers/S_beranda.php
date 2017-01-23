<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class S_beranda extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        if ($this->session->userdata('username') && $this->session->userdata('idUser')) {
            $this->load->view('attribute/header_user');
            $this->load->view('user/u_beranda');
            $this->load->view('attribute/footer_user');
        } else {
            $this->load->view('v_login');
        }
    }

}

?>