<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_cust extends CI_Model
{
	public function select_all()
	{
		$data = $this->db->get('cust');

		return $data->result();
	}
	public function select_all_little()
	{
		$this->db->from("cust");
		$this->db->limit(5);		
		$query = $this->db->get(); 
		return $query->result();
	}

	public function select_by_id($id)
	{
		$sql = "SELECT * FROM cust WHERE id = '{$id}'";

		$data = $this->db->query($sql);

		return $data->row();
	}

	public function insert($data)
	{
		$id = md5(DATE('ymdhms') . rand());
		$sql = "INSERT INTO cust VALUES('{$id}','" . $data['nama'] . "','" . $data['ip_publik'] . "','" . $data['detail'] . "','" . $data['status'] . "')";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function delete($id)
	{
		$sql = "DELETE FROM cust WHERE id='" . $id . "'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function update($data)
	{
		$sql = "UPDATE cust SET nama='" . $data['nama'] . "', ip_publik='" . $data['ip_publik'] . "', detail='" . $data['detail'] . "', status='" . $data['status'] . "' WHERE id='" . $data['id'] . "'";

		$this->db->query($sql);

		return $this->db->affected_rows();
	}

	public function total_rows()
	{
		$data = $this->db->get('cust');

		return $data->num_rows();
	}
}

/* End of file M_perangkat.php */
/* Location: ./application/models/M_perangkat.php */