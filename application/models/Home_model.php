<?php
class Home_model extends CI_model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function selectdata(){
		$this->db->select("*");
		$this->db->from("machines");
		$query = $this->db->get();
		return $query;
	}

}
?>
