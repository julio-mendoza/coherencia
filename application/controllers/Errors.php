<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Errors extends MY_Controller {

	public function page_not_found()
	{
		header("HTTP/1.1 404 Not Found");
		$data['title'] = 'Coherencia | Error';
		$this->to_main_view('errors/html/page_not_found', $data);
	}
}
