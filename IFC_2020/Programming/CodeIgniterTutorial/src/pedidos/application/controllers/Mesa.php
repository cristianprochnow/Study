<?php

class Mesa extends CI_Controller {
	public function index() {
		$crud = new Grocery_CRUD();

		$crud->set_table('mesa');
		$crud->set_subject('mesa');

		$output = $crud->render();

		$this->load->view('example', $output);
	}
}
