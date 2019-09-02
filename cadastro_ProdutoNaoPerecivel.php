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
		
		$pnp = new ProdutoNaoPerecivel($_POST);
	
		session_start();
		
		$_SESSION["ProdutoNaoPerecivel"][]=$pnp;
		
		echo "Produto cadastrado com sucesso!";
		$pnp->exibicao_unitaria();
		echo "</fieldset>"
	?>
	</body>
</html>