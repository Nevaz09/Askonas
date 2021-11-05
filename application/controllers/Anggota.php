<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

	// Database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('anggota_model');
		$this->load->model('cabang_model');
		$this->load->model('up_model');
	}

	// Main page anggota
	public function index()	{
		$site 			= $this->konfigurasi_model->listing();
		$cabang 	= $this->cabang_model->listing();
		$anggota 	= $this->anggota_model->listingTerkonfirmasi();

		$data = array(	'title'		=> 'Anggota '.$site->namaweb.' | '.$site->tagline,
						'deskripsi'	=> 'Anggota '.$site->namaweb.' | '.$site->tagline.' '.$site->tentang,
						'keywords'	=> 'Anggota '.$site->namaweb.' | '.$site->tagline.' '.$site->keywords,
						'site'		=> $site,
						'anggota'		=> NULL,
						'cabang'		=> $cabang,
						'isi'		=> 'anggota/list');
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	public function cariAnggota() {
		$i = $this->input;
		$nama = null;
		$kualifikasi = null;
		$id_cabang = null;
		
		if(!empty($i->post('nama'))) $nama = $i->post('nama');
		if(!empty($i->post('kualifikasi_anggota'))) $kualifikasi = $i->post('kualifikasi_anggota');
		if(!empty($i->post('id_cabang'))) $id_cabang = $i->post('id_cabang');

		$site 			= $this->konfigurasi_model->listing();
		$cabang 	= $this->cabang_model->listing();
		$anggota 	= $this->anggota_model->cariAnggota($nama, $kualifikasi, $id_cabang);

		$data = array(	'title'		=> 'Anggota '.$site->namaweb.' | '.$site->tagline,
						'deskripsi'	=> 'Anggota '.$site->namaweb.' | '.$site->tagline.' '.$site->tentang,
						'keywords'	=> 'Anggota '.$site->namaweb.' | '.$site->tagline.' '.$site->keywords,
						'site'		=> $site,
						'anggota'		=> $anggota,
						'cabang'		=> $cabang,
						'isi'		=> 'anggota/list');
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	public function pendaftaran() {
		$site 			= $this->konfigurasi_model->listing();

		$data = array(	'title'		=> 'Pendaftaran Anggota',
						'deskripsi'	=> 'Formulir Pendaftaran Anggota '.$site->namaweb,
						'keywords'	=> 'Pendaftaran '.$site->namaweb.' | '.$site->tagline.' '.$site->keywords,
						'site'		=> $site,
						'defaultSubject' => 'Pengajuan Pendaftaran Anggota',
						'isi'		=> 'kontak/list');
		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file Contact.php */
/* Location: ./application/controllers/Anggota.php */