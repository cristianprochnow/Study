<?php

class Marca extends CI_Controller{
	public function index()
	{
		$crud = new Grocery_CRUD();

		$crud->set_table('marca');
		$crud->set_subject('marca');

		$output = $crud->render();

		$this->load->view('example', $output);
	}
}
