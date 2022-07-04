<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_catatan extends CI_Model
{
	public function select_notif()
	{
		$this->db->from("catatan");
		$this->db->order_by('waktu','desc');
		$this->db->limit(3);		
		$query = $this->db->get(); 
		return $query->result();
	}
	public function select_all()
	{
		$this->db->from("catatan");
		// $this->db->order_by('waktu','');
		// $this->db->limit(1);		
		$query = $this->db->get(); 
		return $query->result();
	}

	public function select_by_id($id)
	{
		$sql = "SELECT * FROM catatan WHERE id = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function insert($data)
	{
		// $id = rand(10,100);
		// $sql = "INSERT INTO catatan VALUES('{$id}','" . $data['judul'] . "','" . $data['detail'] . "','" . $data['waktu'] . "')";
		$this->db->insert('catatan',$data);
		// $this->db->query($sql);

		return $this->db->affected_rows();
	}

	function input_status($id){
		print_r($id);
		$this->db->set('status', '1', FALSE);
		$this->db->where('id', $id['id']);
		$this->db->update('catatan');
	}

	function input_status0($id){
		print_r($id);
		$this->db->set('status', '0', FALSE);
		$this->db->where('id', $id['id']);
		$this->db->update('catatan');
	}

	function delete($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	
	public function total_rows()
	{
		$data = $this->db->get('catatan');
		return $data->num_rows();
	}
}

/* End of file M_perangkat.php */
/* Location: ./application/models/M_perangkat.php */