<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Private_Controller extends MY_Controller {

	protected $session_data = null;

	public function __construct() {
		parent::__construct();

		$this->load->library('session');
		$this->load->helper('url');

		$this->session_data = $this->retrieve_session();
		
		if (!$this->session_data) {
			redirect('login');	
		}
	}

	protected function retrieve_session() {
		return $this->session->userdata('logged_in');
    }
}
