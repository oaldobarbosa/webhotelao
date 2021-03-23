<?php 

	session_start();

	require "../login/verificar.php";

	$totalHospedagens = 0;
	$totalHospedes = 0;


	$sql = "SELECT count(*) as thospedagem from hospedagem";

	$p_sql = Conexao::getConexao()->prepare($sql);
	$p_sql->execute();
	$p_sql = $p_sql->fetch();
	$totalHospedagens = $p_sql['thospedagem'];


	$sql = "SELECT count(*) as thospede from hospede";
	$p_sql = Conexao::getConexao()->prepare($sql);
	$p_sql->execute();
	$p_sql = $p_sql->fetch();

	$totalHospedes = $p_sql['thospede'];


	echo "Hospedagens Ativas: " . $totalHospedagens;

	echo "<br>";

	echo "Hospedes: " . $totalHospedes;




?>

<h2>Olá,<?php echo $nomeUsuario; ?></h2>
<h2><a href="../login/logout.php">Sair</a></h2>