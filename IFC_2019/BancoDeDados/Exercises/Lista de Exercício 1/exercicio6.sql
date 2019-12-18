select nome_usuario 
	from usuario 
		where usuario.cod_usuario >= 3 
        and usuario.cod_usuario <= 15;
        
			/* Resultado:
            
            +--------------+
			| nome_usuario |
			+--------------+
			| Mario        |
			| Jubileu      |
			| Lestroncio   |
			| Maria        |
			| Joao         |
			| Cleiton      |
			| Paulina      |
			| Noel         |
			| Lucas        |
			| Gabriel      |
			| Joana        |
			| Agnes        |
			| Catarina     |
			+--------------+
            */