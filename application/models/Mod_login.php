<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Mod_login extends CI_Model {

    public function login($user, $pass) {
        $query = $this->db->query("select * from tb_user where username='" . $user . "' or email='".$user."' and password='" . $pass . "'");
         return $query->result_array();
    }
    public function getemail($username, $email){
        $query = $this->db->query("select idUser, username, email from tb_user where username = '".$username."' and email='".$email."'");
        return $query->result_array();
    }

    public function update_pass($password, $username, $email){
	$query = $this->db->query("update tb_user set password='".$password."' where username='".$username."' and email='".$email."'");

    }

    public function save_reset($tabel, $data){
    	$this->db->insert($tabel, $data);
        if ($this->db->affected_rows() > 0){
         return true;
        }
        else {
            return false;
        }
    }

    public function get_jamreset($idUser){
     $query = $this->db->query("select jam from tb_reset where idUser='" . $idUser . "'ORDER BY jam DESC LIMIT 1");
     return $query->result_array();	
    }


}
