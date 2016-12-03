<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	public function listing()
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->order_by('id', 'desc');
		return $this->db->get()->result();
	}

	public function tambah_proses()
	{
		$data = array(
			'username'=>$this->input->post('username'),
			'password'=>$this->input->post('password'),
			'id_level'=>$this->input->post('id_level'),
			);
		$this->db->insert('users',$data);
	}

	public function edit_proses($id)
	{
		$data = array(
			'username'=>$this->input->post('username'),
			'password'=>$this->input->post('password'),
			'id_level'=>$this->input->post('id_level'),
			'id'=>$id,
			);
		$this->db->where('id',$id);
		$this->db->update('users',$data);
	}

	public function editData($id)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('id',$id);
		return $this->db->get()->row();
	}

}

/* End of file M_user.php */
/* Location: ./application/models/M_user.php */