<?php

require_once APPPATH.'/libraries/model/Coh_Model.php';

class User_Model extends Coh_Model {
	
	public $user_id;
	public $user_name;
	public $password;
	public $email_address;
	public $created_on;
	public $created_by;
	public $modified_on;
	public $modified_by;
	
	/**
	 * Get All enabled configuration values
	 */
	public function get_all()
	{
		$this->db->select($this->fields());
		$query = $this->db->get('user');
		return $query->result();
	}

	/**
	 * Get a configuration value by code
	 */
	public function get_by_id($id) {
		$result = NULL;

		if (!is_null($id)) {
			$this->db->select($this->fields())
				->where('user_id', $id);
			$query = $this->db->get('user');

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
		
		$this->password = password_hash($this->password, PASSWORD_DEFAULT);

		if (is_null($this->user_id)) {
			$this->created_on = date('Y-m-d H:i:s.u');
			$this->created_by = 'System';
			$result = $this->db->insert('user', $this);
		} else {
			$this->modified_on = new DateTime();
			$this->modified_by = 'System';
			$result = $this->db->update('user', $this, array('user_id' => $this->user_id));
		}
		
		return $result;
	}

	/**
	 * Specify the fields or columns retrieved in queries
	 */
	protected function fields() {
		return 'user_id, user_name, email_address, created_on, created_by, modified_on, modified_by';
	}

	/**
	 * Reset the values for this model's columns 
	 */
	protected function reset_fields() {
		$this->user_id = NULL;
		$this->user_name = NULL;
		$this->password = NULL;
		$this->email_address = NULL;
		$this->created_on = NULL;
		$this->created_by = NULL;
		$this->modified_on = NULL;
		$this->modified_by = NULL;
	}
}
