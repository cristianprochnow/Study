select desc_curso,nome_turma,dia_semana 
	from curso,turma,aula 
		where curso.cod_curso = turma.cod_curso 
		and turma.cod_turma = aula.cod_turma;
	  
	  
			/* Resultado:

			+---------------------------+------------+------------+
			| desc_curso                | nome_turma | dia_semana |
			+---------------------------+------------+------------+
			| Técnico em Agropecuária   | 3AGRO1     | QUA        |
			| Técnico em Agropecuária   | 3AGRO2     | QUI        |
			| Técnico em Agropecuária   | 3AGRO3     | SEX        |
			| Técnico em Informática    | 1INFO1     | QUA        |
			| Técnico em Informática    | 1INFO2     | QUI        |
			| Técnico em Informática    | 1INFO3     | SEX        |
			| Técnico em Informática    | 2INFO1     | QUA        |
			| Técnico em Informática    | 2INFO2     | QUI        |
			| Técnico em Informática    | 2INFO3     | SEG        |
			| Técnico em Informática    | 3INFO1     | TER        |
			+---------------------------+------------+------------+ 
            */