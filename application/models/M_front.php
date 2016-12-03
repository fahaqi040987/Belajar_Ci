<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_front extends CI_Model {

	public function tampilByCar()
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('kategori','kategori.id_kategori = produk.id_kategori','LEFT');
		$this->db->where('kategori.nama_kategori','Car / Truck');
		$this->db->order_by('id_produk','desc');
		return $this->db->get()->result();
	}

	public function tampilByLaptop()
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('kategori','kategori.id_kategori = produk.id_kategori','LEFT');
		$this->db->where('kategori.nama_kategori','Laptop / Mackbook');
		$this->db->order_by('id_produk','desc');
		return $this->db->get()->result();
	}

}

/* End of file M_front.php */
/* Location: ./application/models/M_front.php */