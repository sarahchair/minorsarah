<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_gallery extends CI_Model {
	public function __construct() {
		parent::__construct();

	}

	public function insert($tablename, $where)
	{
		return $this->db->insert($tablename, $where);
	}

	public function get_data_id($id)
	{
		$query = $this->db->get_where('gallery', array('id_gallery' => $id));
		return $query->row_array();
	}

	public function gettable_sort($tablename, $order_by){
		return $this->db->query("SELECT * FROM $tablename ORDER BY $order_by ASC")->result_array();
	}

	public function gettable($tablename)
	{
		//return $this->db->query("SELECT * FROM $tablename");->result_array();
		$datagallery = $this->db->query("SELECT * FROM $tablename");
		return $datagallery->result_array();
	}

	public function delete_data($id)
	{
		return $this->db->delete('gallery', array('id_gallery'=>$id));
	}
}