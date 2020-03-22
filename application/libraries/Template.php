<?php

    class Template {
        function auth($view=null, $data=null)
        {
            $ci =& get_instance();
            
            $ci->load->view('auth/'.$view, $data);
        }
        function admin($view=null, $data=null)
        {
            $ci =& get_instance();

            $ci->load->view('admin/template/header', $data);
            $ci->load->view('admin/template/sidebar', $data);
            $ci->load->view('admin/'.$view, $data);
            $ci->load->view('admin/template/footer', $data);
        }

        function enduser($view=null, $data=null){
            $ci =& get_instance();

            $ci->load->view('enduser/template/header', $data);
            $ci->load->view('enduser/'.$view, $data);
            $ci->load->view('enduser/template/footer', $data);
        }
    }

?>