<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_kategori');
	}
	public function index()
	{
		$data['adminhome'] = 'admin/kategori/listing';
		$data['title'] = 'Kategori';
		$data['listing'] = $this->m_kategori->listing();
		$this->load->view('admin/main', $data);

	}

	public function tambah ()
	{
		$data['adminhome'] = 'admin/kategori/tambah';
		$data['title'] = 'Tambah Kategori';

		if ($this->input->post()) {
			// koding tambah lari kesini
			$this->m_kategori->tambah_proses();
			redirect('admin/kategori');
		}
		$this->load->view('admin/main',$data);
	}

	public function edit($id)
	{
		$data['adminhome'] = 'admin/kategori/edit';
		$data['title'] = 'Edit Kategori';
		$data['edit_data'] = $this->m_kategori->edit_data($id);
		// query proses
		if ($this->input->post()) {
			// print_r($this->input->post()); die();
			$this->m_kategori->edit_proses($id);
			redirect('admin/kategori');
		}	
		$this->load->view('admin/main',$data);
	}

	public function delete($id)
	{
		$this->db->where('id_kategori',$id);
		$query = $this->db->delete('kategori');
		redirect('admin/kategori');
	}
}

/* End of file Kategori.php */
/* Location: ./application/controllers/admin/Kategori.php */