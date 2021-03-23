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

	var_dump($dados['dataNascimento']);

	$hospededao->create($hospede);

	header("Location: ../view/read_hospede.php");
	# code...
}


//editar
else if (isset($_POST['editarHospede'])) {

	$hospede->setNome($dados['nome']);
	$hospede->setCpfhospede($dados['cpf']);
	$hospede->setTelefone($dados['telefone']);
	$hospede->setSexo($dados['sexo']);

	$dados['dataNascimento'] = implode('-', array_reverse(explode('/', $dados['dataNascimento'])));


	var_dump($dados['dataNascimento']);

	$hospede->setDatanascimento($dados['dataNascimento']);

	if ($hospededao->update($hospede)) {
		echo "<script type='text/javascript'>alert('Hospede Atualizado com Sucesso')</script>";
		# code...
	} else {
		echo "<script type='text/javascript'>alert('Problema ao Atualizar')</script>";
		# code...
	}
	

	header("Location: ../view/read_hospede.php");


	# code... 
}else if (isset($_POST['cancelarHospede'])){
	header("Location: ../view/read_hospede.php");
}




//delete
else if (isset($_GET['deletarHospede'])) {

	$hospede->setCpfhospede($_GET['deletarHospede']);

	if($hospededao->delete($hospede)){
		echo "<script type='text/javascript'>alert('Hospede Excluido com Sucesso')</script>";
		echo '<script>
        window.location.href = "../view/read_hospede.php";
    		</script>';
	} else{
		echo "<script type='text/javascript'>alert('Erro ao Excluir Hóspede ')</script>";
		
		echo '<script>
        window.location.href = "../view/read_hospede.php";
    		</script>';

	}

	# code...
}

?>