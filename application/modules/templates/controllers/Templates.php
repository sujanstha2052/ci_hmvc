<?php
class Templates extends MX_Controller 
{

	public function __construct() {
		parent::__construct();
	}

	public function front($data = null)
	{
		if(!isset($data['view_module'])) {
			$data['view_module'] = $this->uri->segment(1);
		}
		$this->load->view('front', $data);
	}

	public function admin($data = null)
	{
		if(!isset($data['view_module'])) {
			$data['view_module'] = $this->uri->segment(1);
		}
		$this->load->view('admin', $data);
	}
}