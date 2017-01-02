<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_login','login_model',TRUE);
	}
	public function index()
	{

		$this->load->view('admin/login');
	}

	public function prosesLogin()
	{
		if ($this->input->post()) {
			$post = array(
				'username'=>$this->input->post('username'),
				'password'=>$this->input->post('password'),
				);
			$query = $this->login_model->prosesLogin($post);
			if ($query->num_rows() > 0) {
				foreach ($query->result() as $value) {
					$session['username'] = $this->input->post('username');
					$session['level'] = $value->id_level;
					$this->session->set_userdata($session);
					redirect('admin/home');
				}
			}else{
				$this->session->set_flashdata('login_failed', 'Login Gagal');	
				redirect('admin/login');
			}
		}
		$this->load->view('admin/login');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin/login');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/admin/Login.php */