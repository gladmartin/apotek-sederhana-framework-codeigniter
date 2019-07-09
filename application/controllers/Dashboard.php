<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

    public function index()
	{
        $this->load->model('Dashboard_model');
        $data['count'] = $this->Dashboard_model->get_all_count();
		$this->layout->set_title('Dashbaord');
        return $this->layout->load('template', 'dashboard/index', $data);
	}
}
