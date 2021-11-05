<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cabang_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing
	public function listing($alamat = FALSE)
	{
		$this->db->select('*');
		$this->db->from('cabang');
		if($alamat !== FALSE) {
            $this->db->where('alamat', $alamat);
        }
		$this->db->order_by('id_cabang', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	// Detail
	// Listing
	public function detail($id_cabang)
	{
		$this->db->select('*');
		$this->db->from('cabang');
		$this->db->where('id_cabang', $id_cabang);
		$this->db->order_by('id_cabang', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	// Tambah insert data
	public function tambah($data)
	{
		$this->db->insert('cabang',$data);
	}

	// Edit
	public function edit($data)
	{
		$this->db->where('id_cabang',$data['id_cabang']);
		$this->db->update('cabang',$data);
	}

	// Delete
	public function delete($data)
	{
		$this->db->where('id_cabang',$data['id_cabang']);
		$this->db->delete('cabang',$data);
	}
	
}

/* End of file Cabang_model.php */
/* Location: ./application/models/Cabang_model.php */