select nome_usuario,aluno.matricula_aluno,nome_turma 
	from usuario,aluno,periodo,turma 
		where usuario.cod_usuario = aluno.cod_usuario 
        and aluno.matricula_aluno = periodo.matricula_aluno 
        and periodo.cod_turma = turma.cod_turma;
        
			/* Resultado:
            
            +--------------+-----------------+------------+
			| nome_usuario | matricula_aluno | nome_turma |
			+--------------+-----------------+------------+
			| Lucas        | 2019000001      | 1AGRO1     |
			| Gabriel      | 2019000002      | 1AGRO2     |
			| Joana        | 2019000003      | 1AGRO3     |
			| Agnes        | 2019000004      | 1INFO1     |
			| Catarina     | 2019000005      | 1INFO2     |
			| William      | 2019000006      | 1INFO3     |
			| Matheus      | 2019000007      | 1QUIMI     |
			| Margarida    | 2019000008      | 2INFO1     |
			| Margarida    | 2019000008      | 3INFO1     |
			| Sandra       | 2019000009      | 2INFO2     |
			| Sandro       | 2019001001      | 2INFO3     |
			+--------------+-----------------+------------+
            */