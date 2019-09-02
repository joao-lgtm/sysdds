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
		<form method="post" action="cadastro_funcionario.php">
			<?php include "form_pessoa.php";?>
			<input type="text" name="area" 
				placeholder="Digite a área que ele trabalha..." /><br />
			<input type="number" name="salario" 
				placeholder="Salario..." /><br />
            <select name="turno">
                <option value="manha">manha</option> 
                <option value="noite" selected>noite</option>
            </select><br />
            <input type="text" name="endereco" 
				placeholder="Digite a endereco que ele mora..." /><br />
			<input type="text" name="cidade" 
				placeholder="Digite a cidade que ele mora..." /><br />
            <input type="text" name="estado" 
				placeholder="Digite a estado que ele trabalha..." /><br />
			<input type="text" name="pais" 
				placeholder="Digite a pais que ele trabalha..." /><br />
			<input type="submit" value="cadastrar" /> <br />	
			
		</form>
	</body>
</html>