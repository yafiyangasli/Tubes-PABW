<?php

class Upload extends CI_model{
	var $gallery_path;
	var $gallery_path_url;

	public function __construct(){
		parent::__construct();
		$this->gallery_path=realpath(APPPATH.'../asset');
		$this->gallery_url=base_url().'asset/';
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
}