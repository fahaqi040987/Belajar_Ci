<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kategori extends CI_Model {

	public function listing()
	{
		$this->db->select('*');
		$this->db->from('kategori');	
		$this->db->order_by('id_kategori','DESC');
		return $this->db->get()->result();
	}

	public function tambah_proses()
	{
		$data = array('nama_kategori'=>$this->input->post('nama_kategori'));
		$this->db->insert('kategori',$data);
	}

	public function edit_proses($id)
	{
		// update kategori set nama_kategori = 'nama_kolom' , id_kategori = 'kolom id'
		 // WHERE id_kategori = 'nama kolom id';

		$data = array(
			'nama_kategori'=>$this->input->post('nama_kategori'),
			'id_kategori'=>$id,
			);
		$this->db->where('id_kategori',$id);
		$this->db->update('kategori',$data);
	}

	public function edit_data($id)
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->where('id_kategori',$id);
		return $this->db->get()->row();
	}

}

/* End of file M_kategori.php */
/* Location: ./application/models/M_kategori.php */