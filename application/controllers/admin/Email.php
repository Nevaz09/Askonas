<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// LOAD EXCEL
require('./excel/vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
// END LOAD EXCEL

class Email extends CI_Controller {

	// load data
	public function __construct()
	{
		parent::__construct();
		$this->load->model('email_model');
		$this->load->model('pesan_model');
		$this->load->model('up_model');
		$this->load->model('konfigurasi_model');
		// Tambahkan proteksi halaman
		$url_pengalihan = str_replace('index.php/', '', current_url());
		$pengalihan 	= $this->session->set_userdata('pengalihan',$url_pengalihan);
		// Ambil check login dari simple_login
		$this->simple_login->check_login($pengalihan);
	}

	// Admin page
	public function index()
	{
		$email = $this->email_model->listing();

		$data = array(	'title'		=> 'Email Perusahaan dan Perorangan',
						'email'	=> $email,
						'isi'		=> 'admin/email/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

  public function form($id_pesan)
  {
    $pesan = $this->pesan_model->detail($id_pesan);

		$data = array(	'title'		=> 'Form Email Balasan',
						'pesan'	=> $pesan,
						'isi'		=> 'admin/email/tambah'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
  }

  public function kirim()
  {
    $this->load->model('email_model');
		$valid = $this->form_validation;

		$valid->set_rules('isi','Isi email','required',
			array(	'required'		=> 'Isi email harus diisi'));
			
		$valid->set_rules('subject','Subject','required',
		array(	'required'		=> 'Subject harus diisi'));
		
		$valid->set_rules('id_pesan','Pesan','required',
			array(	'required'		=> 'Pesan harus diisi'));

		if($valid->run()===FALSE) {
		// End validasi
			redirect(base_url('admin/email/form/'.$this->input->post('id_pesan')));
		// Proses masuk ke database
		}else{
      $i 	= $this->input;

      $id_pesan = $i->post('id_pesan');
      $pesan = $this->pesan_model->detail($id_pesan);
			$smtp	= $this->konfigurasi_model->listing();

			$data = array(
							'id_pesan'	=> $i->post('id_pesan'),
							'subject'	=> $i->post('subject'),
							'isi'		=> $i->post('isi'),
						);
			$config = Array(
				'protocol' => $smtp->protocol,
				'smtp_host' => $smtp->smtp_host,
				'smtp_port' => $smtp->smtp_port,
				'smtp_user' => $smtp->smtp_user,
				'smtp_pass' => $smtp->smtp_pass,
				'mailtype'  => 'html', 
				'charset'   => 'iso-8859-1'
			);
			
			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");
			
			// Set to, from, message, etc.
			$this->email->from($smtp->smtp_user, $smtp->namaweb);
			$this->email->to($pesan->email); 
	
			$this->email->subject($data['subject']);
			$this->email->message($data['isi']);  
			
			if($this->email->send()) {
				$this->email_model->tambah($data);
				$this->session->set_flashdata('sukses', 'Email balasan terkirim');
			} else {
				$this->session->set_flashdata('error', 'Email balasan gagal terkirim');
			}

			redirect(base_url('admin/pesan'), 'refresh');
		}
		// End proses masuk database
    
  }

	// Load data
	public function data()
	{
		header('Content-Type: application/json');
		
		$email 	= $this->email_model->listing();
		$total 		= $this->email_model->total();
		
		echo '{"draw":10,"recordsTotal":'.$total->total.',"recordsFiltered":'.count($email).',"data":';
		 echo json_encode($email);
		echo '}';
	}

	// Delete
	public function delete($id_email)
	{
		$data = array(	'id_email'	=> $id_email);
		$this->email_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data berhasil dihapus');
		redirect(base_url('admin/email'),'refresh');
	}
	
}

/* End of file Email.php */
/* Location: ./application/controllers/admin/Email.php */