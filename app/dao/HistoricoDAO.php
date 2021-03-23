<?php 
class HistoricoDAO{



	//read - all
	public function read(){
		try {

			$sql = "SELECT * FROM historico";

			$result = Conexao::getConexao()->query($sql);

			$lista = $result->fetchAll(PDO::FETCH_ASSOC);

			$f_lista = array();

			foreach ($lista as $l) {
				$s_lista[] = $this->listaHistorico($l);
			}

			return $s_lista;

			
		} catch (Exception $e) {

			print "Erro ao buscar hospedagens";
			
		}
	}


	public function listaHistorico($row){


		$historico = new Historico();

		$historico->setIdhospedagem($row['idhospedagem']);

		$historico->setCpfhospede($row['cpfhospede']);
		$historico->setDatahospedagem($row['datahospedagem']);
		$historico->setNumero($row['numero']);
		$historico->setDatacheckout($row['datacheckout']);
		$historico->setValor($row['valor']);

		return $historico;


	}
	

	
} ?>