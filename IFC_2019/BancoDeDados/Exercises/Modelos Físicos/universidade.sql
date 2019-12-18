CREATE TABLE curso (
nome_curso varchar(120),
ppc_curso varchar(3500),
desc_curso varchar(570),
cod_curso int not null auto_increment PRIMARY KEY
);

CREATE TABLE usuario (
cod_usuario int not null auto_increment PRIMARY KEY,
nome_usuario varchar(220),
cpf varchar(14),
email varchar(220),
rg varchar(15),
senha varchar(20)
);

CREATE TABLE turma (
cod_turma int not null auto_increment PRIMARY KEY,
nome_turma varchar(250),
qtd_alunos int(2),
desc_turma varchar(200),
cod_curso int not null,
FOREIGN KEY(cod_curso) REFERENCES curso(cod_curso)
);

CREATE TABLE aluno (
matricula_aluno int not null PRIMARY KEY,
nome_pai varchar(220),
nome_mae varchar(220),
tel_contato varchar(15),
cod_usuario int not null,
FOREIGN KEY(cod_usuario) REFERENCES usuario(cod_usuario)
);

CREATE TABLE disciplina (
cod_disciplina int not null auto_increment PRIMARY KEY,
nome_disciplina varchar(250),
descricao_disciplina varchar(350),
ementa_disciplina varchar(1500),
matricula_prof varchar(10) not null
);

CREATE TABLE professor (
matricula_prof varchar(10) not null PRIMARY KEY,
formacao varchar(250),
titulacao varchar(220),
cod_usuario int not null,
FOREIGN KEY(cod_usuario) REFERENCES usuario(cod_usuario)
);

CREATE TABLE periodo (
matricula_aluno int not null,
cod_turma int not null,
dt_ter date,
dt_ini date,
FOREIGN KEY(matricula_aluno) REFERENCES aluno(matricula_aluno),
FOREIGN KEY(cod_turma) REFERENCES turma(cod_turma)
);

CREATE TABLE aula (
cod_disciplina int not null,
cod_turma int not null,
hora_inicio time,
hora_fim time,
descricao_aula varchar(50),
dia_semana char(3),
local_aula varchar(35),
FOREIGN KEY(cod_disciplina) REFERENCES disciplina (cod_disciplina),
FOREIGN KEY(cod_turma) REFERENCES turma (cod_turma)
);

ALTER TABLE disciplina ADD FOREIGN KEY(matricula_prof) REFERENCES professor(matricula_prof);