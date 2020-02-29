<?php

    class Portofolio extends CI_Controller {
        public function __construct(){
            parent::__construct();
            if($this->session->userdata('status') != "login"){
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
            $data['portofolio'] = $this->model_admin->getAll('tb_portofolio')->result();
            $this->template->admin('portofolio/index', $data);
        }

        public function tambah()
        {
            $this->template->admin('portofolio/tambah');
        }

        public function doTambah()
        {
            $config['upload_path']      = './assets/img/portofolio';
            $config['allowed_types']    = 'jpg|png';
            $config['max_size']         = '2000';
            $config['encrypt_name']     = TRUE;

            $this->load->library('upload', $config);

            if($this->upload->do_upload('gambarPortofolio')){
                $nama = $this->input->post('namaPortofolio');
                $gambar = $this->upload->data();
                $data = array(
                    'nama_Portofolio' => $nama,
                    'gambar' => $gambar['file_name']
                );
                $this->model_admin->tambah('tb_portofolio', $data);
                $this->session->set_flashdata('tambah', 'Portofolio berhasil di tambahkan!');
                redirect(base_url('admin/portofolio'));
            }    
        }

        public function edit($id)
        {
            $dimana = array('id_Portofolio' => $id);
            $data['portofolio'] = $this->model_admin->getOne('tb_portofolio', $dimana)->result();

            $this->template->admin('portofolio/update', $data);
        }

        public function doUpdate()
        {
            $id = $this->input->post('id');
            $nama = $this->input->post('namaPortofolio');
            $dimana = array('id_portofolio' => $id);

            $config['upload_path']      = './assets/img/portofolio';
            $config['allowed_types']    = 'jpg|png';
            $config['max_size']         = '2000';
            $config['encrypt_name']     = TRUE;

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambarPortofolio')){           
                $foto = $this->input->post('fotoPro');
                $data = array(
                    'nama_portofolio' => $nama,
                    'gambar' => $foto
                );

                $this->model_admin->update('tb_portofolio', $data, $dimana);
                $this->session->set_flashdata('update', 'Portofolio berhasil di update!');
                redirect(base_url('admin/portofolio'));
            } else {
                $upload = $this->upload->data();
                $data = array(
                    'nama_portofolio' => $nama,
                    'gambar' => $upload['file_name']
                );
                $this->model_admin->update('tb_portofolio', $data, $dimana);
                $this->session->set_flashdata('update', 'Portofolio berhasil di update!');
                redirect(base_url('admin/portofolio'));
            }     
        }

        public function delete($id)
        {
            $dimana = array('id_portofolio' => $id);
            $this->model_admin->delete('tb_portofolio', $dimana);
            redirect(base_url('admin/portofolio'));
        }
    }

?>