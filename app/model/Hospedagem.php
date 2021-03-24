<?php 
/**
  * 
  */
 class Hospedagem {

 	private $idHospedagem;
 	private $cpfHospede;
 	private $dataHospedagem;
 	private $numeroQuarto;
 	private $dataCheckout;
 	private $valorHospedagem;
 	private $valorDiaria;

 	private $diarias;


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
 	public function getNumeroquarto(){
 		return $this->numeroQuarto;	
 	}
 	public function getDatacheckout(){
 		return $this->dataCheckout;
 	}
 	public function getValorHospedagem(){
 		return $this->valorHospedagem;
 	}
 	public function getValorDiaria(){
 		return $this->valorDiaria;
 	}

 	public function getDiarias(){
 		return $this->diarias;
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
 	public function setNumeroquarto($numeroQuarto){
 		$this->numeroQuarto = $numeroQuarto;
 	}
 	public function setDatacheckout($dataCheckout){
 		$this->dataCheckout = $dataCheckout;
 	}
 	public function setValorhospedagem($valorHospedagem){
 		$this->valorHospedagem = $valorHospedagem; 		
 	}
 	public function setValorDiaria($valorDiaria){
 		$this->valorDiaria = $valorDiaria; 		
 	}
 	public function setDiarias($diarias){
 		$this->diarias = $diarias; 		
 	}
} 

?>