<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->helper('url');
	}

	protected function to_main_view($view, $data = array()) {
		$defaults = $this->resolve_defaults($data);

		$defaults['body'] = $this->parse_view($view, $data);
		
		$this->load->view('base/main', $defaults);
	}

	protected function parse_view($view, $data = array()) {
		$defaults = $this->resolve_defaults($data);
		
		return $this->load->view($view, $defaults, TRUE);
	}

	private function resolve_defaults($data) {
		$defaults = array(
			'base_url' => base_url(),
			'body' => '',
			'title' => '',
			'view_styles' => '',
			'view_scripts' => ''
		);

		if (is_null($data)) {
			$data = $defaults;
		} else {
			$data = array_merge($defaults, $data);
		}

		return $data;
	}
}
