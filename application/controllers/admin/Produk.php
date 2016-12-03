<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	// construct = objek di buat di awal 
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_produk');
	}
	public function index()
	{
		$data['adminhome'] = 'admin/produk/listing';
		$data['title'] = 'Data Produk';
		$data['listing'] = $this->m_produk->cari_produk();
		$this->load->view('admin/main',$data);
	}

	public function tambah()
	{
		$data['adminhome'] = 'admin/produk/tambah';
		$data['title'] = 'Tambah produk';
		$data['data_kategori'] = $this->m_produk->data_kategori();
		if ($this->input->post()) {
			// proses tambah kesini
			$query = $this->m_produk->tambah_proses();
			redirect('admin/produk');
		}
		$this->load->view('admin/main',$data);
	}

	public function edit($id)
	{
		$data['adminhome'] = 'admin/produk/edit';
		$data['title'] = 'Edit Produk';
		$data['editProduk'] = $this->m_produk->edit_data($id);
		// print_r($data['editProduk']->gambar); die();
		$data['data_kategori'] = $this->m_produk->data_kategori();
		if ($this->input->post()) {
			// kalo gambar gk mau diedit
			if (empty($_FILES['gambar']['name'])) {

				// edit proses lari kesni
				// panggil model / method edit_proses
				$post = array(
				'id_kategori'=> $this->input->post('id_kategori'),
				'nama_produk'=> $this->input->post('nama_produk'),
				'kode'=> $this->input->post('kode'),
				'harga'=> $this->input->post('harga'),
				'dimensi'=> $this->input->post('dimensi'),
				'warna'=> $this->input->post('warna'),
				'material'=> $this->input->post('material'),
				'keterangan'=> $this->input->post('keterangan'),
				// 'gambar'=> $data['upload_data']['file_name'],
				);
				$this->m_produk->edit_proses($post);
				redirect('admin/produk');
			}else{
				// kalo pake gambar
				$config['upload_path'] = './assets/upload/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']  = '1024'; //1MB
				// $config['max_width']  = '1024';
				// $config['max_height']  = '768';
				$this->load->library('upload', $config);

				// kalo / jika upload berhasil
				if ($this->upload->do_upload('gambar')) {
					$data['upload_data'] = $this->upload->data();
					unlink('./assets/upload/'.$data['editProduk']->gambar);
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
					// panggil model / method edit_proses
					$this->db->where('id_produk',$id);
					$this->m_produk->edit_proses($post);
					redirect('admin/produk');
				}else{
					$data['error'] = $this->upload->display_errors();
				}

			}
		}
		$this->load->view('admin/main', $data);
	}

	public function delete($id)
	{
		$cari_gambar = $this->cari_gambar($id);
		print_r($cari_gambar); die();
		unlink('./assets/upload/'.$cari_gambar->gambar);
		$this->db->where('id_produk',$id);
		$this->db->delete('produk');
		redirect('admin/produk');
	}

	//cari gambar 

	public function cari_gambar($id)
	{
		return $this->db->select('gambar')->from('produk')->where('id_produk',$id)->get()->row();
	}

}

/* End of file Produk.php */
/* Location: ./application/controllers/admin/Produk.php */