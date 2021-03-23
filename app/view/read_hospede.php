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
		<a href="#">Hospedes</a>
		<a href="read_quarto.php">Quartos</a>
		<a href="read_reserva.php">Reservas</a>
		<a href="read_historico.php">Historico</a>
	
	</nav>

	<main id="conteudo">

		<h1>Hospedes</h1>

	<hr>

	<a href="create_hospede.php"><button>Novo Hospede</button></a>
	
	<hr>

	<table border="1px">

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
						<button type="button">Editar</button>
					</a>
                                   
                        
                    <a href="../controller/HospedeController.php?deletarHospede=<?= $hospede->getCpfhospede() ?>">
                            <button type="button">Excluir</button>
                        </a>
                        
                        
                    
				</td>

			</tr>





 

		<?php } ?>







	</table>


	</main>

</body>
</html>
