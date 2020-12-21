<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends MX_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(['auth', 'form_validation']);
	}


	function index()
	{
		$data = array();

		if ($_POST) {
			$data = $this->auth->login($_POST);
		}

		$data['page_title'] = "Login";
		$data['view_file'] = "auth/login";

		$this->load->module('templates');
		$this->templates->auth($data);

//		return $this->auth->showLoginForm($data);
	}

	function logout()
	{
		if ($this->auth->logout())
			redirect('login');

		return false;
	}
}
