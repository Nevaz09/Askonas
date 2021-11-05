<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sub_layanan_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing data
	public function listing() {
		$this->db->select('*');
		$this->db->from('sub_layanan');
		$this->db->order_by('id_sub_layanan','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	// Read data
	public function read($slug_sub_layanan) {
		$this->db->select('*');
		$this->db->from('sub_layanan');
		$this->db->where('slug_sub_layanan',$slug_sub_layanan);
		$this->db->order_by('id_sub_layanan','DESC');
		$query = $this->db->get();
		return $query->row();
	}

	// Detail data
	public function detail($id_sub_layanan) {
		$this->db->select('*');
		$this->db->from('sub_layanan');
		$this->db->where('id_sub_layanan',$id_sub_layanan);
		$this->db->order_by('id_sub_layanan','DESC');
		$query = $this->db->get();
		return $query->row();
	}

	// Tambah
	public function tambah($data) {
		$this->db->insert('sub_layanan',$data);
	}

	// Edit
	public function edit($data) {
		$this->db->where('id_sub_layanan',$data['id_sub_layanan']);
		$this->db->update('sub_layanan',$data);
	}

	// Delete
	public function delete($data) {
		$this->db->where('id_sub_layanan',$data['id_sub_layanan']);
		$this->db->delete('sub_layanan',$data);
	}
}

/* End of file Kategori_model.php */
/* Location: ./application/models/Kategori_model.php */