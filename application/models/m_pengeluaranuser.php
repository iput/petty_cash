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
          $hasil = $this->db->query('select date_format(tanggal,"%m") as bulan, sum(jumlahPengeluaran) as pengeluaran from tb_pengeluaran where idUser='.$id.' group by date_format(tanggal,"%m")');
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $nilai) {
                $data[] = $nilai;
            }
            return $data;
        }
    }
}

?>