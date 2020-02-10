<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	var $scJav = array(
		'file' => 'CtrlAuth.js',
		'controller' => 'var controller = new CtrlAuth();',
		'init' => 'controller.init();'
	);

	public function __construct(){
		parent::__construct();
		$this->data['scJav'] = $this->scJav;
		$this->load->library('template');
		$this->load->library('response');
		$this->load->model('model_login');
	}

	public function index()
	{
		$this->template->auth('auth', $this->data);
	}

	public function cekLogin()
	{
		$user = $this->response->post('username');
		$pass = md5($this->response->post('password'));
		$cekLogin = $this->model_login->cekLogin($user, $pass);
		if($cekLogin->num_rows() > 0){
			$status = array(
				'username' => $user,
				'status' => 'login'
			);
			$this->session->set_userdata($status);
			$this->response->send(array(
				'result' => 1,
				'redirectTo' => 'dashboard'
			));
		} else {
			$this->response->send(array(
				'result' => 0,
			));
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}
}
