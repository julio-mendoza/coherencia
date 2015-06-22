<?php

/**
* Model Exception
*/
class Coh_Model_Exception extends Exception
{
	private $error_code;
	
	function __construct($message, $code = 0, $error_code = NULL)
	{
		parent::__construct($message, $code);
		$this->error_code = $error_code;
	}

	public function get_error_code()
	{
		return $this->error_code;
	}

	public function __toString()
	{
		return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
	}
}
