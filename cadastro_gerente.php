<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<style>
			div{margin:5px;}
		</style>
	</head>
	<body>
	<?php
		include("classeGerente.php");
		include("cabecalho.php");
		
		$g = new Gerente($_POST);
	
		session_start();
		
		$_SESSION["gerente"][]=$g;
		
		echo "Gerente cadastrado(a) com sucesso!";
		$g->exibe();

	?>
	</body>
</html>