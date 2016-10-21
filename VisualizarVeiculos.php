<!doctype html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/estilo.css" rel="stylesheet">
		<title>RedCar - Veiculos</title>
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

							   for($i=0; $consulta = @pg_fetch_array($result, $i); $i++) { 
							      echo " 
							      		<div class='veiculosD col-md-5'> 
							      			<a href='#'><img class='img-veiculo-thumb' src='img/semimagem.gif' alt='Descrição'/></a></br>
										    Codigo: $consulta[cod_veiculo]</br>
										    Placa: $consulta[placa]</br>
										    Marca: $consulta[marca]</br>
										    Modelo: $consulta[modelo]</br>
										    Ano Fabricação: $consulta[ano_fab] </br>
										    Ano do Modelo: $consulta[ano_modelo]</br>
										    Cor: $consulta[cor]</br>
										    Portas: $consulta[portas]</br>
										    Combustivel: $consulta[combustivel]</br>
										    Valor: R$ $consulta[valor] </br>
									    </div>
									   "; 
							   };
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