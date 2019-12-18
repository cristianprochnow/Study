insert into produto(prod_preco,prod_quant_estoque,prod_quant_embCaixa,prod_desc) values
(10,1,1,"Produto 1"),
(20,2,2,"Produto 2"),
(30,3,3,"Produto 3"),
(40,4,4,"Produto 4"),
(50,5,5,"Produto 5"),
(60,6,6,"Produto 6"),
(70,7,7,"Produto 7"),
(80,8,8,"Produto 8"),
(90,9,9,"Produto 9"),
(100,10,10,"Produto 10");

insert into cliente(cli_fone,cli_cel,cli_nome,cli_email,cli_endereco_ent) values
(11111001,11110001,"cliente1","cliente1@gmail.com","algumLugar1"),
(11111002,11110002,"cliente2","cliente2@gmail.com","algumLugar2"),
(11111003,11110003,"cliente3","cliente3@gmail.com","algumLugar3"),
(11111004,11110004,"cliente4","cliente4@gmail.com","algumLugar4"),
(11111005,11110005,"cliente5","cliente5@gmail.com","algumLugar5"),
(11111006,11110006,"cliente6","cliente6@gmail.com","algumLugar6"),
(11111007,11110007,"cliente7","cliente7@gmail.com","algumLugar7"),
(11111008,11110008,"cliente8","cliente8@gmail.com","algumLugar8"),
(11111009,11110009,"cliente9","cliente9@gmail.com","algumLugar9"),
(11111010,11110010,"cliente10","cliente10@gmail.com","algumLugar10");

insert into pessoa_fisica(pesFisi_cli_cod,cli_RG) values
(1,11100001),
(2,11100002),
(3,11100003),
(4,11100004),
(5,11100005);

insert into pessoa_juridica(pesJuri_cli_cod,cli_CNPJ) values
(6,1111110006),
(7,1111110007),
(8,1111110008),
(9,1111110009),
(10,1111110010);

insert into comentario(coment_cli_cod,coment_prod_cod,coment_title,coment_text) values
(1,10,"ComentTitle1","TextaoComent1"),
(2,9,"ComentTitle2","TextaoComent2"),
(3,8,"ComentTitle3","TextaoComent3"),
(4,7,"ComentTitle4","TextaoComent4"),
(5,6,"ComentTitle5","TextaoComent5"),
(6,5,"ComentTitle6","TextaoComent6"),
(7,4,"ComentTitle7","TextaoComent7"),
(8,3,"ComentTitle8","TextaoComent8"),
(9,2,"ComentTitle9","TextaoComent9"),
(10,1,"ComentTitle10","TextaoComent10");

insert into pedido(ped_cli_cod,ped_prod_cod,ped_faturado) values
(1,10,"Pedido Aprovado"),
(2,9,"Pedido Aprovado"),
(3,8,"Pedido Aprovado"),
(4,7,"Pedido Aprovado"),
(5,6,"Pedido Aprovado"),
(6,5,"Pedido Aprovado"),
(7,4,"Pedido Aprovado"),
(8,3,"Pedido Aprovado"),
(9,2,"Pedido Aprovado"),
(10,1,"Pedido Aprovado");