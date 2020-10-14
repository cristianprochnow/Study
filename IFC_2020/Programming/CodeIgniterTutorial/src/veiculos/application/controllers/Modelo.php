<?php

class Modelo extends CI_Controller {
	public function index()
	{
		$crud = new Grocery_CRUD();

		$crud->set_table('modelo');
		$crud->set_subject('modelo');
		$crud->set_relation('marca_idMarca', 'marca', 'marca');
		$crud->display_as('marca_idMarca', 'Marca');

		$output = $crud->render();

		$this->load->view('example', $output);
	}
}
