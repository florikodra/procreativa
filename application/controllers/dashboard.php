<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller
{

	public function index()
	{

		if ($this->session->userdata('email') == false) {
			redirect('login');
		}
		$this->load->helper('url');
		$this->load->model("dashboard_flow");
		$data['titlepg'] = 'Procreativa - Dashboard';
		$data["countrowsstock"] = $this->dashboard_flow->countdatastock();
		$data["countrowsmachines"] = $this->dashboard_flow->countdatamachines();
		$data["countrowssales"] = $this->dashboard_flow->countdatasales();
		$data["userrole"]= $this->dashboard_flow->userrole();
		$data["all_data"] = $this->dashboard_flow->selectdata();
		$this->load->view('admin/dashboard', $data);

	}



}
?>
