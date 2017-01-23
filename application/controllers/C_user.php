<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class C_user extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_user');
    }

    public function index() {
        $data = $this->m_user->getAllUser();
        $this->load->view('attribute/header');
        $this->load->view('admin/v_user');
        $this->load->view('tabel/tabel_user', array('data_in' => $data));
        $this->load->view('attribute/footer');
    }

    public function getAllUser() {
        $data = $this->m_user->getAllUser();
        echo json_encode($data);
    }

    public function tampilid() {
        $id = $this->input->get('id');
        $data = $this->m_user->tampil_id($id);
        echo json_encode($data);
    }

    public function insert_registrasi($parameter) {

        if ($parameter == "simpan_data") {
            $post = $this->input->post();

            $data_user = $post['reg_username'];
            $data_email = $post['reg_email'];
            $data_password = $post['reg_password'];
            $data_level = "user";
            $data_in = array(
                "username" => $data_user,
                "email" => $data_email,
                "password" => $data_password,
                "level" => "user");
            $result = $this->m_user->addUser('tb_user', $data_in);

            if ($result >= 1) {
                redirect('c_registrasi/index');
            }
        } else {
            redirect('c_registrasi/index');
        }
    }

    public function addUser() {
        $field = array(
            'username' => $this->input->post('txt_username'),
            'email' => $this->input->post('txt_email'),
            'password' => $this->input->post('txt_password'),
            'level' => $this->input->post('combo_level')
        );
        $result = $this->m_user->addUser('tb_user', $field);
        $msg['success'] = FALSE;
        if ($result) {
            $msg['success'] = TRUE;
            redirect('C_user/index');
        }
        echo json_encode($msg);
    }

    public function do_delete($id) {
        $result = $this->m_user->delete_data($id);
        redirect('C_user/index');
    }

    public function edituser() {
        $id = $this->input->post('txt_id');
        $field = array(
            'username' => $this->input->post('txt_username'),
            'email' => $this->input->post('txt_email'),
            'password' => $this->input->post('txt_password'),
            'level' => $this->input->post('combo_level')
        );
        $result = $this->m_user->update_data('tb_user', $field, $id);
        if ($result) {
            redirect('c_user/index');
        }
    }

}
