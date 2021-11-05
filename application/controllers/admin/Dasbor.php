<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Tambahkan proteksi halaman
		$url_pengalihan = str_replace('index.php/', '', current_url());
		$pengalihan 	= $this->session->set_userdata('pengalihan',$url_pengalihan);
		// Ambil check login dari simple_login
		$this->simple_login->check_login($pengalihan);
		$this->load->model('anggota_model');
		$this->load->model('staff_model');
		$this->load->model('anggota_model');
		$this->load->model('staff_model');
		$this->load->model('dasbor_model');
		$this->load->model('up_model');
	}

	// Halaman dasbor
	public function index()
	{
		$anggota 				= $this->anggota_model->listing();
		$staff 					= $this->staff_model->listing();

		$data = array(	'title'					=> 'Halaman Dasbor',
						'anggota'				=> $anggota,
						'staff'					=> $staff,
						'isi'					=> 'admin/dasbor/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

}

/* End of file Dasbor.php */
/* Location: ./application/controllers/admin/Dasbor.php */