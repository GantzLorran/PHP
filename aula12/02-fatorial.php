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
	<title>Aula #12 - Estrutura de repetição While</title>
</head>
<body>
	<?php
		$v = isset($_GET["val"])?$_GET["val"]:1;
		echo "<h1> Calculando o fatorial de $v </h1>";
		$c = $v;
		$fat = 1;
		do{
			$fat = $fat * $c;
			$c--;
		}while($c >= 1);
		echo"<h2> $v != $fat </h2>";
		/*$c = 10;
		do{
			echo "$c ";
			$c--;
		}while($c>=1);*/


		/*do{
			echo "$c ";
			$c+=2;
		}while($c <= 70);*/
	?>
	<a href="exercicio001.html">Voltar</a>
</body>
</html>