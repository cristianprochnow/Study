select max(preco_emb) 
from produto, itemped 
where cod_produto = prod_cod_produto;