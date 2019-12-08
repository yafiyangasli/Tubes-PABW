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

		$data['judul']='tambah data lapor';
		$this->form_validation->set_rules('lapor','Lapor','required');
		$this->form_validation->set_rules('aspek','Aspek','required');
		//$this->form_validation->set_rules('gambar','gambar','required');
		if($this->form_validation->run()==FALSE){
		$this->load->view('templates/header',$data);
		$this->load->view('data/tambah');
		$this->load->view('templates/footer');
	}else{
		
		$config['upload_path'] = './asset/gambar/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|PNG|JPEG';
        // load library upload
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar')) {
            $error = $this->upload->display_errors();
            // menampilkan pesan error
            print_r($error);
        } else {
            $result = $this->upload->data();
            echo "<pre>";
            print_r($result);
            echo "</pre>";
        }
		$this->Data_model->tambahDataLapor();
		//$this->session->set_flashdata('flash','Ditambahkan');
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

	public function poto(){
		if($this->input->post('upload')){
			$config=array(
				'allowed_types'=>'jpg|jpeg|gif|png',
				'upload_path'=>$this->gallery_path,
				'max_size'=>2000
			);
			$this->load->library('upload',$config);
			$this->upload->do_upload();
		}
	}

	public function hapus($id){
		$this->Data_model->hapusDataLapor($id);
		//$this->session->set_flashdata('flash','Dihapus');
		redirect('home');
	}

	public function ubah($id){

		$data['judul']='ubah data lapor';
		$data['keluhan']=$this->Data_model->getDataById($id);
		$this->form_validation->set_rules('lapor','Lapor','required');
		$this->form_validation->set_rules('aspek','Aspek','required');
		// $this->form_validation->set_rules('gambar','gambar','required');
		if($this->form_validation->run()==FALSE){
		$this->load->view('templates/header',$data);
		$this->load->view('data/ubah',$data);
		$this->load->view('templates/footer');
	}else{
		
		$config['upload_path'] = './asset/gambar/';
        // $config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|PNG|JPEG';
        // load library upload
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar')) {
            $error = $this->upload->display_errors();
            // menampilkan pesan error
            print_r($error);
        } else {
            $result = $this->upload->data();
            echo "<pre>";
            print_r($result);
            echo "</pre>";
        }
		$this->Data_model->ubahDataLapor($id);
		//$this->session->set_flashdata('flash','Ditambahkan');
		redirect('home');
	}
}
}