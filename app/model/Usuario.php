<?php 



/**
 * 
 */
class Usuario{
	
	public function login($email, $senha){

		$sql = "SELECT * FROM usuario WHERE email = :email AND senha = :senha";
		
		$p_sql = Conexao::getConexao()->prepare($sql);
		$p_sql->bindValue(":email", $email);
		$p_sql->bindValue(":senha", md5($senha));
		$p_sql->execute();

		
		if ($p_sql->rowCount() > 0) {

			$dado = $p_sql->fetch();

			$_SESSION['idusuario'] = $dado['idusuario'];

			return true;
		}
		else{
			return false;
		}

	}

	public function logado($id){


		$array = array();

		$sql = "SELECT nome FROM usuario WHERE idusuario = :idusuario";

		$p_sql = Conexao::getConexao()->prepare($sql);

		$p_sql->bindValue(":idusuario", $id);

		$p_sql->execute();

		if ($p_sql->rowCount() > 0) {

			$array = $p_sql->fetch();
			
		}

		return $array;

	}







}

 ?>