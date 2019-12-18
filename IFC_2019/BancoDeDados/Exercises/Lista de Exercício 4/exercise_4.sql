/*
4) Cruc que retorne o valor total do pedido, considerando preco_unit, qtditem, e a soma
total dos produtos para o pedido com o cod_pedido = 10.
*/

/*
SELECT preco_unit, qtditem, COUNT(cod_produto) AS qtd_produtos, SUM(preco_unit) AS preco_total 
FROM produto, itemped, pedidos 
WHERE cod_produto = prod_cod_produto 
AND ped_codpedidos = cod_pedido 
AND cod_pedido = 10;
*/

SELECT (preco_unit * qtditem) AS valorTotal, COUNT(cod_produto) AS qtd_produtos, qtditem, preco_unit 
FROM produto, itemped, pedidos 
WHERE cod_produto = prod_cod_produto 
AND prod_cod_produto = cod_pedido 
AND cod_pedido = 10;

# ERROR