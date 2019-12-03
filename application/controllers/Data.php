<?php

class Data extends CI_Controller{

	public function index(){

		$this->load->model('Data_model');
	
		$data['judul']='Data';
		$data['lapor']=$this->Data_model->getDataLapor();
		$this->load->view('templates/header',$data);
		$this->load->view('data/index',$data);
		$this->load->view('templates/footer');
	}
}