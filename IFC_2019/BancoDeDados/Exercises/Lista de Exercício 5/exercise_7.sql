/*
Crie uma consulta que com base no código do produto calcule 10% de acréscimo no preço
unitário e ordene em forma decrescente mas somente para os produtos com preco_emb nulos.
*/

SELECT ROUND(((preco_unit * 0.1) + preco_unit) ,2) AS preco_com_acresc, descricao 
FROM produto 
WHERE preco_emb IS NOT NULL 
ORDER BY preco_com_acresc DESC;