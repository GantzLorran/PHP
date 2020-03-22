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
	<title>Aula #11 - Estrutura de repetição While</title>
</head>
<body>
	<?php
		$c = 10;
		while ($c >= 0){
			echo "$c<br>";
			$c -=2;
		} 
	?>
	<a href="exercicio001.php">Voltar</a>
</body>
</html>