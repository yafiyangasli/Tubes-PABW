<?php

class Data_model extends CI_model{
	public function getDataLapor(){
		return $this->db->get('keluhan')->result_array();
	}
	public function tambahDataMahasiswa(){
		$data = [
			"lapor"=>$this->input->post('lapor',true),
			"aspek"=>$this->input->post('aspek',true),
			"gambar"=>$this->input->post('gambar',true)
		];

		$this->db->insert('keluhan',$data);
	}

	public function getDataById($id){
		return $this->db->get_where('keluhan',['id'=>$id])->row_array();
	}

	public function cariDataKeluhan(){
		$keyword=$this->input->post('keyword');
		$this->db->like('lapor',$keyword);
		$this->db->like('aspek',$keyword);
		return $this->db->get('keluhan')->result_array();
	}
}