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
			width: 450px;
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
			border:0;

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

	<main id="conteudo">

		<center>

		<h1 class="titulo">Nova Hospedagem</h1>

	<h5>OBS: Só é permitido a hospedagens de clientes cadastrados</h5>

	<form  action="../controller/HospedagemController.php" method="POST">


		<div class="row" >

			<label>CPF do Hóspede</label>
			<select type="text" name="cpfhospede" class="input-form">
				
				<option selected></option>
				<?php 

					$sql = "SELECT cpfhospede, nome from hospede";
					$p_sql = Conexao::getConexao()->prepare($sql);
					$p_sql->execute();

					while ($result = $p_sql->fetch()) {
						echo "<option value='".$result['cpfhospede']."'>".$result['cpfhospede']. ", ". $result['nome']. "</option>";
					}
				?>

			</select>

			<br><br>

			<label>Nr Quarto</label>
			<select type="number" name="numeroquarto" class="input-form">
				<option selected=""></option>
				<?php 

					$sql = "SELECT numeroquarto from quarto where status = 'livre'";
					$p_sql = Conexao::getConexao()->prepare($sql);
					$p_sql->execute();

					while ($result = $p_sql->fetch()) {
						echo "<option value='".$result['numeroquarto']."'>".$result['numeroquarto']."</option>";
					}
				?>
			
			</select>

			<br><br>

			<label>Valor Diaria</label>
			<script type="text/javascript">
				
			</script>
			<input type="number" id="idValorDiaria" name="valordiaria" value="<?php ?>" class="input-form">

			<br><br>

			<label>Data de Hospedagem</label>
			<input type="date" id="idDataHospedagem" name="datahospedagem" class="input-form">

			<br><br>	

			<label>Data para checkout</label>
			<input type="date" id="idDataCheckout" name="datacheckout" onchange="calc()" min="" class="input-form">

			<br><br>

			<label>Diárias</label>
			<input type="number" id="idDiarias" name="diarias" value="" class="input-form" readonly="true">

			<br><br>

			<label>Valor Hospedagem</label>
			<input type="number" id="idValorHospedagem" name="valorhospedagem" value="" class="input-form" readonly="true">

			<br><br>
			<div class="bottons">
			<button type="submit" name="cadastrarHospedagem" class="btn-cadastrar">Cadastrar</button>
			<button name="cancelarHospedagem" class="btn-cancelar">Cancelar</button>
			</div>

		</div>	
	</form>

	</center></main>

</body>

<script type="text/javascript">


	function calc(){

		let dataHospedagem = new Date(document.getElementById("idDataHospedagem").value);

		let dataCheckout = new Date(document.getElementById("idDataCheckout").value);

		let diarias = parseInt((dataCheckout - dataHospedagem) / (24 * 3600 * 1000));

		let valorDiaria = document.getElementById("idValorDiaria").value;

		let valorHospedagem = diarias * valorDiaria;


		/*
		let dias = 2;
		let day = Date(document.getElementById("idDataHospedagem").value);
		day.setDate(day.getDate() + dias);
		day = day.toISOString().split('T')[0];
		document.getElementsByName("datacheckout")[0].setAttribute('min', day);
		*/

		document.getElementById("idDiarias").setAttribute('value', diarias);
		
		document.getElementById("idValorHospedagem").setAttribute('value', valorHospedagem);

	}
	

</script>

</html>