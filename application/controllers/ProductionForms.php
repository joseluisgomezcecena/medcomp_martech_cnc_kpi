<?php

class ProductionForms extends CI_Controller
{
	public function index()
	{

		$data['title'] = "Production Forms";
		$data['machines'] = $this->MachineModel->get_machines();

		//load header, page & footer
		$this->load->view('templates/header');
		$this->load->view('cnc_production_forms/index', $data); //loading page and data
		$this->load->view('templates/footer');
	}


	public function create($id = NULL){
		$data['title'] = "Create Production Form";
		$data['machines'] = $this->MachineModel->get_machines();
		$data['parts'] = $this->MachineModel->get_validated_parts($id);


		//load header, page & footer
		$this->load->view('templates/header');
		$this->load->view('cnc_production_forms/create', $data); //loading page and data
		$this->load->view('templates/footer');
	}




	public function get_insert_details()
	{
		// POST data
		$postData = $this->input->post();
		// load model
		$this->load->model('MachineModel');

		// get data
		$data = $this->MachineModel->get_insert_details($postData);
		echo json_encode($data);
	}


}
