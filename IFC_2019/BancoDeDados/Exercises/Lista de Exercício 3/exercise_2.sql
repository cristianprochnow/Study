select count(cd_logradouro) as qtd_logradouro_sc
from logradouro, bairros, cidades, uf 
where bairros_cd_bairro = cd_bairro
and cidade_cd_cidade = cd_cidade
and uf_cd_uf = cd_uf
and ds_uf_nome = "Santa Catarina";