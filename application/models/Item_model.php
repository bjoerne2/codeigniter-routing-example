<?php
class Item_model extends CI_Model {

	public function get_all()
	{
		$query = $this->db->get('items');
		return $query->result();
	}

	public function get($id)
	{
		$query = $this->db->get_where('items', array('id' => $id), 1, 0);
		if (empty($query->result())) {
			return array();
		} else {
			return $query->result()[0];
		}
	}

	public function insert($data)
	{
		$this->db->insert('items', $data);
	}

	public function update($id, $data)
	{
		$this->db->update('items', $data, array('id' => $id));
	}

	public function delete($id)
	{
		$this->db->delete('items', array('id' => $id));
	}
}
