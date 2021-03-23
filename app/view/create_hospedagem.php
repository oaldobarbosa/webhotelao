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

		<h1>Nova Hospedagem</h1>


	<h5>OBS: Só é permitido a hospedagens de clientes cadastrados</h5>

	<form  action="../controller/HospedagemController.php" method="POST">
		<div class="row" >
			<label>CPF do Hóspede</label>

			<select type="text" name="cpfhospede">
				
				<option selected></option>
				<?php 

					$sql = "SELECT cpfhospede, nome from hospede";
					$p_sql = Conexao::getConexao()->prepare($sql);
					$p_sql->execute();

					while ($result = $p_sql->fetch()) {

						echo "<option value='".$result['cpfhospede']."'>".$result['cpfhospede']. ", ". $result['nome']. "</option>";
						# code...
					}
				?>

			</select>
			<!--<input type="text" name="cpfhospede">-->

			<label>Data de Hospedagem</label>
			<input type="date" name="datahospedagem">

			<label>Nr Quarto</label>

			<select type="number" name="numero">
				<option selected=""></option>
				<?php 

					$sql = "SELECT numero from quarto where status = 'livre'";
					$p_sql = Conexao::getConexao()->prepare($sql);
					$p_sql->execute();

					while ($result = $p_sql->fetch()) {
						echo "<option value='".$result['numero']."'>".$result['numero']."</option>";
					}

				?>

				
			</select>


			<!--<input type="number" name="numero">-->

			<label>Data para checkout</label>
			<input type="date" name="datacheckout">

			<label>Valor</label>
			<input type="number" name="valor">

			<button type="submit" name="cadastrarHospedagem">Cadastrar Hóspedagem</button>

		</div>	
	</form>

	</main>

</body>
</html>






