<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['adminhome'] = 'admin/home/v_home';
		$data['title'] = 'Dashboard';
		$this->load->view('admin/main',$data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/admin/Home.php */