/*
Crie uma consulta que retorne a média do preço da embalagem mas somente dos produtos que possuem preco_emb não nulos.
*/

SELECT ROUND(AVG(preco_emb), 2) AS media_preco_emb, descricao 
FROM produto 
WHERE preco_emb IS NOT NULL 
GROUP BY descricao 
ORDER BY media_preco_emb ASC;