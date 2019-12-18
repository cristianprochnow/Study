insert into curso(desc_curso, nome_curso, ppc_curso)
 values ('Técnico em Agropecuária', 'TEC_AGRO', 'Lorem Ipsum 1'),
        ('Técnico em Informática', 'TEC_INFO', 'Lorem Ipsum 2'),
        ('Técnico em Química', 'TEC_QUIMI', 'Lorem Ipsum 3');

 insert into turma (desc_turma, nome_turma, qtd_alunos, cod_curso) 

   values ('1agro1', '1AGRO1', '35', '1'),
          ('1agro2', '1AGRO2', '35', '1'),
          ('1agro3', '1AGRO3', '35', '1'),
          ('2agro1', '2AGRO1', '35', '1'),
          ('2agro2', '2AGRO2', '35', '1'),
          ('2agro3', '2AGRO3', '35', '1'),
          ('3agro1', '3AGRO1', '35', '1'),
          ('3agro2', '3AGRO2', '35', '1'),
          ('3agro3', '3AGRO3', '35', '1'),

          ('1info1', '1INFO1', '35', '2'),
          ('1info2', '1INFO2', '35', '2'),
          ('1info3', '1INFO3', '35', '2'),
          ('2info1', '2INFO1', '35', '2'),
          ('2info2', '2INFO2', '35', '2'),
          ('2info3', '2INFO3', '35', '2'),
          ('3info1', '3INFO1', '35', '2'),
          ('3info2', '3INFO2', '35', '2'),
          ('3info3', '3INFO3', '35', '2'),

          ('1quimi', '1QUIMI', '35', '3'),
          ('2quimi', '2QUIMI', '35', '3'),
          ('3quimi', '3QUIMI', '35', '3'),
          ('4quimi', '4QUIMI', '35', '3');

insert into usuario (cpf, rg, senha, email, nome_usuario) 
         
 values ('112.556.785-99', '7.556.123', '1234', 'sergioblablabla@gmail.com', 'Sergio'),
        ('112.556.721-99', '7.546.445', '1545', 'claudioblablabla@gmail.com', 'Claudio'),
        ('112.556.022-99', '7.556.878', '1246', 'marioblablabla@gmail.com', 'Mario'),
        ('112.556.401-99', '7.556.852', '1444', 'jubileublablabla@gmail.com', 'Jubileu'),
        ('112.556.805-99', '7.556.201', '1211', 'lestroncioblablabla@gmail.com', 'Lestroncio'),
        ('112.556.450-99', '7.556.089', '1545', 'mariablablabla@gmail.com', 'Maria'),
        ('112.556.123-99', '7.556.041', '1255', 'joaoblablabla@gmail.com', 'Joao'),
        ('112.556.874-99', '7.556.890', '1525', 'cleitonblablabla@gmail.com', 'Cleiton'),
        ('112.556.201-99', '7.556.840', '1898', 'paulinablablabla@gmail.com', 'Paulina'),
        ('112.556.804-99', '7.556.785', '1787', 'noelblablabla@gmail.com', 'Noel'),
        ('112.159.785-99', '7.147.123', '0204', 'lucasbla@gmail.com', 'Lucas'),
        ('112.963.721-99', '7.159.445', '3092', 'gabrielblablabla@gmail.com', 'Gabriel'),
        ('112.741.022-99', '7.951.878', '5180', 'joanablablabla@gmail.com', 'Joana'),
        ('112.456.401-99', '7.852.852', '8917', 'agnesblablabla@gmail.com', 'Agnes'),
        ('112.789.805-99', '7.761.201', '4319', 'catarinablablabla@gmail.com', 'Catarina'),
        ('112.951.450-99', '7.461.089', '7531', 'williamblablabla@gmail.com', 'William'),
        ('112.619.123-99', '7.973.041', '9512', 'matheusblablabla@gmail.com', 'Matheus'),
        ('112.743.874-99', '7.157.890', '8521', 'margaridablablabla@gmail.com', 'Margarida'),
        ('112.468.201-99', '7.964.840', '1478', 'sandrablablabla@gmail.com', 'Sandra'),
        ('112.428.804-99', '7.152.785', '3698', 'sandroblablabla@gmail.com', 'Sandro');


