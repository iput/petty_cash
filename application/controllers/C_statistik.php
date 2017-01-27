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

    public function get_stats_project()
    {
        $data['stats_project'] = $this->m_statistik->get_projectP();

        $this->load->view('attribute/header');
        $this->load->view('admin/v_statistik');
        $this->load->view('attribute/footer', $data); 
    }

}

?>