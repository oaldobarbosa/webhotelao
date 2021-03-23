<?php 

include_once "../conexao/Conexao.php";
include_once "../model/Hospedagem.php";
include_once "../dao/HospedagemDAO.php";

//instancia classes
$hospedagem = new Hospedagem();
$hospedagemdao = new HospedagemDAO();

?>





<!DOCTYPE html>
<html>
<head>
	<title>Dados da Hospedagem</title>
</head>
<body>



		<div id="container" >

		<h1>Hóspede</h1>

	
		<?php foreach ($hospedagemdao->read() as $hospedagem) { ?>

				<center>

				<label>Cpf: </label><?=$hospedagem->getCpfhospede(); ?>
				<br>
				<label>Data Hospedagem: </label><?=$hospedagem->getDatahospedagem(); ?>
				<br>
				<label>Data Prevista Checkout: </label><?=$hospedagem->getDatacheckout(); ?>
				<br>
				<label>Numero Quarto: </label><?=$hospedagem->getNumero(); ?>
				<br> 

				<button data-target="#editar><?= $hospedagem->getIdhospedagem() ?>">Editar</button>


				</center>

		<?php } ?>

		</div>








</body>
</html>