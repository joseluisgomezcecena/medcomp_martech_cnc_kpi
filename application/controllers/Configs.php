<?php

class Configs extends MY_Controller
{
	public function index()
	{
		$data['title'] = "App Configurations";

		//load header, page & footer
		$this->load->view('templates/header');
		$this->load->view('config/index', $data); //loading page and data
		$this->load->view('templates/footer');
	}


	public function downtimes_index()
	{
		$data['title'] = "App Configurations: Downtimes";
		$data['downtimes'] = $this->ConfigModel->get_downtimes();
		//load header, page & footer
		$this->load->view('templates/header');
		$this->load->view('config/downtimes/index', $data); //loading page and data
		$this->load->view('templates/footer');
	}




	public function downtimes_create($id = NULL)
	{

		$data['title'] = "Create Downtime";

		$this->form_validation->set_rules('dt_reason', 'Downtime Reason or Name', 'required');

		//style for alert
		$this->form_validation->set_error_delimiters(
			'<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong class="uppercase"><bdi>Error</bdi></strong> &nbsp;',
			'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
		);

		if($this->form_validation->run() === FALSE)
		{
			//load header, page & footer
			$this->load->view('templates/header');
			$this->load->view('config/downtimes/create', $data); //loading page and data
			$this->load->view('templates/footer');
		}
		else
		{
			//$this->FormModel->create_sup();
			$this->ConfigModel->create_downtime();

			//session message
			$this->session->set_flashdata('created', 'Downtime saved.');

			redirect(base_url() . 'config/downtimes/create');
		}
	}




	public function downtimes_edit($id = NULL)
	{

		$data['title'] = "Edit Downtime";
		$data['downtime'] = $this->ConfigModel->get_downtime($id);

		$this->form_validation->set_rules('dt_reason', 'Downtime Reason or Name', 'required');
		$this->form_validation->set_rules('dt_id', 'Downtime to edit', 'required');


		//style for alert
		$this->form_validation->set_error_delimiters(
			'<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong class="uppercase"><bdi>Error</bdi></strong> &nbsp;',
			'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
		);

		if($this->form_validation->run() === FALSE)
		{
			//load header, page & footer
			$this->load->view('templates/header');
			$this->load->view('config/downtimes/edit', $data); //loading page and data
			$this->load->view('templates/footer');
		}
		else
		{
			//$this->FormModel->create_sup();
			$this->ConfigModel->edit_downtime();

			//session message
			$this->session->set_flashdata('updated', 'Downtime updated.');

			redirect(base_url() . 'config/downtimes');
		}
	}




	public function downtimes_delete($id = NULL)
	{
		$data['title'] = "Delete Downtime";
		$data['downtime'] = $this->ConfigModel->get_downtime($id);

		$this->form_validation->set_rules('dt_id', 'Downtime to delete', 'required');
		if($this->form_validation->run() === FALSE)
		{
			//load header, page & footer
			$this->load->view('templates/header');
			$this->load->view('config/downtimes/delete', $data); //loading page and data
			$this->load->view('templates/footer');
		}
		else
		{
			$this->ConfigModel->delete_downtime();

			//session message
			$this->session->set_flashdata('deleted', 'Downtime deleted.');

			redirect(base_url() . 'config/downtimes');
		}

	}



	public function parts_index()
	{
		$data['title'] = "App Configurations: Parts";
		$data['parts'] = $this->ConfigModel->get_parts();
		//load header, page & footer
		$this->load->view('templates/header');
		$this->load->view('config/parts/index', $data); //loading page and data
		$this->load->view('templates/footer');
	}

	public function parts_create()
	{
		$data['title'] = "Create Part";
		$data['machines'] = $this->ConfigModel->get_machines();

		$this->form_validation->set_rules('pph', 'Parts Per Hour or PPH', 'required');
		$this->form_validation->set_rules('part_no', 'Part Number', 'required');
		$this->form_validation->set_rules('description', 'Part Description', 'required');
		$this->form_validation->set_rules('machine', 'Machine name/Number.', 'required');

		//style for alert
		$this->form_validation->set_error_delimiters(
			'<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong class="uppercase"><bdi>Error</bdi></strong> &nbsp;',
			'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
		);

		if($this->form_validation->run() === FALSE)
		{
			//load header, page & footer
			$this->load->view('templates/header');
			$this->load->view('config/parts/create', $data); //loading page and data
			$this->load->view('templates/footer');
		}
		else
		{
			//$this->FormModel->create_sup();
			$this->ConfigModel->create_part();

			//session message
			$this->session->set_flashdata('created', 'Part saved.');

			redirect(base_url() . 'config/parts/create');
		}
	}




	public function parts_edit($id = NULL)
	{
		$data['title'] = "Create Part";
		$data['machines'] = $this->ConfigModel->get_machines();
		$data['part'] = $this->ConfigModel->get_part($id);

		$this->form_validation->set_rules('pph', 'Parts Per Hour or PPH', 'required');
		$this->form_validation->set_rules('part_no', 'Part Number', 'required');
		$this->form_validation->set_rules('description', 'Part Description', 'required');
		$this->form_validation->set_rules('machine', 'Machine name/Number.', 'required');

		//style for alert
		$this->form_validation->set_error_delimiters(
			'<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong class="uppercase"><bdi>Error</bdi></strong> &nbsp;',
			'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
		);

		if($this->form_validation->run() === FALSE)
		{
			//load header, page & footer
			$this->load->view('templates/header');
			$this->load->view('config/parts/update', $data); //loading page and data
			$this->load->view('templates/footer');
		}
		else
		{
			//$this->FormModel->create_sup();
			$this->ConfigModel->edit_part();

			//session message
			$this->session->set_flashdata('updated', 'Part saved.');

			redirect(base_url() . 'config/parts');
		}
	}


	public function parts_delete($id = NULL)
	{
		$data['title'] = "Delete Part";
		$data['machines'] = $this->ConfigModel->get_machines();
		$data['part'] = $this->ConfigModel->get_part($id);

		$this->form_validation->set_rules('id', 'Parts or Part to be deleted.', 'required');

		//style for alert
		$this->form_validation->set_error_delimiters(
			'<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong class="uppercase"><bdi>Error</bdi></strong> &nbsp;',
			'<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'
		);

		if($this->form_validation->run() === FALSE)
		{
			//load header, page & footer
			$this->load->view('templates/header');
			$this->load->view('config/parts/delete', $data); //loading page and data
			$this->load->view('templates/footer');
		}
		else
		{
			//$this->FormModel->create_sup();
			$this->ConfigModel->delete_part();

			//session message
			$this->session->set_flashdata('deleted', 'Part saved.');

			redirect(base_url() . 'config/parts');
		}

	}


}
