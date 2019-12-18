select nome_disciplina,descricao_disciplina,ementa_disciplina,nome_usuario 
	from disciplina,professor,usuario 
		where disciplina.matricula_prof = professor.matricula_prof 
        and professor.cod_usuario = usuario.cod_usuario;
        
			/* Resultado:
            
            +-----------------+----------------------+-------------------+--------------+
			| nome_disciplina | descricao_disciplina | ementa_disciplina | nome_usuario |
			+-----------------+----------------------+-------------------+--------------+
			| PORT            | Português            | Lorem Ipsum 1     | Sergio       |
			| MAT             | Matemática           | Lorem Ipsum 2     | Claudio      |
			| BIO             | Biologia             | Lorem Ipsum 3     | Mario        |
			| WEB             | Desenvolvimento Web  | Lorem Ipsum 4     | Lestroncio   |
			| HIST            | História             | Lorem Ipsum 5     | Maria        |
			| GEO             | Geografia            | Lorem Ipsum 6     | Joao         |
			| PROG            | Programação          | Lorem Ipsum 7     | Cleiton      |
			| ZOO             | Zootecnia            | Lorem Ipsum 8     | Paulina      |
			| FIS             | Física               | Lorem Ipsum 9     | Jubileu      |
			| QUI             | Química              | Lorem Ipsum 10    | Noel         |
			+-----------------+----------------------+-------------------+--------------+
            */