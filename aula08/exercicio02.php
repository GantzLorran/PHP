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
		echo "Você nasceu em $a e tem $i anos. <br>";
		if($i < 16){
			$TipoVoto = "Não vota";
		}
		elseif(($i >= 16 && $i < 18) || ($i >= 65)){
				$TipoVoto = "Voto opicional";
			}
			else{
				$TipoVoto = "Voto obrigatório";
			}
		
		echo "Para essa idade $TipoVoto. <br>";
	?>
	<a href="exercicio002.html">Voltar</a>
</body>
</html>