/* 1º Exercício */

select ds_logradouro_nome, ds_bairro_nome, ds_cidade_nome
from logradouro, bairros, cidades

where logradouro.bairros_cd_bairro = bairros.cd_bairro
and bairros.cidade_cd_cidade = cidades.cd_cidade;