<?php

class Reports extends CI_Controller{

	public function index()
	{
		$data['title'] = "Reports";
		$data['records'] = $this->ReportModel->get_records();
		//$data['groups'] = $this->ReportModel->get_groups();
		$data['totals'] = $this->ReportModel->get_totals();


		$this->load->view('templates/header');
		$this->load->view('reports/index', $data); //loading page and data
		$this->load->view('templates/footer');


	}


	public function deliveries()
	{
		$data['title'] = "Reportes";
		$data['deliveries'] = $this->ReportModel->get_completed_requests(); //todays requests

		if($this->input->post('date_start')){
			$data['deliveries'] = $this->ReportModel->get_completed_requests_by_date($this->input->post('date_start'), $this->input->post('date_end'));
		}

		$this->load->view('templates/header');
		$this->load->view('reports/deliveries', $data); //loading page and data
		$this->load->view('templates/footer');
	}

}
