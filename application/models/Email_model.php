<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing data
	public function listing() {
		$this->db->select('email.*, pesan.*');
		$this->db->from('email');
		// Join dg 2 tabel
		$this->db->join('pesan','pesan.id_pesan = email.id_pesan','LEFT');
		// End join
		$this->db->order_by('id_email','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	// Detail data
	public function detail($id_email) {
		$this->db->select('*');
		$this->db->from('email');
		$this->db->where('id_email',$id_email);
		$this->db->order_by('id_email','DESC');
		$query = $this->db->get();
		return $query->row();
	}

	public function detailPesan($id_pesan) {
		$this->db->select('*');
		$this->db->from('email');
		$this->db->where('id_pesan',$id_pesan);
		$this->db->order_by('id_email','DESC');
		$query = $this->db->get();
		return $query->result();
	}



	// Tambah
	public function tambah($data) {
		$this->db->insert('email',$data);
	}

	// Delete
	public function delete($data) {
		$this->db->where('id_email',$data['id_email']);
		$this->db->delete('email',$data);
	}
}

/* End of file Email_model.php */
/* Location: ./application/models/Email_model.php */