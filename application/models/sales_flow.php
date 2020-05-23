<?php
class sales_flow extends CI_model
{
	public function __construct()
	{
		parent::__construct();
	}


	function selectdata()
	{

		$this->db->select("*");
		$this->db->from("sales");
		$query = $this->db->get();
		return $query;

	}
}
?>
