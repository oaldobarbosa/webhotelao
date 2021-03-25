<?php 

session_start();

require "../login/verificar.php";

include_once "../conexao/Conexao.php";
include_once "../model/Hospedagem.php";
include_once "../dao/HospedagemDAO.php";

//instancia classes
$hospedagem = new Hospedagem();
$hospedagemdao = new HospedagemDAO();

?>


<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hospedagens</title>
	<link rel="shortcut icon" href="style/favicon.ico" />

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Sail&display=swap" rel="stylesheet">
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="style/style.css">

	<script type="text/javascript" src="js/js.js"></script>

	<style type="text/css">

		th{
			text-align: center;
			width: 150px;
			height: 40px;
			background-color: #47737C;
			color: white;
		}
				
		td{
			text-align: center;
			width: 101px;
			height: 40px;
			background-color: #C4C4C4;
		}

		.new-hsp{

			background-color: green;
			color: white;
			width: 150px;
			height: 40px;

			border-radius: 25px;

		}
		.new-hsp:hover{
			background-color: white;
			color: green;
			border: 0;
		}

		.bt-finalizar{
			background-color: red;
			color: white;
			width: 100px;
			height: 25px;

			border-radius: 25px;
		}
		.bt-finalizar:hover{
			background-color: #800000;
		}



	</style>
</head>
<body>

	<header>
		<a href="#" class="btn-abrir" onclick="abrirMenu()"> &#9776;  Web Hotelão </a>
		<a href="../login/logout.php" class="btn-user">Olá <?php echo $nomeUsuario; ?>! sair?</a>		
	</header>

	<nav id="menu">
		<a href="#" onclick="fecharMenu()"><img src="../icones/seta-esquerda.png" width="20%"></a>
		<a href="dashboard.php">Dashboard</a>
		<a href="#">Hospedagens</a>
		<a href="read_hospede.php">Hospedes</a>
		<a href="read_quarto.php">Quartos</a>
		<a href="read_reserva.php">Reservas</a>
		<a href="read_historico.php">Historico</a>
	</nav>


	<main id="conteudo"><center>

		<h1 >Hospedagens</h1>

	<br>

	<a class="botao" href="create_hospedagem.php"><button class="new-hsp">Nova Hospedagem</button></a>

	<br><br>

	<table >

		<tr>
			<th>CPF Hospede</th>
			<th>Data Hospedagem</th>
			<th>Data Checkout</th>
			<th>Numero Quarto</th>
			<th>Diarias</th>
			<th>Valor Diária</th>
			<th>Valor Total</th>
			<th>_   Opção   _</th>
		</tr>

		<?php foreach ($hospedagemdao->read() as $hospedagem) { ?>


			<tr>
				<td><?=$hospedagem->getCpfhospede(); ?></td>
				<td><?=$hospedagem->getDatahospedagem(); ?></td>
				<td><?=$hospedagem->getDatacheckout(); ?></td>
				<td><?=$hospedagem->getNumeroquarto(); ?></td>
				<td><?=$hospedagem->getDiarias(); ?></td>
				<td><?=$hospedagem->getValordiaria(); ?></td>
				<td><?=$hospedagem->getValorhospedagem(); ?></td>


				<td>


					<!--<button data-target="#editar><?= $hospedagem->getIdhospedagem() ?>">Editar</button>-->
                                   
                        
                    <a href="../controller/HospedagemController.php?deletarHospedagem=<?= $hospedagem->getIdhospedagem() ?>">
                        <button type="button" class="bt-finalizar">Finalizar</button>
                    </a>
                                                       
				</td>
			</tr>
		<?php } ?>
	</table>

		
	</center></main>

</body>
</html>








