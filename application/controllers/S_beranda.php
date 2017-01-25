<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class S_beranda extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_pengeluaranuser');
    }

    public function index() {
        if ($this->session->userdata('username') && $this->session->userdata('idUser')) {            
            $data_in['transaksi'] = $this->m_pengeluaranuser->get_pengeluaran_user($this->session->userdata('idUser'));
            $this->load->view('attribute/header_user');
            $this->load->view('user/u_beranda', $data_in);
            $this->load->view('attribute/footer_user');
//            echo json_encode($data_in);
        } else {
            $this->load->view('v_login');
        }
    }
    
    //gagal
//    public function index2(){
//        $data = $this->m_pengeluaranuser->get_pengeluaran_user($this->session->userdata('idUser'));
//        $idProject="";
//        $data_in['transaksi']="";
//        $jumlah="";
//        $namaProject="";
//        $tanggal="";
//        $keterangan="";
//        $jam="";
//        for ($i = 0; $i<count($data);$i++){
//        $idProject = $data['idProject'];
//        $jumlah = $data['jumlahPengeluaran'];
//        $tanggal = $data['tanggal'];
//        $jam = $data['jam'];
//        $keterangan = $data['namaPengeluaran'];
//        if ($idProject == NULL){
//            $namaProject ="Pribadi";
//        $data_in['transaksi']=$data_in['transaksi'].array(
//            "namaProject" =>$namaProject,
//            "jumlahPengeluaran" =>$jumlah,
//            "namaPengeluaran"=>$keterangan,
//            "tanggal" =>$tanggal,
//            "jam"=>$jam
//        );     
//        }
//        else{
//        $namaP = $this->m_pengeluaranuser->get_nama_project($idProject);
//        foreach ($namaP as $d){
//        $namaProject = $d['namaProject'];
//        }
//        $data_in['transaksi']=$data_in['transaksi'].array(
//            "namaProject" =>$namaProject,
//            "jumlahPengeluaran" =>$jumlah,
//            "namaPengeluaran"=>$keterangan,
//            "tanggal" =>$tanggal,
//            "jam"=>$jam
//        );
//        }
//        echo json_encode($data_in);
//        }
//        
//        
//    }

    public function cetak_pdf() {
        $data['transaksi'] = $this->m_pengeluaranuser->get_pengeluaran_user($this->session->userdata('idUser'));
        $data['jumlah'] = $this->m_pengeluaranuser->count_pengeluaran($this->session->userdata('idUser'));
        $this->load->view('data_master/user_pdf', $data);
    }


    public function cetak_xls()
    {
        $data['transaksi'] = $this->m_pengeluaranuser->get_pengeluaran_user($this->session->userdata('idUser'));
        $data['jumlah'] = $this->m_pengeluaranuser->count_pengeluaran($this->session->userdata('idUser'));
        $this->load->view('data_master/user_excel', $data);
    }

}

?>