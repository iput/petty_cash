<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class C_user extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_user');
        $this->load->library('randomPassword');
    }

    public function index() {
        $data = $this->m_user->getAllUser();
        $this->load->view('attribute/header');
        $this->load->view('admin/v_user');
        $this->load->view('tabel/tabel_user', array('data_in' => $data));
        $this->load->view('attribute/footer');
    }

    public function getAllUser() {
        $data = $this->m_user->getAllUser();
        echo json_encode($data);
    }

    public function tampilid() {
        $id = $this->input->get('id');
        $data = $this->m_user->tampil_id($id);
        echo json_encode($data);
    }

    public function acakpass($panjang) {
        $karakter = 'NINDYagustina123456789';
        $string = '';
        for ($i = 0; $i < $panjang; $i++) {
            $pos = rand(0, strlen($karakter) - 1);
            $string .= $karakter{$pos};
        }
        return $string;
    }

    public function acakcode($panjang) {
        $karakter = 'NiNdYOzoRa123456789';
        $string = '';
        for ($i = 0; $i < $panjang; $i++) {
            $pos = rand(0, strlen($karakter) - 1);
            $string .= $karakter{$pos};
        }
        return $string;
    }

    public function addUser() {
        $username = $this->input->post('txt_username');
        $email = $this->input->post('txt_email');
        $password = $this->acakpass(8);
        $kode = $this->acakcode(5);
        $data = $this->m_user->select_data($username, $email);
        echo json_encode($data);
        if ($data) {
            $this->load->view('welcome_message');
        } else {
            $config = array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => 'gangsantri26@gmail.com', // change it to yours
                'smtp_pass' => 'jelajah123', // change it to yours
                'mailtype' => 'html',
                'charset' => 'iso-8859-1',
                'wordwrap' => TRUE
            );
            $message = '<b>Pendaftaran akun Petty Cash</b><br/>'
                    . '<b>Username : </b>' . $username . '<br/>'
                    . '<b>Password : </b>' . $password . '<br/>'
                    . '<b>Kode Verifikasi : </b>' . $kode . '<br/>'
                    . '<a href="' . base_url() . 'c_verifikasi/index/' . $username . '">Klik Link Ini untuk Verifikasi Akun Anda</a>';
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->email->from('gangsantri26@gmail.com'); // change it to yours
            $this->email->to($email); // change it to yours
            $this->email->subject('Verifikasi Akun Petty Cash');
            $this->email->message($message);
            if ($this->email->send()) {
                $field = array(
                    'username' => $username,
                    'email' => $email,
                    'password' => $password,
                    'level' => $this->input->post('combo_level'),
                    'kode_verifikasi'=>$kode,
                    'status'=>'belum terverifikasi'
                );
//                $this->Mod_login->save_reset('tb_reset', $field);
//                echo 'Email Sent';
                $result = $this->m_user->addUser('tb_user', $field);
                $msg['success'] = FALSE;
                if ($result) {
                    $this->session->set_flashdata('msg', '<span class="glyphicon glyphicon-ok"></span>&nbsp;Data Baru Berhasil Ditambahkan');
                    $msg['success'] = TRUE;
                    redirect('C_user/index');
                }
                echo json_encode($msg);
            } else {
                show_error($this->email->print_debugger());
            }
        }
    }

    public function do_delete($id) {
        $result = $this->m_user->delete_data($id);
        if ($result>= 1) {
            $this->session->set_flashdata('msg_hapus','<span class="glyphicon glyphicon-ok"></span>&nbsp;Data Berhasil dihapus');
            redirect('C_user/index');
        }
        
    }

    public function edituser() {
        $id = $this->input->post('edit_txt_id');
        $field = array(
            'username' => $this->input->post('edit_txt_username'),
            'email' => $this->input->post('edit_txt_email'),
            'level' => $this->input->post('edit_combo_level')
        );
        $result = $this->m_user->update_data('tb_user', $field, $id);
        if ($result>=0) {
            $this->session->set_flashdata('pesan_update', '<span class="glyphicon glyphicon-ok"></span>&nbsp;Berhasil Diperbarui');

            redirect('c_user/index');
        }else{
            $this->session->set_flashdata('pesan_gagal', '<span class="glyphicon glyphicon-remove"></span>&nbsp;Data Gagal Diupdate');
            redirect('c_user/index');
        }
    }
}
