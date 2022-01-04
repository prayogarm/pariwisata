<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model 
{

	public function total_destinasi()
	{
		$this->db->get('tbl_destinasi')->num_rows();
	}
}