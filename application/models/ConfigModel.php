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

}
