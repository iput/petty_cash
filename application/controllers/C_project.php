<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class C_Project extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('attribute/header');
        $this->load->view('admin/v_project');
        $this->load->view('tabel/tabel_project');
        $this->load->view('attribute/footer');
    }

    public function user_project()
    {
    	$this->load->view('attribute/header');
        $this->load->view('admin/v_Uproject');
        $this->load->view('tabel/tabel_Uproject');
        $this->load->view('attribute/footer');	
    }

}

?>