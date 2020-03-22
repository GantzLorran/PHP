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
		$d = isset($_GET["ds"])?$_GET["ds"]:0;
		switch ($d) {
			case '1':	
			case '2':	
			case '3':	
			case '4':
			case '5':
			case '6':
				echo "Levanta e vai estudar :)";
				break;
			case '7':
			case '8':
			echo "Descanse pequeno gafanhoto ;)";
			default:
			echo "Dia da semana invalido!";
		}
	?>
	<a href="exercicio002.html">Voltar</a>
</body>
</html>