<?php
defined('BASEPATH') OR exit('No direct script access allowed');
public function Servicos()
{
	$data['title'] = "LCI | Serviços";
	$data['description'] = "Informações sobre os serviços prestados";

	$this->load->view('servicos' $data);
}
?>
