<!doctype html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/estilo.css" rel="stylesheet">
		<title>RedCar - Editar Veiculo</title>
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">REDCAR</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Sobre</a>
                    </li>
                    <li>
                        <a href="VisualizarVeiculos.php">Veiculos</a>
                    </li>
                    <li>
                        <a href="#">Contato</a>
                    </li>
                    <li>
                        <a href="#">Administração</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
	<div class="container conteudo">
		<div classs="row">
				<div class="col-md-3">
					<div class="menu">
						<strong class="tituloadmin">FERRAMENTAS</strong>
						<a class="btn btn-danger" style="width:100%" href="VisualizarVeiculos.php" role="button">VISUALIZAR VEICULOS</a>

						<a class="btn btn-danger" style="width:100%" href="cadastrarVeiculo.html" role="button">CADASTRAR NOVO VEICULO</a>

						<a class="btn btn-danger" style="width:100%" href="listaVeiculos.php" role="button">EDITAR VEICULO</a>
					</div>		
				</div>
				<div id="bordaEsquerda" class="col-md-9">
					<div class="container-fluid">
		<?php 
			$host="localhost";
			$dbname = "dbrevenda";
			$user="postgres";
			$password="postgre";
			$con_string = "host=$host port=5433 dbname=$dbname user=$user password=$password";
			$conexao = pg_connect($con_string);
			$placa = "";

			if(!@($conexao)) {
			   echo "Não foi possível estabelecer uma conexão com o banco de dados.";
			} else { 
			   $sql = "SELECT * FROM VEICULO"; 
			   $result = pg_exec($conexao, $sql); 
			 
			   // Cabeçalho da Tabela
			   echo 

			   "
			   <table class='listaVeiculos'>
			   		<h1 style='text-align: center'>Veiculos Cadastrados</h1>
							  <tr>
								    <th>ID</th>
								    <th>PLACA</th>
								    <th>MODELO</th>
								    <th>ANO/MODELO</th>
								    <th>COR</th>
								    <th>PORTAS</th>
								    <th>COMBUSTIVEL</th>
								    <th>EDITAR</th>
								    <th>DELETAR</th>
							  </tr>";
				//For para pegar todos veiculos no banco de dados e já cria um botão com o Value sendo a placa o carro para futuramente só clicar e já ter o dado importante
			   for($i=0; $consulta = @pg_fetch_array($result, $i); $i++) { 
			      echo "   
								  <tr>
									    <td>$consulta[cod_veiculo]</td>
									    <td>$consulta[placa]</td>
									    <td>$consulta[modelo]</td>
									    <td>$consulta[ano_fab] / $consulta[ano_modelo]</td>
									    <td>$consulta[cor]</td>
									    <td>$consulta[portas]</td>
									    <td>$consulta[combustivel]</td>
									    <td>
									    	<form action='editarVeiculo.php' method='POST'>
									    		<input btype='radio' hidden='true' name='codVeiculo' 
									    		value='$consulta[cod_veiculo]' checked>

									    		<input btype='radio' hidden='true' name='placaVeiculo' 
									    		value='$consulta[placa]' checked>

									    		<input btype='radio' hidden='true' name='modeloVeiculo' 
									    		value='$consulta[modelo]' checked>

									    		<input btype='radio' hidden='true' name='marcaVeiculo' 
									    		value='$consulta[marca]' checked>

									    		<input btype='radio' hidden='true' name='anofabVeiculo' 
									    		value='$consulta[ano_fab]' checked>

									    		<input btype='radio' hidden='true' name='anomodeloVeiculo' 
									    		value='$consulta[ano_modelo]' checked>

									    		<input btype='radio' hidden='true' name='corVeiculo' 
									    		value='$consulta[cor]' checked>

									    		<input btype='radio' hidden='true' name='km' 
									    		value='$consulta[km]' checked>

									    		<input btype='radio' hidden='true' name='portasVeiculo' 
									    		value='$consulta[portas]' checked>

									    		<input btype='radio' hidden='true' name='combustivelVeiculo' 
									    		value='$consulta[combustivel]' checked>

									    		<input btype='radio' hidden='true' name='valor' 
									    		value='$consulta[valor]' checked>

									    		<input btype='radio' hidden='true' name='descricaoVei' 
									    		value='$consulta[descricao]' checked>

												<button class=' btn-primary' type='submit'>
													EDITAR
												</button>
											</form>
										</td>
									    <td>
									    	<form action='deletarVeiculo.php' method='POST'>
									    		<input btype='checkbox' hidden='true' name='deletarVeiculo' value=$consulta[placa] checked>
												<button class=' btn-danger' type='submit'>
													DELETAR
												</button>
											</form>
										</td>
								  </tr>	
			       "; 
			   }//Fim do for 

			   echo "</table>";

			   echo "</div>";

			   pg_close($conexao); 

			}

			

		 ?>
		 </div>
				</div>
		</div>
	</div>
	<footer>
		</br>
		<p>Pagina criada somente para estudos! @ Ânderson Guimarães
	</footer>

	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html