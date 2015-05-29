<?php

class Config_Value_Model extends CI_Model {

	/**
	 * Get All enabled configuration values
	 */
	public function get_all()
	{
		$this->db->select('config_value_id, code, value, text_value, group_id, description')
			->from('config_value');

		$query = $this->db->get();
		return $query->result();
	}

	/**
	 * Get a configuration value by code
	 */
	public function get_by_code($code) {
		$this->db->where('code', $code);
		$query = $this->db->get('config_value');
		$result = $query->result();
		return (count($result) > 0 ? $result[0] : null);
	}
}
