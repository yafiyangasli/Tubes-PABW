<?php

class Data extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Data_model');
		$this->load->library('form_validation');
	}

	public function index(){

		$data['judul']='Data';
		$data['lapor']=$this->Data_model->getDataLapor();
		$this->load->view('templates/header',$data);
		$this->load->view('data/index',$data);
		$this->load->view('templates/footer');
	}

	public function tambah(){

		$data['judul']='tambah data mahasiswa';
		$this->form_validation->set_rules('lapor','Lapor','required');
		$this->form_validation->set_rules('aspek','Aspek','required');
		$this->form_validation->set_rules('gambar','gambar','required');
		if($this->form_validation->run()==FALSE){
		$this->load->view('templates/header',$data);
		$this->load->view('data/tambah');
		$this->load->view('templates/footer');
	}else{
		$this->Data_model->tambahDataMahasiswa();
		$this->session->set_flashdata('flash','Ditambahkan');
		redirect('home');
	}
	}
	public function detail($id){
		$data['judul']='Detail laporan';
		$data['keluhan']=$this->Data_model->getDataById($id);
		$this->load->view('templates/header',$data);
		$this->load->view('data/detail',$data);
		$this->load->view('templates/footer');
	}
}