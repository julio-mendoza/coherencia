<?php

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
	 * Load this person model with the content of an array
	 */
	public function load_from_array($model_array) {
		$this->reset_fields();

		$reflector = $this->getReflector();
		
		foreach ($model_array as $field => $value) {
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

	protected abstract function reset_fields();

	protected abstract function fields();

}
