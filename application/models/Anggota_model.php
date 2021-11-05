<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing
	public function listing($jenis_anggota = FALSE)
	{
		$this->db->select('*');
		$this->db->from('anggota');
		if($jenis_anggota !== FALSE) {
            $this->db->where('jenis_anggota', $jenis_anggota);
        }
		$this->db->order_by('id_anggota', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function listingTerkonfirmasi($jenis_anggota = FALSE)
	{
		$this->db->select('*');
		$this->db->from('anggota');
		$this->db->where('status_anggota', 'Yes');
		$this->db->order_by('id_anggota', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function cariAnggota($nama = null, $kualifikasi = null, $id_cabang = null)
	{
		$this->db->select('*');
		$this->db->from('anggota');
		if($nama !== NULL) $this->db->like('nama', $nama);
		if($kualifikasi !== NULL) $this->db->where('kualifikasi_anggota', $kualifikasi);
		if($id_cabang !== NULL) $this->db->where('id_cabang', $id_cabang);
		$this->db->where('status_anggota', 'Yes');
		$this->db->order_by('id_anggota', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	// Total
	public function total($jenis_anggota = FALSE)
	{
		$this->db->select('COUNT(*) AS total');
		$this->db->from('anggota');
		if($jenis_anggota !== FALSE) {
            $this->db->where('jenis_anggota', $jenis_anggota);
        }
		$this->db->order_by('id_anggota', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	// Detail
	// Listing
	public function detail($id_anggota)
	{
		$this->db->select('*');
		$this->db->from('anggota');
		$this->db->where('id_anggota', $id_anggota);
		$this->db->order_by('id_anggota', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	// Tambah insert data
	public function tambah($data)
	{
		$this->db->insert('anggota',$data);
	}

	// Edit
	public function edit($data)
	{
		$this->db->where('id_anggota',$data['id_anggota']);
		$this->db->update('anggota',$data);
	}

	// Delete
	public function delete($data)
	{
		$this->db->where('id_anggota',$data['id_anggota']);
		$this->db->delete('anggota',$data);
	}
	
	//Konfirmasi
	public function konfirmasi($id_anggota)
	{
		if(is_array($id_anggota)) {
			
			foreach ($id_anggota as $key => $value) {
				$this->db->where('id_anggota',$value);
				$this->db->update('anggota',['status_anggota' => 'Yes']);		
			}
		} else {
			$this->db->where('id_anggota',$id_anggota);
			$this->db->update('anggota',['status_anggota' => 'Yes']);
		}
	}
}

/* End of file Anggota_model.php */
/* Location: ./application/models/Anggota_model.php */