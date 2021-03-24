<?php 
class QuartoDAO{

	//read - all
	public function read(){
		try {

			$sql = "SELECT * FROM quarto ORDER BY numeroquarto ASC";

			$result = Conexao::getConexao()->query($sql);

			$lista = $result->fetchAll(PDO::FETCH_ASSOC);

			$f_lista = array();

			foreach ($lista as $l) {
				$s_lista[] = $this->listaQuartos($l);
			}

			return $s_lista;

			
		} catch (Exception $e) {

			print "Erro ao buscar hospedagens";
			
		}
	}


	public function listaQuartos($row){

		$quarto = new Quarto();

		$quarto->setNumeroquarto($row['numeroquarto']);
		$quarto->setTipo($row['tipo']);
		$quarto->setStatus($row['status']);
		$quarto->setValordiaria($row['valordiaria']);

		return $quarto;


	}
	

	
} ?>