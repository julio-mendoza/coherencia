<?php

class Judge_Model extends CI_Model {

	public function get_all() {
		$this->db->select('p.person_id, p.first_name, p.last_name, j.charge')
			->from('judge j')
			->join('person p', 'j.person_id = p.person_id');

		$query = $this->db->get();
		return $query->result();
	}
}
