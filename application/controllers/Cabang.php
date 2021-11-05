<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cabang extends CI_Controller {

	// Database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('cabang_model');
		$this->load->model('up_model');
	}

	// Main page cabang
	public function index($id_cabang = NULL)	{
		$site 			= $this->konfigurasi_model->listing();
		$cabang 	= $this->cabang_model->listing();

		$data = array(	'title'		=> 'Cabang '.$site->namaweb.' | '.$site->tagline,
						'deskripsi'	=> 'Cabang '.$site->namaweb.' | '.$site->tagline.' '.$site->tentang,
						'keywords'	=> 'Cabang '.$site->namaweb.' | '.$site->tagline.' '.$site->keywords,
						'site'		=> $site,
						'cabang'		=> $cabang,
						'isi'		=> 'cabang/list');
		
		if(!is_null($cabang)) {
			$cabang = $this->cabang_model->detail($id_cabang);
			if(isset($cabang->nama)) {
				$data['title'] = $cabang->nama;
				$data['cabang'] = $cabang;
			} 
		}
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Contact.php */
/* Location: ./application/controllers/Cabang.php */