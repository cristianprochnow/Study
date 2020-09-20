<?php
defined('BASEPATH') OR exit('No direct script access allowed');
public function Empresa()
{
	$data['title'] = "LCI | A Empresa";
	$data['description'] = "Informações sobre a empresa";
	
	$this->load->view('empresa', $data);
}
?>
