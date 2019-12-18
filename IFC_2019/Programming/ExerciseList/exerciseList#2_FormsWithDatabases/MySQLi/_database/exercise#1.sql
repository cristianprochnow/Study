/* CREATE DATABASE exercise1_database; */

CREATE TABLE school (
	nome varchar(100),
    cidade varchar(100),
    estado varchar(100),
    numero_escola int unsigned PRIMARY KEY auto_increment
);

CREATE TABLE crew (
	equipe_numero int not null PRIMARY KEY auto_increment,
    nome_equipe varchar(200)
);

CREATE TABLE members (
	email varchar(100) not null PRIMARY KEY,
    nome_membro varchar(200),
    escola varchar(100),
    numero int,
    funcao varchar(50),
    nome_equipe VARCHAR(200)
);