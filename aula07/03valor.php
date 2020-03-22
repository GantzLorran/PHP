<!DOCTYPE html>
<html>
	<?php
		$txt = isset($_GET['t'])?$_GET["t"]:"Texto Genérico";
		$tam = isset($_GET['tam'])?$_GET['tam']:"12pt";
		$cor = isset($_GET['cor'])?$_GET["cor"]:"#000000";
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
	echo "<span class='texto'> $txt </span>";	
	?>
	<a href="exercicio004.html">Voltar</a>
</body>
</html>