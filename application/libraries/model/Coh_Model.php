<?php

require_once APPPATH.'/libraries/model/Coh_Model_Exception.php';

abstract class Coh_Model extends CI_Model {
	
	public $created_on;
	public $created_by;
	public $modified_on;
	public $modified_by;

	private $reflector;

	function __construct() {
		parent::__construct();
	}

	/**
	 * Load this model with the content of an array or a plain object
	 */
	public function load_from_object($model_object) {
		$this->reset_fields();

		$reflector = $this->getReflector();
		
		foreach ($model_object as $field => $value) {
			if ($reflector->hasProperty($field)) {
				$property = $reflector->getProperty($field);
				$property->setValue($this, $value);
			}
		}
	}

	private function getReflector() {
		if (is_null($this->reflector)) {
			$this->reflector = new ReflectionObject($this);
		}
		return $this->reflector;
	}

	public function validate() {
		return true;
	}

	public function save() {
		if (!$this->validate()) {
			throw new Coh_Model_Exception("UNEXPECTED_VALIDATE_EXCEPTION", 100, "UNEXPECTED_VALIDATE_EXCEPTION");
		}
	}

	protected abstract function reset_fields();

	protected abstract function fields();
}
