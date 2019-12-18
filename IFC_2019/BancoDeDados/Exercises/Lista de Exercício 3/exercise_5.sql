select round(avg(preco_unit),2) as media_precos 
from produto, itemped, pedidos
where cod_produto = prod_cod_produto 
and ped_codpedidos = cod_pedido
and cod_pedido = 10;