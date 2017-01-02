<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function index()
	{
		$data['tampilanTengah'] = 'product/v_product';
		$this->load->view('main', $data);
	}

}

/* End of file Product.php */
/* Location: ./application/controllers/Product.php */