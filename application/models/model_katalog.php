<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_katalog extends CI_Model {
	public function __construct() {
		parent::__construct();

	}

	public function insert($tablename, $where)
	{
		return $this->db->insert($tablename, $where);
	}

	public function get_data_id($id)
	{
		$query = $this->db->get_where('katalog', array('id_katalog' => $id));
		return $query->row_array();
	}

	public function gettable_sort($tablename, $order_by){
		return $this->db->query("SELECT * FROM $tablename ORDER BY $order_by ASC")->result_array();
	}

	public function gettable($tablename)
	{
		$datakatalog = $this->db->query("SELECT * FROM $tablename");
		return $datakatalog->result_array();
		//nah ini controllernya liat di welcome
//		return $this->db->query("SELECT * FROM $tablename")->result_array();
	}

	public function delete_data($id)
	{
		return $this->db->delete('katalog', array('id_katalog'=>$id));
	}
}
