/*
7) Cruc que retorne a quantidade de bairros agrupando pela sigla do estado e ordenando
em forca decrescente.
*/

SELECT COUNT(cd_bairro) AS qtd_bairros, ds_uf_nome 
FROM uf, cidades, bairros 
WHERE cd_uf = uf_cd_uf 
AND cd_cidade = cidade_cd_cidade 
GROUP BY ds_uf_sigla
ORDER BY qtd_bairros DESC;