<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_produk extends CI_Model {

	public function data_kategori()
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->order_by('id_kategori','DESC');
		return $this->db->get()->result();
	}

	public function cari_produk()
	{
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('kategori','produk.id_kategori = kategori.id_kategori', 'LEFT');
		$this->db->order_by('id_produk','DESC');
		return $this->db->get()->result();
	}
	public function tambah_proses()
	{
		$config['upload_path'] = './assets/upload/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '1024'; //1MB
		// $config['max_width']  = '1024';
		// $config['max_height']  = '768';
		
		$this->load->library('upload', $config);
		
		if($this->upload->do_upload('gambar')){
			$data = array('upload_data' => $this->upload->data());
			$post = array(
				'id_kategori'=> $this->input->post('id_kategori'),
				'nama_produk'=> $this->input->post('nama_produk'),
				'kode'=> $this->input->post('kode'),
				'harga'=> $this->input->post('harga'),
				'dimensi'=> $this->input->post('dimensi'),
				'warna'=> $this->input->post('warna'),
				'material'=> $this->input->post('material'),
				'keterangan'=> $this->input->post('keterangan'),
				'gambar'=> $data['upload_data']['file_name'],
				);
			$this->db->insert('produk',$post);
		}else{
			return $error = array('error' => $this->upload->display_errors());
		}
	}

	public function edit_proses($data)
	{
		return $this->db->update('produk',$data);
	}

	public function edit_data($id)
	{
		return $this->db->select('*')->from('produk')->where('id_produk',$id)->get()->row();
	}

}

/* End of file M_produk.php */
/* Location: ./application/models/M_produk.php */