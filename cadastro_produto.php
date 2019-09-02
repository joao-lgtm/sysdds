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
		include("classeProduto.php");
		include("cabecalho.php");
		
		$p = new Produto($_POST);
	
		session_start();
		
		$_SESSION["produto"][]=$p;
		
		echo "Produto cadastrado com sucesso!";
		$p->exibicao_unitaria();

	?>
	</body>
</html>