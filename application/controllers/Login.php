<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	

	
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('admin/login');
	}

	public function login_user(){
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$this->load->model('user_model');
		if($this->user_model->can_login($email,$password)){
			$session_data=array(
				'email' => $email
			);
			$this->session->set_userdata($session_data);
			redirect(base_url().'dashboard');
		}else{
			redirect(base_url() . 'login');
		}

	}
	function logout()
	{
		$this->session->unset_userdata('email');
		redirect(base_url() . 'login');
	}
}
