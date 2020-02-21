<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->view('header_view');
		$this->load->view('home_view');
	}

	public function portfolio()
	{
		$this->load->view('header_view');
		$this->load->view('portfolio');
	}

	public function aboutUs()
	{
		$this->load->view('header_view');
		$this->load->view('aboutUs');
	}

	public function contactUs()
	{
		$this->load->view('header_view');
		$this->load->view('contactUs');
	}
}
