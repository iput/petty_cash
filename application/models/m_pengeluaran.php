<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class M_pengeluaran extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    // seting edit data
    public function tampil_id($param) {
        $query = $this->db->query("SELECT * FROM tb_pengeluaran WHERE idPengeluaran=" . $param);
        return $query->result_array();
    }

    //  untuk setting pengeluaran
    public function select_data() {
        $this->db->select('tb_user.username,tb_pengeluaran.idProject,
                            tb_pengeluaran.namaPengeluaran,tb_pengeluaran.jumlahPengeluaran,
        					tb_pengeluaran.tanggal,tb_pengeluaran.idPengeluaran');
        $this->db->from('tb_user');
        $this->db->join('tb_pengeluaran', 'tb_user.idUser=tb_pengeluaran.idUser');
        $hasil = $this->db->get();

        $data_in = $hasil->result_array();

        return $data_in;
    }

    public function insert_pengeluaran($tabel, $data_pengeluaran) {
        $data_in = $this->db->insert($tabel, $data_pengeluaran);

        return $data_in;
    }

    public function update_pengeluaran($tabel, $pengeluaran_update, $parameter) {
        $this->db->where('idPengeluaran', $parameter);
        $this->db->update($tabel, $pengeluaran_update);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function delete_pengeluaran($tabel, $parameter) {
        $data_delete = $this->db->delete($tabel, $parameter);
        return $data_delete;
    }

}

?>
