<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
	{
        $this->load->model('Dashboard_model');
        $data['title'] = 'Dashboard';
        $data['main_view'] = 'dashboard/index';
        $data['count'] = $this->Dashboard_model->get_all_count();
		$this->load->view('template', $data);
	}
}
