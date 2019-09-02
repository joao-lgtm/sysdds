<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<style>
			input{margin:5px;}
		</style>
	</head>
	<body>
	<?php
		include("cabecalho.php");
	?>
		<form method="post" action="cadastro_ProdutoPerecivel.php">
			<?php include "form_produto.php";?>
			<input type="date" name="data_validade" 
				placeholder="Digite a data de validade do produto..." /><br />
			<input type="submit" value="cadastrar" /> <br />	
			
		</form>
	</body>
</html>