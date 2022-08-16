<?php

class ReportModel extends CI_Model{

	public function __construct()
	{
		$this->load->database();
	}


	public function get_records()
	{

		if($this->input->post('date_start'))
		{

			$start = $this->input->post('date_start') . " 00:00:00";
			$end = $this->input->post('date_end') . " 23:59:59";

			$this->db->where('start >=', $start);
			$this->db->where('end <=', $end);
		}
		else
		{
			$today_start = date('Y-m-d') . " 00:00:00";
			$today_end = date('Y-m-d') . " 23:59:59";

			$this->db->where('start >=', $today_start);
			$this->db->where('end <=', $today_end);
		}

		$this->db->select('*');
		$this->db->from('records');
		$this->db->order_by('start', 'ASC');


		$query = $this->db->get();

		return $query->result_array();

	}






	public function get_totals()
	{

		/*
		if($this->input->post('date_start')){

			$this->db->where('start >=', $this->input->post('date_start'));
			$this->db->where('end <=', $this->input->post('date_end'));
		}
		*/

		if($this->input->post('date_start'))
		{

			$start = $this->input->post('date_start') . " 00:00:00";
			$end = $this->input->post('date_end') . " 23:59:59";

			$this->db->where('start >=', $start);
			$this->db->where('end <=', $end);
		}
		else
		{
			$today_start = date('Y-m-d') . " 00:00:00";
			$today_end = date('Y-m-d') . " 23:59:59";

			$this->db->where('start >=', $today_start);
			$this->db->where('end <=', $today_end);
		}

		$this->db->select('*');
		$this->db->select_sum('goal');
		$this->db->select_sum('quantity');
		$this->db->from('records');
		$this->db->order_by('start', 'ASC');
		$query = $this->db->get();

		return $query->row_array();

	}



	public function get_total_usage()
	{
		if($this->input->post('date_start'))
		{

			$diff = 1;
			$total_hours = 10 * $diff;



			$start = $this->input->post('date_start') . " 00:00:00";
			$end = $this->input->post('date_end') . " 23:59:59";

			$this->db->where('start >=', $start);
			$this->db->where('end <=', $end);
		}
		else
		{

			$diff = 1;
			$total_hours = 10;

			$today_start = date('Y-m-d') . " 00:00:00";
			$today_end = date('Y-m-d') . " 23:59:59";

			$this->db->where('start >=', $today_start);
			$this->db->where('end <=', $today_end);
		}

		//return $query->row_array();
	}



}

//reasons for downtime
