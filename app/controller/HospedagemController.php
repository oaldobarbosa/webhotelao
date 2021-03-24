<?php

include_once "../conexao/Conexao.php";
include_once "../model/Hospedagem.php";
include_once "../dao/HospedagemDAO.php";

//instancia classes
$hospedagem = new Hospedagem();
$hospedagemdao = new HospedagemDAO();


//pegar todos os dados do post
$dados = filter_input_array(INPUT_POST);



///cadastrar
if (isset($_POST['cadastrarHospedagem'])) {


	$hospedagem->setCpfhospede($dados['cpfhospede']);
	$hospedagem->setDatahospedagem($dados['datahospedagem']);
	$hospedagem->setNumeroquarto($dados['numeroquarto']);
	$hospedagem->setDatacheckout($dados['datacheckout']);
	$hospedagem->setValorhospedagem($dados['valorhospedagem']);

	$hospedagem->setDiarias($dados['diarias']);
	$hospedagem->setValordiaria($dados['valordiaria']);

	if ($hospedagemdao->create($hospedagem)) {

		echo "<script type='text/javascript'>alert('Hospedagem realizada com sucesso')</script>";
		

	} else{
		echo "<script type='text/javascript'>alert('Erro ao Realizar hospedagem')</script>";
	}

	

	echo '<script>
        	window.location.href = "../view/read_hospedagem.php";
    		</script>';

}else if(isset($_POST['cancelarHospedagem'])){

	header("Location: ../view/read_hospedagem.php");
}


//editar
else if(isset($_POST['editarHospedagem'])){

    $hospedagem->setCpfhospede($dados['cpfhospede']);
	$hospedagem->setDatahospedagem($dados['datahospedagem']);
	$hospedagem->setNumeroquarto($dados['numeroquarto']);
	$hospedagem->setDatacheckout($dados['datacheckout']);
	$hospedagem->setValorhospedagem($dados['valorhospedagem']);

	$hospedagem->setDiarias($dados['diarias']);
	$hospedagem->setValordiaria($valordiaria['valordiaria']);

    $hospedagemdao->update($hospedagem);

    header("Location: ../read_hospedagem.php");
}





//delete
else if (isset($_GET['deletarHospedagem'])) {

	$hospedagem->setIdhospedagem($_GET['deletarHospedagem']);

	$hospedagemdao->delete($hospedagem);

	if ($hospedagemdao->delete($hospedagem)) {

		echo "<script type='text/javascript'>alert('Hospedagem Encerrada com Sucesso')</script>";
		
		echo '<script>
        window.location.href = "../view/read_hospedagem.php";
    		</script>';

	} else{
		echo "<script type='text/javascript'>alert('Erro ao Encerrar hospedagem')</script>";
	}

	///header("Location: ../read_hospedagem.php");
	
}




else{
	header("Location: ../../index.php");
}
