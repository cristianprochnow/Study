<?php

class Cardapio extends CI_Controller {
	public function index() {
		$crud = new Grocery_CRUD();

		$crud->set_table('cardapio');
		$crud->set_subject('cardapio');
		$crud->set_relation('idCategoria', 'cardapio', 'categoria');

		$output = $crud->render();

		$this->load->view('example', $output);
	}
}
