<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class C_pengeluaran extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_pengeluaran');
        $this->load->model('m_project');
        $this->load->model('m_get');
        $this->load->helper('form');
        $this->load->helper(array('url'));
        $this->load->library('upload');
        date_default_timezone_set("Asia/Jakarta");
    }

    public function index() {

        if ($this->session->userdata('username') && $this->session->userdata('idUser')) {
            $data_u['idUser'] = $this->m_get->get_user();
            $data_tampil['pengeluaran'] = $this->m_pengeluaran->select_data();

            $this->load->view('attribute/header');
            $this->load->view('admin/v_pengeluaran', $data_u);
            $this->load->view('tabel/tabel_pengeluaran', $data_tampil);
            $this->load->view('attribute/footer');
        } else {
            $this->load->view('v_login');
        }
    }

    public function tambah_pengeluaran()
    {
        $data_u['idUser'] = $this->m_get->get_user();
        $data_tampil['pengeluaran'] = $this->m_pengeluaran->select_data();
        $this->load->view('attribute/header');
        $this->load->view('admin/v_add_pengeluaran', $data_u);
        $this->load->view('attribute/footer');
    }

    public function tampilid() {
        $id = $this->input->get('id');
        $data = $this->m_pengeluaran->tampil_id($id);
        echo json_encode($data);
    }

    public function get_data() {
        $modul = $this->input->post('modul');
        $id = $this->input->post('id');

        if ($modul == "user") {
            echo $this->m_get->get_project($id);
        }
    }

    public function update_pengeluaran() {
        $id_pengeluaran = $this->input->post('id_data_pengeluaran');
        $data_update = array(
            'idUser' => $this->input->post('edit_nama_user'),
            'idProject' => $this->input->post('edit_nama_project'),
            'namaPengeluaran' => $this->input->post('edit_keterangan_pengeluaran'),
            'jumlahPengeluaran' => $this->input->post('edit_nilai_pengeluaran'),
            'tanggal' => date('Y-m-d'),
            'jam' => date('H:i:s'),
            'foto' => "data");
        $hasil = $this->m_pengeluaran->update_pengeluaran('tb_pengeluaran', $data_update, $id_pengeluaran);

        if ($hasil>=0) {
            redirect('C_pengeluaran/index');
        }
    }

    public function delete_pengeluaran($parameter) {
        $parameter = array('idPengeluaran' => $parameter);

        $data = $this->m_pengeluaran->delete_pengeluaran('tb_pengeluaran', $parameter);

        if ($data >= 1) {
            redirect('C_pengeluaran/index');
        }
    }

    public function cetak_excel() {
        $data['master_pengeluaran'] = $this->m_pengeluaran->select_data();

        $this->load->view('data_master/master_pengeluaran', $data);
    }

    public function cetak_pdf() {
        $data['master_pdf'] = $this->m_pengeluaran->select_data();
        $this->load->view('data_master/master_pengeluaran_pdf', $data);
    }

    public function insert_pengeluaran()
    {
        $this->form_validation->set_rules('txt_nilai_pengeluaran','Jumlah Pengeluaran', 'required');   
        $this->form_validation->set_rules('txt_keterangan','Nama Pengeluaran', 'required'); 
        $this->form_validation->set_rules('combo_pengguna','Pengguna Pengeluaran', 'required');     

        if($this->form_validation->run() == FALSE){
            redirect('C_pengeluaran/tambah_pengeluaran');
        }else{
            
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|png|bmp';
            $config['max_size'] = '300';
            $config['max_width'] = '2000';
            $config['max_height'] = '2000';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('userfile')) {
                echo $this->upload->display_errors();
            }else{
                $gambar = $this->upload->data();
                $data_update = array(
                'idUser' => $this->input->post('edit_nama_user'),
                'idProject' => $this->input->post('edit_nama_project'),
                'namaPengeluaran' => $this->input->post('edit_keterangan_pengeluaran'),
                'jumlahPengeluaran' => $this->input->post('edit_nilai_pengeluaran'),
                'tanggal' => date('Y-m-d'),
                'jam' => date('H:i:s'),
                'foto' => $gambar['file_name']);
                $this->m_pengeluaran->insert_pengeluaran('tb_pengeluaran', $data_update);
                redirect('C_pengeluaran');
            }
        }
    }

}

?>
