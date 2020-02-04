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

	/**
	 * 
	 */
	class Model
	{
		
			 $conectar = new Conexao();
			public $con = $conectar->conectar();

		

		// public function listaTudo()
		// {
		// 	try {
		// 		$geral = $con->query("select * from maquinas");
		// 		return $geral->fetch(PDO::FETCH_ASSOC);
		// 	} catch (Exception $e) {
		// 		echo "algo deu errado ".$e;
		// 	}
		// }


	}

	// $model = new Model();

	// var_dump($model->listaTudo());

?>