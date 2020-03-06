<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Employee_model extends CI_Model
{
	var $table = 'employee';
	var $column_order = array(null, 'employee_name','employee_salary','employee_age'); 
	//set column field database for datatable orderable
	var $column_search = array('employee_name','employee_salary','employee_age');
	//set column field database for datatable searchable
	var $order = array('id' => 'asc'); // default order
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function get_employees($limit, $start, $id=0)
	{
		if(empty($id)){
			$this->db->limit($limit, $start);
			$query = $this->db->get('employee');
			if ($query->num_rows() > 0) {
				foreach ($query->result() as $row) {
					$data[] = $row;
				}
				return $data;
			}
			return false;
		} else {
			$query = $this->db->get_where('employee', array('id' => $id));
			return $query->row_array();
		}
	}
	public function saveEmployee($id = 0)
	{
		//$this->load->helper('url');
		$data = array(
			'employee_name' => $this->input->post('employee_name'),
			'id' => $id,
			'employee_salary' => $this->input->post('employee_salary'),
			'employee_age' => $this->input->post('employee_age')
		);
		if ($id == 0) {
			return $this->db->insert('employee', $data);
		} else {
			$this->db->where('id', $id);
			return $this->db->update('employee', $data);
		}
	}
	public function record_count() {
		return $this->db->count_all("employee");
	}
	public function delete_employee($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('employee');
	}
}
