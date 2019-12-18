/*
Média dos preços das embalagens dos produtos comprados para Usuário em Santa Catarina
*/

select AVG(preco_emb) as media_precoEmb
from produto, itemped, pedidos, cad_usuario, logradouro, bairros, cidades, uf 
where cod_produto = prod_cod_produto 
and ped_codpedidos = cod_pedido 
and cad_usuario_cpf = cpf 
and log_cd_logradouro = cd_logradouro 
and bairros_cd_bairro = cd_bairro 
and cidade_cd_cidade = cd_cidade 
and uf_cd_uf = cd_uf 
and ds_uf_nome = "Santa Catarina";