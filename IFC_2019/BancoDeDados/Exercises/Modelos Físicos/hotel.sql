CREATE TABLE reserva (
res_cli_CPF int not null,
res_cod_quarto int not null,
res_dataHorario timestamp,
res_qtdDias int
);

CREATE TABLE quarto (
cod_quarto int not null auto_increment PRIMARY KEY,
quarto_numero int,
quarto_tipo varchar(500),
quarto_descricao varchar(1000),
quarto_andar int,
quarto_preco float(5)
);

CREATE TABLE ocupacao (
cod_ocupacao int not null auto_increment PRIMARY KEY,
ocup_cli_CPF int not null,
ocup_cod_quarto int not null,
ocup_dthE timestamp,
ocup_dthS datetime,
FOREIGN KEY(ocup_cod_quarto) REFERENCES quarto (cod_quarto)
);

CREATE TABLE servico (
cod_servico int not null auto_increment PRIMARY KEY,
serv_desc varchar(1000),
serv_valor float(8),
serv_tipo varchar(1000)
);

CREATE TABLE cliente (
cli_CPF int not null auto_increment PRIMARY KEY,
cli_fone int,
cli_nome varchar(300),
cli_sexo varchar(20)
);

CREATE TABLE serv_ocupacao (
serv_ocup_cod_ocupacao int not null,
serv_ocup_cod_servico int not null,
serv_ocup_dth timestamp,
FOREIGN KEY(serv_ocup_cod_ocupacao) REFERENCES ocupacao (cod_ocupacao),
FOREIGN KEY(serv_ocup_cod_servico) REFERENCES servico (cod_servico)
);

ALTER TABLE reserva ADD FOREIGN KEY(res_cli_CPF) REFERENCES cliente (cli_CPF);
ALTER TABLE reserva ADD FOREIGN KEY(res_cod_quarto) REFERENCES quarto (cod_quarto);
ALTER TABLE ocupacao ADD FOREIGN KEY(ocup_cli_CPF) REFERENCES cliente (cli_CPF);