<?php

    class Produk extends CI_Controller {
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
            $user = $this->session->userdata('username');
            $dimana = array('id_admin' => $id);
            $data['pengurus'] = $this->model_admin->getOne('tb_admin', $dimana)->result();
            $data['produk'] = $this->model_admin->getAll('tb_produk')->result();

            $this->template->admin('produk/index', $data);
        }

        public function tambah()
        {
            $this->template->admin('produk/tambah');
        }

        public function doTambah()
        {
            $config['upload_path']      = './assets/img/produk';
            $config['allowed_types']    = 'jpg|png';
            $config['max_size']         = '2000';
            $config['encrypt_name']     = TRUE;

            $this->load->library('upload', $config);

            if($this->upload->do_upload('gambarProduk')){
                $nama = $this->input->post('namaProduk');
                $gambar = $this->upload->data();
                $diskripsi = $this->input->post('diskripsiProduk');
                $data = array(
                    'nama_produk' => $nama,
                    'foto_produk' => $gambar['file_name'],
                    'diskripsi_produk' => $diskripsi
                );
                $this->model_admin->tambah('tb_produk', $data);
                $this->session->set_flashdata('tambah', 'Produk berhasil di tambahkan!');
                redirect(base_url('admin/produk'));
            }    
        }

        public function edit($id)
        {
            $dimana = array('id_produk' => $id);
            $data['produk'] = $this->model_admin->getOne('tb_produk', $dimana)->result();

            $this->template->admin('produk/update', $data);
        }

        public function doUpdate()
        {
            $id = $this->input->post('id');
            $diskripsi = $this->input->post('diskripsiProduk');
            $nama = $this->input->post('namaProduk');
            $dimana = array('id_produk' => $id);

            $config['upload_path']      = './assets/img/produk';
            $config['allowed_types']    = 'jpg|png';
            $config['max_size']         = '2000';
            $config['encrypt_name']     = TRUE;

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambarProduk')){           
                $foto = $this->input->post('fotoPro');
                $data = array(
                    'nama_produk' => $nama,
                    'foto_produk' => $foto,
                    'diskripsi_produk' => $diskripsi
                );

                $this->model_admin->update('tb_produk', $data, $dimana);
                $this->session->set_flashdata('update', 'Produk berhasil di update!');
                redirect(base_url('admin/produk'));
            } else {
                $upload = $this->upload->data();
                $data = array(
                    'nama_produk' => $nama,
                    'foto_produk' => $upload['file_name'],
                    'diskripsi_produk' => $diskripsi
                );
                $this->model_admin->update('tb_produk', $data, $dimana);
                $this->session->set_flashdata('update', 'Produk berhasil di update!');
                redirect(base_url('admin/produk'));
            }     
        }

        public function delete($id)
        {
            $dimana = array('id_produk' => $id);
            $this->model_admin->delete('tb_produk', $dimana);
            redirect(base_url('admin/produk'));
        }
    }

?>