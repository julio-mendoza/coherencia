<?php

class Judge_Model extends CI_Model {

	/**
	 * Get All enabled judges
	 */
	public function get_all()
	{
		$this->db->select($this->fields())
			->from('judge j')
			->join('person p', 'j.person_id = p.person_id')
			->where('is_enabled', true);

		$query = $this->db->get();
		return $query->result();
	}

	/**
	 * Get a judge by id
	 */
	public function get_by_id($id = NULL)
	{
		$result = NULL;

		if (!is_null($id)) {
			$this->db->select($this->fields())
				->from('judge j')
				->join('person p', 'j.person_id = p.person_id')
				->where('is_enabled', true)
				->where('j.person_id', $id);

			$query = $this->db->get();

			if ($query->num_rows() > 0) {
				$result = $query->row();
			}
		}
		
		return $result;
	}

	public function save() {
		
	}

	private function fields() {
		return 'p.person_id, p.first_name, p.last_name, j.charge';
	}
}
