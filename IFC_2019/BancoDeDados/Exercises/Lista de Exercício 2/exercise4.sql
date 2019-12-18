/* 4º Exercício */

select ds_cidade_nome, ds_uf_sigla, ds_uf_nome
from cidades, uf

where cidades.uf_cd_uf = uf.cd_uf
and ds_uf_sigla in("PR", "SC", "BA", "ES");