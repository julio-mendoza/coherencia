<?php

require_once APPPATH.'/libraries/model/Coh_Model.php';

class Person_Model extends Coh_Model {
	
	public $person_id;
	public $first_name;
	public $last_name;
	public $id_number;
	public $id_type;
	public $primary_address;
	public $primary_email_address;
	public $primary_phone_number;
	public $comments;
	
	/**
	 * Get All enabled configuration values
	 */
	public function get_all()
	{
		$this->db->select($this->fields());
		$query = $this->db->get('person');
		return $query->result();
	}

	/**
	 * Get a configuration value by code
	 */
	public function get_by_id($id) {
		$result = NULL;

		if (!is_null($id)) {
			$this->db->select($this->fields())
				->where('person_id', $id);
			$query = $this->db->get('person');

			if ($query->num_rows() > 0) {
				$result = $query->row();
			}
		}

		return $result;
	}

	/**
	 * Save this model to the database
	 */
	public function save() {
		$result = NULL;
		
		if (is_null($this->person_id)) {
			$this->created_on = date('Y-m-d H:i:s.u');
			$this->created_by = 'System';
			$result = $this->db->insert('person', $this);
		} else {
			$this->modified_on = new DateTime();
			$this->modified_by = 'System';
			$result = $this->db->update('person', $this, array('person_id' => $this->person_id));
		}

		return $result;
	}

	/**
	 * Specify the fields or columns retrieved in queries
	 */
	protected function fields() {
		return 'person_id, first_name, last_name, id_number, id_type, primary_address, primary_email_address, primary_phone_number, comments, created_on, created_by, modified_on, modified_by';
	}

	/**
	 * Reset the values for this model's columns 
	 */
	protected function reset_fields() {
		$this->person_id = NULL;
		$this->first_name = NULL;
		$this->last_name = NULL;
		$this->id_number = NULL;
		$this->id_type = 'DNI';
		$this->primary_address = NULL;
		$this->primary_email_address = NULL;
		$this->primary_phone_number = NULL;
		$this->comments = NULL;
		$this->created_on = NULL;
		$this->created_by = NULL;
		$this->modified_on = NULL;
		$this->modified_by = NULL;
	}
}
