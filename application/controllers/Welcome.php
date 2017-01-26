<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    /**
     *
     */
    function __construct() {
        parent::__construct();
        $this->load->model('m_user');
        $this->load->model('Mod_login');
        $this->load->library('form_validation');
        date_default_timezone_set("Asia/Jakarta");
    }

    public function index() {
//load pertama kali
        if ($this->session->userdata('username') && $this->session->userdata('idUser')) {

            $data = $this->m_user->getAllUser();

            $this->load->view('attribute/header');
            $this->load->view('admin/v_index', array('data' => $data));
            $this->load->view('attribute/footer');
        } else {
            $this->load->view('v_login');
        }
    }

    public function kodeunik($panjang) {
        //membuat kode unik untuk reset email
        $karakter = 'ABCDEfghijkLMNO1234567';
        $string = '';
        for ($i = 0; $i < $panjang; $i++) {
            $pos = rand(0, strlen($karakter) - 1);
            $string .= $karakter{$pos};
        }
        return $string;
    }

    public function reset_password($parameter) {
        //Explode Parameter
        $email = '';
        $code = '';
        $hasil = '';
        $jam = '';
        $param = (explode('_', $parameter));
        //ambil parameter
        for ($i = 0; $i < count($param); $i++) {
            $email = str_replace('-', '@', $param[0]);
            $code = $param[1];
        }
        //ambil jam sekarang di server
        $jamskr = gmdate("H:i:s", time() + 60 * 60 * 7);
        //membandingkan data dengan database
        $data = $this->Mod_login->get_jamreset($email, $code);
        foreach ($data as $d) {
            $jam = $d['jam'];
        }
        //pengurangan jam
        $hasil = strtotime($jamskr) - strtotime($jam);
        //hasil dalam bentuk seconds
        if ($hasil <= 3600) {
            $this->session->set_userdata('email', $email);
            $this->session->set_userdata('code', $code);
            $this->load->view('reset_password');
        } else {
            $this->load->view('welcome_message');
        }
    }

//RESET PASSWORD

    public function send_email() {
        $hemail = '';
        $hstatus = '';
        $code = $this->kodeunik(5);
        $to_email = $this->input->post('txt_email');
        $email = str_replace('@', '-', $to_email);
        $data = $this->Mod_login->getemail($to_email);
        foreach ($data as $d) {
            $hstatus = $d['status'];
            $hemail = $d['email'];
        }

        if ($to_email == $hemail && $hstatus=='sudah terverifikasi') {
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
            $message = '<b>Link Reset Password Aplikasi Petty Cash</b><br/> '.'<a href="' . base_url() . 'Welcome/reset_password/' . $email . '_' . $code . '">Klik Disini untuk reset password<a/>';
            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");
            $this->email->from('gangsantri26@gmail.com'); // change it to yours
            $this->email->to($to_email); // change it to yours
            $this->email->subject('Reset Password Petty Cash');
            $this->email->message($message);
            if ($this->email->send()) {
                $field = array(
                    'email' => $to_email,
                    'code' =>$code,
                    'jam' => gmdate("H:i:s", time() + 60 * 60 * 7)
                );
                $this->Mod_login->save_reset('tb_reset', $field);
                $this->session->set_flashdata('msg', '<span class="glyphicon glyphicon-ok"></span>&nbsp;Email Berhasil Terkirim');
            } else {
                $this->session->set_flashdata('gagal', '<span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Email gagal dikirim');
            }
        }
        else if ($to_email == $hemail && $hstatus=='belum terverifikasi'){
            $this->session->set_flashdata('gagal', '<span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Anda Belum Verifikasi Akun');
        }
        
        else {
            $this->session->set_flashdata('gagal', '<span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Masukkan Data yang benar');
        }
    }

    public function action_reset() {
        $hcode = '';
        $hemail = '';
        
        $this->form_validation->set_rules('password1', 'Password', 'required|min_length[8]|max_length[15]');
        $this->form_validation->set_rules('password2', 'Confirmation Password', 'required|min_length[8]|max_length[15]|matches[password1]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('reset_password');
            $this->session->set_flashdata('gagal', '<span class="glyphicon glyphicon-warning-sign"></span>&nbsp;'.  validation_errors());
            echo validation_errors();
        } else {
            $email = $this->session->userdata('email');
            $code = $this->session->userdata('code');
            $pass = $this->input->post('password1');
            $data = $this->Mod_login->get_jamreset($email, $code);
            foreach ($data as $d) {
                $hcode = $d['code'];
                $hemail = $d['email'];
            }
            if ($hcode == $code && $hemail == $email) {
                $this->Mod_login->update_pass($pass, $email);
                $this->session->set_flashdata('msg', '<span class="glyphicon glyphicon-ok"></span>&nbsp;Password Berhasil Direset');
                $this->load->view('v_login');
            } else {
                $this->session->set_flashdata('gagal', '<span class="glyphicon glyphicon-warning-sign"></span>&nbsp;Data Anda Salah');
            }
        }
    }

}
