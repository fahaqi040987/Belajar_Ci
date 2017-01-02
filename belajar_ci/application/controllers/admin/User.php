<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	// instance / buat objek di awal sebelum object di nyatakan ada
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
	}
	public function index()
	{
		$this->load->model('m_user');
		$data['adminhome'] = 'admin/user/v_user';
		$data['title'] = 'Data User';
		$data['listing'] = $this->m_user->listing();
		$this->load->view('admin/main', $data); 
	}


	public function tambah()
	{
		if ($this->input->post()) {
			// koding tambah lari kesini
			$this->m_user->tambah_proses();
			redirect('admin/user');
		}
		$data['adminhome'] = 'admin/user/tambah';
		$data['title'] = 'Tambah User';
		$this->load->view('admin/main', $data);
	}

	public function edit($id)
	{
		$data['editData'] = $this->m_user->editData($id);
		$data['adminhome'] = 'admin/user/edit';
		$data['title'] = 'Edit User';

		if ($this->input->post()) {
			// koding edit lari kesini
			$this->m_user->edit_proses($id);
			redirect('admin/user');
		}
		$this->load->view('admin/main', $data);
	}


	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('users');
		redirect('admin/user');
	}	

}

/* End of file User.php */
/* Location: ./application/controllers/admin/User.php */