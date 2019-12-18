/* 3º Exercício */

select preco_unit, qtd_prod_est, decricao_emb
from itemped, produto, embalagem

where itemped.prod_cod_produto = produto.cod_produto
and produto.emb_cod_embalagem = embalagem.cod_embalagem
and cod_produto = 11;