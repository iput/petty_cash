<?php 
defined('BASEPATH')OR exit('No direct script access allowed');
/**
 * 
 */
 class M_statistik extends CI_Model
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function report()
 	{
 		$hasil = $this->db->query('select jumlahPengeluaran, tanggal from tb_pengeluaran');
 		if ($hasil->num_rows() > 0) {
 			foreach ($hasil->result() as $nilai) {
 				$data[]= $nilai;
 			}
 			return $data;
 		}
 		
 	}

 } ?>