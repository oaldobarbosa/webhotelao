<?php 
/**
  * 
  */
 class Checkout {

 	private $idHospedagem;
 	private $valor;


 	//get
 	public function getIdhospedagem(){
 		return $this->idHospedagem;
 	}
 	public function getValor(){
 		return $this->valor; 		
 	}

 	//set
 	public function setIdhospedagem($idHospedagem){
 		$this->idHospedagem = $idHospedagem; 		
 	}
 	public function setValor($valor){
 		$this->valor = $valor; 		
 	}
 	
 	function __construct(argument)
 	{
 		# code...
 	}
 } ?>