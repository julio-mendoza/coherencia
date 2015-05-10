<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	/**
	 * Default Action /home
	 */
	public function index()
	{
		$data['title'] = 'Coherencia | El Congreso que te mereces';
		$data['view_styles'] = $this->parse_view('home/styles');
		$data['view_scripts'] = $this->parse_view('home/scripts');
		$this->to_main_view('home/main', $data);
	}

	/**
	 * Default Action /home/info
	 */
	public function info()
	{
		$this->load->model('common/Config_Value_Model', '', TRUE);
		$data['home_body'] = $this->Config_Value_Model->get_by_code('home_body');
		$this->load->view('home/info', $data);
	}
}
