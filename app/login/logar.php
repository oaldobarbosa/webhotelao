<?php 

session_start();


if ( isset($_POST['email']) && !empty($_POST['email']) && (isset($_POST['senha']) && !empty($_POST['senha']) )) {

	require "../conexao/Conexao.php";
	require "../model/Usuario.php";


	$user = new Usuario();

	$email = addslashes($_POST['email']);

	$senha = addslashes($_POST['senha']);


	//verificando dados
	if($user->login($email, $senha) == true){



		//achou user

		if(isset($_SESSION['idusuario'])){

			header("Location: ../view/dashboard.php");

		}else{

			header("Location: login.php");
		}

	}else{

		header("Location: login.php");
	}




} else {

	header("Location: login.php");
}



 ?>