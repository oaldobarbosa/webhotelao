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
	<title>Hospedes</title>
	<link rel="shortcut icon" href="style/favicon.ico" />

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Sail&display=swap" rel="stylesheet">
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="style/style.css">

	<script type="text/javascript" src="js/js.js"></script>

	<style type="text/css">

		.btn-novohospede{
			background-color: green;
			color: white;
			width: 150px;
			height: 40px;

			border-radius: 25px;

		}
		.btn-novohospede:hover{
			background-color: white;
			color: green;
			border: 0;
		}
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

		.btn-editar{
			background-color: yellow;
			color: black;
			width: 70px;
			height: 25px;
			border: 0;

			border-radius: 25px;
		}
		.btn-editar:hover{
			background-color: white;
			color: red;
			border: 0;
		}

		.btn-excluir{
			background-color: red;
			color: white;
			width: 70px;
			height: 25px;
			border: 0;

			border-radius: 25px;
		}
		.btn-excluir:hover{
			background-color: white;
			color: black;
			border: 0;
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
		<a href="read_hospedagem.php">Hospedagens</a>
		<a href="#">Hospedes</a>
		<a href="read_quarto.php">Quartos</a>
		<a href="read_reserva.php">Reservas</a>
		<a href="read_historico.php">Historico</a>
	
	</nav>

	<main id="conteudo"><center>

		<h1>Hospedes</h1>

	<br>

	<a href="create_hospede.php" ><button class="btn-novohospede">Novo Hospede</button></a>
	
	<br><br>

	<table >

		<tr>
			<th>Nome</th>
			<th>Cpf</th>
			<th>Telefone</th>
			<th>Sexo</th>
			<th>Data Nascimento</th>
			<th>Ação</th>
		</tr>

		<?php foreach ($hospededao->read() as $hospede) { ?>

			<tr>
				<td><?=$hospede->getNome(); ?></td>
				<td><?=$hospede->getCpfhospede(); ?></td>
				<td><?=$hospede->getTelefone(); ?></td>
				<td><?=$hospede->getSexo(); ?></td>
				<td><?=$hospede->getDatanascimento(); ?></td>

				<td>


					<a href="update_hospede.php?cpf=<?php echo $hospede->getCpfhospede() ?>">
						<button type="button" class="btn-editar">Editar</button>
					</a>
                                   
                        
                    <a href="../controller/HospedeController.php?deletarHospede=<?= $hospede->getCpfhospede() ?>">
                            <button type="button" class="btn-excluir">Excluir</button>
                        </a>
                        
                        
                    
				</td>

			</tr>





 

		<?php } ?>







	</table>


	</center></main>

</body>
</html>
