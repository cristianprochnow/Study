<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Helloworld extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//load model
		$this->load->model('HelloWorld.model');
	}
	
	public function index()
	{
		//get data from the database
		$data['result'] = $this->helloworld_model->getData();
		//load view and pass the data
		$this->load->view('helloWorld.view', $data);
	}
}
