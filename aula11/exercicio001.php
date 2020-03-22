<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title>Aula #11 - Estrutura de repetição While</title>
	<style>
		body{
			background:#ffffff;
		}
		.botao{
			background: green;
			border: none;
			padding: 5px;
			box-shadow: 0px 0px 0px 2px;
		}
	</style>
</head>
<body>
	<form method="post" action="exercicio001.php"> 
		<?php
		$c = 1;
		while($c <= 5){
		 	echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'><br/>";
		 	$c++;
		}
		?>
		<input type="submit" value="Enviar" class="botao">
	</form>
</body>
</html>