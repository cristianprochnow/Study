<?php

class Cliente extends CI_Controller {
	public function index(): void {
		$crud = new Grocery_CRUD;

		$crud->set_table('cliente');
		$crud->set_subject('cliente');

		$output = $crud->render();

		$this->load->view('example', $output);
	}
}
