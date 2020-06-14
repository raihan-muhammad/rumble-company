<?php

    class Alur extends CI_Controller {
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
            $data['alur'] = $this->model_admin->getAll('tb_alur')->result();
            $data['warna'] = $this->model_admin->getAll('tb_background_alur')->result();

            $this->template->admin('alur/index', $data);
        }

        public function tambah()
        {
            $this->template->admin('alur/tambah');
        }

        public function doTambah()
        {
            $nama = $this->input->post('nama');
            $data = array(
                'nama_alur' => $nama
            );
            $this->model_admin->tambah('tb_alur', $data);
            $this->session->set_flashdata('tambah', 'alur berhasil di tambahkan!');
            redirect(base_url('admin/alur'));         
        }

        public function edit($id)
        {
            $dimana = array('id_alur' => $id);
            $data['alur'] = $this->model_admin->getOne('tb_alur', $dimana)->result();

            $this->template->admin('alur/update', $data);
        }

        public function doUpdate()
        {
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $dimana = array('id_alur' => $id);
            $data = array('nama_alur' => $nama);
            $this->model_admin->update('tb_alur', $data, $dimana);
            $this->session->set_flashdata('update', 'Data berhasil di update!');
            redirect(base_url('admin/alur'));
        }

        public function delete($id)
        {
            $dimana = array('id_alur' => $id);
            $this->model_admin->delete('tb_alur', $dimana);
            redirect(base_url('admin/alur'));
        }

        public function warna()
        {
            $warna = $this->input->post('warna');
            $id = $this->input->post('id_background');
            $dimana = array('id_background' => $id);
            $data = array('warna' => $warna);
            $this->model_admin->update('tb_background_alur', $data, $dimana);
            $this->session->set_flashdata('update', 'warna berhasil di update');
            redirect(base_url('admin/alur'));
        }
    }

?>