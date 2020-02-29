<?php

    class Slider extends CI_Controller {

        var $scJav = array(
            'file' => 'CtrlSlider.js',
            'controller' => 'var controller = new CtrlSlider();',
            'init' => 'controller.init();'
        );

        public function __construct()
        {
            parent::__construct();
            $this->data['scJav'] = $this->scJav;
            if($this->session->userdata('status') != 'login'){
                redirect(base_url('auth'));
            }
            $this->load->library('response');
            $this->load->library('template');
            $this->load->model('model_admin');

        }

        public function index()
        {
            $id = $this->session->userdata('id');
            $user = $this->session->userdata('username');
            $dimana = array('id_admin' => $id);
            $idSlider = $this->response->post('id');
            $dimanaGambar = array('id_slider' => $idSlider);
            $this->data['pengurus'] = $this->model_admin->getOne('tb_admin', $dimana)->result();
            $this->data['slider']   = $this->model_admin->getAll('tb_slider')->result();
            $this->data['jumlah']   = $this->model_admin->getAll('tb_slider')->num_rows();

            $this->template->admin('slider/index', $this->data);
        }

        public function tambah()
        {
            $nama = $this->response->post('nama');
            $gambar = $this->response->post('gambar');

            if($nama != ''){
                if($gambar != ''){
                    $config['upload_path']      = './assets/img/slider';
                    $config['allowed_types']    = 'jpg|png';
                    $config['max_size']         = '2000';
                    $config['encrypt_name']     = TRUE;

                    $this->load->library('upload', $config);
                    if($this->upload->do_upload('gambar')){
                        $dataUpload = array('upload_data' => $this->upload->data());
                        $gambar = $dataUpload['upload_data']['file_name'];
                        $data = array('nama_slider' => $nama, 'gambar_slider' => $gambar);
                        $this->model_admin->tambah('tb_slider', $data);
                        $this->response->send(array('result' => 1, 'pesan' => 'Slider berhasil di tambahkan!'));
                    } else {
                        $this->response->send(array('result' => 0, 'pesan' => $this->upload->display_errors()));
                    }
                } else {
                    $this->response->send(array('result' => 0, 'pesan' => 'Masukan Gambar!'));
                }
            } else {
                $this->response->send(array('result' => 0, 'pesan' => 'Masukan Nama!'));
            }
        }

        public function edit($id)
        {
            $idAdmin = $this->session->userdata('id');
            $user = $this->session->userdata('username');
            $dimana = array('id_admin' => $idAdmin);
            $dimanaSlider = array('id_slider' => $id);
            $this->data['pengurus'] = $this->model_admin->getOne('tb_admin', $dimana)->result();
            $this->data['upSlider'] = $this->model_admin->getOne('tb_slider', $dimanaSlider)->result();
            $this->template->admin('slider/update', $this->data);
        }

        public function update()
        {
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $gambar = $this->input->post('foto');
            $dimana = array('id_slider' => $id );

            $config['upload_path']      = './assets/img/slider';
            $config['allowed_types']    = 'jpg|png';
            $config['max_size']         = '2000';
            $config['encrypt_name']     = TRUE;

            $this->load->library('upload', $config);

            if(!$this->upload->do_upload('gambar')){     
                $diubah = array('nama_slider' => $nama, 'gambar_slider' => $gambar);
                $this->model_admin->update('tb_slider', $diubah, $dimana);
                $this->session->set_flashdata('update', 'Slider Berhasil di Update');
                redirect(base_url('admin/slider'));   
            } else {
                $upload = $this->upload->data();
                $diubah = array('nama_slider' => $nama, 'gambar_slider' => $upload['file_name']);
                $this->model_admin->update('tb_slider', $diubah, $dimana);
                $this->session->set_flashdata('update', 'Slider Berhasil di Update');
                redirect(base_url('admin/slider'));
            }
        }

        public function delete($id)
        {
            $dimana = array('id_slider' => $id);
            $this->model_admin->delete('tb_slider',$dimana);
            $this->session->set_flashdata('delete', 'Slider berhasil di delete!');
            redirect(base_url('admin/slider'));
        }
    }

?>