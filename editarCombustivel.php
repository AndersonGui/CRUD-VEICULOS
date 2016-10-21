<?php 
	if($_POST['combustivelVeiculo'] == "FLEX"){
		echo "
			<label>
				<input type='radio' id='combustivelVeiculo' name='combustivelVeiculo' value='FLEX' checked >
				FLEX
			</label>";
	}else{
		echo "
			<label>
				<input type='radio' id='combustivelVeiculo' name='combustivelVeiculo' value='FLEX'>
				FLEX
			</label>";
		
	}

	if($_POST['combustivelVeiculo'] == "GASOLINA"){
		echo "
			<label>
				<input type='radio' id='combustivelVeiculo' name='combustivelVeiculo' 
				value='GASOLINA' checked>
					GASOLINA
			</label>";

	}else{
		echo "
			<label>
				<input type='radio' id='combustivelVeiculo' name='combustivelVeiculo' 
				value='GASOLINA'>
					GASOLINA
			</label>";
		
	}

	if($_POST['combustivelVeiculo'] == "ALCOOL"){
		echo "
			<label>
				<input type='radio' id='combustivelVeiculo' name='combustivelVeiculo' value='ALCOOL' checked>
				ÁLCOOL
			</label>";
	}else{
		echo "
			<label>
				<input type='radio' id='combustivelVeiculo' name='combustivelVeiculo' value='ALCOOL'>
				ÁLCOOL
			</label>";
	}

	if($_POST['combustivelVeiculo'] == "ALCOOL/GNV"){
		echo "
			<label>
				<input type='radio' id='combustivelVeiculo' name='combustivelVeiculo' value='ALCOOL/GNV' checked>
				ÁLCOOL/GNV
			</label>";
	}else{
		echo "
			<label>
				<input type='radio' id='combustivelVeiculo' name='combustivelVeiculo' value='ALCOOL/GNV'>
				ÁLCOOL/GNV
			</label>";
	}
?>
