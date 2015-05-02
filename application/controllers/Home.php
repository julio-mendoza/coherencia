<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	/**
	 * Default Action /home
	 */
	public function index()
	{
		$this->load->model('ui/App_Entry', '', TRUE);
		$data['home_content'] = $this->App_Entry->get_by_key('home_content');
		$data['title'] = 'Coherencia | El Congreso que te mereces';
		$this->to_main_view('home', $data);
	}
}
