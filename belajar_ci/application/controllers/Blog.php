<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
		$data['tampilanTengah'] = 'blog/v_blog';
		$this->load->view('main', $data);
	}

}

/* End of file Blog.php */
/* Location: ./application/controllers/Blog.php */