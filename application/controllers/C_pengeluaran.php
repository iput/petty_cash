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

       if ($this->session->userdata('username') && $this->session->userdata('idUser')){
        $data_u['idUser'] = $this->m_get->get_user();
        $data_tampil['pengeluaran'] = $this->m_pengeluaran->select_data();

        $this->load->view('attribute/header');
        $this->load->view('admin/v_pengeluaran', $data_u);
        $this->load->view('tabel/tabel_pengeluaran', $data_tampil);
        $this->load->view('attribute/footer');
        }
        else{
          $this->load->view('v_login');
        }
    }

    public function tampilid()
    {
      $id = $this->input->get('id');
      $data = $this->m_pengeluaran->tampil_id($id);
      echo json_encode($data);
    }

    public function get_data()
    {
     $modul = $this->input->post('modul');
     $id = $this->input->post('id');

     if($modul == "user"){
        echo $this->m_get->get_project($id);
     }
    }

    public function insert_pengeluaran($do_insert)
    {
      if ($do_insert == "simpan_pengeluaran") {

          $post = $this->input->post();

          $n_pengeluaran = $post['txt_nilai_pengeluaran'];
          $id_user = $post['combo_pengguna'];
          $id_project = $post['combo_kategori'];
          $nama_pengeluaran = $post['txt_keterangan'];

          if ($id_project <= 0) {
            $id_project = null;
          }

          $data_in = array(
            "idUser" => $id_user,
            "idProject" => $id_project,
            "jumlahPengeluaran" => $n_pengeluaran,
            "namaPengeluaran" => $nama_pengeluaran,
            "tanggal" => date('Y-m-d'),
            "jam" => date('H:i:s'),
            "foto" => "data");

          $result = $this->m_pengeluaran->insert_pengeluaran('tb_pengeluaran', $data_in);

          if ($result >= 1) {
            redirect('C_pengeluaran/index');
          }else{
            return FALSE;
          }
        }
    }

    public function update_pengeluaran()
    {
          $id_pengeluaran = $this->input->post('id_data_pengeluaran');
          $data_update = array(
            'idUser' => $this->input->post('edit_nama_user'),
            'idProject' => $this->input->post('edit_nama_project'),
            'namaPengeluaran' => $this->input->post('edit_keterangan_pengeluaran'),
            'jumlahPengeluaran' => $this->input->post('edit_nilai_pengeluaran'),
            'tanggal' => date('Y-m-d'),
            'jam' =>  date('H:i:s'),
            'foto' =>"data");
            $hasil = $this->m_pengeluaran->update_pengeluaran('tb_pengeluaran', $data_update, $id_pengeluaran);

            if ($hasil) {
              redirect('C_pengeluaran/index');
            }

    }

    public function delete_pengeluaran($parameter)
    {
      $parameter = array('idPengeluaran'=>$parameter);

      $data = $this->m_pengeluaran->delete_pengeluaran('tb_pengeluaran',$parameter);

      if($data >= 1){
        redirect('C_pengeluaran/index');
      }
    }

    public function cetak_excel()
    {
      $data['master_pengeluaran'] = $this->m_pengeluaran->select_data();

      $this->load->view('data_master/master_pengeluaran', $data);

    }
    public function cetak_pdf()
    {
      $data['master_pdf'] = $this->m_pengeluaran->select_data();
      $this->load->view('data_master/master_pengeluaran_pdf', $data);
    }
  }

?>
