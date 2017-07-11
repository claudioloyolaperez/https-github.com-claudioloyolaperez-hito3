<?php

class Cliente extends CI_Model {

	function getHorarios(){
		$query = $this->db->get('horarios');
		if($query->num_rows() > 0){
			return $query;
		}else{
			return false;
		}
	}

	
}
?>