<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('template');
		$this->load->model('model_login');
	}

	public function index()
	{
		$this->template->auth('auth');
	}

	public function cekLogin()
	{
		$user = htmlspecialchars($this->input->post('user'));
		$pass = htmlspecialchars(md5($this->input->post('pass')));
		$cekLogin = $this->model_login->cekLogin($user, $pass);
		if($cekLogin->num_rows() > 0){
			$status = array(
				'username' => $user,
				'status' => 'login'
			);
			$this->session->set_userdata($status);
			$this->session->set_flashdata('status', 'Anda berhasil login!');
			echo base_url('dashboard');
		} else {
			echo 0;
		}
	}
}
