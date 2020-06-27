#1
SELECT COUNT(logradouro.cd_logradouro) AS logradouros_amount, tipo_logradouro.desc_tip_log
  FROM `logradouro`, `tipo_logradouro`
    WHERE logradouro.log_cd_tip_log = tipo_logradouro.cd_tipo_logradouro
      GROUP BY tipo_logradouro.cd_tipo_logradouro
      ORDER BY logradouros_amount DESC;

#2
SELECT COUNT(cad_usuario.cpf) AS users_amount, tipo_logradouro.desc_tip_log
  FROM `cad_usuario`, `logradouro`, `tipo_logradouro`
    WHERE cad_usuario.log_cd_logradouro = logradouro.cd_logradouro
    AND logradouro.log_cd_tip_log = tipo_logradouro.cd_tipo_logradouro
    AND tipo_logradouro.desc_tip_log IN('Rua', 'Alameda', 'Beco')
      GROUP BY tipo_logradouro.desc_tip_log
      ORDER BY users_amount ASC;

#3
SELECT ROUND( ((produto.preco_unit * 0.025) + produto.preco_unit), 2 ) AS serialized_value
  FROM `produto`
    WHERE produto.qtd_emb IS NOT NULL;

#4
SELECT
  (produto.preco_unit * itemped.qtditem) AS total_value,
  SUM(produto.preco_unit) AS sum_result_unit_price
    FROM `produto`, `itemped`, `pedidos`
      WHERE produto.cod_produto = itemped.prod_cod_produto
      AND itemped.ped_codpedidos = pedidos.cod_pedido
      AND pedidos.cod_pedido = 10
        GROUP BY itemped.cod_itemp;

#5
SELECT ROUND( AVG(produto.preco_unit), 2 ) AS purchased_items_average_price
  FROM `produto`, `itemped`, `pedidos`
    WHERE produto.cod_produto = itemped.prod_cod_produto
    AND itemped.ped_codpedidos = pedidos.cod_pedido
    AND pedidos.faturado IS NOT NULL;

#6
SELECT COUNT(produto.cod_produto) AS products_amount, produto.descricao
  FROM `produto`, `itemped`, `pedidos`
    WHERE produto.cod_produto = itemped.prod_cod_produto
    AND itemped.ped_codpedidos = pedidos.cod_pedido
    AND pedidos.faturado IS NOT NULL
      GROUP BY produto.descricao;

#7
SELECT COUNT(bairros.cd_bairro) AS neighborhood_amount, uf.ds_uf_nome
  FROM `bairros`, `cidades`, `uf`
    WHERE bairros.cidade_cd_cidade = cidades.cd_cidade
    AND cidades.uf_cd_uf = uf.cd_uf
      GROUP BY uf.cd_uf
      ORDER BY neighborhood_amount DESC;

#8
SELECT COUNT(pedidos.cod_pedido) AS ordering_amount, cad_usuario.nome
  FROM `pedidos`, `cad_usuario`
    WHERE pedidos.cad_usuario_cpf = cad_usuario.cpf
      GROUP BY cad_usuario.cpf
      ORDER BY request_amount DESC;