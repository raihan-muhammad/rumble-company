<?php

    class Template {
        function auth($view=null, $data=null)
        {
            $ci =& get_instance();
            
            $ci->load->view('auth/'.$view, $data);
        }
    }

?>