select sum(preco_unit) as soma_precos 
from produto, itemped, pedidos 
where cod_produto = prod_cod_produto 
and ped_codpedidos = cod_pedido 
and cod_pedido = 10;