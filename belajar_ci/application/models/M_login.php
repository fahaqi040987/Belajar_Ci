<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function prosesLogin($data)
	{
		return $this->db->get_where('users',$data);

	}

}

/* End of file M_login.php */
/* Location: ./application/models/M_login.php */