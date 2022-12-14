<?php

class AdminProductionForms extends MY_Controller
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
		$data['cnc'] = $id;

		$this->form_validation->set_rules('pn', 'Part Number', 'required');
		$this->form_validation->set_rules('start', 'Start Time', 'required');
		$this->form_validation->set_rules('end', 'End Time', 'required');
		$this->form_validation->set_rules('quantity', 'Produced Quantity', 'required');

		//style for alert
		$this->form_validation->set_error_delimiters(
			'<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong class="uppercase"><bdi>Error</bdi></strong> &nbsp;',
			'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
		);

		if($this->form_validation->run() === FALSE)
		{
			//load header, page & footer
			$this->load->view('templates/header');
			$this->load->view('cnc_production_forms/create', $data); //loading page and data
			$this->load->view('templates/footer');
		}
		else
		{
			//$this->FormModel->create_sup();
			$this->ProductionFormModel->create();

			//session message
			$this->session->set_flashdata('created', 'Production saved.');

			redirect(base_url() . 'register_production');
		}
	}




	public function edit($id = NULL, $cnc = NULL){
		$data['title'] = "Update Production Form";
		$data['record'] = $this->ProductionFormModel->get_record($id);


		$data['machine_id'] = $data['record']['machine'];
		$data['parts'] = $this->MachineModel->get_validated_parts($data['machine_id']);
		//$data['cnc'] = $id;

		$this->form_validation->set_rules('id', 'Record to edit', 'required');
		$this->form_validation->set_rules('pn', 'Part Number', 'required');
		$this->form_validation->set_rules('start', 'Start Time', 'required');
		$this->form_validation->set_rules('end', 'End Time', 'required');
		$this->form_validation->set_rules('quantity', 'Produced Quantity', 'required');

		//style for alert
		$this->form_validation->set_error_delimiters(
			'<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong class="uppercase"><bdi>Error</bdi></strong> &nbsp;',
			'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
		);

		if($this->form_validation->run() === FALSE)
		{
			//load header, page & footer
			$this->load->view('templates/header');
			$this->load->view('cnc_production_forms/update', $data); //loading page and data
			$this->load->view('templates/footer');
		}
		else
		{
			//$this->FormModel->create_sup();
			$this->ProductionFormModel->edit($id);

			//session message
			$this->session->set_flashdata('updated', 'Production saved.');

			redirect(base_url() . 'register_production/edit/' . $id );
		}
	}




	public function delete($id = NULL, $cnc = NULL){
		$data['title'] = "Delete Production Form";
		$data['record'] = $this->ProductionFormModel->get_record($id);


		$data['machine_id'] = $data['record']['machine'];
		$data['parts'] = $this->MachineModel->get_validated_parts($data['machine_id']);
		//$data['cnc'] = $id;

		$this->form_validation->set_rules('id', 'Record to edit', 'required');

		//style for alert
		$this->form_validation->set_error_delimiters(
			'<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong class="uppercase"><bdi>Error</bdi></strong> &nbsp;',
			'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
		);

		if($this->form_validation->run() === FALSE)
		{
			//load header, page & footer
			$this->load->view('templates/header');
			$this->load->view('cnc_production_forms/delete', $data); //loading page and data
			$this->load->view('templates/footer');
		}
		else
		{
			//$this->FormModel->create_sup();
			$this->ProductionFormModel->delete($id);

			//session message
			$this->session->set_flashdata('deleted', 'Production saved.');

			redirect(base_url() . 'reports' );
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
