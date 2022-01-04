<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Destinasi extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_destinasi');
    $this->load->model('m_kategori');

  }

  // List all your items
  public function index()
  {
    $data = array(
      'title' => 'Add Destinasi',
      'destinasi' => $this->m_destinasi->get_all_data(),
      'isi' => 'destinasi/v_add',
      );
      $this->load->view('destinasi/v_wrapper_backend', $data, FALSE);
  }

  // Add a new item
  public function add()
  {
    $this->form_validation->set_rules('nama_destinasi', 'Nama Destinasi', 'required', 
      array('required'=> '%s Harus Di Isi !!!'));
    $this->form_validation->set_rules('lokasi', 'Lokasi Wisata', 'required', 
      array('required'=> '%s Harus Di Isi !!!'));
    $this->form_validation->set_rules('id_kategori', 'Nama Kategori', 'required', 
      array('required'=> '%s Harus Di Isi !!!'));
    $this->form_validation->set_rules('deskripsi', 'Deskripsi Wisata', 'required', 
      array('required'=> '%s Harus Di Isi !!!'));

    if ($this->form_validation->run() == TRUE) {
      $config['upload_path'] = './assets/gambar/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
      $config['max_size']     = '10000';
      $this->upload->initialize($config);
      $field_name = 'gambar';
      
      if (!$this->upload->do_upload($field_name)) {
        $data = array(
          'title' => 'Add Destinasi',
          'kategori' => $this->m_kategori->get_all_data(), 
          'error_upload' => $this->upload->display_errors(),
          'isi' => 'destinasi/v_add',
        );
      $this->load->view('destinasi/v_wrapper_add', $data, FALSE);
      } else {
        $upload_data  = array('uploads' => $this->upload->data());
        $config['image_library'] = 'gd2';
        $config['source_image'] = './assets/gambar/' . $upload_data['uploads']['file_name'];
        $this->load->library('image_lib', $config);
//upload ke database
        $data = array(
          'nama_destinasi' => $this->input->post('nama_destinasi'),
          'lokasi' => $this->input->post('lokasi'),
          'id_kategori' => $this->input->post('id_kategori'), 
          'deskripsi' => $this->input->post('deskripsi'),
          'gambar' => $upload_data['uploads']['file_name'],
        );
        $this->m_destinasi->add($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan !!!');
        redirect('destinasi');
      }
    }

    $data = array(
      'title' => 'Add Destinasi',
      'kategori' => $this->m_kategori->get_all_data(), 
      'isi' => 'destinasi/v_add',
      );
      $this->load->view('destinasi/v_wrapper_add', $data, FALSE);
  }



  //Edit Destinasi
  public function edit($id_destinasi = NULL)
  {
    $this->form_validation->set_rules('nama_destinasi', 'Nama Destinasi', 'required', 
      array('required'=> '%s Harus Di Isi !!!'));
    $this->form_validation->set_rules('lokasi', 'Lokasi Wisata', 'required', 
      array('required'=> '%s Harus Di Isi !!!'));
    $this->form_validation->set_rules('id_kategori', 'Nama Kategori', 'required', 
      array('required'=> '%s Harus Di Isi !!!'));
    $this->form_validation->set_rules('deskripsi', 'Deskripsi Wisata', 'required', 
      array('required'=> '%s Harus Di Isi !!!'));

    if ($this->form_validation->run() == TRUE) {
      $config['upload_path'] = './assets/gambar/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
      $config['max_size']     = '10000';
      $this->upload->initialize($config);
      $field_name = 'gambar';
      
      if (!$this->upload->do_upload($field_name)) {
        $data = array(
          'title' => 'Edit Destinasi',
          'kategori' => $this->m_kategori->get_all_data(),
          'destinasi' => $this->m_destinasi->get_data($id_destinasi), 
          'error_upload' => $this->upload->display_errors(),
          'isi' => 'destinasi/v_edit',
        );
      $this->load->view('destinasi/v_wrapper_edit', $data, FALSE);
      } else {
        $upload_data  = array('uploads' => $this->upload->data());
        $config['image_library'] = 'gd2';
        $config['source_image'] = './assets/gambar/' . $upload_data['uploads']['file_name'];
        $this->load->library('image_lib', $config);
//upload ke database
        $data = array(
          'id_destinasi' => $id_destinasi,
          'nama_destinasi' => $this->input->post('nama_destinasi'),
          'lokasi' => $this->input->post('lokasi'),
          'id_kategori' => $this->input->post('id_kategori'), 
          'deskripsi' => $this->input->post('deskripsi'),
          'gambar' => $upload_data['uploads']['file_name'],
        );
        $this->m_destinasi->edit($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Diganti !!!');
        redirect('destinasi');
      }
      //Jika tanpa ubah gambar
      $data = array(
          'id_destinasi' => $id_destinasi,
          'nama_destinasi' => $this->input->post('nama_destinasi'),
          'lokasi' => $this->input->post('lokasi'),
          'id_kategori' => $this->input->post('id_kategori'), 
          'deskripsi' => $this->input->post('deskripsi'),
        );
        $this->m_destinasi->edit($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Diganti !!!');
        redirect('destinasi');
    }

    $data = array(
      'title' => 'Edit Destinasi',
      'kategori' => $this->m_kategori->get_all_data(), 
      'destinasi' => $this->m_destinasi->get_data($id_destinasi),
      'isi' => 'destinasi/v_edit',
      );
      $this->load->view('destinasi/v_wrapper_edit', $data, FALSE);
  }

  //Delete one item
  public function delete($id_destinasi = NULL)
  {
    //Hapus Gambar
    $destinasi = $this->m_destinasi->get_data($id_destinasi);
    if ($destinasi->gambar != "") {
      unlink('.assets/gambar/' . $destinasi->gambar);
    }
    //end hapus gambar

    $data = array('id_destinasi' => $id_destinasi);
    $this->m_destinasi->delete($data);
    $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus !!!');
    redirect('destinasi');
  }
}

/* End of file Destinasi.php */
/* Location: ./application/controllers/Destinasi.php */
