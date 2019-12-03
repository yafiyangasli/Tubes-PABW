<?php

class Data_model extends CI_model{
	public function getDataLapor(){
		return $this->db->get('keluhan')->result_array();
	}
}