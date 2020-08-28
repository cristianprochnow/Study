<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		
		header("Access-Control-Allow-Origin: *");
		parent::__construct();
		
		$this->load->model('Employee_model', 'employee');
		
		$this->load->helper('url');
		$this->load->library("pagination");
		$this->load->library("session");
		
	}

	public function index()
	{
		$data = array();
		$data['title'] = 'Home';

		$config = array();
		$config["base_url"] = base_url().'home/index';
		$config["total_rows"] = $this->employee->record_count();
		$config["per_page"] = 10;
		$config["uri_segment"] = 3;
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = 'Next &rarr;';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&larr; Previous';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$data["data"] = $this->employee->get_employees($config["per_page"], $page);
		
		$this->pagination->initialize($config);
		
		$data["links"] = $this->pagination->create_links();
		
		$this->template->load('layouts/default_layout', 'home', $data);
	}
	public function about()
	{
		$data = array();

		$this->template->set('title', 'about');
		$this->template->load('layouts/default_layout', 'about', $data);
	}
	public function profile($id)
	{
		$data = array();

		$this->template->set('title', 'profile view');

		$data["data"] = $this->employee->get_employees('', '', $id);

		$this->template->load('layouts/default_layout', 'profile', $data);
	}
	public function edit($id)
	{
		$data = array();

		$this->load->helper('form');
		
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('employee_name', 'Name', 'required');
		$this->form_validation->set_rules('employee_age', 'Age', 'required');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		if ($this->form_validation->run() === FALSE)
		{
			$data["data"] = $this->employee->get_employees('', '', $id);
			$this->template->set('title', 'Profile edit - '.$data["data"]['employee_name']);
			$this->template->load('layouts/default_layout', 'edit', $data);
		}
		else
		{
			$this->employee->saveEmployee($id);
			redirect( base_url());
		}
	}
	public function create()
	{
		$data = array();

		$this->template->set('title', 'Add New Employee');
		$this->load->helper('form');
		
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('employee_name', 'Name', 'required');
		$this->form_validation->set_rules('employee_age', 'Age', 'required');
		
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		if ($this->form_validation->run() === FALSE)
		{
			$data["data"] = array();
			
			$this->template->load('layouts/default_layout', 'create', $data);
		}
		else
		{
			$this->employee->saveEmployee();

			redirect(base_url());
		}
	}
	public function delete($id)
	{
		$id = $this->uri->segment(3);

		if (empty($id))
		{
			show_404();
		}

		$news_item = $this->employee->get_employees('', '', $id);

		if($this->employee->delete_employee($id)){
			$this->session->set_flashdata('message', 'Deleted Sucessfully');
			
			redirect( base_url());
		}
	}
}
