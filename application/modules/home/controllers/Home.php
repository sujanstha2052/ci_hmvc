<?php
class Home extends MX_Controller 
{

	public function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$data['page_title'] = "Homepage";
		$data['view_module'] = "home";
		$data['view_file'] = "index";

		$this->load->module("templates");
		$this->templates->front($data);
	}

}