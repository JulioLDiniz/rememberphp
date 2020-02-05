<?php  
	

	class Conexao
	{

		public function conectar()
		{
		 $user = "root";
		 $pass = "";
			try {
				$conexao = new PDO('mysql:host=localhost;dbname=listagem', $user, $pass);

				return $conexao;
			} catch (Exception $e) {
				echo "houve um erro ".$e;
			}
				
		}

		
	}

	class Model
	{
		public function listaTudo()
		{
			$conexao = new Conexao();
			$con = $conexao->conectar();
			try {
				$list = $con->query("select * from maquinas");
				return $list->fetchAll(PDO::FETCH_ASSOC);
			} catch (Exception $e) {
				echo "algo deu errado ".$e;
			}
		}

		public function listaUm($id)
		{
			$conexao = new Conexao();
			$con = $conexao->conectar();
			try {
				$line = $con->prepare("select * from maquinas where id = :id");
				$line->bindParam(":id", $id);
				$line->execute();
				return $line->fetchAll();
			} catch (Exception $e) {
				echo "houve um erro".$e;
			}
		}

		public function update($id, array $dados)
		{
			$conexao = new Conexao();
			$con = $conexao->conectar();
			try {
				$update = $con->prepare("update maquinas set ip = :ip, nome = :nome where id = :id");
				$update->bindParam(":ip", $dados["ip"]);
				$update->bindParam(":nome", $dados["nome"]);
				$update->bindParam(":id", $id);
				$update->execute();
				return "Suuuucesso!";
			} catch (Exception $e) {
				echo "houve um erro".$e;
			}
		}

	}

	$model = new Model();

	var_dump($model->update(2, ["ip"=>"192", "nome"=>"uma nova maquina"]));

	




?>