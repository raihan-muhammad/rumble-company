<?php

    class Pelanggan extends CI_Controller {
        function __construct(){
            parent::__construct();
            if($this->session->userdata('status') != 'login'){
                redirect(base_url('auth'));
            }
            $this->load->library('template');
            $this->load->model('model_admin');
        }

        public function index()
        {
            $id = $this->session->userdata('id');
            $dimana = array('id_admin' => $id);
            $data['pengurus'] = $this->model_admin->getOne('tb_admin', $dimana)->result();
            $data['pelanggan'] = $this->model_admin->getAll('tb_pelanggan')->result();

            $this->template->admin('pelanggan/index', $data);
        }

        public function delete($id)
        {
            $dimana = array('id_pelanggan' => $id);
            $this->model_admin->delete('tb_pelanggan', $dimana);
            redirect(base_url('admin/pelanggan'));
        }
    }

?>