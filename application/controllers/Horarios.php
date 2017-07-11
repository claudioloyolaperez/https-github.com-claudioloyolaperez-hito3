<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Horarios extends CI_Controller {
	public function viewHorarios1(){
		$this->load->model('Horarios');
		$query = $this->Canchas->getHorarios();
		$num = 1;
		if($query != false){
			$this->load->view('horarios', $query, $num);
		}
		
		else{
			
			redirect('principal');	
		}
	}
	public function viewHorarios2(){
		$this->load->model('Horarios');
		$query = $this->Canchas->getHorarios();
		$num = 2;
		if($query != false){
			$this->load->view('horarios', $query, $num);
		}
		
		else{
			
			redirect('principal');	
		}
	}
	public function viewHorarios3(){
		$this->load->model('Horarios');
		$query = $this->Canchas->getHorarios();
		$num = 3;
		if($query != false){
			$this->load->view('horarios', $query, $num);
		}
		
		else{
			
			redirect('principal');	
		}
	}
	public function viewHorarios4(){
		$this->load->model('Horarios');
		$query = $this->Canchas->getHorarios();
		$num = 4;
		if($query != false){
			$this->load->view('horarios', $query, $num);
		}
		
		else{
			
			redirect('principal');	
		}
	}
	public function viewHorarios5(){
		$this->load->model('Horarios');
		$query = $this->Canchas->getHorarios();
		$num = 5;
		if($query != false){
			$this->load->view('horarios', $query, $num);
		}
		
		else{
			
			redirect('principal');	
		}
	}
	public function viewHorarios6(){
		$this->load->model('Horarios');
		$query = $this->Canchas->getHorarios();
		$num = 6;
		if($query != false){
			$this->load->view('horarios', $query, $num);
		}
		
		else{
			
			redirect('principal');	
		}
	}
	public function viewHorarios7(){
		$this->load->model('Horarios');
		$query = $this->Canchas->getHorarios();
		$num = 7;
		if($query != false){
			$this->load->view('horarios', $query, $num);
		}
		
		else{
			
			redirect('principal');	
		}
	}
	public function viewHorarios8(){
		$this->load->model('Horarios');
		$query = $this->Canchas->getHorarios();
		$num = 8;
		if($query != false){
			$this->load->view('horarios', $query, $num);
		}
		
		else{
			
			redirect('principal');	
		}
	}
	public function viewHorarios9(){
		$this->load->model('Horarios');
		$query = $this->Canchas->getHorarios();
		$num = 9;
		if($query != false){
			$this->load->view('horarios', $query, $num);
		}
		
		else{
			
			redirect('principal');	
		}
	}
	public function viewHorarios10(){
		$this->load->model('Horarios');
		$query = $this->Canchas->getHorarios();
		$num = 10;
		if($query != false){
			$this->load->view('horarios', $query, $num);
		}
		
		else{
			
			redirect('principal');	
		}
	}
	public function viewHorarios11(){
		$this->load->model('Horarios');
		$query = $this->Canchas->getHorarios();
		$num = 11;
		if($query != false){
			$this->load->view('horarios', $query, $num);
		}
		
		else{
			
			redirect('principal');	
		}
	}
}



?>