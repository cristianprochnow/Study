#1
SELECT cod_produto, COUNT(cod_pedido) AS products_amount
  FROM `produto`, `itemped`, `pedidos`
    WHERE produto.cod_produto = itemped.prod_cod_produto
    AND itemped.ped_codpedidos = pedidos.cod_pedido
      GROUP BY produto.cod_produto;

#2
SELECT cod_pedido, nome
  FROM `pedidos`, `cad_usuario`
    WHERE pedidos.cad_usuario_cpf = cad_usuario.cpf
      GROUP BY cod_pedido;

#3
SELECT uf.ds_uf_nome, uf.ds_uf_sigla, COUNT(logradouro.cd_logradouro) AS logradouro_amount
  FROM `logradouro`, `bairros`, `cidades`, `uf`
    WHERE logradouro.bairros_cd_bairro = bairros.cd_bairro
    AND bairros.cidade_cd_cidade = cidades.cd_cidade
    AND cidades.uf_cd_uf = uf.cd_uf
      GROUP BY uf.cd_uf
      ORDER BY logradouro_amount ASC;

#4
SELECT ROUND( AVG( produto.preco_unit * itemped.qtditem ), 2 ) AS total_price_average, pedidos.cod_pedido
  FROM `produto`, `itemped`, `pedidos`
    WHERE produto.cod_produto = itemped.prod_cod_produto
    AND itemped.ped_codpedidos = pedidos.cod_pedido
      GROUP BY pedidos.cod_pedido
      ORDER BY total_price_average;

#5
SELECT uf.ds_uf_nome, cad_usuario.nome
  FROM `uf`, `cidades`, `bairros`, `logradouro`, `tipo_logradouro`, `cad_usuario`
    WHERE uf.cd_uf = cidades.uf_cd_uf
    AND cidades.cd_cidade = bairros.cidade_cd_cidade
    AND bairros.cd_bairro = logradouro.bairros_cd_bairro
    AND logradouro.log_cd_tip_log = tipo_logradouro.cd_tipo_logradouro
    AND tipo_logradouro.desc_tip_log = 'Alameda'
    AND logradouro.cd_logradouro = cad_usuario.log_cd_logradouro
    AND cad_usuario.log_cd_logradouro IS NOT NULL;

#6
SELECT COUNT(cad_usuario.cpf) AS users_amount, uf.ds_uf_nome
  FROM `cad_usuario`, `logradouro`, `bairros`, `cidades`, `uf`
    WHERE cad_usuario.log_cd_logradouro = logradouro.cd_logradouro
    AND logradouro.bairros_cd_bairro = bairros.cd_bairro
    AND bairros.cidade_cd_cidade = cidades.cd_cidade
    AND cidades.uf_cd_uf = uf.cd_uf
      GROUP BY uf.cd_uf
      ORDER BY users_amount ASC;

#7
SELECT ROUND( ((produto.preco_unit * 0.1) + produto.preco_unit), 2 ) AS serialized_price, produto.descricao
  FROM `produto`
    WHERE produto.preco_emb IS NOT NULL
      ORDER BY serialized_price ASC;

#8
SELECT ROUND( AVG(produto.preco_emb), 2 ) AS case_price_average
  FROM `produto`
    WHERE produto.preco_emb IS NOT NULL;

#9
SELECT
  ROUND( (produto.preco_unit * itemped.qtditem), 2 ) AS final_value_of_purchase,
  SUM(produto.preco_unit) AS total_value_of_sum
    FROM `produto`, `itemped`, `pedidos`
      WHERE produto.cod_produto = itemped.prod_cod_produto
      AND itemped.ped_codpedidos = pedidos.cod_pedido
        GROUP BY itemped.cod_itemp
        ORDER BY final_value_of_purchase ASC;