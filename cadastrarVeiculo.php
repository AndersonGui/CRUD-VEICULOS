<?php 
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

		
		//Verifica Opcionais selecionados
		include 'opcionais.php';

		//Insert na pagina

		if(!@($conexao)) {
			   print "Não foi possível estabelecer uma conexão com o banco de dados.";
			} else { 
				$result = pg_query($conexao, "
							ROLLBACK;
							BEGIN;
								INSERT INTO VEICULO (marca,modelo,placa,ano_fab,ano_modelo,cor,km,portas,combustivel,descricao,valor,imagem )
								VALUES(
									'$marca','$modelo','$placa','$anofab','$anoModelo','$cor','$km',$portas,
									'$combustivel','$descricao',$valor,'imagem');
								
								INSERT INTO ACESSORIO (
									placa,volante_escamoteavel, trava_eletrica, desembacador_traseiro, ar_condicionado, freio_abs, vidros_eletricos, limpador_traseiro, chave_copia, air_bag_duplo, direcao_hidraulica, ar_quente, air_bag)
								VALUES(
									'$placa',$volanteEscamoteavel, $travaEletrica, $desembTraseiro, $arCondicionado,$freioABS, $vidrosEletrico, $limpadorTraseiro, $chaveCopia, $airBagDuplo, $direcaoHidraulica, $arQuente, $airBag
									);	
							COMMIT;
							");
						pg_close($conexao);

						header('Location: listaVeiculos.php'); 
							};
		 ?>