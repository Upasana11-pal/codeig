<?php  class auth extends CI_Model{
	function getauth(){
		
		$res=$this->db->get("general_settings");
		return $res;	
	}
	function insertdata($data){
		$this->db->insert("registration",$data);
		return true;
		
	}
	function alldata(){
		$reg=$this->db->get("registration");
		return $reg;
	}
}