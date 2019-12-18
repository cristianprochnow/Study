SELECT COUNT(cd_logradouro) AS qtd_logradouro, desc_tip_log 
FROM logradouro, tipo_logradouro 
WHERE log_cd_tip_log = tipo_logradouro.cd_tipo_logradouro 
GROUP BY desc_tip_log
ORDER BY qtd_logradouro ASC;