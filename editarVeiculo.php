<!doctype html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/formulario.css" rel="stylesheet">
		<link href="css/estilo.css" rel="stylesheet">
		<title>RedCar - Editar Veiculo</title>
	</head>
	<body>
		<?php 
			//Criar Variavel de Sessão
			session_start();
			$placaCarro = $_POST['placaVeiculo'];
			$_SESSION['placaCarro'] = $placaCarro;
		?>
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
					<!-- FORMULÁRIO DA PAGINA! -->
						<form class="formulario" action="editarV.php" method="POST" data-toggle="validator">
						<h3>EDITE OS DADOS DO VEICULO!</h3>	
							<!-- Primeira coluna do formulario -->
							<div class="row">
								<div class="col-md-3"> 
									<div class="form-group">
										<label for="marcaVeiculo">MARCA:</label>
										<select class="form-control" name="marcaVeiculo" autofocus required>
												<option value="<?php echo $_POST['marcaVeiculo'];?>" selected><?php echo $_POST['marcaVeiculo'];?></option>
											  	<option value="Ford">Ford</option>
											  	<option value="Fiat">Fiat</option>
											  	<option value="Volksvagem">Volksvagem</option>
											  	<option value="Renault">Renault</option>
											  	<option value="Chevrolet">Chevrolet</option>
											  	<option value="Citroem">Citroën</option>
											  	<option value="Hyundai">Hyundai</option>
											</select>
									</div>
								</div>
									<div class="col-md-3"> 
										<div class="form-group">
											<label for="modeloVeiculo">MODELO:</label>
											<input class="form-control" type="text" id="modeloVeiculo" name="modeloVeiculo" maxlength="30" value="<?php echo $_POST['modeloVeiculo'];?>" required >
										</div>
									</div>
									<div class="col-md-3"> 
										<div class="form-group">
											<label for="placaVeiculo">PLACA:</label>
											<input class="form-control" type="text" id="placaVeiculo" name="placaVeiculo" maxlength="8" value="<?php echo $_POST['placaVeiculo'];?>" required>
										</div>
									</div>
									<div class="col-md-3"> 
										<div class="form-group">
											<label for="anoVeiculo">ANO DE FABRICAÇÃO:</label>
											<select class="form-control" name="anoVeiculo" required>
												<option value="<?php echo $_POST['anofabVeiculo'];?>" selected>
												<?php echo $_POST['anofabVeiculo'];?>
												</option>
											  	<option value="2017">2017</option>
											  	<option value="2016">2016</option>
											  	<option value="2015">2015</option>
											  	<option value="2014">2014</option>
											  	<option value="2013">2013</option>
											  	<option value="2012">2012</option>
											  	<option value="2011">2011</option>
											  	<option value="2010">2010</option>
											  	<option value="2009">2009</option>
											  	<option value="2008">2008</option>
											  	<option value="2007">2007</option>
											  	<option value="2006">2006</option>
											  	<option value="2005">2005</option>
											  	<option value="2004">2004</option>
											  	<option value="2003">2003</option>
											  	<option value="2002">2002</option>
											  	<option value="2001">2001</option>
											  	<option value="2000">2000</option>
											</select> 
										</div>
								</div>
							</div>

							<!-- Segunda coluna do formulario -->
							<div class="row">
								<div class="col-md-3"> 
									<div class="form-group">
										<label for="anoModelo">ANO MODELO:</label>
										<select class="form-control" name="anoModelo" required>
										  	<option value="<?php echo $_POST['anomodeloVeiculo'];?>" selected>
												<?php echo $_POST['anomodeloVeiculo'];?>
											</option>
										  	<option value="2017">2017</option>
										  	<option value="2016">2016</option>
										  	<option value="2015">2015</option>
										  	<option value="2014">2014</option>
										  	<option value="2013">2013</option>
										  	<option value="2012">2012</option>
										  	<option value="2011">2011</option>
										  	<option value="2010">2010</option>
										  	<option value="2009">2009</option>
										  	<option value="2008">2008</option>
										  	<option value="2007">2007</option>
										  	<option value="2006">2006</option>
										  	<option value="2005">2005</option>
										  	<option value="2004">2004</option>
										  	<option value="2003">2003</option>
										  	<option value="2002">2002</option>
										  	<option value="2001">2001</option>
										  	<option value="2000">2000</option>
										</select> 
									</div>
								</div>
								<div class="col-md-3"> 
									<div class="form-group">
										<label for="corVeiculo">COR:</label>
										 <select class="form-control" name="corVeiculo" required>
										 	<option value="<?php echo $_POST['corVeiculo'];?>" selected>
												<?php echo $_POST['corVeiculo'];?>
											</option>
											<option value="Branco">Branco</option>
											<option value="Vermelho">Vermelho</option>
										  	<option value="Azul">Azul</option>
										  	<option value="Prata">Prata</option>
										  	<option value="Preto">Preto</option>
										</select> 
									</div>
								</div>
								<div class="col-md-3"> 
									<div class="form-group">
										<label for="kmVeiculo">KM RODADOS:</label>
										<input class="form-control" type="number" id="kmVeiculo" name="kmVeiculo" placeholder="SOMENTE NUMEROS!" value="<?php echo $_POST['km'];?>" required>
									</div>
								</div>
								<div class="col-md-3"> 
									<div class="form-group">
										<label for="portaVeiculo">PORTAS:</label>
										<select class="form-control" name="portaVeiculo" required>
											<option value=<?php echo $_POST['portasVeiculo'];?> selected>
													<?php echo $_POST['portasVeiculo'];?>
											</option>
										  	<option value=2 >2 Portas</option>
										  	<option value=4 >4 Portas</option>
										</select> 
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-5"> 
									<div class="form-group">
										<label for="valorVeiculo">VALOR:</label>
										<input class="form-control" type="number" id="valorVeiculo" name="valorVeiculo" 
										value="<?php echo $_POST['valor'];?>" required>
									</div>
								</div>
							</div>
							

							<div class="form-group">
								<label for="combustivelVeiculo">COMBUSTIVEL:</label></BR>
								<!--Script que verifica qual tipo de Combustivel! -->
								<?php 
								include 'editarCombustivel.php'; 
								?>

							</div>

							<div class="form-group">
								<label>**VERSÃO SEM EDIÇÃO DE OPCIONAIS**</label></br>
							</div>
							<div class="form-group">
								<label for="descVeiculo">Descrição:</label>
								<textarea class="form-control" id="descVeiculo" name="descVeiculo"><?php echo $_POST['descricaoVei'];?></textarea>	
							</div>
							<div class="form-group">
									<button class="btn btn-success btn-lg btn-block" type="submit">Concluir Edição</button>
							</div>
						</form>
				</div>
		</div>
	</div>
	<footer>
		</br>
		<p>Pagina criada somente para estudos! @ Ânderson Guimarães
	</footer>
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/jquery.mask.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
 	<script src="js/cadveiculo.mask.js"></script>
	<script src="bootstrap/js/validator.min.js"></script>
	</body>
</html