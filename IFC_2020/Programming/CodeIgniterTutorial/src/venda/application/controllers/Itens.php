<?php

class Itens extends CI_Controller {
	public function index(): void {
		$crud = new Grocery_CRUD;

		$crud->set_table('itens');
		$crud->set_subject('item');
		$crud->set_relation('idProduto', 'produto', 'descricao');

		$output = $crud->render();

		$this->load->view('example', $output);
	}
}
