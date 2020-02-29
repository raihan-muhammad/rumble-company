<?php

    class Setting extends CI_Controller {
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
            $data['setting'] = $this->model_admin->getAll('tb_setting_home')->result();
            $data['jumlah'] = $this->model_admin->getAll('tb_setting_home')->num_rows();

            $this->template->admin('setting/index', $data);
        }

        public function tambah()
        {
            $this->template->admin('setting/tambah');
        }

        public function doTambah()
        {
            $config['upload_path']      = './assets/img/setting';
            $config['allowed_types']    = 'jpg|png';
            $config['max_size']         = '2000';
            $config['encrypt_name']     = TRUE;

            $this->load->library('upload', $config);

            if($this->upload->do_upload('gambarsetting')){
                $nama = $this->input->post('judul');
                $gambar = $this->upload->data();
                $diskripsi = $this->input->post('diskripsisetting');
                $data = array(
                    'judul_setting' => $nama,
                    'gambar_setting' => $gambar['file_name'],
                    'diskripsi_setting' => $diskripsi
                );
                $this->model_admin->tambah('tb_setting_home', $data);
                $this->session->set_flashdata('tambah', 'setting berhasil di tambahkan!');
                redirect(base_url('admin/setting'));
            }    
        }

        public function edit($id)
        {
            $dimana = array('id_setting' => $id);
            $data['setting'] = $this->model_admin->getOne('tb_setting_home', $dimana)->result();

            $this->template->admin('setting/update', $data);
        }

        public function doUpdate()
        {
            $id = $this->input->post('id');
            $nama = $this->input->post('judul');
            $dimana = array('id_setting' => $id);
            $diskripsi = $this->input->post('diskripsisetting');

            $config['upload_path']      = './assets/img/setting';
            $config['allowed_types']    = 'jpg|png';
            $config['max_size']         = '2000';
            $config['encrypt_name']     = TRUE;

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambarsetting')){           
                $foto = $this->input->post('fotoPro');
                $data = array(
                    'judul_setting' => $nama,
                    'gambar_setting' => $foto,
                    'diskripsi_setting' => $diskripsi
                );

                $this->model_admin->update('tb_setting_home', $data, $dimana);
                $this->session->set_flashdata('update', 'setting berhasil di update!');
                redirect(base_url('admin/setting'));
            } else {
                $upload = $this->upload->data();
                $data = array(
                    'judul_setting' => $nama,
                    'gambar_setting' => $upload['file_name'],
                    'diskripsi_setting' => $diskripsi
                );
                $this->model_admin->update('tb_setting_home', $data, $dimana);
                $this->session->set_flashdata('update', 'setting berhasil di update!');
                redirect(base_url('admin/setting'));
            }     
        }

        public function delete($id)
        {
            $dimana = array('id_setting' => $id);
            $this->model_admin->delete('tb_setting_home', $dimana);
            redirect(base_url('admin/setting'));
        }
    }

?>