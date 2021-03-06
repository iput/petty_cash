<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class C_Project extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model(array('m_project', 'm_user', 'm_get'));
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

    public function tampil_id() {
        $id = $this->input->get('id');
        $data = $this->m_project->tampil_id($id);
        echo json_encode($data);
    }

    public function user_project() {
        if ($this->session->userdata('username') && $this->session->userdata('idUser')) {
            $data['idProject'] = $this->m_project->get_namaproject();
            $data['idUser'] = $this->m_get->get_user();            
            $this->load->view('attribute/header');
            $this->load->view('admin/v_Uproject', $data);
            $this->load->view('attribute/footer');
        } else {
            $this->load->view('v_login');
        }
    }

    public function insert_tbdata() {
        $post = $this->input->post();
        $idUser = $post['nilai'];
        $banyak = count($idUser);
        $idProject = $post['combo_level'];
        
        for ($i = 0; $i< $banyak; $i++){
        $field = array(
          'idProject' => $idProject,
          'idUser' => $idUser[$i]
        );
        $result = $this->m_user->addUser('tb_data', $field);   
        }
        
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
            $namaProject = $post['txt_nm_project'];
            $nmProject = $this->m_project->get_nmProject($namaProject);
            
            if ($nmProject){
            $this->session->set_flashdata('pesan_gagal', '&nbsp;<span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Nama Project sudah Ada');
                redirect('C_project');    
            }
            else{
            $settingAnggaran = $post['combo_anggaran'];
            
            if ($settingAnggaran == null) {
                $settingAnggaran = 'harian';
            }
            $data_in = array(
                'namaProject' => $namaProject,
                'anggaran' => $post['txt_anggaran'],
                'settingAnggaran' => $settingAnggaran,
                'sisa' => $post['txt_anggaran']);
            $result = $this->m_project->insert_data_project('tb_project', $data_in);
            if ($result >= 0) {
                $this->session->set_flashdata('msg', '&nbsp;<span class="glyphicon glyphicon-ok"></span>&nbsp;Data Berhasil Ditambahkan');
                redirect('C_project');
            }
            else{
            $this->session->set_flashdata('pesan_gagal', '&nbsp;<span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Data Gagal Ditambahkan');
            redirect('C_project');    
            }
            }
        }
    }

    public function update_project() {
        $id_project = $this->input->post('id_project');
        $post = $this->input->post();
            $namaProject = $post['edit_nama_project'];
            $nmProject = $this->m_project->get_nmProject($namaProject);
            if ($nmProject){
            $this->session->set_flashdata('pesan_gagal', '&nbsp;<span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Nama Project sudah Ada');
                redirect('C_project');    
            }
            else{
        $data_update = array(
            'namaProject' => $namaProject,
            'anggaran' => $this->input->post('edit_jumlah_anggaran'),
            'settingAnggaran' => $this->input->post('edit_seting_anggaran'),
            'sisa' => $this->input->post('edit_jumlah_anggaran')
            );

        $result = $this->m_project->update_data_project('tb_project', $data_update, $id_project);
        if ($result >= 0) {
            $this->session->set_flashdata('pesan_update', '&nbsp;<span class="glyphicon glyphicon-ok"></span>&nbsp;Data Berhasil Diperbarui');
            redirect('C_project');
        }
        else{
            $this->session->set_flashdata('pesan_gagal', '&nbsp;<span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Data Gagal Diperbarui');
            redirect('C_project');
        }
        }
    }

    public function delete_project($id) {
        $id = array('idProject' => $id);
        $data = $this->m_project->delete_data_project('tb_project', $id);

        if ($data >= 1) {
            $this->session->set_flashdata('msg_hapus', '&nbsp;<span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Data Berhasil Dihapus');
            redirect(C_project);
                    
        }
        else{
            $this->session->set_flashdata('pesan_gagal', '&nbsp;<span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Data Gagal Disimpan');
            redirect('C_project');
        }
    }

}

?>