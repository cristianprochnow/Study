<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	function __construct()
	{
		parent::__construct();
	}

	function checkDuplicate($email)
	{
		$this->db->select('email');
		$this->db->from('users');
		$this->db->like('email', $email);

		return $this->db->count_all_results();
	}
	
	function insertUser($data)
	{
		if($this->db->insert('users', $data))
		{
			return $this->db->insert_id();
		}
		else
		{
			return false;
		}
	}
}
