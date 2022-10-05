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
			'downtime_end' => $this->input->post('end'),
			'downtime_reason' => $this->input->post('reason'),
		);

		$this->db->insert('downtime_records', $data);
	}


	public function get_record($id)
	{

		$this->db->select('*');
		$this->db->from('downtime_records');
		$this->db->where('downtime_id', $id);
		$query = $this->db->get();

		//$last_query = $this->db->last_query();
		#print_r($last_query);

		return $query->row_array();

	}


	public function edit($id)
	{
		$data = array(

			'downtime_start' => $this->input->post('start'),
			'downtime_end' => $this->input->post('end'),
			'downtime_reason' => $this->input->post('reason'),
		);

		//$this->db->insert('downtime_records', $data);
		$this->db->where('downtime_id', $id);
		$this->db->update('downtime_records', $data);
	}


	public function delete($id)
	{
		$this->db->where('downtime_id', $id);
		$this->db->delete('downtime_records');
	}



}
