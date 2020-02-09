<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
</head>
<body>
	<?php 
		session_start();
		if(isset($_SESSION["dados_alterar"])){
	 ?>
	<form action="controller.php?action=cadastrar" method="post">
	Nome: <input type="text" name="nome" value="<?php echo $_SESSION['dados_alterar'][0]['nome'] ?>">
	IP: <input type="text" name="ip" value="<?php echo $_SESSION['dados_alterar'][0]['ip'] ?>">
		<input type="submit" name="ir">
	</form>

<?php } ?>
</body>
</html>