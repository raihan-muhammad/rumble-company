<?php

    class Model_login extends CI_Model {

        public function cekLogin($user, $pass)
        {
            $data = array(
                'username'  => $user,
                'password'  => $pass
            );
            return $this->db->get_where('tb_admin', $data);
        }

    }

?>