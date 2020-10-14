<?php

class Veiculo extends CI_Controller {
	public function index()
	{
		$crud = new Grocery_CRUD();

		$crud->set_table('veiculo');
		$crud->set_subject('veiculo');
		$crud->set_relation('idCategoria', 'categoria', 'categoria');
		$crud->set_relation('idModelo', 'modelo', 'modelo');
		$crud->set_relation('idProprietario', 'proprietario', 'nome');
		$crud->display_as('idCategoria', 'Categoria');
		$crud->display_as('idModelo', 'Modelo');
		$crud->display_as('idProprietario', 'Proprietário');

		$output = $crud->render();

		$this->load->view('example', $output);
	}
}
