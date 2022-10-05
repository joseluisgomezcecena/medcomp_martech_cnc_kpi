<?php

class ProductionFormModel extends CI_Model{

	public function __construct()
	{
		$this->load->database();
	}


	public function create()
	{
		$goal = $this->input->post('goal');


		$data = array(
			'machine' => $this->input->post('machine'),
			'part' => $this->input->post('pn'),
			'quantity' => $this->input->post('quantity'),
			'start' => $this->input->post('start'),
			'end' => $this->input->post('end'),
			'goal'=>$goal
		);

		$this->db->insert('records', $data);
	}




	public function get_record($id = FALSE)
	{
		$query = $this->db->get_where('records', array('id' => $id));
		return $query->row_array();
	}



	public function edit($id)
	{
		$goal = $this->input->post('goal');
		$data = array(
			'machine' => $this->input->post('machine'),
			'part' => $this->input->post('pn'),
			'quantity' => $this->input->post('quantity'),
			'start' => $this->input->post('start'),
			'end' => $this->input->post('end'),
			'goal'=>$goal,
		);

		$this->db->where('id', $id);
		$this->db->update('records', $data);

	}


	public function delete($id)
	{
		//$this->db->where('id', $id);
		//$this->db->delete('records');

		$this->db->delete('records', array('id' => $id));
		$last_query = $this->db->last_query();
		print_r($last_query);


	}

}
