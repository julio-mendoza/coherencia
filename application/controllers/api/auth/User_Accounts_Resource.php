<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class User_Accounts_Resource extends REST_Controller {

	/**
	 * Default constructor
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->model('common/Person_Model');
		$this->load->model('auth/User_Model');
	}

	/**
	 * Default Action GET /api/judges
	 */
	public function all_get()
	{
		/*$judges = $this->Judge_Model->get_all();
		$this->response(array('response' => $judges), 200);*/
	}

	/**
	 * Default Action GET /api/judges/(:num)
	 */
	public function by_id_get($id)
	{
		/*$judge = $this->Judge_Model->get_by_id($id);
		if (!is_null($judge)) {
			$this->response(array('response' => $judge), 200);
		} else {
			$this->response(array('error' => 'JUDGE_NOT_FOUND'), 404);
		}*/
	}

	/**
	 * Default Action POST /api/useraccounts/
	 */
	public function create_post() {
		$user_account = $this->post();
		$this->Person_Model->load_from_array($user_account['person']);
		$this->Person_Model->save();
		$this->User_Model->load_from_array($user_account['user']);
		$this->User_Model->save();
	}
}