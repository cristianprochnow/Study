 /* 1 */ SELECT desc_turma, qtd_alunos FROM turma, curso WHERE turma.cod_curso = curso.cod_curso;

 /* 2 */ SELECT nome_mae, nome_pai FROM aluno, periodo, turma WHERE aluno.matricula_aluno = periodo.matricula_aluno AND periodo.cod_turma = turma.cod_turma AND turma.nome_turma = "3INFO1";

 /* 3 */ SELECT nome_usuario, email FROM usuario, professor, disciplina, aula WHERE usuario.cod_usuario = professor.cod_usuario AND professor.matricula_prof = disciplina.matricula_prof AND disciplina.cod_disciplina = aula.cod_disciplina AND aula.dia_semana = "SEX";

/* 4 */ SELECT nome_disciplina, ementa_disciplina FROM disciplina, aula, turma, curso WHERE disciplina.cod_disciplina = aula.cod_disciplina AND aula.cod_turma = turma.cod_turma AND turma.cod_curso = curso.cod_curso AND curso.nome_curso = "Técnico em Informática";

/* 5 */ SELECT nome_turma, qtd_alunos FROM turma, curso WHERE turma.cod_curso = curso.cod_curso AND nome_curso = "Medicina Veterinária";

/* 6 */ SELECT nome_curso, nome_turma, qtd_alunos FROM curso, turma, aula WHERE curso.cod_curso = turma.cod_curso AND turma.cod_turma = aula.cod_turma AND aula.dia_semana = "QUA";

/* 7 */ SELECT nome_disciplina, descricao_disciplina FROM disciplina, professor, usuario WHERE disciplina.matricula_prof = professor.matricula_prof AND professor.cod_usuario = usuario.cod_usuario AND nome_usuario = "José Ribeiro dos Santos";

/* 8 */ SELECT titulacao FROM professor, usuario WHERE professor.cod_usuario = usuario.cod_usuario AND usuario.cod_usuario in (56, 89, 72, 125, 38, 12);



Comandos Adicionais:
-----

UPDATE entidade SET atributo="valor que quer colocar" WHERE cod_entidade=3;

------

DELETE FROM curso; -> apaga tudo da entidade;

DELECT FROM curso WHERE cod_curso=2;

-----

INSERT INTO curso(atributo1, atributo2) VALUES ("Valor1", 2345);