<?php 


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	Valor diária: <input type="number" name="valordiaria"><br><br>


	Valor Entrada: <input type="date" id="valorE" ><br/><br/>
	Valor Saida: <input type="date" id="valorS" onchange="calc()"><br/><br/>

	Total de Dias: <input type="number" id="total"><br><br>

	Valor Hospedagem: <input type="number" id="valorTotal">
	<input type="submit" value="Enviar" name="">

</body>

<script type="text/javascript">


	function calc(){

		let a = new Date(document.getElementById("valorE").value);
		let b = new Date(document.getElementById("valorS").value);

		dias = parseInt((b - a) / (24 * 3600 * 1000));

		valorQuarto = 50;

		valorHospedagem = dias * valorQuarto;


		document.getElementById("total").value = dias;
		document.getElementById("valorTotal").value = valorHospedagem;

	}
	

</script>
</html>