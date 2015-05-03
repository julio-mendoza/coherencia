<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	/**
	 * Default Action /home
	 */
	public function index()
	{
		$this->load->model('common/Config_Value_Model', '', TRUE);
		$data['home_content'] = $this->Config_Value_Model->get_by_code('home_body');
		$data['title'] = 'Coherencia | El Congreso que te mereces';
		$this->to_main_view('home', $data);
	}
}
