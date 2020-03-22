<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title>Aula #08 - HTML5 + PHP</title>
</head>
<body>
	<?php
		$nome = isset($_GET['nome'])?$_GET['nome']: "[não informado]";
		$ano = isset($_GET['ano'])?$_GET['ano']:0;
		$sexo = isset($_GET['sexo'])?$_GET['sexo']: "[sem sexo]";
		$idade = date("Y") - $ano;
		echo "$nome e $sexo e tem $idade anos";
	?>
	<a href="exercicio003.html">Voltar</a>
</body>
</html>