<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_mdl extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}

	// Insertar registro
	public function create($table, $values){
		$this->db->insert($table, $values);
		return $this->db->insert_id();
	}

	public function fetch_by_field($table, $field, $value){
		$this->db->where($field, $value);
		$row = $this->db->get($table)->row();
      	return $row;
	}

}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */
	