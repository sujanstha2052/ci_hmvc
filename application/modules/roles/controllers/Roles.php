<?php

class Roles extends MX_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('roles_model');
	}

	function manage()
	{
		$data['roles'] = $this->get("display_name")->result();

		$data['page_title'] = "Manage Roles";
		$data['view_file'] = "manage";
		$data['view_module'] = "roles";
		$this->load->module("templates");
		$this->templates->admin($data);
	}

	function create()
	{
		$data['page_title'] = "Create Role";
		$data['view_file'] = "create";
		$data['view_module'] = "roles";
		$this->load->module("templates");
		$this->templates->admin($data);
	}


	// ======================================================
	// ================== database querie ===================
	// ======================================================

	public function get($order_by)
	{
		$query = $this->roles_model->get($order_by);
		return $query;
	}

	public function get_with_limit($limit, $offset, $order_by)
	{
		if ((!is_numeric($limit)) || (!is_numeric($offset))) {
			die('Non-numeric variable!');
		}

		$query = $this->roles_model->get_with_limit($limit, $offset, $order_by);
		return $query;
	}

	public function get_where($id)
	{
		if (!is_numeric($id)) {
			die('Non-numeric variable!');
		}

		$query = $this->roles_model->get_where($id);
		return $query;
	}

	public function get_where_custom($col, $value)
	{
		$query = $this->roles_model->get_where_custom($col, $value);
		return $query;
	}

	public function _insert($data)
	{
		$this->roles_model->_insert($data);
		return $this->db->insert_id();
	}

	public function _update($id, $data)
	{
		if (!is_numeric($id)) {
			die('Non-numeric variable!');
		}

		$this->roles_model->_update($id, $data);
	}

	public function _delete($id)
	{
		if (!is_numeric($id)) {
			die('Non-numeric variable!');
		}

		$this->roles_model->_delete($id);
	}

	public function count_where($column, $value)
	{
		$count = $this->roles_model->count_where($column, $value);
		return $count;
	}

	public function get_max()
	{
		$max_id = $this->roles_model->get_max();
		return $max_id;
	}

	public function _custom_query($mysql_query)
	{
		$query = $this->roles_model->_custom_query($mysql_query);
		return $query;
	}

}
