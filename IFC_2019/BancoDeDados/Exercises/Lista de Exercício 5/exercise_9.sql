/*
Crie uma consulta que retorne o valor total do pedido, considerando preco_unit, qtditem, e a
soma total dos produtos para todos os pedidos cadastrados na tabela pedido, agrupando pelo
cod_pedido e ordenado em decrescente.
*/

SELECT (preco_unit * qtditem) AS valor_total_pedidos, SUM(cod_produto) AS qtd_total_pedido, descricao  
FROM pedidos, itemped, produto 
WHERE cod_pedido = ped_codpedidos 
AND prod_cod_produto = cod_produto 
GROUP BY cod_pedido 
ORDER BY cod_pedido DESC;