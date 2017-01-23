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

    // public function do_insert_pengeluaran($parameter) {
    //     $idUser = $this->session->userdata('idUser');
    //     $nmfile = "file_" . time(); //nama file saya beri nama langsung dan diikuti fungsi time
    //     $config['upload_path'] = './assets/uploads/'; //path folder
    //     $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
    //     $config['max_size'] = '2048'; //maksimum besar file 2M
    //     $config['max_width'] = '1288'; //lebar maksimum 1288 px
    //     $config['max_height'] = '768'; //tinggi maksimu 768 px
    //     $config['file_name'] = $nmfile; //nama yang terupload nantinya
    //     $this->load->library('upload', $config);
    //     if ($parameter == "simpan_pengeluaranUser") {
    //         if ($_FILES['filefoto']['name']) {
    //             if ($this->upload->do_upload('filefoto')) {                    
    //             $gbr = $this->upload->data();
    //             $post = $this->input->post();
    //             date_default_timezone_set("Asia/Jakarta");
    //             $angka1 = $post['txtjml_uang'];
    //             $angka2 = str_replace("Rp. ", "", $angka1);
    //             $angka3 = str_replace(".", "", $angka2);
    //             $data_modal = array(
    //             "idUser" => $idUser,
    //             "idProject" => $post['nama_project'],
    //             "namaPengeluaran" => $post['txt_keterangan'],
    //             "jumlahPengeluaran" => $angka3,
    //             "jam" => date("H:i:s"),
    //                     "tanggal" => date("Y-m-d"),
    //                     "foto" => $gbr['file_name']
    //                         );
    //                 $result = $this->m_pengeluaranuser->insert_data('tb_pengeluaran', $data_modal);
    //                 if ($result >= 1) {
    //                     redirect('S_beranda/index');
    //                 } else {
    //                     echo 'error';
    //                 }
    //             }
    //         }
    //     } else {
    //         echo 'gagal';
    //     }
    // }

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
            $config['max_size'] = 200;
            $config['max_width'] = 1024;
            $config['max_height'] = 768;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('filefoto')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('welcome_message', $error);
            } else {
                $idUser = $this->session->userdata('idUser');
                $gbr = $this->upload->data();
                $post = $this->input->post();
                date_default_timezone_set("Asia/Jakarta");
                $angka1 = $post['txtjml_uang'];
                $angka2 = str_replace("Rp. ", "", $angka1);
                $angka3 = str_replace(".", "", $angka2);
                $data_modal = array(
                    "idUser" => $idUser,
                    "idProject" => $post['nama_project'],
                    "namaPengeluaran" => $post['txt_keterangan'],
                    "jumlahPengeluaran" => $angka3,
                    "jam" => date("H:i:s"),
                    "tanggal" => date("Y-m-d"),
                    "foto" => $gbr['file_name']
                );

                $result = $this->m_pengeluaranuser->insert_data('tb_pengeluaran', $data_modal);

                if ($result >= 1) {
                    redirect('S_beranda/index');
                } else {
                    echo 'error';
                }
            }
        }
    }

}

?>