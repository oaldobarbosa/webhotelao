<?php 
class CheckoutDAO{

	//crate - insert
	public function create(Hospede $hospede){
		try {
			$sql = "INSERT INTO hospede (nome, cpf, telefone, sexo, datanascimento) VALUES (:nome, :cpfhospede, :telefone, :sexo, :datanascimento)";

			$p_sql = Conexao::getConexao()->prepare($sql);

			$p_sql->bindValue(":nome", $hospede->getNome());
			$p_sql->bindValue(":cpfhospede", $hospede->getCpfhospede());
			$p_sql->bindValue(":telefone", $hospede->getTelefone());
			$p_sql->bindValue(":sexo", $hospede->getSexo());
			$p_sql->bindValue("datanascimento", $hospede->getDatanascimento());

			return $p_sql->execute();

		} catch (Exception $e) {
			print "Erro ao inserir hospede " . $e;	
		}

	}


	//read - unit
	public function readUnit(){
		try {
			$sql = "SELECT * FROM hospede WHERE cpf = :cpf";

			$result = Conexao::getConexao()->prepare($sql);
		} catch (Exception $e) {
			print
			
		}

	}


	//read - all
	public function readAll(){
		try {

			$sql = "SELECT * FROM hospede";

			$result = 
			
		} catch (Exception $e) {

			print "Erro ao buscar hospedes"
			
		}
	}

	//update
	public function update(){
		try {
			$sql = "UPDATE hospede set nome=:nome, telefone=:telefone, sexo=:sexo, datanascimento = :datanascimento WHERE cpf = :cpf"
			
		} catch (Exception $e) {
			
		}

	}

	//delete
	public function delete(){
		try {
			
		} catch (Exception $e) {
			
		}

	}


	public function listarHospedes($row){

		$hospede = new Hospede();
		$hospede->set

	}


	
} ?>