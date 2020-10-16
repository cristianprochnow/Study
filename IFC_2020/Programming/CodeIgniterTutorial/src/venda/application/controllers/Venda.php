<?php

class Venda extends CI_Controller {
	public function index(): void {
		$crud = new Grocery_CRUD;

		$crud->set_table('venda');
		$crud->set_subject('venda');
		$crud->set_relation('idCliente', 'cliente', 'nome');
		$crud->set_relation_n_n('produtos', 'itens', 'produto', 'idVenda', 'idProduto', 'descricao', 'idItens');

		$output = $crud->render();
		
		$this->load->view('example', $output);
	}
}
