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
				echo "Erro ao conectar com o banco. ".$e;
			}
				
		}

		
	}

	

	$model = new Model();

	// var_dump($model->update(2, ["ip"=>"192", "nome"=>"uma nova maquina"]));

	// var_dump($model->listOne(2));




?>