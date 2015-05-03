<?php

class Config_Value_Model extends CI_Model {

	public function get_by_code($code) {
		$this->db->where('code', $code);
		$query = $this->db->get('config_value');
		$result = $query->result();
		return (count($result) > 0 ? $result[0] : null);
	}
}
