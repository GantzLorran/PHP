<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="">
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
		$n1 = $_GET["a"];
		$n2 = $_GET["b"];
		$tipo = $_GET["op"];
		echo "Os valores passados são $n1 e $n2";
		$r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;

		echo "O resultado sera $r";
	?>
</body>
</html>