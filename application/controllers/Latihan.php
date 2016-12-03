<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = array(
				'nama'=>'Muhammad reza ibrahim',
				'alamat'=> 'Bekasi',
				'title'=>'Silahkan Pilih Menu yang ada di bawah ini',
				'view'=>'nama'
			);
		$this->load->view('v_latihan',$data);
	}

	public function tambah()
	{
		$data['jumlah'] = '';
		if ($this->input->post('submit')) {
			$angka1 = $this->input->post('angka1');
			$angka2 = $this->input->post('angka2');
			$jumlah =  $angka1 + $angka2;
			$data['jumlah'] = $jumlah;
		}
		$this->load->view('tambah',$data);
	}

	function kurang()
	{

		$this->load->view('kurang');
	}

	public function prosesKurang()
	{
		$angka1 = $this->input->post('angka1');
		$angka2 = $this->input->post('angka2');
		$kurang = $angka1 - $angka2;
		echo "Hasilnya " . $kurang;
	}

	public function bagi()
	{
		$data['bagi'] = '';
		if ($this->input->post('submit')) {
			$angka1 = $this->input->post('angka1');
			$angka2 = $this->input->post('angka2');
			$bagi = $angka1 / $angka2;
			$data['bagi'] = $bagi;
		}
		$this->load->view('bagi',$data);
	}

	public function edit($id)
	{
		echo "Ini halaman edit ". $id ;
	}
}
