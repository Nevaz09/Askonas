<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cabang extends CI_Controller {

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('cabang_model');
		$this->log_user->add_log();
		// Tambahkan proteksi halaman
		$url_pengalihan = str_replace('index.php/', '', current_url());
		$pengalihan 	= $this->session->set_userdata('pengalihan',$url_pengalihan);
		// Ambil check login dari simple_login
		$this->simple_login->check_login($pengalihan);

	}

	// Halaman cabang
	public function index()	{
		$cabang = $this->cabang_model->listing();
		$site 	= $this->konfigurasi_model->listing();

		$data = array(	'title'			=> 'Cabang '.$site->namaweb,
						'cabang'		=> $cabang,
						'site'			=> $site,
						'isi'			=> 'admin/cabang/list');
		$this->load->view('admin/layout/wrapper', $data, FALSE);		
	}

	// Tambah cabang
	public function tambah()	{
		// Validasi
		$valid = $this->form_validation;

		$valid->set_rules('nama','Nama','required',
			array(	'required'	=> 'Nama harus diisi'));

		$valid->set_rules('no_telepon','No Telepon','required|max_length[16]|numeric',
			array(	'required'	=> 'No Telepon harus diisi'));
			
		$valid->set_rules('alamat','Alamat','required',
			array(	'required'	=> 'Alamat harus diisi'));

		$valid->set_rules('email','Email','required|max_length[50]',
			array(	'required'	=> 'Email harus diisi'));

		$valid->set_rules('struktur_organisasi','Struktur Organisasi','required',
				array(	'required'	=> 'Struktur Organisasi harus diisi'));

		if($valid->run() === FALSE) {
			
			$data = array(	'title'		=> 'Tambah Cabang Baru',
											'isi'		=> 'admin/cabang/tambah'
										);
			$this->load->view('admin/layout/wrapper', $data, FALSE);
		// Masuk ke database
		}else{
			$inp = $this->input;

			$data = array(	
							'nama'		=> $inp->post('nama'),
							'no_telepon'		=> $inp->post('no_telepon'),
							'alamat'		=> $inp->post('alamat'),
							'email'		=> $inp->post('email'),
							'struktur_organisasi'	=> $inp->post('struktur_organisasi')
						);
			$this->cabang_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data telah ditambahkan');
			redirect(base_url('admin/cabang'),'refresh');
		}
		// End masuk database	
	}

	// Edit cabang
	public function edit($id_cabang)	{
		$cabang = $this->cabang_model->detail($id_cabang);

		// Validasi
		$valid = $this->form_validation;

		$valid->set_rules('nama','Nama','required',
			array(	'required'	=> 'Nama harus diisi'));

		$valid->set_rules('no_telepon','No Telepon','required|max_length[16]|numeric',
			array(	'required'	=> 'No Telepon harus diisi'));
			
		$valid->set_rules('alamat','Alamat','required|max_length[250]',
			array(	'required'	=> 'Alamat harus diisi'));

			$valid->set_rules('email','Email','required|max_length[50]',
			array(	'required'	=> 'Email harus diisi'));

		$valid->set_rules('struktur_organisasi','Struktur Organisasi','required',
				array(	'required'	=> 'Struktur Organisasi harus diisi'));

		if($valid->run() === FALSE) {
			
			$data = array(	'title'		=> 'Edit Cabang',
											'cabang'		=> $cabang,
											'isi'		=> 'admin/cabang/edit'
										);
			$this->load->view('admin/layout/wrapper', $data, FALSE);
		// Masuk ke database
		}else{
			$inp = $this->input;

			$data = array('id_cabang'		=> $id_cabang,	
							'nama'		=> $inp->post('nama'),
							'no_telepon'		=> $inp->post('no_telepon'),
							'alamat'		=> $inp->post('alamat'),
							'email'		=> $inp->post('email'),
							'struktur_organisasi'	=> $inp->post('struktur_organisasi')
						);
			$this->cabang_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data telah ditambahkan');
			redirect(base_url('admin/cabang'),'refresh');
		}
		// End masuk database			
	}


	// Delete
	public function delete($id_cabang) {
		// Tambahkan proteksi halaman
		$url_pengalihan = str_replace('index.php/', '', current_url());
		$pengalihan 	= $this->session->set_userdata('pengalihan',$url_pengalihan);
		// Ambil check login dari simple_login
		$this->simple_login->check_login($pengalihan);
		
		$cabang = $this->cabang_model->detail($id_cabang);
		// End hapus gambar
		$data = array('id_cabang'	=> $id_cabang);
		$this->cabang_model->delete($data);
	    $this->session->set_flashdata('sukses', 'Data telah dihapus');
	    redirect(base_url('admin/cabang'),'refresh');
	}
}

/* End of file Cabang.php */
/* Location: ./application/controllers/admin/Cabang.php */