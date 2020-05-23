<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class sales extends CI_Controller
{

	public function index()
	{

		if ($this->session->userdata('email') == false) {
			redirect('login');
		}
		$this->load->helper('url');
		$this->load->model("sales_flow");
		$data["all_data"] = $this->sales_flow->selectdata();
		$data['titlepg'] = 'Procreativa - Machine Sales';
		$this->load->view('admin/sales', $data);

	}



}
?>
