<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// LOAD EXCEL
require('./excel/vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
// END LOAD EXCEL

class Pesan extends CI_Controller {

	// load data
	public function __construct()
	{
		parent::__construct();
		$this->load->model('pesan_model');
		$this->load->model('email_model');
		$this->load->model('up_model');
		// Tambahkan proteksi halaman
		$url_pengalihan = str_replace('index.php/', '', current_url());
		$pengalihan 	= $this->session->set_userdata('pengalihan',$url_pengalihan);
		// Ambil check login dari simple_login
		$this->simple_login->check_login($pengalihan);
	}

	// Admin page
	public function index()
	{
		$pesan = $this->pesan_model->listing();

		$data = array(	'title'		=> 'Pesan Perusahaan dan Perorangan',
						'pesan'	=> $pesan,
						'isi'		=> 'admin/pesan/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function detail($id_pesan)
	{
		$pesan = $this->pesan_model->detail($id_pesan);
		$email = $this->email_model->detailPesan($id_pesan);

		$data = array(	'title'		=> 'Pesan Perusahaan dan Perorangan',
						'pesan'	=> $pesan,
						'email'	=> $email,
						'isi'		=> 'admin/pesan/detail_balasan'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// Load data
	public function data()
	{
		header('Content-Type: application/json');
		
		$pesan 	= $this->pesan_model->listing();
		$total 		= $this->pesan_model->total();
		
		echo '{"draw":10,"recordsTotal":'.$total->total.',"recordsFiltered":'.count($pesan).',"data":';
		 echo json_encode($pesan);
		echo '}';
	}

	// Delete
	public function delete($id_pesan)
	{
		$data = array(	'id_pesan'	=> $id_pesan);
		$this->pesan_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data berhasil dihapus');
		redirect(base_url('admin/pesan'),'refresh');
	}
	
}

/* End of file Pesan.php */
/* Location: ./application/controllers/admin/Pesan.php */