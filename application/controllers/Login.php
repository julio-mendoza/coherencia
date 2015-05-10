<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	/**
	 * Default Action /home
	 */
	public function index()
	{
		$data['title'] = 'Coherencia | Inicio de Sesi&oacute;n';
		$data['view_styles'] = $this->parse_view('auth/login_styles');
		$this->to_main_view('auth/login', $data);
	}
}
