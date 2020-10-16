<?php

class Produto extends CI_Controller {
	public function index(): void {
		$crud = new Grocery_crud;

		$crud->set_table('produto');
		$crud->set_subject('produto');

		$output = $crud->render();

		$this->load->view('example', $output);
	}
}
