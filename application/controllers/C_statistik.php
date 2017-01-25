<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class C_statistik extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_statistik');
    }

    public function index() {
        $data['report'] = $this->m_statistik->report();

        $this->load->view('attribute/header');
        $this->load->view('admin/v_statistik');
        $this->load->view('attribute/footer', $data);
    }

}

?>