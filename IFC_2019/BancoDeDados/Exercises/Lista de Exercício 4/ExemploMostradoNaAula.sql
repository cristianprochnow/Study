/*
SELECT ds_uf_nome, ds_uf_sigla
FROM uf
ORDER BY ds_uf_sigla ASC;
*/

SELECT COUNT(cd_cidade) AS qtd_cidades, ds_uf_sigla
FROM cidades, uf
WHERE uf_cd_uf = cd_uf
GROUP BY ds_uf_sigla
ORDER BY qtd_cidades DESC LIMIT 5; # Limit serve para delimitar a quantidade máxima de dados na consulta