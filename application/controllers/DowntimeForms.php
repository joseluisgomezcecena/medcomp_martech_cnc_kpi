<?php

class DowntimeForms extends CI_Controller
{
	public function index()
	{

		$data['title'] = "Downtime Forms";
		$data['machines'] = $this->MachineModel->get_machines();


		//load header, page & footer
		$this->load->view('templates/header');
		$this->load->view('cnc_downtime_forms/index', $data); //loading page and data
		$this->load->view('templates/footer');
	}




	public function create($id = NULL){
		$data['title'] = "Create Downtime Form";
		$data['machines'] = $this->MachineModel->get_machines();
		$data['parts'] = $this->MachineModel->get_validated_parts($id);
		$data['downtimes'] = $this->ConfigModel->get_downtimes();
		$data['cnc'] = $id;


		$this->form_validation->set_rules('start', 'Start Time', 'required');
		$this->form_validation->set_rules('end', 'End Time', 'required');
		$this->form_validation->set_rules('reason', 'Reason for downtime', 'required');

		//style for alert
		$this->form_validation->set_error_delimiters(
			'<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong class="uppercase"><bdi>Error</bdi></strong> &nbsp;',
			'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
		);

		if($this->form_validation->run() === FALSE)
		{
			//load header, page & footer
			$this->load->view('templates/header');
			$this->load->view('cnc_downtime_forms/create', $data); //loading page and data
			$this->load->view('templates/footer');
		}
		else
		{
			//$this->FormModel->create_sup();
			$this->DowntimeModel->create();

			//session message
			$this->session->set_flashdata('created', 'Down time saved.');

			redirect(base_url() . 'register_downtime');
		}
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
