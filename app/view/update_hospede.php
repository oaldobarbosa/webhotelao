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

<?php 
if (!isset($_GET['cpf'])) {
	die("já era");
}else{

	$cpfhospede = $_GET['cpf'];

	$hospede = $hospededao->readUnit($_GET['cpf']);

}
		
 ?>




<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="style/favicon.ico" />
	<title>Atualizar Hospede</title>

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

		.btn-editar{

			margin-bottom: 10%;
			
			background-color: #01D623;
			color: white;
			width: 150px;
			height: 40px;

			font-size: 100%;

			border-radius: 25px;

			border:0;
		}
		.btn-editar:hover{
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
		<a href="#">Dashboard</a>
		<a href="read_hospedagem.php">Hospedagens</a>
		<a href="#">Hospedes</a>
		<a href="#">Quartos</a>
		<a href="#">Reservas</a>
		<a href="#">Historico</a>
	
	</nav>

	<main id="conteudo"><center>

		<h1>Atualizar Hóspedes </h1>
		<br>

		<form  action="../controller/HospedeController.php" method="POST">
		<div class="row" >

			<input  type="hidden" name="cpf" value="<?php echo $hospede['cpfhospede'] ?>" />

			<label>Nome</label>
			<input type="text" name="nome" value="<?php echo $hospede['nome'] ?> " class="input-form">

			<br><br><br>

			<label>Telefone</label>
			<input type="text" name="telefone" value="<?php echo $hospede['telefone'] ?>" class="input-form">

			<br><br><br>


			<label>Sexo</label>
				<select name="sexo" class="input-form" required="">
					<option value="Masculino">Masculino</option>
					<option value="Feminino">Feminino</option>

				</select>


			<br><br><br>			


			<label>Data Nascimento</label>
			<input type="date" name="dataNascimento" value="<?php echo $hospede['datanascimento'] ?>" class="input-form">

			<br><br>
			
			<div class="bottons">
				<button type="submit" name="editarHospede" class="btn-editar">Atualizar Hóspede</button>
			</div>

		</div>	
	</form>

	<a href="read_hospede.php"><button name="cancelarHospede" class="btn-cancelar">Cancelar</button></a>
	


	</center></main>

</body>
</html>



