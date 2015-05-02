<?php

class App_Entry extends CI_Model {
	
	public function __construct() {
		parent::__construct();
		//$this->load->database('default', true);
	}

    public function get_by_key($key) {
        $this->db->where('app_key', $key);
        $query = $this->db->get('app_entry');
		$result = $query->result();
		return (count($result) > 0 ? $result[0] : null);
    }
}
