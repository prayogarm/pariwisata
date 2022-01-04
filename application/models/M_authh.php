<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_authh extends CI_Model 
{
	public function login_user($username, $password)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where(array(
			'username' => $username,
			'password' => $password
		));
		return $this->db->get()->row();
	}
}

/* End of file M_authh.php */
/* Location: ./application/models/M_authh.php */