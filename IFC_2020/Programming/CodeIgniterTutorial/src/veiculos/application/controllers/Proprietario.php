<?php

class Proprietario extends CI_Controller {
	public function index()
	{
		$crud = new Grocery_CRUD();

		$crud->set_table('proprietario');
		$crud->set_subject('proprietario');

		$output = $crud->render();

		$this->load->view('example', $output);
	}
}
