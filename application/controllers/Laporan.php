<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {


  public function index(){
    $data = array(
    	'title' => 'Laporan',
    	'isi' => 'v_content_backend',
    );
    $this->load->view('layout/laporan/v_wrapper_backend', $data, FALSE);
  }

}