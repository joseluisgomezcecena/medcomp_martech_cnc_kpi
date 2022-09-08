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


}
