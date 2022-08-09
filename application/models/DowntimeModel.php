<?php

class DowntimeModel extends CI_Model{

	public function __construct()
	{
		$this->load->database();
	}


	public function create()
	{

		$data = array(
			'machine_downtime' => $this->input->post('machine'),
			'downtime_start' => $this->input->post('start'),
			'downtime_end' => $this->input->post('end')
		);

		$this->db->insert('downtime_records', $data);
	}




}
