<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_destinasi extends CI_Model {

	public function get_all_data()
	{
		$this->db->select('*');
		$this->db->from('tbl_destinasi');
		$this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_destinasi.id_kategori', 'left');
		$this->db->order_by('id_destinasi', 'desc');
		return $this->db->get()->result();
	}

	public function get_data($id_destinasi)
	{
		$this->db->select('*');
		$this->db->from('tbl_destinasi');
		$this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_destinasi.id_kategori', 'left');
		$this->db->where('id_destinasi', $id_destinasi);
		return $this->db->get()->row();
	}

	public function add($data)
	{
		$this->db->insert('tbl_destinasi', $data);
	}

	public function edit($data)
	{
		$this->db->where('id_destinasi', $data['id_destinasi']);
		$this->db->update('tbl_destinasi', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_destinasi', $data['id_destinasi']);
		$this->db->delete('tbl_destinasi', $data);
	}
}
