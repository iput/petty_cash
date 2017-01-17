<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Gambar extends CI_Controller {

    private $datauser;

    function __construct() {
        parent::__construct();
        $this->load->helper(array('url', 'file'));
    }

    function index() {
        $data['js'] = base_url('assets/js');
        $data['css'] = base_url('assets/css');
        $data['img'] = base_url('assets/images');

        $this->load->view('gambar', $data);
    }

    function gambar_upload() {

        if (!empty($_FILES)) {
            $tempFile = $_FILES['file']['tmp_name'];
            $fileName = $_FILES['file']['name'];
            $fileType = $_FILES['file']['type'];
            $fileSize = $_FILES['file']['size'];
            $targetPath = './assets/uploads/';
            $targetFile = $targetPath . $fileName;

            move_uploaded_file($tempFile, $targetFile);

            $this->db->insert('img_dropzone', array('nama' => $fileName, 'tipe' => $fileType, 'ukuran' => $fileSize));
        }
    }

}

?>