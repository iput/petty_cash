<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class C_Project extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_project');
    }

    public function index() {
        if ($this->session->userdata('username') && $this->session->userdata('idUser')) {

            $data['project'] = $this->m_project->select_data();
            $this->load->view('attribute/header');
            $this->load->view('admin/v_project');
            $this->load->view('tabel/tabel_project', $data);
            $this->load->view('attribute/footer');
        } else {
            $this->load->view('v_login');
        }
    }

    public function user_project() {
        if ($this->session->userdata('username') && $this->session->userdata('idUser')) {
            $data['idProject'] = $this->m_project->get_namaproject();
            $user = $this->m_user->getAllUser();
            $this->load->view('attribute/header');
            $this->load->view('admin/v_Uproject', $data);
            $this->load->view('tabel/tabel_Uproject', array('user' => $user));
            $this->load->view('attribute/footer');
        } else {
            $this->load->view('v_login');
        }
    }

    public function insert_tbdata() {
        $field = array(
            'idProject' => $this->input->post('idProject'),
            'idUser' => $this->input->post('idUser')
        );
        $result = $this->m_user->addUser('tb_data', $field);
        $msg['success'] = FALSE;
        if ($result) {
            $msg['success'] = TRUE;
            redirect('C_project/user_project');
        }
        echo json_encode($msg);
    }

    public function insert_project($parameter) {

        if ($parameter == "simpan_project") {
            $post = $this->input->post();
            $data_in = array(
                'namaProject' => $post['txt_nm_project'],
                'anggaran' => $post['txt_anggaran'],
                'settingAnggaran' => $post['combo_anggaran'],
                'sisa' => $post['txt_sisa_angg']);
            $result = $this->m_project->insert_data_project('tb_project', $data_in);
            if ($result >= 0) {
                redirect('C_project');
            }
        }
    }

    public function delete_project($id) {
        $id = array('idProject' => $id);
        $data = $this->m_project->delete_data_project('tb_project', $id);

        if ($data >= 1) {
            redirect(C_project);
        }
    }

}

?>