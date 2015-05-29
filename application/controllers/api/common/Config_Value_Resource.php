<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class Config_Value_Resource extends REST_Controller {

	/**
	 * Default constructor
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->model('common/Config_Value_Model');
	}

	/**
	 * Default Action /api/cfgvalues
	 */
	public function all_get()
	{
		$config_values = $this->Config_Value_Model->get_all();
		$this->response(array('response' => $config_values), 200);
	}

	/**
	 * Default Action /api/cfgvalues/(:any)
	 */
	public function by_code_get($code)
	{
		$config_value = $this->Config_Value_Model->get_by_code($code);
		if (!is_null($config_value)) {
			$this->response(array('response' => $config_value), 200);
		} else {
			$this->response(array('error' => 'CONFIG_VALUE_NOT_FOUND'), 404);
		}
	}
}