<?php 

require_once "conection.php";

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Opa</h1>

	<table>
		<?php 
			$model = new Model();
			$table = $model->listaTudo();
			foreach ($table as $t) {
				?>
				<tr>
					<td><?php echo $t["ip"] ?></td>

				</tr>

				<?php
			}
		 ?>
	</table>
</body>
</html>