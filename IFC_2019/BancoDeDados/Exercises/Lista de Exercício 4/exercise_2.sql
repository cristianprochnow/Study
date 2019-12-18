SELECT COUNT(cpf) AS qtd_usuarios, desc_tip_log 
FROM cad_usuario, logradouro, tipo_logradouro 
WHERE log_cd_logradouro = cd_logradouro 
AND log_cd_tip_log = tipo_logradouro.cd_tipo_logradouro 
AND desc_tip_log IN("Rua", "Alameda", "Beco") 
GROUP BY desc_tip_log 
ORDER BY qtd_usuarios ASC;