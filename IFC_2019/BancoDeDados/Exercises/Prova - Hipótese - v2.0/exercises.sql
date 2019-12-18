# Exercício 1
SELECT COUNT(cod_produto) AS qtd_produtos, descricao 
FROM produto 
WHERE preco_unit IN(6.00, 1.10, 13.00, 28.00, 38.00) 
GROUP BY preco_unit;


# Exercício 2
SELECT COUNT(cd_logradouro) AS qtd_logradouro, ds_cidade_nome 
FROM logradouro, bairros, cidades 
WHERE bairros_cd_bairro = cd_bairro 
AND cidade_cd_cidade = cd_cidade 
AND ds_cidade_nome IN('Joinville', 'Jaraguá do Sul', 'Florianópolis', 'Itajaí', 'Camboriú', 'Navegantes', 'Brusque', 'Blumenau') 
GROUP BY ds_cidade_nome  
ORDER BY qtd_logradouro DESC;


# Exercício 3
SELECT ROUND(AVG(preco_unit), 2) AS media_precos 
FROM produto 
WHERE qtd_emb = 20;


# Exercício 4
SELECT descricao, preco_unit, preco_emb, qtd_emb, (preco_unit * qtd_emb) AS calculo_preco_total 
FROM produto;


# Exercício 5
SELECT COUNT(cod_pedido) AS qtd_pedidos, nome 
FROM pedidos, cad_usuario 
WHERE cad_usuario_cpf = cpf 
GROUP BY nome;


# Exercício 6
SELECT ds_cidade_nome, COUNT(cpf) AS qtd_usuarios 
FROM cidades, bairros, logradouro, cad_usuario 
WHERE cd_cidade = cidade_cd_cidade 
AND cd_bairro = bairros_cd_bairro 
AND log_cd_logradouro = cd_logradouro 
GROUP BY ds_cidade_nome;


# Exercício 7
SELECT COUNT(cod_pedido) AS qtd_pedidos, ds_uf_sigla 
FROM uf, cidades, bairros, logradouro, cad_usuario, pedidos 
WHERE cd_uf = uf_cd_uf 
AND cd_cidade = cidade_cd_cidade 
AND cd_bairro = bairros_cd_bairro 
AND cd_logradouro = log_cd_logradouro 
AND cpf = cad_usuario_cpf 
GROUP BY ds_uf_sigla
ORDER BY qtd_pedidos DESC;


# Exercício 8
SELECT cod_pedido 
FROM pedidos, cad_usuario, logradouro, bairros, cidades, uf 
WHERE cad_usuario_cpf = cpf 
AND log_cd_logradouro = cd_logradouro 
AND bairros_cd_bairro = cd_bairro 
AND cidade_cd_cidade = cd_cidade 
AND uf_cd_uf = cd_uf 
AND ds_uf_sigla = 'MG';