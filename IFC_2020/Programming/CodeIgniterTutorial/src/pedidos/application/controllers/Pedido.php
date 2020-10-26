<?php

class Pedido extends CI_Controller {
	public function index() {
		$crud = new Grocery_CRUD();

		$crud->set_table('pedido');
		$crud->set_subject('pedido');
		$crud->set_relation('idMesa', 'mesa', 'descricao');
		$crud->set_relation('idCliente', 'cliente', 'nome');
		$crud->set_relation('idCardapio', 'cardapio', 'produto');

		$output = $crud->render();

		$this->load->view('example', $output);
	}
}
