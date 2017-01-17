<?php 
defined('BASEPATH')OR exit('No direct script access allowed');
/**
 * 
 */
 class M_project extends CI_Model
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function select_data($parameter="")
 	{
 		$data_project = $this->db->query("select * from tb_project ".$parameter);
 		return $data_project->result_array();
 	}

 	public function select_sisa($parameter)
 	{
 		$this->db->select('sisa');
 		$this->db->from('tb_project');
 		$this->db->where('idProject', $parameter);

 		$output = $this->db->get();
 		$result = $output->result_array();

 		return $result;
 	}

 	public function update_sisa($tabel, $data_sisa, $parameter)
 	{
 		$this->db->where('idProject', $parameter);
 		$this->db->update($tabel, $data_project);
 		if($this->db->affect_rows() > 0){
 			return true;
 		}else{
 			return false;
 		}
 	}

 	public function insert_data_project($tabel, $data_project)
 	{
 		$result = $this->db->insert($tabel, $data_project);
 		return $result;
 	}

 	public function update_data_project($tabel, $data_update, $parameter)
 	{
 		$result_update = $this->db->update($tabel, $data_update, $parameter);
 		return $result_update;
 	}

 	public function delete_data_project($tabel, $parameter)
 	{
 		$result_delete = $this->db->delete($tabel, $parameter);
 		return $result_delete;
 	}
 } ?>