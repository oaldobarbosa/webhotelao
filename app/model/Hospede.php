<?php 

/**
 * 
 */
class Hospede {

	private $nome;
	private $cpfhospede;
	private $telefone;
	private $sexo;
	private $dataNascimento;

	//get
	public function getNome(){
		return $this->nome;
	}
	public function getCpfhospede(){
		return $this->cpfhospede;
	}
	public function getTelefone(){
		return $this->telefone;
	}
	public function getSexo(){
		return $this->sexo;
	}
	public function getDatanascimento(){
		return $this->dataNascimento;
	}


	//set
	public function setNome($nome){
		$this->nome = $nome;
	}
	public function setCpfhospede($cpfhospede){
		$this->cpfhospede = $cpfhospede;
	}
	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}
	public function setSexo($sexo){
		$this->sexo = $sexo;
	}
	public function setDatanascimento($dataNascimento){
		$this->dataNascimento = $dataNascimento;
	}

}
 ?>