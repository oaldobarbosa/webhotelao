<?php 


	require "../conexao/Conexao.php";

	if(isset($_SESSION['idusuario']) && !empty($_SESSION['idusuario'])){

		require_once '../model/Usuario.php';

		$user = new Usuario();

		$userLogado = $user->logado($_SESSION['idusuario']);

		$nomeUsuario = $userLogado['nome'];
	

	}else{

		header("Location: ../login/login.php");

	}




 ?>