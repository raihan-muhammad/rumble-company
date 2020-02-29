<?php

    class Client extends CI_Controller {
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
            $data['client'] = $this->model_admin->getAll('tb_client')->result();

            $this->template->admin('client/index', $data);
        }

        public function tambah()
        {
            $this->template->admin('client/tambah');
        }

        public function doTambah()
        {
            $config['upload_path']      = './assets/img/client';
            $config['allowed_types']    = 'jpg|png';
            $config['max_size']         = '2000';
            $config['encrypt_name']     = TRUE;

            $this->load->library('upload', $config);

            if($this->upload->do_upload('gambarClient')){
                $nama = $this->input->post('namaClient');
                $gambar = $this->upload->data();
                $data = array(
                    'nama_perusahaan' => $nama,
                    'logo' => $gambar['file_name']
                );
                $this->model_admin->tambah('tb_client', $data);
                $this->session->set_flashdata('tambah', 'client berhasil di tambahkan!');
                redirect(base_url('admin/client'));
            }    
        }

        public function edit($id)
        {
            $dimana = array('id_client' => $id);
            $data['client'] = $this->model_admin->getOne('tb_client', $dimana)->result();

            $this->template->admin('client/update', $data);
        }

        public function doUpdate()
        {
            $id = $this->input->post('id');
            $nama = $this->input->post('namaclient');
            $dimana = array('id_client' => $id);

            $config['upload_path']      = './assets/img/client';
            $config['allowed_types']    = 'jpg|png';
            $config['max_size']         = '2000';
            $config['encrypt_name']     = TRUE;

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambarclient')){           
                $foto = $this->input->post('fotoPro');
                $data = array(
                    'nama_perusahaan' => $nama,
                    'logo' => $foto
                );

                $this->model_admin->update('tb_client', $data, $dimana);
                $this->session->set_flashdata('update', 'client berhasil di update!');
                redirect(base_url('admin/client'));
            } else {
                $upload = $this->upload->data();
                $data = array(
                    'nama_perusahaan' => $nama,
                    'logo' => $upload['file_name']
                );
                $this->model_admin->update('tb_client', $data, $dimana);
                $this->session->set_flashdata('update', 'client berhasil di update!');
                redirect(base_url('admin/client'));
            }     
        }

        public function delete($id)
        {
            $dimana = array('id_client' => $id);
            $this->model_admin->delete('tb_client', $dimana);
            redirect(base_url('admin/client'));
        }
    }

?>