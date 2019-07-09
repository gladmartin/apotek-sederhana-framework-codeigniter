<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Supplier_model');
    }

    public function index()
	{
	    //set rulues form
        $this->form_validation->set_rules('nama', 'Nama Supplier', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('kota', 'Kota', 'required|trim');
        $this->form_validation->set_rules('telp', 'Telp', 'required|trim');
        if ($this->form_validation->run() == FALSE)
        {
            $data['supplier'] = $this->Supplier_model->get_all();
            $this->layout->set_title('Data Supplier');
		    $this->layout->load('template', 'supplier/index', $data);
        }
        else
        {
            $data_supplier = [
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'kota' => $this->input->post('kota'),
                'telp' => $this->input->post('telp'),
            ];
            $tambah = $this->Supplier_model->create($data_supplier);
            $msg = $tambah ? 'Berhasil ditambah' : 'Gagal ditambah';
            $this->session->set_flashdata('info', $msg);
            redirect('supplier');
        }
    }
    
    public function hapus($id = null)
    {
        if (! $id) return show_404();
        $this->db->delete('supplier', ['id' => $id]);
        $this->session->set_flashdata('info', 'Berhasil dihapus');
        redirect('supplier');
    }

    public function getAjax($id = null)
    {
        $supplier = $this->db->get_where('supplier', ['id' => $id]);
        $supplier = json_encode($supplier->row());
        echo $supplier;
    }

    public function ubah()
    {
        $this->form_validation->set_rules('nama', 'Nama Supplier', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('kota', 'Kota', 'required|trim');
        $this->form_validation->set_rules('telp', 'Telp', 'required|trim');
        if ($this->form_validation->run() == FALSE) 
        {
            redirect('supplier');
        } 
        else
        {
            $data_supplier = [
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'kota' => $this->input->post('kota'),
                'telp' => $this->input->post('telp'),
            ];
            $id = $this->input->post('id');
            $ubah = $this->Supplier_model->update($data_supplier, $id);
            $msg = $ubah ? 'Berhasil diubah' : 'Gagal diubah';
            $this->session->set_flashdata('info', $msg);
            redirect('supplier');
        }
    }
}
