<?php 

session_start();

require "../login/verificar.php";

include_once "../conexao/Conexao.php";
include_once "../model/Historico.php";
include_once "../dao/HistoricoDAO.php";

//instancia classes
$historico = new Historico();
$historicodao = new HistoricoDAO();

?>




<!DOCTYPE html>
<html>
<head>
	<title>Histórico</title>



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
		<a href="dashboard.php">Dashboard</a>
		<a href="read_hospedagem.php">Hospedagens</a>
		<a href="read_hospede.php">Hospedes</a>
		<a href="read_quarto.php">Quartos</a>
		<a href="read_reserva.php">Reservas</a>
		<a href="#">Historico</a>
	
	</nav>

	<main id="conteudo">

		<h1>Histórico de Hospedagem</h1>
		<hr>
		
		<table border="1px">

		<tr>
			<th>CPF Hospede</th>
			<th>Data Hospedagem</th>
			<th>Data Checkout</th>
			<th>Numero Quarto</th>
			<th>Valor</th>
		</tr>

		<?php foreach ($historicodao->read() as $historico ) { ?>

			<tr>
				<td><?=$historico->getCpfhospede(); ?></td>
				<td><?=$historico->getDatahospedagem(); ?></td>
				<td><?=$historico->getDatacheckout(); ?></td>
				<td><?=$historico->getNumero(); ?></td>
				<td><?=$historico->getValor(); ?></td>
			</tr>

		<?php } ?>

		</table>
		

		</main>

</body>
</html>