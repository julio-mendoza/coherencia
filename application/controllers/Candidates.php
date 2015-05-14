<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Candidates extends MY_Controller {

	/**
	 * Default Action /candidates/process
	 */
	public function process()
	{
		$this->load->view('candidates/process');
	}
}
