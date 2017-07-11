<?php

class Canchas extends CI_Model {


	public function getGym(){
		$query = $this->db->get('gym');
		if($query->num_rows() > 0){
			return $query;
		}else{
			return false;
		}
	}

	public function getCanchas(){
		$query = $this->db->get('canchas');
		if($query->num_rows() > 0){
			return $query;
		}else{
			return false;
		}
	}
}
	
?>	