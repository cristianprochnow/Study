/* 5º Exercício */

select ds_bairro_nome, ds_cidade_nome, ds_uf_nome, ds_uf_sigla
from bairros, cidades, uf

where bairros.cidade_cd_cidade = cidades.cd_cidade
and cidades.uf_cd_uf = uf.cd_uf
and uf.ds_uf_sigla in("PR", "SC", "BA", "ES");