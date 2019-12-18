/* Código de consulta padrão do exercício */

select desc_curso,desc_turma,dt_ini,dt_ter 
	from curso,turma,periodo 
		where curso.cod_curso = turma.cod_curso 
		and turma.cod_turma = periodo.cod_turma 
		and desc_turma in("1info1","2info1","3info1");
		
        
			/* Resultado:
			
			+--------------------------+------------+------------+------------+
			| desc_curso               | desc_turma | dt_ini     | dt_ter     |
			+--------------------------+------------+------------+------------+
			| Técnico em Informática   | 1info1     | 2019-02-08 | 2019-12-12 |
			| Técnico em Informática   | 2info1     | 2018-02-08 | 2018-12-12 |
			| Técnico em Informática   | 3info1     | 2019-02-08 | NULL       |
			+--------------------------+------------+------------+------------+
			*/



/* Código com a consulta do Nome do Usuário também */

select desc_curso,desc_turma,dt_ini,dt_ter,nome_usuario 
    from curso,turma,periodo,usuario,aluno 
    where curso.cod_curso = turma.cod_curso 
		and turma.cod_turma = periodo.cod_turma 
        and desc_turma in("1info1","2info1","3info1") 
        and periodo.matricula_aluno = aluno.matricula_aluno 
        and aluno.cod_usuario = usuario.cod_usuario;
        
        
			/* Resultado:
            
            +--------------------------+------------+------------+------------+--------------+
			| desc_curso               | desc_turma | dt_ini     | dt_ter     | nome_usuario |
			+--------------------------+------------+------------+------------+--------------+
			| Técnico em Informática   | 1info1     | 2019-02-08 | 2019-12-12 | Agnes        |
			| Técnico em Informática   | 2info1     | 2018-02-08 | 2018-12-12 | Margarida    |
			| Técnico em Informática   | 3info1     | 2019-02-08 | NULL       | Margarida    |
			+--------------------------+------------+------------+------------+--------------+
            */