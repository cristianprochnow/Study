/*
5) Cruc que retorne a média do preco_unit dos produtos comprados.
*/

/*
SELECT ROUND(AVG(preco_unit), 2) AS media_precos 
FROM produto;
*/

SELECT ROUND(AVG(preco_unit), 2) AS media_precos 
FROM produto, itemped, pedidos 
WHERE cod_produto = prod_cod_produto 
AND ped_codpedidos = cod_pedido 
AND faturado IS NOT NULL;