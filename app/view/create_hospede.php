<?php 

session_start();

require "../login/verificar.php";

include_once "../conexao/Conexao.php";
include_once "../model/Hospede.php";
include_once "../dao/HospedeDAO.php";

//instancia classes
$hospede = new Hospede();
$hospededao = new HospedeDAO();

?>




<!DOCTYPE html>
<html>
<head>
	<title>Nova Hospedagem</title>
	<link rel="shortcut icon" href="style/favicon.ico" />

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Sail&display=swap" rel="stylesheet">
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="style/style.css">

	<script type="text/javascript" src="js/js.js"></script>

	<style type="text/css">
		.input-form{
			width: 200px;
			height: 30px;

			background-color: #c4c4c4;

			border-radius: 25px;

			border: 0;

			padding-left:10px;

			float: right;

		}
		.row{
			width: 500px;
		}

		.row label{

			float: left;
			font-size: 20px;
		}

		.bottons{
			margin-top: 20%;
		}

		.btn-cadastrar{

			margin-right: 5%;
			
			background-color: #01D623;
			color: white;
			width: 150px;
			height: 40px;
			border: 0;

			border-radius: 25px;

		}
		.btn-cadastrar:hover{
			background-color: white;
			color: green;
			border: 0;
		}

		.btn-cancelar{
			
			background-color: red;
			color: white;
			width: 150px;
			height: 40px;
			border-radius: 25px;
			border:0;


		}
		.btn-cancelar:hover{
			background-color: white;
			color: red;
			border: 0;

		}
	</style>
</head>


<body>

	<header>
		<a href="#" class="btn-abrir" onclick="abrirMenu()"> &#9776;  Web Hotelão </a>
		<!--<center><h2>Web Hotelão</h2></center>-->
		<a href="../login/logout.php" class="btn-user">Olá <?php echo $nomeUsuario; ?>! sair?</a>
		
	</header>


	<nav id="menu">
		<a href="#" onclick="fecharMenu()"><img src="../icones/seta-esquerda.png" width="20%"></a>
		<a href="dashboard.php">Dashboard</a>
		<a href="read_hospedagem.php">Hospedagens</a>
		<a href="read_hospede.php">Hospedes</a>
		<a href="read_quarto.php">Quartos</a>
		<a href="read_reserva.php">Reservas</a>
		<a href="read_historico.php">Historico</a>
	
	</nav>

	<main id="conteudo"><center>

		<h1>Novo Hóspede</h1>
		<hr>

		<form  action="../controller/HospedeController.php" method="POST">
		<div class="row" >
			<label>Nome</label>
			<input type="text" name="nome" class="input-form" ><br><br>

			<label>Cpf</label>
			<input type="text" name="cpf" maxlength="11" class="input-form" placeholder="Apenas Numeros"><br><br>

			<label>Telefone</label>
			<input type="text" name="telefone" class="input-form" placeholder="Apenas Numeros"><br><br>

			<label>Sexo</label>
				<select name="sexo" class="input-form">
					<option value="Masculino">Masculino</option>
					<option value="Feminino">Feminino</option>

				</select><br><br>
			<!--<input type="text" name="sexo" class="input-form"><br><br>-->

			<label>Data Nascimento</label>
			<input type="date" name="dataNascimento" class="input-form"><br><br>

			<div class="bottons">
				<button type="submit" name="cadastrarHospede" class="btn-cadastrar">Cadastrar Hóspede</button>
				<button name="cancelarHospede" class="btn-cancelar">Cancelar</button>
			</div>
			

		</div>	
	</form>
		
	</center></main>

</body>

</html>