<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_login
{
	protected $ci;

	public function __construct()
	{
        $this->ci =& get_instance();
        $this->ci->load->model('m_authh');
	}


	public function login($username, $password)
	{
		$cek = $this->ci->m_authh->login_user($username, $password);
		if ($cek) {
			$nama = $cek->nama;
			$username = $cek->username;
			$level_user = $cek->level_user;

			$this->ci->session->set_userdata('username', $username);
			$this->ci->session->set_userdata('nama', $nama);
			$this->ci->session->set_userdata('level_user', $level_user);
			redirect('admin');
		}else {
			$this->ci->session->set_flashdata('error', 'Username Atau Password Salah');
			redirect('authh/login_user');
		}
	}

	public function proteksi_halaman()
	{
		if ($this->ci->session->userdata('username') == '') {
			$this->ci->session->set_flashdata('error', 'Anda Belum Login !!!  ');
			redirect('authh/login_user');
		} 
	}

	public function logout()
	{
		$this->ci->session->unset_userdata('username');
		$this->ci->session->unset_userdata('nama');
		$this->ci->session->unset_userdata('level_user');
		$this->ci->session->set_flashdata('pesan', 'Anda Berhasil Logout !!!');
		redirect('authh/login_user');
	}
}

