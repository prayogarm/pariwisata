<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_home');
	}

  public function index(){
    $data = array(
    	'title' => 'Home',
    	'destinasi' => $this->m_home->get_all_data(),
    	'isi' => 'v_home',
    );
    $this->load->view('layout/v_wrapper_frontend', $data, FALSE);
  }

  public function kategori($id_kategori)
  {
  	$kategori = $this->m_home->kategori($id_kategori);
    $data = array(
    	'title' => 'Kategori Barang : ' . $kategori->nama_kategori,
    	'destinasi' => $this->m_home->get_all_data_destinasi($id_kategori),
    	'isi' => 'v_kategori_wisata',
    );
    $this->load->view('kategori-frontend/v_wrapper_frontend', $data, FALSE);
  }

  public function detail_wisata($id_destinasi)
  {
    $data = array(
      'title' => 'Detail Wisata',
      'destinasi' => $this->m_home->detail_wisata($id_destinasi),
      'isi' => 'v_detail_wisata',
    );
    $this->load->view('detail-wisata-frontend/v_wrapper_frontend', $data, FALSE);
  }

  public function print_informasi()
  {
    $this->load->view('cetak-info-frontend/v_wrapper_frontend');
  }

    public function print_pdf()
  {
    $this->load->view('v_print');
  }

  public function registrasi()
  {
    $this->load->view('registrasi-frontend/v_wrapper_frontend');
  }

}