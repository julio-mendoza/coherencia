<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class Judges_Resource extends REST_Controller {

	/**
	 * Default constructor
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->model('judges/Judge_Model');
	}

	/**
	 * Default Action /api/judges
	 */
	public function all_get()
	{
		$judges = $this->Judge_Model->get_all();
		$this->response(array('response' => $judges), 200);
	}

	/**
	 * Default Action /api/judges/(:num)
	 */
	public function by_id_get($id)
	{
		$judge = $this->Judge_Model->get_by_id($id);
		if (!is_null($judge)) {
			$this->response(array('response' => $judge), 200);
		} else {
			$this->response(array('error' => 'JUDGE_NOT_FOUND'), 404);
		}
	}
}