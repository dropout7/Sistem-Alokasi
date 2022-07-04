<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_perangkat extends CI_Model
{
	public function select_all()
	{
		$data = $this->db->get('perangkat');
		return $data->result();
	}

	public function select_all_little()
	{
		$this->db->from("perangkat");
		$this->db->limit(5);		
		$query = $this->db->get(); 
		return $query->result();
	}

	public function select_by_id($id)
	{
		$sql = "SELECT * FROM perangkat WHERE id = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function insert($data)
	{
		$id = md5(DATE('ymdhms') . rand());
		$sql = "INSERT INTO perangkat VALUES('{$id}','" . $data['nama'] . "','" . $data['ip_address'] . "','" . $data['detail'] . "','" . $data['bts'] . "')";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id)
	{
		$sql = "DELETE FROM perangkat WHERE id='" . $id . "'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function update($data)
	{
		$sql = "UPDATE perangkat SET nama='" . $data['nama'] . "', ip_address='" . $data['ip_address'] . "', detail='" . $data['detail'] . "', bts='" . $data['bts'] . "' WHERE id='" . $data['id'] . "'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}
	
	public function total_rows()
	{
		$data = $this->db->get('perangkat');

		return $data->num_rows();
	}
}

/* End of file M_perangkat.php */
/* Location: ./application/models/M_perangkat.php */