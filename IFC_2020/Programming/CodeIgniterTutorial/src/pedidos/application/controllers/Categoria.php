<?php

class Categoria extends CI_Controller {
	public function index() {
		$crud = new Grocery_CRUD();

		$crud->set_table('categoria');
		$crud->set_subject('categoria');

		$output = $crud->render();

		$this->load->view('example', $output);
	}
}
