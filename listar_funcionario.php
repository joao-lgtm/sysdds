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
		session_start();
		include("cabecalho.php");
		
	?>
	<table border='1'>
		<thead>
			<tr>
				<th>Nome</th>
				<th>Email</th>
				<th>CPF</th>
				<th>Sexo</th>
				<th>Data Nascimento</th>
				<th>Área</th>
				<th>Salário</th>
                <th>Turno</th>
				<th>Endereço</th>
				<th>Cidade</th>
				<th>Estado</th>
				<th>País</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach($_SESSION["funcionario"] as $i=>$f){
					$f->exibe_tr();
				}
			?>
		</tbody>
	</table>
	</body>
</html>