<!DOCTYPE html>
<html>
	<?php

	?>
	<style>
		span.texto{
			font-size: <?php echo $tam; ?>;
			color: <?php echo $cor; ?>;
		}
	</style>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title>Aula #08 - HTML5 + PHP</title>
</head>
<body>
	<?php
		$a = isset($_GET['ano'])?$_GET["ano"]:1900;
		$i = date("Y") - $a;
		echo "Você nasceu em $a e tem $i anos";
		if($i >= 18){
			$v = "Ja pode votar";
			$d = "Ja pode dirigir<br> |";
		}
		else{
			$v = "Não pode votar";
			$d = "Não pode dirigir<br> |";
		}
		echo " |Com essa idade você $v e tambem $d";
	?>
	<a href="exercicio001.html">Voltar</a>
</body>
</html>