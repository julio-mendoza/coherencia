<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Judges extends MY_Controller {

	/**
	 * Default Action /judges/summary
	 */
	public function index()
	{
		$this->load->model('judges/Judge_Model');
		$data['judges'] = $this->Judge_Model->get_all();
		$this->to_main_view('judges/main', $data);
	}

	/**
	 * Default Action /judges/summary
	 */
	public function summary()
	{
		$this->load->model('judges/Judge_Model');
		$data['judges'] = $this->Judge_Model->get_all();
		$this->load->view('judges/summary', $data);
	}
}
