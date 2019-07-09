<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function index()
	{
        $this->form_validation->set_rules('nama', 'Nama Admin', 'required|trim');
        $this->form_validation->set_rules('username', 'username', 'required|trim');
        $this->form_validation->set_rules('password', 'password', 'required|trim');
        if ($this->form_validation->run() == FALSE)
        {
            $data['admin'] = $this->Admin_model->get_all();
            $this->layout->set_title('Data admin');
            return $this->layout->load('template', 'admin/index', $data);
        }
        else
        {
            $password_hash = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            $data_admin = [
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'password' => $password_hash,
            ];
            $tambah = $this->Admin_model->create($data_admin);
            $msg = $tambah ? 'Berhasil ditambah' : 'Gagal ditambah';
            $this->session->set_flashdata('info', $msg);
            redirect('admin');
        }
    }
    
    public function hapus($id = null)
    {
        if (! $id) return show_404();
        $this->db->delete('admin', ['id' => $id]);
        $this->session->set_flashdata('info', 'Berhasil dihapus');
        redirect('admin');
    }

    public function getAjax($id = null)
    {
        $admin = $this->db->get_where('admin', ['id' => $id]);
        $admin = json_encode($admin->row());
        echo $admin;
    }

    public function ubah()
    {
        $this->form_validation->set_rules('nama', 'Nama admin', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        if ($this->form_validation->run() == FALSE) 
        {
            redirect('admin');
        } 
        else
        {
            $data_admin = [
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
            ];
            $password = $this->input->post('password');
            if ($password) $data_admin['pasword'] = password_hash($password, PASSWORD_DEFAULT);
            $id = $this->input->post('id');
            $ubah = $this->Admin_model->update($data_admin, $id);
            $msg = $ubah ? 'Berhasil diubah' : 'Gagal diubah';
            $this->session->set_flashdata('info', $msg);
            redirect('admin');
        }
    }
}
