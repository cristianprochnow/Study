select nome_disciplina,professor.matricula_prof,nome_usuario 
	from disciplina,professor,usuario,aula 
		where usuario.cod_usuario = professor.cod_usuario 
        and professor.matricula_prof = disciplina.matricula_prof 
        and disciplina.cod_disciplina = aula.cod_disciplina 
        and aula.dia_semana = "QUI";
        
			/* Resultado: 
            
            +-----------------+----------------+--------------+
			| nome_disciplina | matricula_prof | nome_usuario |
			+-----------------+----------------+--------------+
			| WEB             | 2019856457     | Lestroncio   |
			| ZOO             | 2019859637     | Paulina      |
			| PROG            | 2019524563     | Cleiton      |
			+-----------------+----------------+--------------+
            */