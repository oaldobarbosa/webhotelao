<?php  

include_once "../conexao/Conexao.php";
include_once "../model/Hospede.php";
include_once "../dao/HospedeDAO.php";

//instancia classes
$hospede = new Hospede();
$hospededao = new HospedeDAO();


//pegar todos os dados do post
$dados = filter_input_array(INPUT_POST);


///cadastrar
if (isset($_POST['cadastrarHospede'])) {


	$hospede->setNome($dados['nome']);
	$hospede->setCpfhospede($dados['cpf']);
	$hospede->setTelefone($dados['telefone']);
	$hospede->setSexo($dados['sexo']);
	$hospede->setDatanascimento($dados['dataNascimento']);

	if ($hospededao->create($hospede)) {

		echo "<script type='text/javascript'>alert('Cadastro de Hóspede Realizada Com Sucesso')</script>";
		
	} else{

		echo "<script type='text/javascript'>alert('Erro ao Cadastrar Hospede')</script>";

	}

	echo '<script>window.location.href = "../view/read_hospede.php"; </script>';
	# code...
}


//editar
else if (isset($_POST['editarHospede'])) {

	$hospede->setNome($dados['nome']);
	$hospede->setCpfhospede($dados['cpf']);
	$hospede->setTelefone($dados['telefone']);
	$hospede->setSexo($dados['sexo']);

	$dados['dataNascimento'] = implode('-', array_reverse(explode('/', $dados['dataNascimento'])));

	$hospede->setDatanascimento($dados['dataNascimento']);

	if ($hospededao->update($hospede)) {

		echo "<script type='text/javascript'>alert('Hospede Atualizado com Sucesso')</script>";
		# code...
	} else {

		echo "<script type='text/javascript'>alert('Problema ao Atualizar Hóspede')</script>";
		# code...
	}

	echo '<script>window.location.href = "../view/read_hospede.php"; </script>';
	
}


//delete
else if (isset($_GET['deletarHospede'])) {

	$hospede->setCpfhospede($_GET['deletarHospede']);

	if($hospededao->delete($hospede)){
		echo "<script type='text/javascript'>alert('Hospede Excluido com Sucesso')</script>";
		
	} else{

		echo "<script type='text/javascript'>alert('Erro: Hóspedes Contém Pendências')</script>";

	}

	echo '<script>window.location.href = "../view/read_hospede.php"; </script>';

	# code...
}

?>
