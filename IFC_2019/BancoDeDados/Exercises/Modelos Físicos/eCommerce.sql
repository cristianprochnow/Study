CREATE TABLE pedido (
ped_cod int not null auto_increment PRIMARY KEY,
ped_cli_cod int not null,
ped_prod_cod int not null,
ped_faturado varchar(400),
ped_data_ent date
);

CREATE TABLE produto (
prod_cod int not null auto_increment PRIMARY KEY,
prod_preco float(20),
prod_quant_embCaixa int,
prod_desc varchar(1000),
prod_quant_estoque int
);

CREATE TABLE pessoa_juridica (
cli_CNPJ int not null auto_increment PRIMARY KEY,
pesJuri_cli_cod int not null,
cli_razao_social varchar(200)
);

CREATE TABLE cliente (
cli_cod int not null auto_increment PRIMARY KEY,
cli_endereco_ent varchar(500),
cli_fone int,
cli_cel int,
cli_nome varchar(400),
cli_email varchar(400)
);

CREATE TABLE pessoa_fisica (
cli_CPF int not null auto_increment PRIMARY KEY,
pesFisi_cli_cod int not null,
cli_RG int,
FOREIGN KEY(pesFisi_cli_cod) REFERENCES cliente (cli_cod)
);

CREATE TABLE comentario (
coment_cli_cod int not null,
coment_prod_cod int not null,
coment_data timestamp,
coment_text varchar(3000),
coment_title varchar(500),
FOREIGN KEY(coment_cli_cod) REFERENCES cliente (cli_cod),
FOREIGN KEY(coment_prod_cod) REFERENCES produto (prod_cod)
);

ALTER TABLE pedido ADD FOREIGN KEY(ped_cli_cod) REFERENCES cliente (cli_cod);
ALTER TABLE pedido ADD FOREIGN KEY(ped_prod_cod) REFERENCES produto (prod_cod);
ALTER TABLE pessoa_juridica ADD FOREIGN KEY(pesJuri_cli_cod) REFERENCES cliente (cli_cod);
