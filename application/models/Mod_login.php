<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Mod_login extends CI_Model {

    public function login($user, $pass, $level) {
        $query = $this->db->query("select idUser, username, password, level from tb_user where username='" . $user . "' and password='" . $pass . "'and level='" . $level . "'");
         return $query->result_array();
    }
    public function getemail($email){
        $query = $this->db->query("select email from tb_user where email='".$email."'");
        return $query->result_array();
    }

}
