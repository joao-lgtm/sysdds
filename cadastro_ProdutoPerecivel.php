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
		include("classeProdutoPerecivel.php");
		include("cabecalho.php");
		
		$pp = new ProdutoPerecivel($_POST);
	
		session_start();
		
		$_SESSION["ProdutoPerecivel"][]=$pp;
		
		echo "Produto cadastrado com sucesso!";
		$pp->exibe();

	?>
	</body>
</html>