<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mainlib{

	public function logged_in(){
		$_this =& get_instance();
		$_this->load->helper('url');
		if($_this->session->userdata('login_status') != TRUE){
			redirect(base_url('user/login'));
		}
	}

	public function file_upload_load(){
		$_this =& get_instance();

		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 100;
		$config['max_width'] = 1024;
		$config['max_height'] = 768;

		$_this->load->library('upload', $config);

	}

	public function pagination_load(){
		$_this =& get_instance();
		
		$config['base_url'] = base_url('front/daftar_artikel/hal/');
		$config['total_rows'] = $_this->Post_model->total_rows('tbl_post');
		$config['per_page'] = 5;

		/* config */
		$config['full_tag_open'] = '<div class="paging">';
		$config['full_tag_close'] = '</div>';
		$config['first_url'] = '';

		$_this->pagination->initialize($config);			
	}

}