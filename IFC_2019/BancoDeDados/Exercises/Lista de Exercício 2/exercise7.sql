/* 7º Exercício */

/*
select count(*) from
(
	select cd_logradouro
	from logradouro
    having count(cd_logradouro) > 0
);
*/

select count(cd_logradouro) as qtd_logradouro, ds_cidade_nome, ds_uf_nome,ds_uf_sigla
from logradouro, bairros, cidades, uf

where logradouro.bairros_cd_bairro = bairros.cd_bairro
and bairros.cidade_cd_cidade = cidades.cd_cidade
and cidades.uf_cd_uf = uf.cd_uf
and ds_cidade_nome = "Rio de Janeiro"

group by cidades.cd_cidade;