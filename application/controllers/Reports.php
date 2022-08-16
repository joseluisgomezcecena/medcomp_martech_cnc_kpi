<?php

class Reports extends CI_Controller{

	public function index()
	{
		$data['title'] = "Reports";
		$data['records'] = $this->ReportModel->get_records();
		$data['totals'] = $this->ReportModel->get_totals();
		$data['downtime_records'] = $this->ReportModel->get_downtime_records();
		$data['downtime_total'] = $this->ReportModel->get_downtime_totals();
		$data['total_usage'] = $this->ReportModel->get_total_usage();

		if($this->input->post('date_start'))
		{
			$data['show'] = false;
		}
		else
		{
			$data['show'] = true;
		}

		$this->load->view('templates/header');
		$this->load->view('reports/index', $data); //loading page and data
		$this->load->view('templates/footer');

	}
}
