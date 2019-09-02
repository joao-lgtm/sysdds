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
		
		include("classeCliente.php");
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
				<th>Endereço</th>
				<th>Cidade</th>
				<th>Estado</th>
				<th>País</th>
			</tr>
		</thead>
		<tbody>
			<?php
				foreach($_SESSION["cliente"] as $i=>$c){
					$c->exibe_tr();
				}
			?>
		</tbody>
	</table>
	</body>
</html>