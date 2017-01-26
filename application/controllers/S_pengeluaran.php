<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class S_pengeluaran extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_pengeluaranuser');
        $this->load->model('m_get');
        $this->load->model('m_project');
        $this->load->helper(array('form', 'url'));
    }

    public function index() {
        if ($this->session->userdata('username') && $this->session->userdata('idUser')) {
            $id = $this->session->userdata('idUser');
            $data_u['idUser'] = $this->m_get->get_userproject($id);
            $this->load->view('attribute/header_user');
            $this->load->view('user/u_pengeluaran', $data_u);
            $this->load->view('attribute/footer_user');
        } else {
            $this->load->view('v_login');
        }
    }

    public function get_data() {
        $modul = $this->input->post('modul');
        $id = $this->input->post('id');

        if ($modul == "user") {
            echo $this->m_get->get_project($id);
        }
    }

//UPLOAD FOTO NINDY
    public function insert_coba($parameter) {
        if ($parameter == "simpan_pengeluaranUser") {
            $sisa = "";
            $sisa2 = "";
            $config['upload_path'] = './gambar/';
            $config['allowed_types'] = 'bmp|jpg|png|jpeg';
            $config['max_size'] = '300';
            $config['max_width'] = '2000';
            $config['max_height'] = '2000';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('filefoto')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('pesan_gagal', '<span class="glyphicon glyphicon-warning-sign"></span>&nbsp;'.$error);
            } else {
                $idUser = $this->session->userdata('idUser');
                $gbr = $this->upload->data();
                $post = $this->input->post();
                date_default_timezone_set("Asia/Jakarta");
                $angka1 = $post['txtjml_uang'];
                $angka2 = str_replace("Rp. ", "", $angka1);
                $angka3 = str_replace(".", "", $angka2);
                $idProject = $post['nama_project'];
                if ($idProject == 0) {
                    $idProject = NULL;
                }

                $data_modal = array(
                    "idUser" => $idUser,
                    "idProject" => $idProject,
                    "namaPengeluaran" => $post['txt_keterangan'],
                    "jumlahPengeluaran" => $angka3,
                    "tanggal" => date("Y-m-d H:i:s"),
                    "foto" => $gbr['file_name']
                );

                $dt_sisa = $this->m_project->select_sisa($idProject);
                foreach ($dt_sisa as $d) {
                    $sisa = $d['sisa'];
                }

                $sisa2 = $sisa - $angka3;

                $sisa_update = array(
                    "sisa" => $sisa2
                );

                if ($idProject == NULL) {
                    $result = $this->m_pengeluaranuser->insert_data('tb_pengeluaran', $data_modal);
                    $this->session->set_flashdata('msg', '<span class="glyphicon glyphicon-ok"></span>&nbsp;Data Berhasil Disimpan');
                    redirect('S_setting');
                } else if ($sisa < 0 && $idProject != NULL) {
                    $this->session->set_flashdata('pesan_gagal', '<span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Uang Anda Tidak Cukup');
                    redirect('S_pengeluaran');
                } else {
                    $this->m_pengeluaranuser->insert_data('tb_pengeluaran', $data_modal);
                    $this->m_project->update_sisa('tb_project', $sisa_update, $idProject);
                    $this->session->set_flashdata('msg', '<span class="glyphicon glyphicon-ok"></span>&nbsp;Data Berhasil Disimpan dan sisa uang project anda adalah'.$sisa2);
                    redirect('S_beranda/index');
                }
            }
        }
    }

}

?>