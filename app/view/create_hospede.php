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

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Sail&display=swap" rel="stylesheet">
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="style/style.css">

	<script type="text/javascript" src="js/js.js"></script>
</head>


<body>

	<header>
		<a href="#" class="btn-abrir" onclick="abrirMenu()"> &#9776;  Web Hotelão </a>
		<!--<center><h2>Web Hotelão</h2></center>-->
		<a href="../login/logout.php" class="btn-user">Olá <?php echo $nomeUsuario; ?>! sair?</a>
		
	</header>


	<nav id="menu">
		<a href="#" onclick="fecharMenu()"><img src="../icones/seta-esquerda.png" width="20%"></a>
		<a href="#">Dashboard</a>
		<a href="read_hospedagem.php">Hospedagens</a>
		<a href="#">Hospedes</a>
		<a href="#">Quartos</a>
		<a href="#">Reservas</a>
		<a href="#">Historico</a>
	
	</nav>

	<main id="conteudo">

		<h1>Novo Hóspede</h1>
		<hr>

		<form  action="../controller/HospedeController.php" method="POST">
		<div class="row" >
			<label>Nome</label>
			<input type="text" name="nome"><br>

			<label>Cpf</label>
			<input type="text" name="cpf"><br>

			<label>Telefone</label>
			<input type="text" name="telefone"><br>

			<label>Sexo</label>
			<input type="text" name="sexo"><br>

			<label>Data Nascimento</label>
			<input type="date" name="dataNascimento"><br>


			<button type="submit" name="cadastrarHospede">Cadastrar Hóspede</button>
			<button name="cancelarHospede">Cancelar</button>
			

		</div>	
	</form>
		
	</main>

</body>


<!--
<body>

	<form  action="../controller/HospedeController.php" method="POST">
		<div class="row" >
			<label>Nome</label>
			<input type="text" name="nome"><br>

			<label>Cpf</label>
			<input type="text" name="cpf"><br>

			<label>Telefone</label>
			<input type="text" name="telefone"><br>

			<label>Sexo</label>
			<input type="text" name="sexo"><br>

			<label>Data Nascimento</label>
			<input type="date" name="dataNascimento"><br>


			<button name="cancelarHospede">Cancelar</button>
			<button type="submit" name="cadastrarHospede">Cadastrar Hóspede</button>

		</div>	
	</form>

</body>-->
</html>