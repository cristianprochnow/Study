select nome_usuario,formacao,nome_disciplina,dia_semana 
	from usuario,professor,disciplina,aula 
		where usuario.cod_usuario = professor.cod_usuario 
        and professor.matricula_prof = disciplina.matricula_prof 
        and disciplina.cod_disciplina = aula.cod_disciplina;
        
			/* Resultado:
            
            +--------------+--------------------------------------+-----------------+------------+
			| nome_usuario | formacao                             | nome_disciplina | dia_semana |
			+--------------+--------------------------------------+-----------------+------------+
			| Lestroncio   | Especializado em Desenvolvimento Web | WEB             | QUA        |
			| Lestroncio   | Especializado em Desenvolvimento Web | WEB             | QUI        |
			| Lestroncio   | Especializado em Desenvolvimento Web | WEB             | SEX        |
			| Paulina      | Graduado em Zootecnia                | ZOO             | QUA        |
			| Paulina      | Graduado em Zootecnia                | ZOO             | QUI        |
			| Paulina      | Graduado em Zootecnia                | ZOO             | SEX        |
			| Cleiton      | Especializado em Programação         | PROG            | QUA        |
			| Cleiton      | Especializado em Programação         | PROG            | QUI        |
			| Cleiton      | Especializado em Programação         | PROG            | SEG        |
			| Cleiton      | Especializado em Programação         | PROG            | TER        |
			+--------------+--------------------------------------+-----------------+------------+
            */