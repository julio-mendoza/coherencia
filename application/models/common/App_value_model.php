<?php

class App_Value_Model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
	}

    public function get_by_code($code) {
        $this->db->where('code', $code);
        $query = $this->db->get('value');
		$result = $query->result();
		return (count($result) > 0 ? $result[0] : null);
    }
}
