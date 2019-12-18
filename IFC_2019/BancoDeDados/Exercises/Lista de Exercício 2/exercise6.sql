/* 6º Exercício */

select ds_cidade_nome
from cidades, uf

where uf.cd_uf = cidades.uf_cd_uf
and ds_uf_sigla = "SC"
and ds_cidade_nome like "%o";