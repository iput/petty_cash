<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

    function __construct() {
        parent::__construct();
    }
<<<<<<< HEAD
    public function select_data($username, $email)
    {
      $data = $this->db->query("select * from tb_user where username='".$username."' or email='".$email."'");
      return $data->result_array();
    }
    
=======

    public function select_data($where = "") {
        $data = $this->db->query("select * from tb_user " . $where);
        return $data->result_array();
    }

>>>>>>> 8aaa07b5e3bc1678e32fd51d80c213558669e2ca
    public function getAllUser($param = "") {
        $query = $this->db->query("SELECT * FROM tb_user " . $param);
        return $query->result_array();
    }

    public function addUser($tabel_in, $data_in) {
        $this->db->insert($tabel_in, $data_in);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function update_data($tabel_update, $data_update, $param) {
        $this->db->where('idUser', $param);
        $this->db->update($tabel_update, $data_update);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
//        return $data_update;
    }

    public function tampil_id($param) {
        $query = $this->db->query("SELECT * FROM tb_user WHERE idUser=" . $param);
        return $query->result_array();
    }

    public function delete_data($id) {
        $this->db->where('idUser', $id);
        $this->db->delete('tb_user');
        if ($this->db->affected_rows() > 0) {

            return TRUE;
        }
        return FALSE;
    }

}

?>
