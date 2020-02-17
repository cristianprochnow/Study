<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class HelloWorld extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}
		public function getData()
		{
			//Query the data table for every record and row
			$query = $this->db->get('data');

			if($query->num_rows() > 0)
			{
				$result = $query->result_array();
				
				return $result;
			}
			else
			{
				return false;
			}
		}
	}
