#1
SELECT COUNT(cd_logradouro) AS total_logradouro_amount
  FROM `logradouro`;

#2
SELECT COUNT(cd_logradouro) AS SC_logradouro_amount
  FROM `logradouro`, `bairros`, `cidades`, `uf`
  WHERE logradouro.bairros_cd_bairro = bairros.cd_bairro
  AND bairros.cidade_cd_cidade = cidades.cd_cidade
  AND cidades.uf_cd_uf = uf.cd_uf
  AND uf.ds_uf_sigla = 'SC';

#3
SELECT COUNT(cpf) AS users_amount
  FROM `cad_usuario`;

#4
SELECT ROUND(AVG(preco_unit), 2) AS all_products_price_average
  FROM `produto`;

#5
SELECT ROUND(AVG(preco_unit), 2) AS product_price_average_of_specific_purchase
  FROM `produto`, `itemped`, `pedidos`
  WHERE produto.cod_produto = itemped.prod_cod_produto
  AND itemped.ped_codpedidos = pedidos.cod_pedido
  AND pedidos.cod_pedido = 10;

#6
SELECT MAX(preco_emb) AS highest_package_price
  FROM `produto`, `itemped`
  WHERE produto.cod_produto = itemped.prod_cod_produto;

#7
SELECT uf.ds_uf_nome, COUNT(cd_cidade) AS cities_amount
  FROM `cidades`, `uf`
  WHERE cidades.uf_cd_uf = uf.cd_uf
  AND uf.ds_uf_sigla IN('RS', 'SC', 'PR', 'SP')
  GROUP BY uf_cd_uf;

#8
SELECT MIN(qtd_emb) AS lowest_package_amount
  FROM `produto`;

#9
SELECT SUM(preco_unit) AS total_sum_of_products_price
  FROM `produto`, `itemped`, `pedidos`
  WHERE produto.cod_produto = itemped.prod_cod_produto
  AND itemped.ped_codpedidos = pedidos.cod_pedido
  AND pedidos.cod_pedido = 10;

#10
SELECT cod_pedido
  FROM `pedidos`, `itemped`
  WHERE pedidos.cod_pedido = itemped.prod_cod_produto
  AND qtditem = (
    SELECT MIN(qtditem)
      FROM `itemped`
  );