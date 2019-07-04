<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat_model extends CI_Model
{
    public function get_all()       
    {
        $result = $this->db->get('obat');
        return $result;
    }

    public function create($data)
    {
        $this->db->insert('obat', $data);
        return $this->db->affected_rows() > 0 ? true : false;
    }

    public function getByKode($kode)
    {
        return $this->db->get_where('obat', ['kode' => $kode])->row();
    }

    public function update($data, $kode)
    {
        $this->db->update('obat', $data, ['kode' => $kode]);
        return $this->db->affected_rows() > 0 ? true : false;
    }
    
}
