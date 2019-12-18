/*
8) Cruc que retorne a quantidade de pedidos realizado por cada um usuário, agrupando
pleo nome do usuário e ordenando em crescente.
*/

SELECT COUNT(cod_pedido) AS qtd_pedidos, nome AS nome_usuario 
FROM cad_usuario, pedidos 
WHERE cpf = cad_usuario_cpf 
GROUP BY nome_usuario 
ORDER BY qtd_pedidos ASC;