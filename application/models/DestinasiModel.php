<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DestinasiModel extends CI_Model {
  // Fungsi untuk menampilkan semua data destinasi
  public function view(){
    return $this->db->get('destinasi')->result();
  }
  
  // Fungsi untuk menampilkan data destinasi berdasarkan ID nya
  public function view_by($id_destinasi){
    $this->db->where('id_destinasi', $id_destinasi);
    return $this->db->get('destinasi')->row();
  }
  
  // Fungsi untuk validasi form tambah dan ubah
  public function validation($mode){
    $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya
    
    // Tambahkan if apakah $mode save atau update
    // Karena ketika update, ID tidak harus divalidasi
    // Jadi ID di validasi hanya ketika menambah data destinasi saja
    if($mode == "save")
      $this->form_validation->set_rules('input_id', 'ID', 'required|numeric|max_length[11]');
    
    $this->form_validation->set_rules('input_nama', 'Nama Tempat', 'required|max_length[100]');
    $this->form_validation->set_rules('input_deskripsi', 'Deskripsi', 'required');
      
    if($this->form_validation->run()) // Jika validasi benar
      return TRUE; // Maka kembalikan hasilnya dengan TRUE
    else // Jika ada data yang tidak sesuai validasi
      return FALSE; // Maka kembalikan hasilnya dengan FALSE
  }
  
  // Fungsi untuk melakukan simpan data ke tabel destinasi
  public function save(){
    $data = array(
      "id_destinasi" => $this->input->post('input_id'),
      "nama_destinasi" => $this->input->post('input_nama'),
      "deskripsi" => $this->input->post('input_deskripsi')
    );
    
    $this->db->insert('destinasi', $data); // Untuk mengeksekusi perintah insert data
  }
  
  // Fungsi untuk melakukan ubah data destinasi berdasarkan ID destinasi
  public function edit($id_destinasi){
    $data = array(
      "nama_destinasi" => $this->input->post('input_nama'),
      "deskripsi" => $this->input->post('input_deskripsi')
    );
    
    $this->db->where('id_destinasi', $id_destinasi);
    $this->db->update('destinasi', $data); // Untuk mengeksekusi perintah update data
  }
  
  // Fungsi untuk melakukan menghapus data destinasi berdasarkan ID destinasi
  public function delete($id_destinasi){
    $this->db->where('id_destinasi', $id_destinasi);
    $this->db->delete('destinasi'); // Untuk mengeksekusi perintah delete data
  }
}