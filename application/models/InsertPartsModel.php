<?php

class InsertPartsModel extends CI_Model{

	public function __construct()
	{
		$this->load->database();
	}

	public function get_mold_inserts()
	{
		$query = $this->db->get('inserts_catalog');
		return $query->result_array();
	}


}
