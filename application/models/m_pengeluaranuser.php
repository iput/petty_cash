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

    public function get_pengeluaran_user($id)
    {
    	$this->db->select('tb_user.username,tb_user.idUser, tb_project.namaProject, tb_project.settingAnggaran,tb_pengeluaran.idPengeluaran,tb_pengeluaran.tanggal,tb_pengeluaran.jumlahPengeluaran, tb_pengeluaran.namaPengeluaran, tb_pengeluaran.jam');
    	$this->db->from('tb_user');
    	$this->db->join('tb_pengeluaran','tb_user.idUser=tb_pengeluaran.idUser');
    	$this->db->join('tb_project', 'tb_project.idProject=tb_pengeluaran.idProject');
    	$this->db->where("(tb_user.idUser='$id' OR tb_pengeluaran.idProject='is null')");
    	$hasil = $this->db->get();

    	$data = $hasil->result_array();

    	return $data;
    }

}

?>