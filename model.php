<?php 

require_once "conection.php";

class Model
	{
		protected $con = null;

		function __construct()
		{
			$conexao = new Conexao();
			$this->con = $conexao->conectar();
		}

		public function listAll()
		{
			try {
				$list = $this->con->query("select * from maquinas");
				return $list->fetchAll(PDO::FETCH_ASSOC);
			} catch (Exception $e) {
				echo "algo deu errado ".$e;
			}
		}

		public function listOne($id)
		{
			try {
				$line = $this->con->prepare("select * from maquinas where id = :id");
				$line->bindParam(":id", $id);
				$line->execute();
				return $line->fetchAll();
			} catch (Exception $e) {
				echo "houve um erro".$e;
			}
		}

		public function update($id, array $dados)
		{
			try {
				$update = $this->con->prepare("update maquinas set ip = :ip, nome = :nome where id = :id");
				$update->bindParam(":ip", $dados["ip"]);
				$update->bindParam(":nome", $dados["nome"]);
				$update->bindParam(":id", $id);
				$update->execute();
				return "Suuuucesso!";
			} catch (Exception $e) {
				echo "houve um erro".$e;
			}
		}

		public function delete($id)
		{
			try {
				$delete = $this->con->prepare("delete from maquinas where id = :id");
				$delete->bindParam(":id", $id);
				$delete->execute();

				return "Sucesso";
			} catch (Exception $e) {
				return "houve um erro".$e;
			}
		}

	}

 ?>