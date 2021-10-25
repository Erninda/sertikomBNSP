<?php

defined('BASEPATH') or exit('No direct script access allowed');

class model_test extends CI_Model {
    
    function insert($data)
    {
        $this->db->insert('test', $data);
    }

    function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('test');
    }

    
}
