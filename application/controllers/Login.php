<?php

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}

	function index()
	{
		$this->load->view('v_login');
	}

	function aksi_login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'email' => $email,
			'password' => $password
		);
		$cek = $this->m_login->cek_login("admin", $where)->num_rows();
		if ($cek > 0) {

			$data_session = array(
				'email' => $email,
				'status' => "login"
			);

			$this->session->set_userdata($data_session);

			redirect(base_url("Home"));
		} else {
			echo "<script>alert('Username dan password salah !'); history.go(-1);</script>";
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('pariwisata'));
	}
}