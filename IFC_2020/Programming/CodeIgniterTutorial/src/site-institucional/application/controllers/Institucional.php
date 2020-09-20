<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Institucional extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->output->cache(1440);
	}
	public function index()
	{
		$data['title'] = "LCI | Home";
		$data['description'] = "Exercício de exemplo do capítulo 5 do livro CodeIgniter";
		
		$this->load->view('home', $data);
	}
}
?>
