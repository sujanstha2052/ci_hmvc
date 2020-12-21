<?php

class Dashboard extends MX_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->auth->route_access();
	}

	function index()
	{
		$data['page_title'] = "Dashboard";
		$data['view_file'] = "index";
		$data['view_module'] = "dashboard";

		$this->load->module('templates');
		$this->templates->admin($data);
	}

}
