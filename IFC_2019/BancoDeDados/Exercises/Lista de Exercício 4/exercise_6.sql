/*
6) Cruc que retorne a quantidade de vezes que o produto foi comprado agrupando pelo
cod_produto.
*/

SELECT COUNT(cod_pedido) AS qtd_compras 
FROM produto, itemped, pedidos 
WHERE cod_produto = prod_cod_produto 
AND ped_codpedidos = cod_pedido 
GROUP BY cod_produto;