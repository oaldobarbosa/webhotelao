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
	$hospedagem->setNumero($dados['numero']);
	$hospedagem->setDatacheckout($dados['datacheckout']);
	$hospedagem->setValor($dados['valor']);

	if ($hospedagemdao->create($hospedagem)) {

		echo "<script type='text/javascript'>alert('Hospedagem realizada com sucesso')</script>";
		
		/*echo '<script> window.location.href = "../view/create_hospedagem.php"; </script>';*/

	} else{
		echo "<script type='text/javascript'>alert('Erro ao Realizar hospedagem')</script>";
	}

	

	echo '<script>
        	window.location.href = "../view/read_hospedagem.php";
    		</script>';

	//header("Location: ../view/create_hospedagem.php");
	//exit();

}


//editar
else if(isset($_POST['editarHospedagem'])){

    $hospedagem->setCpfhospede($dados['cpfhospede']);
	$hospedagem->setDatahospedagem($dados['datahospedagem']);
	$hospedagem->setNumero($dados['numero']);
	$hospedagem->setDatacheckout($dados['datacheckout']);
	$hospedagem->setValor($dados['valor']);

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
