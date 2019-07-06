<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model
{
    public function get_all()       
    {
        $this->db->select('a.*, b.nama AS admin')
        ->from('transaksi a')
        ->join('admin b', 'a.admin_id = b.id');
        return $this->db->get();
    }

    public function get_obat($transaksi_id)
    {
        $this->db->select('b.kode, b.nama_obat, a.jumlah')
        ->from('detail_transaksi a')
        ->join('obat b', 'a.kode_obat = b.kode')
        ->where('transaksi_id', $transaksi_id);
        return $this->db->get();
    }

    public function create($data)
    {
        $this->db->insert('transaksi', $data);
        return $this->db->affected_rows() > 0 ? true : false;
    }

    public function create_detail($data)
    {
        $this->db->insert_batch('detail_transaksi', $data);
        return $this->db->affected_rows() > 0 ? true : false;
    }

    public function getByKode($kode)
    {
        return $this->db->get_where('transaksi', ['kode' => $kode])->row();
    }

    public function update($data, $kode)
    {
        $this->db->update('transaksi', $data, ['kode' => $kode]);
        return $this->db->affected_rows() > 0 ? true : false;
    }
    
}
