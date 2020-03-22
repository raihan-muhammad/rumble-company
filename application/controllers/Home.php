<?php

    class Home extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->library('template');
        }

        public function index(){ 
           $this->template->enduser('home');
        }
    }

?>