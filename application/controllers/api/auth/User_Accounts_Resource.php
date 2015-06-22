<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'/libraries/REST_Controller.php';
require_once APPPATH.'/libraries/model/Coh_Model_Exception.php';

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
		try {
			$this->db->trans_begin();

			$user_account = $this->post();
			
			$this->Person_Model->load_from_object($user_account['person']);
			$person = $this->Person_Model->save();

			$this->User_Model->load_from_object($user_account['user']);
			$user = $this->User_Model->save();

			//TODO: Implement this tomorrow
			//$this->Person_Model->assign_user($this->User_Model);

			if ($this->db->trans_status()) {
				$this->db->trans_commit();
				$this->response(array(
					'success' => 'USER_ACCOUNT_CREATED',
					'person' => $person,
					'user' => $user), 200);
			} else {
				$this->db->trans_rollback();
				$this->response(array('error' => 'TRANSACTION_FAILED'), 500);
			}
		} catch(Coh_Model_Exception $model_exception) {
			$this->db->trans_rollback();
			$this->response(array('error' => $model_exception->get_error_code()), 500);
		} catch(Exception $exception) {
			$this->db->trans_rollback();
			$this->response(array('error' => $exception->getMessage()), 500);
		}
	}
}