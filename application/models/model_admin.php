<?php

    class Model_admin extends CI_Model {
        public function getAll($table)
        {
            return $this->db->get($table);
        }

        public function getOne($table, $dimana)
        {
            return $this->db->get_where($table, $dimana);
        }

        public function update($table, $diubah, $dimana)
        {
            $this->db->where($dimana);
            $this->db->update($table, $diubah);
        }

        public function tambah($table, $data)
        {
            $this->db->insert($table, $data);
        }

        public function delete($table, $dimana)
        {
            $this->db->where($dimana);
            $this->db->delete($table);
        }
    }

?>