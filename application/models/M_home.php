<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

	public function get_all_data()
	{
		$this->db->select('*');
		$this->db->from('tbl_destinasi');
		$this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_destinasi.id_kategori', 'left');
		$this->db->order_by('id_destinasi', 'desc');
		return $this->db->get()->result();
	}

	public function get_all_data_kategori()
	{
		$this->db->select('*');
		$this->db->from('tbl_kategori');
		$this->db->order_by('id_kategori', 'desc');
		return $this->db->get()->result();
	}

	public function detail_wisata($id_destinasi)
	{
		$this->db->select('*');
		$this->db->from('tbl_destinasi');
		$this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_destinasi.id_kategori', 'left');
		$this->db->where('id_destinasi', $id_destinasi);
		return $this->db->get()->row();
	}

	public function kategori($id_kategori)
	{
		$this->db->select('*');
		$this->db->from('tbl_kategori');
		$this->db->where('id_kategori', $id_kategori);
		return $this->db->get()->row();
	}

	public function get_all_data_destinasi($id_kategori)
	{
		$this->db->select('*');
		$this->db->from('tbl_destinasi');
		$this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_destinasi.id_kategori', 'left');
		$this->db->where('tbl_destinasi.id_kategori', $id_kategori);
		return $this->db->get()->result();
	}
}

/* End of file M_home.php */
/* Location: ./application/models/M_home.php */