<?php 

session_start();

require "../login/verificar.php";

 ?>

 <?php 

 	$totalHospedagens = 0;
	$totalHospedes = 0;


	$sql = "SELECT count(*) as thospedagem from hospedagem";

	$p_sql = Conexao::getConexao()->prepare($sql);
	$p_sql->execute();
	$p_sql = $p_sql->fetch();
	$totalHospedagens = $p_sql['thospedagem'];


	$sql = "SELECT count(*) as thospede from hospede";
	$p_sql = Conexao::getConexao()->prepare($sql);
	$p_sql->execute();
	$p_sql = $p_sql->fetch();

	$totalHospedes = $p_sql['thospede'];


  ?>

<!DOCTYPE html>






<html>
<head>
	<link rel="shortcut icon" href="style/favicon.ico" />

	<title>Dashboard</title>

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Sail&display=swap" rel="stylesheet">
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="style/style.css">

	<script type="text/javascript" src="js/js.js"></script>
</head>
<body>

	<header>
		<a href="#" class="btn-abrir" onclick="abrirMenu()"> &#9776;  Web Hotelão </a>
		
		<a href="../login/logout.php" class="btn-user">Olá <?php echo $nomeUsuario; ?>! sair?</a>
		
	</header>


	<nav id="menu">
		<a href="#" onclick="fecharMenu()"><img src="../icones/seta-esquerda.png" width="20%"></a>
		<a href="#">Dashboard</a>
		<a href="read_hospedagem.php">Hospedagens</a>
		<a href="read_hospede.php">Hospedes</a>
		<a href="read_quarto.php">Quartos</a>
		<a href="#">Reservas</a>
		<a href="read_historico.php">Historico</a>
	
	</nav>

	<main id="conteudo">

		<h1>Dashboard</h1>
		<hr>

		<div class="caixa-hospedagem">Hospedagens: <h1><?php echo $totalHospedagens; ?></h1></div>
		<div class="caixa-hospede">Hospedes Cadastrados: <h1><?php echo $totalHospedes; ?></h1></div>
		<div class="caixa-reserva">Reservas: <h1>Módulo off</h1></div>
		
	</main>

</body>
</html>