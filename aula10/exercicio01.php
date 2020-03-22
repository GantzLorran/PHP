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
		$n = isset($_GET["num"])?$_GET["num"]:0;
		$o = isset($_GET["oper"])?$_GET["oper"]:1;

		switch ($o) {
			case '1':
				$r = $n * 2;
				break;
			case '2':
				$r = $n ^ 3;
				break;
			case '3':
				$r = sqrt($n); // $n ^ (1/2);
				break;
		}
		echo "O resultado da operação solicitada <span> $r </span>";
	?>
	<a href="exercicio001.html">Voltar</a>
</body>
</html>