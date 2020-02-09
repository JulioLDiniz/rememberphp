<!DOCTYPE html>
<?php 
	require_once "model.php";
 ?>
<html>
<head>
	<title>Listagem de maquinas</title>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
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
			 ?>
			<tr>
				<td><?php echo $maquina["nome"]?></td>
				<td><?php echo $maquina["ip"] ?></td>
				<td><a class="deletar" href="controller.php?action=deletar&id=<?php echo $maquina['id'] ?>">Deletar</a>
					<a class="alterar" href="controller.php?action=alterar&id=<?php echo $maquina['id'] ?>">Alterar</a></td>
			</tr>
		<?php } ?>
		</tbody>
	</table>

<script type="text/javascript">
	$('.deletar').on('click', function (event) {
		event.preventDefault();

		var link = $(this).attr('href');

		if(confirm("Deseja apagar este registro?")){
			window.location.href=link;
		}else{
			return false;
		}
	})
</script>

</body>
</html>