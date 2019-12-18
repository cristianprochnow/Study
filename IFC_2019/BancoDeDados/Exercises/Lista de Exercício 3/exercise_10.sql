select cod_pedido 
from pedidos, itemped 
where cod_pedido = ped_codpedidos 
and qtditem = (
	select min(qtditem) 
    from itemped
);