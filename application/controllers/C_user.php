<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class C_user extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_user');
        $this->load->library('randomPassword');
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
            $this->randomPassword->acakpass();
            $data_user = $post['reg_username'];
            $data_email = $post['reg_email'];
            $data_password = $post['reg_password'];
            $data_level = "user";
            $data = $this->m_user->select_data($data_user, $data_email);
            if ($data) {
                $this->load->view('welcome_message');
            } else {
                $data_in = array(
                    "username" => $data_user,
                    "email" => $data_email,
                    "password" => $data_password,
                    "level" => "user");
                $result = $this->m_user->addUser('tb_user', $data_in);

                if ($result >= 1) {
                    redirect('c_registrasi/index');
                }
            }
        } else {
            redirect('c_registrasi/index');
        }
    }
    
     public function acakpass($panjang)
        {
    $karakter= 'NINDYagustina123456789';
    $string = '';
    for ($i = 0; $i < $panjang; $i++) {
    $pos = rand(0, strlen($karakter)-1);
    $string .= $karakter{$pos};
    }
    return $string;
        }
        
    public function addUser() {
        $username = $this->input->post('txt_username');
        $email = $this->input->post('txt_email');
        $password = $this->acakpass(8);
        $data = $this->m_user->select_data($username, $email);
        echo json_encode($data);
        if ($data) {
            $this->load->view('welcome_message');
        } else {
            $field = array(
                'username' => $username,
                'email' => $email,
                'password' => $password,
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
