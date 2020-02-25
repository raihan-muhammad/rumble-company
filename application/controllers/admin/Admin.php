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
            $id = $this->session->userdata('id');
            $user = $this->session->userdata('username');
            $dimana = array('id_admin' => $id);
            $data['jumlah'] =  $this->model_admin->getAll('tb_admin')->num_rows();
            $data['pengurus'] =  $this->model_admin->getOne('tb_admin', $dimana)->result();
            $this->template->admin('dashboard/dashboard', $data);
        }
        
        

        public function ubahProfile()
        {
            $user = $this->response->post('username');
            $id = $this->response->post('id');
            $dimana = array('id_admin' => $id);
            $diubah = array(
                'username' => $user
            );
            $cekOne = $this->model_admin->getAll('tb_admin')->row();
            if($user != ""){
                if($cekOne->username = $user){
                    $this->response->send(array(
                        'result' => 0,
                        'pesan' => 'Username sudah di gunakan'
                    ));
                } else {
                    $ubahProfile = $this->model_admin->ubahAdmin('tb_admin', $diubah, $dimana);
                    $this->response->send(array(
                        'result' => 1,
                        'pesan' => 'Username Berhasil di ubah'
                    ));
                }
            } else {
                $this->response->send(array(
                    'result' => 0,
                    'pesan' => 'Username kosong!'
                ));
            }
        }

        public function ubahPass()
        {
            $passLama = md5($this->response->post('passLama'));
            $passBaru = $this->response->post('passBaru');
            $passUlang = $this->response->post('passUlang');
            $id = $this->response->post('id');
            $dimana = array('password' => $passLama);
            $cekLama = $this->model_admin->getOne('tb_admin', $dimana)->num_rows();
            if($passLama != ""){
                if($passBaru != ""){
                    if($passUlang != ""){
                        if($passBaru == $passUlang){
                            if($cekLama > 0){
                                $diubah = array('password' => md5($passBaru));
                                $dimana = array('id_admin' => $id);
                                $this->model_admin->ubahAdmin('tb_admin', $diubah, $dimana);
                                $this->response->send(array(
                                    'result' => 1
                                ));
                            } else {
                                $this->response->send(array(
                                    'result' => 0,
                                    'pesan' => 'Password Lama Tidak Cocok!'
                                ));
                            }  
                        } else {
                            $this->response->send(array(
                                'result' => 0,
                                'pesan' => 'Password Baru Tidak Sama!'
                            ));
                        }        
                    } else {
                        $this->response->send(array(
                            'result' => 0,
                            'pesan' => 'Re Type Password Kosong!'
                        ));
                    }               
                } else {
                    $this->response->send(array(
                        'result' => 0,
                        'pesan' => 'Password Baru Kosong!'
                    ));
                }    
            } else {
                $this->response->send(array(
                    'result' => 0, 
                    'pesan' => 'Password Lama Tidak Boleh Kosong!'
                ));
            }
        }
    }