/*
Crie uma consulta que retorne ds_uf_nome ao qual os usuários residem mas somente daqueles que o tipo logradouro for igual a Alameda.
*/

SELECT ds_uf_nome, COUNT(cpf) AS qtd_usuario 
FROM uf, cidades, bairros, logradouro, tipo_logradouro, cad_usuario   
WHERE cd_uf = uf_cd_uf 
AND cd_cidade = cidade_cd_cidade 
AND cd_bairro = bairros_cd_bairro 
AND logradouro.cd_tipo_logradouro = tipo_logradouro.cd_tipo_logradouro
AND desc_tip_log = 'Alameda' 
AND cd_logradouro = log_cd_logradouro  
GROUP BY ds_uf_nome 
ORDER BY qtd_usuario ASC;