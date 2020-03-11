<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->model('User_model');
	}

	public function index()
	{
		$this->load->view('register');
	}

	public function RegisterUser()
	{
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('confirm_email', 'Confirm Email', 'trim|required|matches[email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
		$this->form_validation->set_error_delimiters('<div class="error-msg">', '</div>');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('register');
		}
		else
		{
			$firstName = $this->security->xss_clean($this->input->post('first_name'));
			$lastName = $this->security->xss_clean($this->input->post('last_name'));
			$email = $this->security->xss_clean($this->input->post('email'));
			$password = $this->security->xss_clean($this->input->post('password'));
			$phone = $this->security->xss_clean($this->input->post('phone'));
			$options = array("cost" => 4);
			$hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);
			$insertData = array(
				'first_name' => $firstName,
				'last_name' => $lastName,
				'email' => $email,
				'phone' => $phone,
				'password' => $hashPassword
			);
			$checkDuplicate = $this->User_model->checkDuplicate($email);

			if($checkDuplicate == 0)
			{
				$insertUser = $this->User_model->insertUser($insertData);

				if($insertUser)
				{
					$this->thankyou();
				}
				else
				{
					$data['errorMsg'] = 'Unable to save user. Please try again';

					$this->load->view('register',$data);
				}
			}
			else
			{
				$data['errorMsg'] = 'User email alreary exists';
				
				$this->load->view('register',$data);
			}
		}
	}

	function thankyou()
	{
		$this->load->view('thankyou');
	}
}
