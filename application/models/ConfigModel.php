<?php

class ConfigModel extends CI_Model{

	public function __construct()
	{
		$this->load->database();
	}


	public function get_downtimes()
	{
		$this->db->order_by('dt_id', 'ASC');
		$query = $this->db->get('downtime_reasons');
		return $query->result_array();
	}

	public function get_downtime($id)
	{
		$query = $this->db->get_where('downtime_reasons', array('dt_id' => $id));
		return $query->row_array();
	}



	public function create_downtime()
	{
		$dt_reason = $this->input->post('dt_reason');
		$data = array(
			'dt_reason' => $this->input->post('dt_reason'),
		);

		$this->db->insert('downtime_reasons', $data);
	}


	public function edit_downtime()
	{
		$dt_reason = $this->input->post('dt_reason');
		$data = array(
			'dt_reason' => $this->input->post('dt_reason'),
		);

		$this->db->update('downtime_reasons', $data, array('dt_id' => $this->input->post('dt_id')));
	}


	public function delete_downtime()
	{
		$this->db->delete('downtime_reasons', array('dt_id' => $this->input->post('dt_id')));
	}


	public function get_machines()
	{
		$this->db->order_by('machine_id', 'ASC');
		$query = $this->db->get('machines');
		return $query->result_array();
	}


	public function get_parts()
	{
		$this->db->order_by('id', 'ASC');
		$query = $this->db->get('validated_parts');
		return $query->result_array();
	}

	public function create_part()
	{
		$data = array(
			'COL4' => $this->input->post('pph'),
			'COL1' => $this->input->post('part_no'),
			'COL2' => $this->input->post('description'),
			'COL9' => $this->input->post('machine'),
		);

		$this->db->insert('validated_parts', $data);
	}

	public function get_part($id)
	{
		$query = $this->db->get_where('validated_parts', array('id' => $id));
		return $query->row_array();
	}

}
