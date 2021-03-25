<?php 
class HospedagemDAO{

	//crate - insert
	public function create(Hospedagem $hospedagem){
		try {
			$sql = "INSERT INTO hospedagem (cpfhospede, datahospedagem, numeroquarto, datacheckout, valorhospedagem, diarias, valordiaria) 
			VALUES (:cpfhospede, :datahospedagem, :numeroquarto, :datacheckout, :valorhospedagem, :diarias, :valordiaria)";

			$p_sql = Conexao::getConexao()->prepare($sql);

			$p_sql->bindValue(":cpfhospede", $hospedagem->getCpfhospede());
			$p_sql->bindValue(":datahospedagem", $hospedagem->getDatahospedagem());
			$p_sql->bindValue(":numeroquarto", $hospedagem->getNumeroquarto());
			$p_sql->bindValue(":datacheckout", $hospedagem->getDatacheckout());
			$p_sql->bindValue(":diarias", $hospedagem->getDiarias());
			$p_sql->bindValue(":valorhospedagem", $hospedagem->getValorhospedagem());
			$p_sql->bindValue(":valordiaria", $hospedagem->getValordiaria());
			



			return $p_sql->execute();

		} catch (Exception $e) {
			print "Erro ao inserir hospedem " . $e;	
		}

	}




	//read - unit
	public function readUnit(){
		try {
			$sql = "SELECT idhospedagem FROM hospedagem WHERE cpfhospede = :cpfhospede";

			$result = Conexao::getConexao()->prepare($sql);

		} catch (Exception $e) {
			print "erro ao ler dados";		
		}
	}



	//read - all
	public function read(){
		try {

			$sql = "SELECT * FROM hospedagem";

			$result = Conexao::getConexao()->query($sql);

			$lista = $result->fetchAll(PDO::FETCH_ASSOC);

			$f_lista = array();

			foreach ($lista as $l) {
				$s_lista[] = $this->listaHospedagem($l);
			}

			
				return $s_lista;
			

			
		} catch (Exception $e) {

			print "Erro ao buscar hospedagens";
			
		}
	}



	//update
	public function update(Hospedagem $hospedagem){
		try {
			$sql = "UPDATE hospedagem SET (cpfhospede=:cpfhospede, datahospedagem=:datahospedagem, numeroquarto=:numeroquarto, datacheckout=:datacheckout, valorhospedagem=:valorhospedagem WHERE cpfhospede = :cpfhospede";

			$p_sql = Conexao::getConexao()->prepare($sql);

			$p_sql->bindValue(":cpfhospede", $hospedagem->getCpfhospede());
			$p_sql->bindValue(":datahospedagem", $hospedagem->getDatahospedagem());
			$p_sql->bindValue(":numeroquarto", $hospedagem->getNumeroquarto());
			$p_sql->bindValue(":datacheckout", $hospedagem->getDatacheckout());
			$p_sql->bindValue("valorhospedagem", $hospedagem->getValorhospedagem());

			return $p_sql->execute();

		} catch (Exception $e) {
			echo "Erro ao atualizar informações de hospedagem";
			
		}

	}



	//delete
	public function delete(Hospedagem $hospedagem){
		try {
			
			$sql = "DELETE FROM hospedagem WHERE idhospedagem = :idhospedagem";

			$p_sql = Conexao::getConexao()->prepare($sql);
			
			$p_sql->bindValue(":idhospedagem", $hospedagem->getIdhospedagem());

			return $p_sql->execute();


		} catch (Exception $e) {

			echo "Erro ao Excluir Hospedagem -> $e";
			
		}

	}


	public function listaHospedagem($row){


		$hospedagem = new Hospedagem();

		$hospedagem->setIdhospedagem($row['idhospedagem']);

		$hospedagem->setCpfhospede($row['cpfhospede']);
		$hospedagem->setDatahospedagem($row['datahospedagem']);
		$hospedagem->setNumeroquarto($row['numeroquarto']);
		$hospedagem->setDatacheckout($row['datacheckout']);
		$hospedagem->setValorhospedagem($row['valorhospedagem']);

		$hospedagem->setDiarias($row['diarias']);
		$hospedagem->setValordiaria($row['valordiaria']);

		return $hospedagem;


	}
	

	
} ?>