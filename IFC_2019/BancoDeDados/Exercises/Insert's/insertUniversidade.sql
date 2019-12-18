insert into curso(curso_nome,curso_desc,curso_ppc) values
("Informática","Curso de Informática","Curso para desenvolver sites"),
("Agropecuária","Curso de Agropecuária","Curso para trabalhar no campo"),
("Química","Curso de Química","Curso para pesquisar em laboratórios");

insert into turma(cod_curso,turma_nome,turma_qtd_alunos,turma_desc) values
(1,"2INFO1",30,"Turma 2INFO1"),
(1,"2INFO2",30,"Turma 2INFO2"),
(1,"2INFO3",30,"Turma 2INFO3"),
(2,"2AGRO1",30,"Turma 2AGRO1"),
(2,"2AGRO2",30,"Turma 2AGRO2"),
(2,"2AGRO3",30,"Turma 2AGRO3"),
(3,"1QUIMI",30,"Turma 1QUIMI"),
(3,"2QUIMI",30,"Turma 2QUIMI"),
(3,"3QUIMI",30,"Turma 3QUIMI");

insert into usuario(usuario_cpf,usuario_rg,usuario_nome,usuario_senha,usuario_email) values
(1111111001,1111001,"usuario1","senhausuario1","usuario1@gmail.com"),
(1111111002,1111002,"usuario2","senhausuario2","usuario2@gmail.com"),
(1111111003,1111003,"usuario3","senhausuario3","usuario3@gmail.com"),
(1111111004,1111004,"usuario4","senhausuario4","usuario4@gmail.com"),
(1111111005,1111005,"usuario5","senhausuario5","usuario5@gmail.com"),
(1111111006,1111006,"usuario6","senhausuario6","usuario6@gmail.com"),
(1111111007,1111007,"usuario7","senhausuario7","usuario7@gmail.com"),
(1111111008,1111008,"usuario8","senhausuario8","usuario8@gmail.com"),
(1111111009,1111009,"usuario9","senhausuario9","usuario9@gmail.com"),
(1111111010,1111010,"usuario10","senhausuario10","usuario10@gmail.com"),
(1111111011,1111011,"usuario11","senhausuario11","usuario11@gmail.com"),
(1111111012,1111012,"usuario12","senhausuario12","usuario12@gmail.com"),
(1111111013,1111013,"usuario13","senhausuario13","usuario13@gmail.com"),
(1111111014,1111014,"usuario14","senhausuario14","usuario14@gmail.com"),
(1111111015,1111015,"usuario15","senhausuario15","usuario15@gmail.com"),
(1111111016,1111016,"usuario16","senhausuario16","usuario16@gmail.com"),
(1111111017,1111017,"usuario17","senhausuario17","usuario17@gmail.com"),
(1111111018,1111018,"usuario18","senhausuario18","usuario18@gmail.com"),
(11111111019,1111019,"usuario19","senhausuario19","usuario19@gmail.com"),
(11111111020,1111020,"usuario20","senhausuario20","usuario20@gmail.com");

insert into aluno(cod_usuario,aluno_fone,aluno_nome_pai,aluno_nome_mae) values
(1,55555001,"paiAluno1","maeAluno1"),
(2,55555002,"paiAluno2","maeAluno2"),
(3,55555003,"paiAluno3","maeAluno3"),
(4,55555004,"paiAluno4","maeAluno4"),
(5,55555005,"paiAluno5","maeAluno5"),
(6,55555006,"paiAluno6","maeAluno6"),
(7,55555007,"paiAluno7","maeAluno7"),
(8,55555008,"paiAluno8","maeAluno8"),
(9,55555009,"paiAluno9","maeAluno9"),
(10,55555010,"paiAluno10","maeAluno10");

insert into professor(cod_usuario,prof_formacao,prof_titulacao) values
(11,"Professor de Programação","Programador Senior"),
(12,"Professor de Banco de Dados","Especialista Banco de Dados"),
(13,"Professor de Desenvolvimento Web","Desenvolvedor Web"),
(14,"Professor de Hardware","Especialista em Hardware"),
(15,"Professor de Zootecnia","Doutor em Zootecnia"),
(16,"Professor de Agrocologia","Doutor em Agrocologia"),
(17,"Professor de Irrigação","Doutor em Irrigação"),
(18,"Professor de Topografia","Doutor em Topografia"),
(19,"Professor de Química Orgânica","Doutor em Química Inorgânica"),
(20,"Professor de Química Inorgânica","Doutor em Química Orgânica");

insert into disciplina(disci_nome,disci_desc,disci_ementa) values
("Programação","Disciplina de Programação","Ensinar Programação"),
("Banco de Dados","Disciplina de Programação","Ensinar Banco de Dados"),
("Desenvolvimento Web","Disciplina de Desenvolvimento Web","Ensinar Desenvolvimento Web"),
("Hardware","Disciplina de Hardware","Ensinar Hardware"),
("Zootecnia","Disciplina de Zootecnia","Ensinar Zootecnia"),
("Agrocologia","Disciplina de Agrocologia","Ensinar Agrocologia"),
("Irrigação","Disciplina de Irrigação","Ensinar Irrigação"),
("Topografia","Disciplina de Topografia","Ensinar Topografia"),
("Química Inorgânica","Disciplina de Química Inorgânica","Ensinar Química Inorgânica"),
("Química Orgânica","Disciplina de Química Orgânica","Ensinar Química Orgânica");

insert into periodo(matricula_aluno,cod_turma) values
(1,1),
(2,2),
(3,3),
(4,4),
(5,5),
(6,6),
(7,7),
(8,8),
(9,9),
(10,4);

insert into aula(cod_disciplina,cod_turma,aula_local,aula_desc) values
(1,1,"Lab B-3","Aula de Programação"),
(1,2,"Lab B-3","Aula de Programação"),
(1,3,"Lab B-3","Aula de Programação"),
(5,4,"Em algum lugar aí","Aula de Zootecnia"),
(6,4,"Em outro lugar","Aula de Agrocologia"),
(7,5,"Mais um lugar aleatório","Aula de Irrigação"),
(9,8,"Lab Química","Aula de Química Inorgânica"),
(10,8,"Lab Química","Aula de Química Orgânica"),
(10,7,"Lab Química","Aulade Química Orgânica"),
(4,2,"Lab A12","Aula de Hardware");

insert into leciona(matricula_prof,cod_disciplina) values
(1,1),
(2,2),
(3,3),
(4,4),
(5,5),
(6,6),
(7,7),
(8,8),
(9,9),
(10,10);