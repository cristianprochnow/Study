select nome_disciplina 
	from disciplina,aula 
		where disciplina.cod_disciplina = aula.cod_disciplina 
        and dia_semana = "QUI";
        
			/* Resultado: 
            
            +-----------------+
			| nome_disciplina |
			+-----------------+
			| WEB             |
			| ZOO             |
			| PROG            |
			+-----------------+
            */