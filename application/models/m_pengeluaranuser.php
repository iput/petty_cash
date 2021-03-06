<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class M_pengeluaranuser extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function insert_data($tabel_in, $data_in) {
        $result_in = $this->db->insert($tabel_in, $data_in);
        return $result_in;
    }
 
    public function get_pengeluaran_user($id) {
        $this->db->select('tb_user.username,tb_user.idUser, tb_project.namaProject, tb_project.settingAnggaran,tb_pengeluaran.idPengeluaran,tb_pengeluaran.tanggal,tb_pengeluaran.jumlahPengeluaran, tb_pengeluaran.namaPengeluaran');
        $this->db->from('tb_user');
        $this->db->join('tb_pengeluaran', 'tb_user.idUser=tb_pengeluaran.idUser');
        $this->db->join('tb_project', 'tb_project.idProject=tb_pengeluaran.idProject');
        $this->db->where('tb_user.idUser', $id);
        $hasil = $this->db->get();
        $data = $hasil->result_array();
        return $data;
    }

    public function get_base_project($id)
    {
        $this->db->select('tb_pengeluaran.idProject, tb_pengeluaran.jumlahPengeluaran, tb_pengeluaran.tanggal, tb_pengeluaran.namaPengeluaran');
        $this->db->from('tb_pengeluaran');
        $this->db->join('tb_user','tb_user.idUser=tb_pengeluaran.idUser');
        $this->db->where('tb_user.idUser', $id);
        $result = $this->db->get();

        $data = $result->result_array();
        return $data; 
    }

    public function count_pengeluaran($id)
    {
        $this->db->select('SUM(jumlahPengeluaran)');
        $this->db->from('tb_pengeluaran');
        $this->db->where('idUser', $id);
        $hasil = $this->db->get();

        $data = $hasil->result_array();
        return $data;

    }

    public function get_nama_project($id){
        $this->db->select('namaProject');
        $this->db->from('tb_project');
        $this->db->where('idProject', $id);
        $hasil = $this->db->get();
        $data = $hasil->result_array();
        return $data;
    }

    public function tampil_statistik($id) {
          $hasil = $this->db->query('select DATE_FORMAT(tanggal,"%m-%Y") AS bulan, SUM(jumlahPengeluaran) AS pengeluaran FROM tb_pengeluaran WHERE idUser='.$id.' GROUP BY date_format(tanggal,"%m")');
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $nilai) {
                $output[] = $nilai;
            }
            return $output;
        }
    }

    public function tampil_statistik_project($id)
    {
        $this->db->select('tb_pengeluaran.jumlahPengeluaran as pengeluaran_project, tb_project.namaProject as nama_project');
        $this->db->from('tb_pengeluaran');
        $this->db->join('tb_project', 'tb_pengeluaran.idProject = tb_project.idProject');
        $this->db->where('tb_pengeluaran.idUser', $id);
        $this->db->group_by('tb_pengeluaran.idProject');
        $hasil = $this->db->get();

        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $nilai) {
                $data[] = $nilai;
            }
            return $data;
        }
    }

    public function total_project($id){
        $hasil = $this->db->query('select tb_user.username, tb_project.namaProject, tb_project.anggaran, tb_project.settingAnggaran, SUM(tb_pengeluaran.jumlahPengeluaran) AS total_pengeluaran FROM tb_pengeluaran, tb_project, tb_user WHERE tb_pengeluaran.idUser = '.$id.' and tb_pengeluaran.idProject = tb_project.idProject and tb_pengeluaran.idUser = tb_user.idUser GROUP BY tb_pengeluaran.idProject');
      $data = $hasil->result_array();
        return $data;   
    }
}

?>