select desc_curso,nome_turma,dia_semana 
	from curso,turma, aula 
		where curso.cod_curso = turma.cod_curso 
        and turma.cod_turma = 16;
        
        
			/* Resultado:
            
            +--------------------------+------------+------------+
			| desc_curso               | nome_turma | dia_semana |
			+--------------------------+------------+------------+
			| Técnico em Informática   | 3INFO1     | QUA        |
			| Técnico em Informática   | 3INFO1     | QUI        |
			| Técnico em Informática   | 3INFO1     | SEX        |
			| Técnico em Informática   | 3INFO1     | QUA        |
			| Técnico em Informática   | 3INFO1     | QUI        |
			| Técnico em Informática   | 3INFO1     | SEX        |
			| Técnico em Informática   | 3INFO1     | QUA        |
			| Técnico em Informática   | 3INFO1     | QUI        |
			| Técnico em Informática   | 3INFO1     | SEG        |
			| Técnico em Informática   | 3INFO1     | TER        |
			+--------------------------+------------+------------+
            */