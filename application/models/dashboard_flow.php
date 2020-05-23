<?php
class dashboard_flow extends CI_model
{
	public function __construct()
	{
		parent::__construct();
	}



	function selectdata()
	{
		$zero=0;
		$this->db->select("*");
		$this->db->from("machines");
		$this->db->where("machine_quantity=", $zero);
		$query = $this->db->get();
		return $query;

	}
	function countdatastock()
	{
		$zero=0;
		$this->db->select("*");
		$this->db->from("machines");
		$this->db->where("machine_quantity=", $zero);
		$query = $this->db->get();
		return $query->num_rows();

	}
	function countdatamachines()
	{
		$this->db->select("*");
		$this->db->from("machines");
		$query = $this->db->get();
		return $query->num_rows();

	}
	function countdatasales()
	{
		$this->db->select("*");
		$this->db->from("sales");
		$query = $this->db->get();
		return $query->num_rows();

	}
	function userrole(){
		$email=$this->session->userdata('email');
		$this->db->select("user_role");
		$this->db->from("users");
		$this->db->where("user_email=", $email);
		$query = $this->db->get();
		return $query->result();
	}

}

	?>
