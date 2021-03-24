<?php 
/**
  * 
  */
 class Quarto {
 	private $numeroQuarto;
 	private $tipo;
 	private $status;
 	private $valorDiaria;


 	//get
 	public function getNumeroquarto(){
 		return $this->numeroQuarto;

 	}
 	public function getTipo(){
 		return $this->tipo;
 		
 	}
 	public function getStatus(){
 		return $this->status;

 	}
 	public function getValordiaria(){
 		return $this->valorDiaria;
 		
 	}

 	//set
 	public function setNumeroquarto($numeroQuarto){
 		$this->numeroQuarto = $numeroQuarto; 		
 	}
 	public function setTipo($tipo){
 		$this->tipo = $tipo; 		
 	}
 	public function setStatus($status){
 		$this->status = $status; 		
 	}
 	public function setValordiaria($valorDiaria){
 		$this->valorDiaria = $valorDiaria; 		
 	}
 	
 } 

?>