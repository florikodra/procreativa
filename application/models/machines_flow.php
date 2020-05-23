<?php


class machines_flow extends CI_model{
	public function __construct()
	{
		parent::__construct();
	}
	function insertintodb($title,$code,$sn,$quantity){
		$query="insert into machines values ('','$title','$code','$sn','$quantity','')";
		$this->db->query($query);
	}
	function selectdata(){

		$this->db->select("*");
		$this->db->from("machines");
		$query = $this->db->get();
		return $query;

	}

	function selectdataoperator(){
		$zero=0;
		$this->db->select("*");
		$this->db->from("machines");
		$this->db->where("machine_quantity>", $zero);
		$query = $this->db->get();
		return $query;

	}

	function updatedata($id,$title,$code,$sn,$quantity){
		$query="update machines SET machine_title='$title', machine_code='$code',machine_sn='$sn',machine_quantity='$quantity' where machine_id='$id'";
		$this->db->query($query);
	}
	function addsalecustomer($client,$id,$title,$code,$sn,$quantity){
		$query="insert into sales values ('','$id','$title','$code','$sn','','$client')";
		$this->db->query($query);
		$quantity_updated=$quantity-1;
		$query1="update machines set machine_quantity='$quantity_updated' where machine_id='$id'";
		$this->db->query($query1);
	}
	function selectdatabyid($id){

		$this->db->select("*");
		$this->db->from("machines");
		$this->db->where("machine_id",$id);
		$query = $this->db->get();
		return $query;

	}
}
?>

