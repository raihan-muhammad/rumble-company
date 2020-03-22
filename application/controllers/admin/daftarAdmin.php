<?php

    class DaftarAdmin extends CI_Controller {
        function __construct(){
            parent::__construct();
            if($this->session->userdata('status') != 'login'){
                redirect(base_url('auth'));
            }
            $this->load->library('template');
            $this->load->model('model_admin');
            $this->load->library('response');
        }

        public function index()
        {
            $id = $this->session->userdata('id');
            $dimana = array('id_admin' => $id);
            $data['pengurus'] = $this->model_admin->getOne('tb_admin', $dimana)->result();
            $data['admin'] = $this->model_admin->getAll('tb_admin')->result();

            $this->template->admin('admin/index', $data);
        }

        public function tambah()
        {
            $this->template->admin('admin/tambah');
        }

        public function doTambah()
        {
            $user = $this->input->post('user');
            $pass = md5($this->input->post('pass'));
            $ulang = md5($this->input->post('ulang'));
            $dimana = array('username' => $user);
            $cekAdmin = $this->model_admin->getOne('tb_admin', $dimana)->num_rows();

            if($cekAdmin > 0){
                $this->session->set_flashdata('status', 'Username sudah tersedia!');
                redirect('admin/daftarAdmin/tambah');
            } else {
                if($pass == $ulang){
                    $data = array('username' => $user, 'password' => $pass);
                    $this->model_admin->tambah('tb_admin', $data);
                    $this->session->set_flashdata('status', 'Admin berhasil di tambahkan!');
                    redirect('admin/daftarAdmin/tambah');
                } else {
                    $this->session->set_flashdata('status', 'Password Tidak cocok!');
                    redirect('admin/daftarAdmin/tambah');
                }
            }

            
            
        }
    }

?>