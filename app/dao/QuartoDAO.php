<?php 
class QuartoDAO{

	//crate - insert
	public function create(Hospede $hospede){
		try {
			$sql = "INSERT INTO quarto (numero, tipo) VALUES (:numero, :tipo)";

			$p_sql = Conexao::getConexao()->prepare($sql);

			$p_sql->bindValue(":numero", $hospede->getNumero());
			$p_sql->bindValue(":tipo", $hospede->getTipo());

			return $p_sql->execute();

		} catch (Exception $e) {
			print "Erro ao inserir quarto " . $e;	
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