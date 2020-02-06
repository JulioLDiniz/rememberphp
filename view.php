<!DOCTYPE html>
<?php 
	require_once "model.php";
 ?>
<html>
<head>
	<title>Listagem de maquinas</title>
</head>
<body>
	<h1>Máquinas cadastradas</h1>
	<h2><a href="cadastro.php">Novo</a></h2>
	<table>
		<thead>
			<tr>
				<th>Nome da máquina</th>
				<th>Endereço IP</th>
				<th>Opções</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$model = new Model();
				$maquinas = $model->listAll();
				foreach ($maquinas as $maquina) {
					// var_dump($maquina["nome"]);
			 ?>
			<tr>
				<td><?php echo $maquina["nome"]?></td>
				<td><?php echo $maquina["ip"] ?></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>

</body>
</html>