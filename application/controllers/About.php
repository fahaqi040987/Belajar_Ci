<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data['tampilanTengah'] = 'about/v_about';
		$this->load->view('main', $data);
	}

}

/* End of file About.php */
/* Location: ./application/controllers/About.php */