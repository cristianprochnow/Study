select count(cd_cidade) as qtd_cidade 
from cidades, uf 
where uf_cd_uf = cd_uf 
and ds_uf_sigla in ("SC", "PR", "RS", "SP");