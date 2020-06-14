<?php

    class Home extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->library('template');
            $this->load->model('model_admin');
        }

        public function index(){ 
            $data['slider'] = $this->model_admin->getAll('tb_slider');
            $data['step'] = $this->model_admin->getAll('tb_alur');
            $data['bg_alur'] = $this->model_admin->getAll('tb_background_alur');
            $this->template->enduser('home', $data);
        }
    }

?>