<?php 
		session_start();
		$placaCarro = $_SESSION['placaCarro'];

		$host="localhost";
		$dbname = "dbrevenda";
		$user="postgres";
		$password="postgre";
		$con_string = "host=$host port=5433 dbname=$dbname user=$user password=$password";
		$conexao = pg_connect($con_string);


		//recebe os atributos do formulario
		$marca = $_POST["marcaVeiculo"];
		$modelo = $_POST["modeloVeiculo"];
		$placa = $_POST["placaVeiculo"];
		$anofab = $_POST["anoVeiculo"];
		$anoModelo = $_POST["anoModelo"];
		$cor = $_POST["corVeiculo"];
		$km = $_POST["kmVeiculo"];
		$portas = $_POST["portaVeiculo"];
		$valor = $_POST["valorVeiculo"];
		$combustivel = $_POST["combustivelVeiculo"];
		$descricao = $_POST["descVeiculo"];

		//Insert na pagina
		if(!@($conexao)) {
			   print "Não foi possível estabelecer uma conexão com o banco de dados.";
			} else { 
				$result = pg_query($conexao, "
							ROLLBACK;
							BEGIN;
								UPDATE VEICULO 
								SET marca = '$marca',  
									modelo = '$modelo',
									placa = '$placa',
									ano_fab = '$anofab',
									ano_Modelo ='$anoModelo',
									cor ='$cor',
									km ='$km',
									portas =$portas,
									combustivel ='$combustivel',
									descricao ='$descricao',
									valor =$valor
								WHERE placa = '$placaCarro'
								;
							COMMIT;
							");
						pg_close($conexao);

						header('Location: listaVeiculos.php'); 
							};
		 ?>