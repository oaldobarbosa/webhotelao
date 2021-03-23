<?php 
/**
  * 
  */
 class Historico {

 	private $idHospedagem;
 	private $cpfHospede;
 	private $dataHospedagem;
 	private $numero;
 	private $dataCheckout;
 	private $valor;


 	//get

 	public function getIdhospedagem(){
 		return $this->idHospedagem;
 	}

 	public function getCpfhospede(){
 		return $this->cpfHospede;
 	}
 	public function getDatahospedagem(){
 		return $this->dataHospedagem;
 	}
 	public function getNumero(){
 		return $this->numero;	
 	}
 	public function getDatacheckout(){
 		return $this->dataCheckout;
 	}
 	public function getValor(){
 		return $this->valor;
 	}

 	//set

 	public function setIdhospedagem($idHospedagem){
 		$this->idHospedagem = $idHospedagem;
 	}

 	public function setCpfhospede($cpfHospede){
 		$this->cpfHospede = $cpfHospede;
 	}
 	public function setDatahospedagem($dataHospedagem){
 		$this->dataHospedagem = $dataHospedagem;
 	}
 	public function setNumero($numero){
 		$this->numero = $numero;
 	}
 	public function setDatacheckout($dataCheckout){
 		$this->dataCheckout = $dataCheckout;
 	}
 	public function setValor($valor){
 		$this->valor = $valor; 		
 	}
} 

?>