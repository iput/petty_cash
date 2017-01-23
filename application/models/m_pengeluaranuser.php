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

}

?>