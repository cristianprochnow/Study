select dia_semana,nome_turma,desc_curso 
	from aula,turma,curso 
		where curso.cod_curso = turma.cod_curso 
        and turma.cod_turma = aula.cod_turma 
        and aula.dia_semana = "QUA";
        
			/* Resultado:
            
            +------------+------------+-------------------------+
			| dia_semana | nome_turma | desc_curso              |
			+------------+------------+-------------------------+
			| QUA        | 1INFO1     | Técnico em Informática  |
			| QUA        | 3AGRO1     | Técnico em Agropecuária |
			| QUA        | 2INFO1     | Técnico em Informática  |
			+------------+------------+-------------------------+
            */