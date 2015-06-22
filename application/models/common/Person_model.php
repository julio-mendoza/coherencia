<?php

require_once APPPATH.'/libraries/model/Coh_Model.php';

class Person_Model extends Coh_Model
{
	const VCODE_ID_NUMBER_EMPTY = "ID_NUMBER_EMPTY";
	const VID_ID_NUMBER_EMPTY = 10201;
	const VCODE_ID_TYPE_EMPTY = "ID_TYPE_EMPTY";
	const VID_ID_TYPE_EMPTY = 10202;
	const VCODE_FULL_ID_NUMBER_ALREADY_EXISTS = "FULL_ID_NUMBER_ALREADY_EXISTS";
	const VID_FULL_ID_NUMBER_ALREADY_EXISTS = 10203;
	const VCODE_FIRST_NAME_EMPTY = "FIRST_NAME_EMPTY";
	const VID_FIRST_NAME_EMPTY = 10204;
	const VCODE_LAST_NAME_EMPTY = "LAST_NAME_EMPTY";
	const VID_LAST_NAME_EMPTY = 10205;
	const VCODE_FULL_NAME_ALREADY_EXISTS = "FULL_NAME_ALREADY_EXISTS";
	const VID_FULL_NAME_ALREADY_EXISTS = 10206;
	const VCODE_PRI_EMAIL_ADDR_ALREADY_EXISTS = "PRIMARY_EMAIL_ADDRESS_ALREADY_EXISTS";
	const VID_PRI_EMAIL_ADDR_ALREADY_EXISTS = 10207;

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
	public function get_by_id($id)
	{
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

	public function validate()
	{
		$this->validate_id_number();
		$this->validate_id_type();
		$this->validate_full_id_number();
		$this->validate_first_name();
		$this->validate_last_name();
		$this->validate_full_name();
		$this->validate_email_address();

		return true;
	}

	public function validate_id_number()
	{
		if (empty($this->id_number)) {
			throw new Coh_Model_Exception(
				self::VCODE_ID_NUMBER_EMPTY, 
				self::VID_ID_NUMBER_EMPTY,
				self::VCODE_ID_NUMBER_EMPTY);
		}
	}

	public function validate_id_type()
	{
		if (empty($this->id_type)) {
			throw new Coh_Model_Exception(
				self::VCODE_ID_TYPE_EMPTY,
				self::VID_ID_TYPE_EMPTY,
				self::VCODE_ID_TYPE_EMPTY);
		}
	}

	public function validate_full_id_number()
	{
		if(!is_null($this->person_id))
		{
			$this->db->where('person_id !=', $this->person_id);
		}

		$this->db->where('id_number', $this->id_number);
		$this->db->where('id_type', $this->id_type);
		$query = $this->db->get('person');

		if ($query->num_rows() > 0)
		{
			throw new Coh_Model_Exception(
				self::VCODE_FULL_ID_NUMBER_ALREADY_EXISTS,
				self::VID_FULL_ID_NUMBER_ALREADY_EXISTS,
				self::VCODE_FULL_ID_NUMBER_ALREADY_EXISTS);
		}
	}

	public function validate_first_name()
	{
		if (empty($this->first_name)) {
			throw new Coh_Model_Exception(
				self::VCODE_FIRST_NAME_EMPTY,
				self::VID_FIRST_NAME_EMPTY,
				self::VCODE_FIRST_NAME_EMPTY);
		}
	}

	public function validate_last_name()
	{
		if (empty($this->last_name)) {
			throw new Coh_Model_Exception(
				self::VCODE_LAST_NAME_EMPTY,
				self::VID_LAST_NAME_EMPTY,
				self::VCODE_LAST_NAME_EMPTY);
		}
	}

	public function validate_full_name()
	{
		if(!is_null($this->person_id))
		{
			$this->db->where('person_id !=', $this->person_id);
		}

		$this->db->where('first_name', $this->first_name);
		$this->db->where('last_name', $this->last_name);
		$query = $this->db->get('person');

		if ($query->num_rows() > 0)
		{
			throw new Coh_Model_Exception(
				self::VCODE_FULL_NAME_ALREADY_EXISTS,
				self::VID_FULL_NAME_ALREADY_EXISTS,
				self::VCODE_FULL_NAME_ALREADY_EXISTS);
		}
	}

	public function validate_email_address()
	{
		if (!empty($this->primary_email_address)) 
		{
			if(!is_null($this->person_id))
			{
				$this->db->where('person_id !=', $this->person_id);
			}

			$this->db->where('primary_email_address', $this->primary_email_address);
			$query = $this->db->get('person');

			if ($query->num_rows() > 0)
			{
				throw new Coh_Model_Exception(
					self::VCODE_PRI_EMAIL_ADDR_ALREADY_EXISTS,
					self::VID_PRI_EMAIL_ADDR_ALREADY_EXISTS,
					self::VCODE_PRI_EMAIL_ADDR_ALREADY_EXISTS);
			}
		}
	}

	/**
	 * Save this model to the database
	 */
	public function save()
	{
		parent::save();

		return is_null($this->person_id) ?
			$this->insert() :
			$this->update();
	}

	protected function insert()
	{
		$this->created_on = date('Y-m-d H:i:s.u');
		$this->created_by = 'System';
		$this->db->insert('person', $this);
		$person = $this->get_by_id($this->db->insert_id());
		$this->load_from_object($person);
		return $person;
	}

	protected function update()
	{
		$this->modified_on = date('Y-m-d H:i:s.u');
		$this->modified_by = 'System';
		$this->db->update('person', $this, array('person_id' => $this->person_id));
		$person = $this->get_by_id($this->person_id);
		$this->load_from_object($person);
		return $person;
	}

	/**
	 * Specify the fields or columns retrieved in queries
	 */
	protected function fields()
	{
		return 'person_id, first_name, last_name, id_number, id_type, primary_address, primary_email_address, primary_phone_number, comments, created_on, created_by, modified_on, modified_by';
	}

	/**
	 * Reset the values for this model's columns 
	 */
	protected function reset_fields()
	{
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
