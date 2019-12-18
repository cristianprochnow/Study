/*
Crie uma consulta que retorne a quantidade de usuários que residem em cada estado agrupando pela sigla do estado e ordenando em decrescente.
*/

SELECT COUNT(cpf) AS qtd_usuario, ds_uf_nome 
FROM cad_usuario, logradouro, bairros, cidades, uf 
WHERE log_cd_logradouro = cd_logradouro 
AND bairros_cd_bairro = cd_bairro 
AND cidade_cd_cidade = cd_cidade 
AND uf_cd_uf = cd_uf 
GROUP BY ds_uf_sigla 
ORDER BY ds_uf_sigla DESC;