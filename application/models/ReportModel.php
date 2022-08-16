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



	public function get_downtime_records()
	{
		if($this->input->post('date_start'))
		{

			$start = $this->input->post('date_start') . " 00:00:00";
			$end = $this->input->post('date_end') . " 23:59:59";

			$this->db->where('downtime_start >=', $start);
			$this->db->where('downtime_end <=', $end);
		}
		else
		{
			$today_start = date('Y-m-d') . " 00:00:00";
			$today_end = date('Y-m-d') . " 23:59:59";

			$this->db->where('downtime_start >=', $today_start);
			$this->db->where('downtime_end <=', $today_end);
		}

		$this->db->select('*');
		$this->db->from('downtime_records');
		$this->db->order_by('downtime_start', 'ASC');


		$query = $this->db->get();
		return $query->result_array();

	}




	public function get_totals()
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
		$this->db->select_sum('goal');
		$this->db->select_sum('quantity');
		$this->db->from('records');
		$this->db->order_by('start', 'ASC');
		$query = $this->db->get();

		return $query->row_array();

	}




	public function get_downtime_totals()
	{
		$data = array();
		$number = 0;

		if($this->input->post('date_start'))
		{

			$start = $this->input->post('date_start') . " 00:00:00";
			$end = $this->input->post('date_end') . " 23:59:59";

			$this->db->where('downtime_start >=', $start);
			$this->db->where('downtime_end <=', $end);
		}
		else
		{
			$today_start = date('Y-m-d') . " 00:00:00";
			$today_end = date('Y-m-d') . " 23:59:59";

			$this->db->where('downtime_start >=', $today_start);
			$this->db->where('downtime_end <=', $today_end);
		}

		$this->db->select('*');
		$this->db->from('downtime_records');
		$this->db->order_by('downtime_start', 'ASC');


		$query = $this->db->get();
		$query->result_array();

		foreach ($query->result_array() as $row)
		{
			$start = strtotime($row['downtime_start']);
			$end = strtotime($row['downtime_end']);
			$diff = $end - $start;
			$hours = $diff / ( 60 * 60 );
			$pdata = round($hours, 2);

			$number += $pdata;
		}
		return $number;
	}



	public function get_total_usage()
	{
		if($this->input->post('date_start'))
		{
			$start = $this->input->post('date_start') . " 00:00:00";
			$end = $this->input->post('date_end') . " 23:59:59";

			$now = strtotime($end); // or your date as well
			$your_date = strtotime($start);

			$datediff = $now - $your_date;

			$diff = round($datediff / (60 * 60 * 24));

			//$diff = 1;
			$total_hours = 20 * $diff;
		}
		else
		{

			$diff = 1;
			$total_hours = 20 * $diff;


		}

		return $total_hours;


	}



}

//reasons for downtime
