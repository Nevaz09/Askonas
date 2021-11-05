<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sub_layanan extends CI_Controller {

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('sub_layanan_model');
		$this->log_user->add_log();
		// Tambahkan proteksi halaman
		$url_pengalihan = str_replace('index.php/', '', current_url());
		$pengalihan 	= $this->session->set_userdata('pengalihan',$url_pengalihan);
		// Ambil check login dari simple_login
		$this->simple_login->check_login($pengalihan);
	}

	// Halaman utama
	public function index()	{

		// Validasi
		$valid = $this->form_validation;

		$valid->set_rules('nama_sub_layanan','Nama Sub Layanan','required|is_unique[sub_layanan.nama_sub_layanan]',
			array(	'required'		=> 'Nama Sub Layanan harus diisi',
					'is_unique'		=> 'Nama Sub Layanan sudah ada. Buat Nama Sub Layanan baru!'));

		$valid->set_rules('urutan','Urutan','required',
			array(	'required'		=> 'Urutan harus diisi'));

		if($valid->run()===FALSE) {
		// End validasi

		$data = array(	'title'		=> 'Sub Layanan',
						'sub_layanan'	=> $this->sub_layanan_model->listing(),
						'isi'		=> 'admin/sub_layanan/list');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// Proses masuk ke database
		}else{
			$i 	= $this->input;
			$slug 	= url_title($i->post('nama_sub_layanan'),'dash',TRUE);

			$data = array(	'id_user'		=> $this->session->userdata('id_user'),
							'nama_sub_layanan'	=> $i->post('nama_sub_layanan'),
							'slug_sub_layanan'	=> $slug,
							'urutan'		=> $i->post('urutan'),
						);
			$this->sub_layanan_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data telah ditambah');
			redirect(base_url('admin/sub_layanan'),'refresh');
		}
		// End proses masuk database
	}

	// Edit sub_layanan
	public function edit($id_sub_layanan)	{

		// Validasi
		$valid = $this->form_validation;

		$valid->set_rules('nama_sub_layanan','Nama Sub Layanan','required',
			array(	'required'		=> 'Nama Sub Layanan harus diisi'));

		$valid->set_rules('urutan','Urutan','required',
			array(	'required'		=> 'Urutan harus diisi'));

		if($valid->run()===FALSE) {
		// End validasi

		$data = array(	'title'		=> 'Edit Sub Layanan',
						'sub_layanan'	=> $this->sub_layanan_model->detail($id_sub_layanan),
						'isi'		=> 'admin/sub_layanan/edit');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// Proses masuk ke database
		}else{
			$i 	= $this->input;
			$slug 	= url_title($i->post('nama_sub_layanan'),'dash',TRUE);

			$data = array(	'id_sub_layanan'	=> $id_sub_layanan,
							'id_user'		=> $this->session->userdata('id_user'),
							'nama_sub_layanan'	=> $i->post('nama_sub_layanan'),
							'slug_sub_layanan'	=> $slug,
							'urutan'		=> $i->post('urutan'),
						);
			$this->sub_layanan_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data telah diedit');
			redirect(base_url('admin/sub_layanan'),'refresh');
		}
		// End proses masuk database
	}

	// Delete user
	public function delete($id_sub_layanan) {
		// Proteksi proses delete harus login
		// Tambahkan proteksi halaman
$url_pengalihan = str_replace('index.php/', '', current_url());
$pengalihan 	= $this->session->set_userdata('pengalihan',$url_pengalihan);
// Ambil check login dari simple_login
$this->simple_login->check_login($pengalihan);


		$data = array('id_sub_layanan'	=> $id_sub_layanan);
		$this->sub_layanan_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data telah dihapus');
		redirect(base_url('admin/sub_layanan'),'refresh');
	}
}

/* End of file Kategori.php */
/* Location: ./application/controllers/admin/Kategori.php */