/*
Crie uma consulta que com base no cod_pedido retorne a média do cálculo (preco_unit * qtditem) dos produtos listados no pedido.
*/

SELECT ROUND(AVG((preco_unit * qtditem)) ,2) AS media_preco, descricao  
FROM pedidos, itemped, produto 
WHERE cod_pedido = ped_codpedidos 
AND prod_cod_produto = cod_produto 
GROUP BY cod_pedido 
ORDER BY media_preco ASC;