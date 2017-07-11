<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CanchasC extends CI_Controller{

	public function index(){
		$this->load->view('canchas');
	}
	public function viewCanchas1(){
		$this->load->model('Canchas');
		$query = $this->Canchas->getCanchas();
		$num = 1;
		if($query != false){
			$this->load->view('canchas', $query, $num);
		}
		
		else{
			
			redirect('principal');	
		}

	}
	public function viewCanchas2(){
		$this->load->model('Canchas');
		$query = $this->Canchas->getCanchas();
		$num = 2;
		if($query != false){
			$this->load->view('canchas', $query, $num);
		}
		
		else{
			
			redirect('principal');	
		}


	}
	public function viewCanchas3(){
		$this->load->model('Canchas');
		$query = $this->Canchas->getCanchas();
		$num = 3;
		if($query != false){
			$this->load->view('canchas', $query, $num);
		}
		
		else{
			
			redirect('principal');	
		}

	}
	public function viewCanchas4(){
		$this->load->model('Canchas');
		$query = $this->Canchas->getCanchas();
		$num = 4;
		if($query != false){
			$this->load->view('canchas', $query, $num);
		}
		
		else{
			
			redirect('principal');	
		}

	}
}


?>