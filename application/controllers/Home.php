<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('home_model');
		$data["data_line"] = $this->home_model->selectdata();
		$this->load->view('home_view', $data);
	}

	public function getdataajax(){





		/*$this->load->model('home_model');
		$result_html='';
		$result_set=$this->home_model->get_with_ajax();
		foreach ($result_set->result() as $result){
			$result_html .='
			<div class="col-lg-6 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="http://placehold.it/500x325" alt="">
          <div class="card-body">
            <h4 class="card-title text-left">' . $result->machine_title . '</h4>
            <p class="card-text text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
				<ul class="list-group">
				  <li class="list-group-item d-flex justify-content-between align-items-center">
					Quantity
					<span class="badge badge-primary badge-pill">14</span>
				  </li>
				  <li class="list-group-item d-flex justify-content-between align-items-center">
					Serial Number
					<span class="badge badge-primary badge-dark">' . $result->machine_sn . '</span>
				  </li>
				  
				</ul>          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
			<a href="#" class="btn btn-outline-success">Find Out More!</a>
          </div>
        </div>
      </div>';
		}
		echo json_encode($result_html);*/
	}
}
