<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demo extends Private_Controller {

	/**
	 * Default Action /home
	 */
	public function index()
	{
		$data['title'] = 'Coherencia | Demo';
		$this->to_main_view('home', $data);
	}
}
