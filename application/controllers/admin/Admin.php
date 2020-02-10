<?php

    class Admin extends CI_Controller {

        public function __construct(){
            parent::__construct();
            
            if($this->session->userdata('status') != 'login')
            {
                redirect(base_url('auth'));
            }
            $this->load->library('template'); 
            $this->load->library('response'); 
            $this->load->model('model_admin');
        }

        public function index()
        {
            $user = $this->session->userdata('username');
            $dimana = array('username' => $user);
            $data['jumlah'] =  $this->model_admin->getAll()->num_rows();
            $data['pengurus'] =  $this->model_admin->getOne($dimana)->result();
            $this->template->admin('dashboard/dashboard', $data);
        }
        
        public function pengurus()
        {
            $user = $this->session->userdata('username');
            $dimana = array('username' => $user);
            $data['pengurus'] =  $this->model_admin->getOne($dimana)->result();
            $this->template->admin('pengurus/index', $data);
        }

        public function ubahProfile()
        {
            $nama = $this->response->post('nama');
            $user = $this->response->post('username');
            $dimana = array('username' => $user);
            $diubah = array(
                'nama' => $nama,
                'username' => $user
            );
            $this->model_admin->ubahProfile($diubah, $dimana);
            $this->response->send(array(
                'result' => 1,
                'pesan' => 'Profile Berhasil di ubah'
            ));
        }
    }