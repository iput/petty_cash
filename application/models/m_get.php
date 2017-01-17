<?php
defined('BASEPATH')OR exit('No direct script access allowed');

/**
 *
 */
 class M_get extends CI_Model
 {



 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function get_user()
 	{
 		$this->db->order_by('username','ASC');
 		$username = $this->db->get('tb_user');

 		return $username->result_array();
 	}
 
 	public function get_project($id_user)
 	{
 		$project = "<option value='0'>Pilih Project</option>";

 		$this->db->select('tb_project.namaProject, tb_project.idProject');
 		$this->db->from('tb_project');
 		$this->db->join('tb_data','tb_data.idProject=tb_project.idProject');
 		$this->db->join('tb_user','tb_user.idUser=tb_data.idUser');
 		$this->db->where("tb_user.idUser",$id_user);
 		$data_project = $this->db->get();
 		$hasil = $data_project->result_array();
 		foreach ($hasil as $data) {
 			$project.="<option value='$data[idProject]'>$data[namaProject]</option>";
 		}
 		return $project;
 	}
 	
 } ?>
