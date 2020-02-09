<?php 

require_once "model.php";

$model = new Model();
 /**
  * 
  */
 	if($_GET["action"] == "cadastrar"){
 		$nome = $_POST["nome"];
 		$ip = $_POST["ip"];

 		$result = $model->insert($nome, $ip);

 		echo "<script>alert('$result');window.location.replace('view.php');</script>";
 	}

 	if($_GET["action"] == "deletar"){
 		$id = $_GET["id"];

 		$result = $model->delete($id);
 		echo "<script>alert('$result');window.location.replace('view.php');</script>";
 	}

 	if($_GET["action"] == "alterar"){
 		$id = $_GET["id"];
 		session_start();
 		$result = $model->listOne($id);
 		$_SESSION["dados_alterar"] = $result;

 		header('Location: cadastro.php');
 	}

 ?>