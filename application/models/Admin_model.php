<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function get_all()       
    {
        $result = $this->db->get('admin');
        return $result;
    }

    public function create($data)
    {
        $this->db->insert('admin', $data);
        return $this->db->affected_rows() > 0 ? true : false;
    }

    public function update($data, $id)
    {
        $this->db->update('admin', $data, ['id' => $id]);
        return $this->db->affected_rows() > 0 ? true : false;
    }

    
}
