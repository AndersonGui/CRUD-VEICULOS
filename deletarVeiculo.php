<?php 
	$host="localhost";
	$dbname = "dbrevenda";
	$user="postgres";
	$password="postgre";
	$con_string = "host=$host port=5433 dbname=$dbname user=$user password=$password";
	$conexao = pg_connect($con_string);

	$placa = $_POST["deletarVeiculo"];

	if(!@($conexao)) {
			   print "Não foi possível estabelecer uma conexão com o banco de dados.";
			} else { 

				$result = pg_prepare($conexao, "deletarAcessorio", 'DELETE FROM ACESSORIO WHERE placa IN($1)');
				$result = pg_prepare($conexao, "deletarVeiculo", 'DELETE FROM VEICULO WHERE placa IN($1)');

				$result = pg_execute($conexao, "deletarAcessorio", array("$placa")); 
				$result = pg_execute($conexao, "deletarVeiculo", array("$placa")); 

				header('Location: listaVeiculos.php');
			};

?>