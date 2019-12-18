/*
Crie uma consulta que com base no cod_pedido retorne o nome do usuário que executou o
pedido.
*/

SELECT nome, cod_pedido, descricao 
FROM cad_usuario, pedidos, itemped, produto 
WHERE cpf = cad_usuario_cpf 
AND cod_pedido = ped_codpedidos 
AND prod_cod_produto = cod_produto 
GROUP BY cod_pedido 
ORDER BY cod_pedido;