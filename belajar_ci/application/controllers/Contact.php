<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$data['tampilanTengah'] = 'contact/v_contact';
		$this->load->view('main', $data);
	}

}

/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */