<?php 
/**
  * 
  */
 class Quarto {
 	private $numero;
 	private $tipo;


 	//get
 	public function getNumero(){
 		return $this->numero;

 	}
 	public function getTipo(){
 		return $this->tipo;
 		
 	}

 	//set
 	public function setNumero($numero){
 		$this->numero = $numero; 		
 	}
 	public function setTipo($tipo){
 		$this->tipo = $tipo; 		
 	}
 	
 	function __construct(argument)
 	{
 		# code...
 	}
 } ?>