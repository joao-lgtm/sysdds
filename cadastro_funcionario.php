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
		include("classeFuncionario.php");
		include("cabecalho.php");
		
		$f = new Funcionario($_POST);
	
		session_start();
		
		$_SESSION["funcionario"][]=$f;
		
		echo "funcionario(a) cadastrado(a) com sucesso!";
		$f->exibe();

	?>
	</body>
</html>