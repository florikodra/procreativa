<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class machines extends CI_Controller{


	public function index(){
		if ($this->session->userdata('email') == false) {
			redirect('login');
		}
		$this->load->helper('url');
		$this->load->model("machines_flow");
		$data["all_data"] = $this->machines_flow->selectdata();
		$data['titlepg'] = 'Procreativa - Machine List';
		$this->load->model("dashboard_flow");
		$data["userrole"]= $this->dashboard_flow->userrole();
		$data["all_data_operator"] = $this->machines_flow->selectdataoperator();
		$this->load->view('admin/machines', $data);


	}
	public function insert(){
		$this->load->model('machines_flow');
		if($this->input->post('save')){
			$title=$this->input->post('title');
			$code=$this->input->post('code');
			$sn=$this->input->post('sn');
			$quantity=$this->input->post('quantity');
			$this->machines_flow->insertintodb($title,$code,$sn,$quantity);
			$data["all_data"] = $this->machines_flow->selectdata();

			redirect(base_url() . "machines");
		}

	}
	public function getdata(){

		$this->load->model('machines_flow');
		$data["all_data"] = $this->machines_flow->selectdata();
		$this->load->view('admin/machines/', $data);
	}

	public function edit(){
		$this->load->model('machines_flow');
		if($this->input->post('save')){
			$id=$this->input->post('other');
			$title=$this->input->post('title');
			$code=$this->input->post('code');
			$sn=$this->input->post('sn');
			$quantity=$this->input->post('quantity');
			$this->machines_flow->updatedata($id,$title,$code,$sn,$quantity);
			redirect(base_url() . "machines");
		}
	}

	public function addsale(){
		$this->load->model('machines_flow');
		if($this->input->post('save')){
			$client=$this->input->post('client');
			$id=$this->input->post('other');
			$title=$this->input->post('title');
			$code=$this->input->post('code');
			$sn=$this->input->post('sn');
			$quantity=$this->input->post('quantity');
			$this->machines_flow->addsalecustomer($client, $id,$title,$code,$sn,$quantity);
			redirect(base_url() . "machines");
		}
	}

	public function edit_machine_data(){
		if ($this->session->userdata('email') == false) {
			redirect('login');
		}
		$id=$this->uri->segment('3');
		$this->load->model('machines_flow');
		$data['titlepg'] = 'Machines - Edit';
		$data["other"] = $this->machines_flow->selectdatabyid($id);
		$this->load->view('admin/edit_machine', $data);
	}
	public function add_machine_sale(){

		$id=$this->uri->segment('3');
		$this->load->model('machines_flow');
		$data['titlepg'] = 'Machines - Sales';
		$data["other"] = $this->machines_flow->selectdatabyid($id);
		$this->load->view('admin/add_sale', $data);
	}


}
?>
