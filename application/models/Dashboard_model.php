<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
    public function get_all_count()       
    {
        $obat = $this->db->get('obat')->num_rows();
        $admin = $this->db->get('admin')->num_rows();
        $supplier = $this->db->get('supplier')->num_rows();
        $count = [
            'obat' => $obat,
            'admin' => $admin,
            'supplier' => $supplier,
        ];
        return $count;
    }
}
