drop table if exists ACESSORIOS;
drop table if exists VEICULO;

CREATE TABLE VEICULO(
	cod_veiculo SERIAL NOT NULL UNIQUE,
	marca VARCHAR(30) NOT NULL,
	modelo VARCHAR(30) NOT NULL,
	placa VARCHAR(8) NOT NULL UNIQUE,
	ano_fab VARCHAR(4) NOT NULL,
	ano_modelo VARCHAR(4) NOT NULL,
	cor VARCHAR(22) NOT NULL,
	km VARCHAR(10) NOT NULL,
	portas INT NOT NULL,
	combustivel VARCHAR(10) NOT NULL,
	descricao VARCHAR(255),
	valor FLOAT NOT NULL,
	imagem VARCHAR(255),
	PRIMARY KEY (cod_veiculo),
	CHECK (combustivel IN ('FLEX','GASOLINA','ALCOOL','ALCOOL/GNV'))
);

CREATE TABLE ACESSORIO(
	cod_acessorios SERIAL NOT NULL UNIQUE,
	placa VARCHAR(8) NOT NULL UNIQUE,
	volante_escamoteavel boolean,
	trava_eletrica boolean,
	desembacador_traseiro boolean,
	ar_condicionado boolean,
	freio_abs boolean,
	vidros_eletricos boolean,
	limpador_traseiro boolean,
	chave_copia boolean,
	air_bag_duplo boolean,
	direcao_hidraulica boolean,
	ar_quente boolean,
	air_bag boolean,
	PRIMARY KEY(cod_acessorios),
	FOREIGN KEY (placa) REFERENCES VEICULO(placa) ON UPDATE CASCADE ON DELETE CASCADE
);