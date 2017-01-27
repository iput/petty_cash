 <?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class M_statistik extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function report() {
        $hasil = $this->db->query('select date_format(tanggal,"%m") as bulan, sum(jumlahPengeluaran) as pengeluaran from tb_pengeluaran group by date_format(tanggal,"%m")');
        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $nilai) {
                $data[] = $nilai;
            }
            return $data;
        }
    }

    public function get_projectP()
    {
        $this->db->select('tb_pengeluaran.jumlahPengeluaran as pengeluaran_p, tb_project.namaProject as project_p');
        $this->db->from('tb_pengeluaran');
        $this->db->join('tb_project', 'tb_pengeluaran.idProject=tb_project.idProject');
        $this->db->group_by('tb_pengeluaran.idProject');
        $hasil = $this->db->get();

        if ($hasil->num_rows() > 0) {
            foreach ($hasil->result() as $nilai) {
                $data[] = $nilai;
            }
            return $data;
        }
    }

}

?>