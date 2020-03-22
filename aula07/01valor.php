<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title>Aula #08 - HTML5 + PHP</title>
</head>
<body>
	<?php
		$valor = $_GET["v"];
		$rq = sqrt($valor);
		echo "A raiz de $valor é igual a ".number_format($rq,2);

	?>
	<a href="exercicio002.php">Voltar</a>
</body>
</html>