SELECT COUNT(cod_itemp) AS qtd_pedidos_comprados, descricao 
FROM produto, itemped 
WHERE cod_produto = prod_cod_produto 
GROUP BY cod_produto 
ORDER BY qtd_pedidos_comprados DESC;