<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
	}

	public function index()
	{
		//get data from the database 4
		$data['images'] = $this->home_model->get_images();
		$this->load->view('home_view', $data);
	}
}
