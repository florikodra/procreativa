<?php
class User_model extends CI_model{
	public function __construct()
	{
		parent::__construct();
	}
	function can_login($email, $password){
		$this->db->where('user_email', $email);
		$this->db->where('user_password', $password);
		$query = $this->db->get('users');
		if($query->num_rows() == 1){
			return true;
		}else{
			return false;
		}
	}
}
?>

