<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
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
	function __construct()
		{
			parent::__construct();
			$this->load->model('m_user');
			$this->load->model('Mod_login');
			$this->load->library('form_validation');
			date_default_timezone_set("Asia/Jakarta");
		}

	public function index()
	{

		if ($this->session->userdata('username') && $this->session->userdata('idUser')){

		$data = $this->m_user->select_data();

		$this->load->view('attribute/header');
		$this->load->view('admin/v_index', array('data'=>$data));
		$this->load->view('attribute/footer');
		}
        else {
            $this->load->view('v_login');
        }
	}

	public function reset_password($idUser){
		$hasil ='';
		$jam = '';
		$jamskr = date("H:i:s"); 
		$data = $this->Mod_login->get_jamreset($idUser);
		foreach ($data as $d) {
			$jam = $d['jam'];
		}
		$hasil = strtotime($jamskr) - strtotime($jam);
		//hasil dalam bentuk seconds
		if ($hasil <= 200){
		$this->load->view('reset_password');	
		}
		else{
		$this->load->view('welcome_message');	
		}
		
	}
//RESET PASSWORD

	public function send_email(){
		$huser=''; 
		$hemail='';
		$idUser='';
		$user = $this->input->post('txt_username');
		$to_email = $this->input->post('txt_email');

		$data = $this->Mod_login->getemail($user, $to_email);
		foreach ($data as $d) {
			$idUser = $d['idUser'];
			$huser = $d['username'];
			$hemail = $d['email'];
		}

		if ($user == $huser && $to_email == $hemail){
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
		$message = 'klik disini untuk reset password '. base_url('Welcome/reset_password/'.$idUser);
        $this->load->library('email', $config);
      	$this->email->set_newline("\r\n");
      	$this->email->from('gangsantri26@gmail.com'); // change it to yours
      	$this->email->to($to_email);// change it to yours
      	$this->email->subject('Reset Password Petty Cash');
      	$this->email->message($message);
      			if($this->email->send())
     		{
     			$field = array(
     				'idUser' => $idUser,
     				'jam' => date("H:i:s")
     				);
      			$this->Mod_login->save_reset('tb_reset', $field);
      			echo 'Email Sent';
     		}
     			else
    		{
     			show_error($this->email->print_debugger());
    		}			
		}
		else{
			echo "Masukkan Data yang benar";
		}
		
		}

		public function action_reset(){
			$huser = '';
			$hemail = '';
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|min_length[5]|max_length[125]');
			$this->form_validation->set_rules('password1', 'Password', 'required|min_length[5]|max_length[15]');
			$this->form_validation->set_rules('password2', 'Confirmation Password', 'required|min_length[5]|max_length[15]|matches[password1]' );
			
			if ($this->form_validation->run()==FALSE){
				$this->load->view('welcome_message');	
				echo validation_errors();			
			}
			else{
				$email = $this->input->post('email');
				$user = $this->input->post('username');
				$pass = $this->input->post('password1');
				$data = $this->Mod_login->getemail($user, $email);
				foreach ($data as $d) {
					$huser = $d['username'];
					$hemail = $d['email'];					
				}
				if ($huser == $user && $hemail == $email){
					
					$this->Mod_login->update_pass($pass, $user, $email);
					$this->load->view('v_login');
				}
				else{
					
				}

			}


}
}
