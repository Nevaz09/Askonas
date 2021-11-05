<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	// Database
	public function __construct()
	{
		parent::__construct();
	}

	// Main page kontak
	public function index()	{
		$site 			= $this->konfigurasi_model->listing();

		$data = array(	'title'		=> 'Hubungi Kami',
						'deskripsi'	=> 'Formulir Pesan Untuk '.$site->namaweb,
						'keywords'	=> 'Kontak '.$site->namaweb.' | '.$site->tagline.' '.$site->keywords,
						'site'		=> $site,
						'isi'		=> 'kontak/list');
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	public function tambah() {
		// Validasi
		$this->load->model('pesan_model');
		$valid = $this->form_validation;

		$valid->set_rules('nama','Nama','required',
			array(	'required'		=> 'Nama harus diisi'));

		$valid->set_rules('email','Email','required',
			array(	'required'		=> 'Email harus diisi'));
			
		$valid->set_rules('subject','Subject','required',
		array(	'required'		=> 'Subject harus diisi'));
		
		$valid->set_rules('pesan','Pesan','required',
			array(	'required'		=> 'Pesan harus diisi'));

		if($valid->run()===FALSE) {
		// End validasi
			redirect(base_url($i->post('redirect')));
		// Proses masuk ke database
		}else{
			$i 	= $this->input;

			$data = array(
							'nama'	=> $i->post('nama'),
							'subject'	=> $i->post('subject'),
							'email'		=> $i->post('email'),
							'pesan'		=> $i->post('pesan'),
						);
			$this->pesan_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Pesan terkirim');
			redirect(base_url($i->post('redirect')), 'refresh');
		}
		// End proses masuk database
	}

}

/* End of file Contact.php */
/* Location: ./application/controllers/Kontak.php */