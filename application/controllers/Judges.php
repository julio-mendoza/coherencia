<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Judges extends MY_Controller {

	/**
	 * Default Action /judges/summary
	 */
	public function summary()
	{
		$this->load->model('judges/Judge_Model', '', TRUE);
		$data['judges'] = $this->Judge_Model->get_all();
		$this->load->view('judges/summary', $data);
	}
}
