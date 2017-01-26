<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class M_get extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function get_user() {
        $this->db->order_by('username', 'ASC');
        $this->db->select('idUser, username');
        $this->db->from('tb_user');
        $this->db->where('status', 'sudah terverifikasi');
        $username = $this->db->get();
        return $username->result_array();
    }

    public function get_project($id_user) {
        $project = "<option value='0'>Pilih Project</option>";

        $this->db->select('tb_project.namaProject, tb_project.idProject');
        $this->db->from('tb_project');
        $this->db->join('tb_data', 'tb_data.idProject=tb_project.idProject');
        $this->db->join('tb_user', 'tb_user.idUser=tb_data.idUser');
        $this->db->where("tb_user.idUser", $id_user);
        $data_project = $this->db->get();
        $hasil = $data_project->result_array();
        foreach ($hasil as $data) {
            $project.="<option value='$data[idProject]'>$data[namaProject]</option>";
        }
        return $project;
    }

    public function get_userproject($id) {


        // $this->db->order_by('idPengeluaran','ASC');
        // $data_project = $this->db->get_where('tb_pengeluaran',array('idUser'=>$id_user));
        $this->db->distinct();
        $this->db->select('tb_project.namaProject, tb_project.idProject');
        $this->db->from('tb_project');
        $this->db->join('tb_data', 'tb_data.idProject=tb_project.idProject');
        $this->db->join('tb_user', 'tb_user.idUser=tb_data.idUser');
        $this->db->where("tb_user.idUser", $id);
        $data_project = $this->db->get();
        return $data_project->result_array();
    }

}

?>
