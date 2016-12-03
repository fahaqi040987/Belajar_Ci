<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_front');
	}
	public function index()
	{
		$data['tampilanTengah'] = 'v_home';
		$data['car'] = $this->m_front->tampilByCar();
		// print_r($data['car']); die();
		$data['laptop'] = $this->m_front->tampilByLaptop();
		$this->load->view('main',$data);	
	}

	
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */