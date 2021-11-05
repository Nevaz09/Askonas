<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('pesan');
		$this->db->order_by('id_pesan', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	// Total
	public function total()
	{
		$this->db->select('COUNT(*) AS total');
		$this->db->from('pesan');
		$this->db->order_by('id_pesan', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	// Detail
	// Listing

	// Tambah insert data
	public function tambah($data)
	{
		$this->db->insert('pesan',$data);
	}

	// Edit
	public function edit($data)
	{
		$this->db->where('id_pesan',$data['id_pesan']);
		$this->db->update('pesan',$data);
	}

	// Detail data
	public function detail($id_pesan) {
		$this->db->select('*');
		$this->db->from('pesan');
		$this->db->where('id_pesan',$id_pesan);
		$this->db->order_by('id_pesan','DESC');
		$query = $this->db->get();
		return $query->row();
	}

	// Delete
	public function delete($data)
	{
		$this->db->where('id_pesan',$data['id_pesan']);
		$this->db->delete('pesan',$data);
	}
	
}

/* End of file Pesan_model.php */
/* Location: ./application/models/Pesan_model.php */