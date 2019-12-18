/* 2º Exercício */

select nome, ds_logradouro_nome, desc_tip_log, cep, ds_bairro_nome, ds_cidade_nome, ds_uf_nome, ds_uf_sigla
from cad_usuario, logradouro, tipo_logradouro, bairros, cidades, uf

where cad_usuario.log_cd_logradouro = logradouro.cd_logradouro
and logradouro.log_cd_tip_log = tipo_logradouro.cd_tipo_logradouro
and logradouro.bairros_cd_bairro = bairros.cd_bairro
and bairros.cidade_cd_cidade = cidades.cd_cidade
and cidades.uf_cd_uf = uf.cd_uf
and cidades.ds_cidade_nome in("Joinville", "Jaraguá do Sul", "São Francisco do Sul");