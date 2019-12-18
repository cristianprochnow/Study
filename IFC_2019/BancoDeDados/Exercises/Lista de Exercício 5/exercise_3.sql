/*
Crie uma consulta que retorne a quantidade de logradouros de cada estado agrupando pela sigla do estado e ordenando em forma crescente.
*/

SELECT COUNT(cd_logradouro) AS qtd_logradouro, ds_uf_nome 
FROM logradouro, bairros, cidades, uf 
WHERE bairros_cd_bairro = cd_bairro 
AND cidade_cd_cidade = cd_cidade 
AND uf_cd_uf = cd_uf 
GROUP BY ds_uf_sigla 
ORDER BY qtd_logradouro ASC;