insert into professor (titulacao, formacao, matricula_prof, cod_usuario)

  values ('Mestrado', 'Mestrado em Português', '2019856547', '1'),
         ('Doutorado', 'Doutorado em Matemática', '2019524132', '2'),
         ('Especialização', 'Especializado em Biologia', '2019471369', '3'),
         ('Mestrado', 'Mestrado em Física', '201987412', '4'),
         ('Especialização', 'Especializado em Desenvolvimento Web', '2019856457', '5'),
         ('Mestrado', 'Mestrado em História', '2019851132', '6'),
         ('Graduação', 'Graduado em Geografia', '2019884247', '7'),
         ('Especialização', 'Especializado em Programação', '2019524563', '8'),
         ('Graduação', 'Graduado em Zootecnia', '2019859637', '9'),
         ('Doutorado', 'Doutorado em Química', '2019524789', '10');
	
insert into disciplina (nome_disciplina, descricao_disciplina, ementa_disciplina, matricula_prof)

  values ('PORT', 'Português', 'Lorem Ipsum 1', '2019856547'),
         ('MAT', 'Matemática', 'Lorem Ipsum 2', '2019524132'),
         ('BIO', 'Biologia', 'Lorem Ipsum 3', '2019471369'),
         ('WEB', 'Desenvolvimento Web', 'Lorem Ipsum 4', '2019856457'),
         ('HIST', 'História', 'Lorem Ipsum 5', '2019851132'),
         ('GEO', 'Geografia', 'Lorem Ipsum 6', '2019884247'),
         ('PROG', 'Programação', 'Lorem Ipsum 7', '2019524563'),
         ('ZOO', 'Zootecnia', 'Lorem Ipsum 8', '2019859637'),
         ('FIS', 'Física', 'Lorem Ipsum 9', '201987412'),
         ('QUI', 'Química', 'Lorem Ipsum 10', '2019524789'); 

insert into aluno (nome_pai, nome_mae, tel_contato, matricula_aluno, cod_usuario)
  
  values ('nomepai1', 'nomemae1','0001-0001', '2019000001', '11'),
         ('nomepai2', 'nomemae2','0001-0002', '2019000002', '12'),
         ('nomepai3', 'nomemae3','0001-0003', '2019000003', '13'),
         ('nomepai4', 'nomemae4','0004-0001', '2019000004', '14'),
         ('nomepai5', 'nomemae5','0005-0001', '2019000005', '15'),
         ('nomepai6', 'nomemae6','0006-0001', '2019000006', '16'),
         ('nomepai7', 'nomemae7','0001-0007', '2019000007', '17'),
         ('nomepai8', 'nomemae8','0001-0008', '2019000008', '18'),
         ('nomepai9', 'nomemae9','0001-0009', '2019000009', '19'),
         ('nomepai10', 'nomemae10','0010-0001', '2019001001', '20');

insert into periodo (matricula_aluno, cod_turma, dt_ini, dt_ter)
   values ('2019000001', '1', '2019-02-08', '2019-12-12'),
          ('2019000002', '2', '2019-02-08', '2019-12-12'),
          ('2019000003', '3', '2019-02-08', '2019-12-12'),
          ('2019000004', '10', '2019-02-08', '2019-12-12'),
          ('2019000005', '11', '2019-02-08', '2019-12-12'),
          ('2019000006', '12', '2019-02-08', '2019-12-12'),
          ('2019000007', '19', '2019-02-08', '2019-12-12'),
          ('2019000008', '13', '2018-02-08', '2018-12-12'),
          ('2019000009', '14', '2018-02-08', '2018-12-12'),
          ('2019001001', '15', '2018-02-08', '2018-12-12');

insert into aula (cod_disciplina, cod_turma, hora_inicio, hora_fim, dia_semana, local_aula, descricao_aula)
    
  values ('4', '10', '08:00', '09:30', 'QUA', 'B3', 'Desenvolvimento Web'),
         ('4', '11', '08:00', '09:30', 'QUI', 'B3', 'Desenvolvimento Web'),
         ('4', '12', '08:00', '09:30', 'SEX', 'B3', 'Desenvolvimento Web'),
         ('8', '7', '08:00', '09:30', 'QUA', 'E203', 'Zootecnia'),
         ('8', '8', '08:00', '09:30', 'QUI', 'E203', 'Zootecnia'),
         ('8', '9', '08:00', '09:30', 'SEX', 'E203', 'Zootecnia'),
         ('7', '13', '08:00', '09:30', 'QUA', 'B5', 'Programação'),
         ('7', '14', '08:00', '09:30', 'QUI', 'B5', 'Programação'),
         ('7', '15', '08:00', '09:30', 'SEG', 'B5', 'Programação'),
         ('7', '16', '08:00', '09:30', 'TER', 'B5', 'Programação');

            


        


         

          

        
