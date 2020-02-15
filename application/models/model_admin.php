<?php

    class Model_admin extends CI_Model {
        public function getAll()
        {
            return $this->db->get('tb_admin');
        }

        public function getOne($dimana)
        {
            return $this->db->get_where('tb_admin', $dimana);
        }

        public function ubahAdmin($diubah, $dimana)
        {
            $this->db->where($dimana);
            $this->db->update('tb_admin', $diubah);
        }
    }

?>